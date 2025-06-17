<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">



    <style>
        body {
            background-color: #121212;
            color: #f8f9fa;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
        }
        .form-control {
            background-color: #2c2c2c;
            color: #f8f9fa;
            border: 1px solid #444;
        }
        .form-control:focus {
            background-color: #2c2c2c;
            color: #fff;
            border-color: #0d6efd;
            box-shadow: none;
        }
        .form-check-label {
            color: #ccc;
        }
        a {
            color: #0d6efd;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4 text-white">Login</h3>

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>

                <!-- Password -->
               <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                            <i class="bi bi-eye-slash" id="eyeIcon"></i>
                        </span>
                    </div>
                </div>

                <!-- Remember Me -->
                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div> --}}

                <!-- Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                <!-- Forgot Password -->
                <div class="text-center mt-3">
                    <a href="#">Forgot Passwordgfgnfklgngfdn?</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    const togglePassword = document.getElementById("togglePassword");
    const password = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    togglePassword.addEventListener("click", function () {
        // Toggle password visibility
        const isPassword = password.getAttribute("type") === "password";
        password.setAttribute("type", isPassword ? "text" : "password");

        // Toggle icon class
        eyeIcon.classList.toggle("bi-eye");
        eyeIcon.classList.toggle("bi-eye-slash");
    });
</script>



</html>
