<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        background-color: #ff69b4;
    font-family: 'Roboto', sans-serif;
    color: #fff;
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-card {
    background: rgba(51, 51, 51, 0.8); /* Fondo negro translúcido */
    border: 2px solid #ff69b4; /* Borde rosa */
    border-radius: 15px; /* Bordes más redondeados */
    padding: 2rem;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
    max-width: 400px;
    width: 100%;
    color: #fff;
}

.login-card h2 {
    margin-bottom: 2rem;
    font-weight: bold;
    text-align: center;
    color: #ff69b4; /* Rosa */
    font-family: 'Montserrat', sans-serif; /* Cambia la fuente */
}

.login-card .btn-primary {
    background-color: #ff69b4; /* Rosa */
    border: 2px solid #ff69b4; /* Borde rosa */
    font-size: 1rem;
    padding: 0.75rem;
    width: 100%;
    border-radius: 15px; /* Bordes más redondeados */
    font-family: 'Montserrat', sans-serif; /* Cambia la fuente */
}
.login-card .btn-primary:hover {
    background-color: #ff1493; /* Rosa más oscuro */
}
.login-card .form-text {
    text-align: center;
    margin-top: 1rem;
    color: #ff69b4;
}

.login-card .form-text a {
    color: #ff69b4; /* Rosa */
    text-decoration: none;
}

.login-card .form-text a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="login-container">
        <div class="card login-card">
            <h2>Login</h2>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="form-text mt-3">
                    Don't have an account? <a href="{{ route('register') }}">Register</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
