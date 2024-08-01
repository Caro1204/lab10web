<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ff69b4;
    font-family: 'Roboto', sans-serif;
    color: #fff;
}

.register-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.register-card {
    background: rgba(51, 51, 51, 0.8); /* Fondo negro translúcido */
    border: 2px solid #ff69b4; /* Borde rosa */
    border-radius: 15px; /* Bordes más redondeados */
    padding: 2rem;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
    max-width: 400px;
    width: 100%;
    color: #fff;
}

.register-card h2 {
    margin-bottom: 2rem;
    font-weight: bold;
    text-align: center;
    color: #ff69b4; /* Rosa */
    font-family: 'Montserrat', sans-serif; /* Cambia la fuente */
}

.register-card .form-label {
    font-weight: bold;
    color: #ff69b4; /* Rosa */
    font-family: 'Montserrat', sans-serif; /* Cambia la fuente */
}

.register-card .form-control {
    background: rgba(68, 68, 68, 0.8); /* Fondo gris translúcido */
    border: 2px solid #ff69b4; /* Borde rosa */
    color: #fff;
    padding: 0.75rem;
    border-radius: 15px; /* Bordes más redondeados */
    margin-bottom: 1rem;
}

.register-card .form-control::placeholder {
    color: #bbb;
}

.register-card .btn-primary {
    background-color: #ff69b4; /* Rosa */
    border: none;
    font-size: 1rem;
    padding: 0.75rem;
    width: 100%;
    border-radius: 15px; /* Bordes más redondeados */
    font-family: 'Montserrat', sans-serif; /* Cambia la fuente */
}
.register-card .btn-primary:hover {
    background-color: #ff1493; /* Rosa más oscuro */
}
.register-card .form-text {
    text-align: center;
    margin-top: 1rem;
}
.register-card .form-text a {
    color: #ff69b4; /* Rosa */
    text-decoration: none;
}
.register-card .form-text a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="register-container">
        <div class="card register-card">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <div class="form-text mt-3">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>