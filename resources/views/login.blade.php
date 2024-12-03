<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NEXUSDEV</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <h1 style="margin-bottom: 20px;">Crear cuenta</h1>

                <input required id="name" name="name" type="text" placeholder="Nombre completo">
                <input id="email" name="email" type="email" placeholder="Correo electrónico">
                <input id="password" name="password" type="password" placeholder="Contraseña">
                <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <button type="submit">Registrar</button>

            </form>

        </div>




        <div class="form-container sign-in">
            <form method="POST" action="{{ route('login')}}">
                @csrf
                <h1 style="margin-bottom: 20px;">Iniciar sesión</h1>

                <input id="email" name="email" type="email" type="email" placeholder="Correo electrónico">
                @error('email')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror
                <input id="password" name="password" type="password" placeholder="Contraseña">
                @error('password')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror
                <a href="#">¿Olvidaste Tu Contraseña??</a>
                <button type="submit">Ingresar</button>
            </form>
        </div>




        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de vuelta!</h1>
                    <p>Ingrese sus datos personales para usar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola, Amigo!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>
</body>

</html>