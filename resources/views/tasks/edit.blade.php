@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Tarea</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>¡Vaya!</strong> Hubo algunos problemas con tu entrada.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Título</label>
                            <div class="col-md-6">
                                <input type="text" name="title" value="{{ $task->title }}" class="form-control" placeholder="Título">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="priority" class="col-md-4 col-form-label text-md-end">Prioridad</label>
                            <div class="col-md-6">
                                <select name="priority" class="form-control">
                                    <option value="baja" @if($task->priority == 'baja') selected @endif>Baja</option>
                                    <option value="media" @if($task->priority == 'media') selected @endif>Media</option>
                                    <option value="alta" @if($task->priority == 'alta') selected @endif>Alta</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="completed" class="col-md-4 col-form-label text-md-end">Completada</label>
                            <div class="col-md-6">
                                <input type="hidden" name="completed" value="0">
                                <input type="checkbox" name="completed" value="1" {{ $task->completed ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tags" class="col-md-4 col-form-label text-md-end">Etiquetas</label>
                            <div class="col-md-6">
                                <select name="tags[]" id="tags" class="form-control" multiple>
                                    @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ $task->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                                <a class="btn btn-secondary" href="{{ route('tasks.index') }}">Regresar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tags').select2();
    });
</script>
@endsection

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection
