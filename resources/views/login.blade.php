<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - RK Export</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
    :root {
        --primary-gradient: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        --accent-color: #ff6b35;
    }

    body {
        background: #f4f7fb;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: inherit;
        margin: 0;
        padding: 20px;
    }

    .login_wrapper {
        width: 100%;
        max-width: 440px;
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        border: 1px solid #eef2f6;
        transition: all 0.3s ease;
    }

    .login_header {
        background: #ffffff;
        padding: 35px 30px 20px;
        text-align: center;
    }

    .login_header .logo_img {
        max-height: 55px;
        margin-bottom: 18px;
        object-fit: contain;
    }

    .login_header h3 {
        font-size: 22px;
        font-weight: 700;
        color: #2b3674;
        margin-bottom: 6px;
    }

    .login_header p {
        font-size: 14px;
        color: #8b95a5;
        margin: 0;
    }

    .login_body {
        padding: 10px 32px 35px;
    }

    .form_group_custom {
        margin-bottom: 20px;
        position: relative;
    }

    .form_group_custom label {
        font-size: 13px;
        font-weight: 600;
        color: #344054;
        margin-bottom: 7px;
        display: block;
    }

    .input_icon_wrap {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input_icon_wrap .lead_icon {
        position: absolute;
        left: 14px;
        color: #98a2b3;
        font-size: 18px;
        pointer-events: none;
    }

    .input_icon_wrap .form-control {
        height: 48px;
        padding: 10px 42px 10px 40px;
        font-size: 14px;
        border-radius: 10px;
        border: 1px solid #d0d5dd;
        background: #fafbfc;
        color: #1d2939;
        transition: all 0.2s ease-in-out;
    }

    .input_icon_wrap .form-control:focus {
        background: #ffffff;
        border-color: #2a5298;
        box-shadow: 0 0 0 4px rgba(42, 82, 152, 0.12);
    }

    .toggle_password {
        position: absolute;
        right: 14px;
        background: none;
        border: none;
        color: #98a2b3;
        cursor: pointer;
        padding: 0;
        display: flex;
        align-items: center;
        font-size: 18px;
        transition: color 0.2s;
    }

    .toggle_password:hover {
        color: #2a5298;
    }

    .login_options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        font-size: 13px;
    }

    .login_options .form-check-input {
        cursor: pointer;
        border-radius: 4px;
        margin-top: 0.15rem;
    }

    .login_options .form-check-input:checked {
        background-color: #2a5298;
        border-color: #2a5298;
    }

    .login_options label {
        cursor: pointer;
        color: #475467;
    }

    .login_options a {
        color: #2a5298;
        text-decoration: none;
        font-weight: 600;
    }

    .login_options a:hover {
        text-decoration: underline;
    }

    .btn_login_submit {
        width: 100%;
        height: 48px;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%) !important;
        color: #ffffff !important;
        border: none !important;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        box-shadow: 0 4px 14px rgba(30, 60, 114, 0.25);
        transition: all 0.25s ease;
        cursor: pointer;
    }

    /* Hover, Focus & Active State Fix */
    .btn_login_submit:hover,
    .btn_login_submit:focus,
    .btn_login_submit:active {
        background: linear-gradient(135deg, #152b52 0%, #1e3c70 100%) !important;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(30, 60, 114, 0.4) !important;
    }

    /* বাটনের ভেতরের টেক্সট ও আইকন যেন সবসময় সাদা থাকে */
    .btn_login_submit span,
    .btn_login_submit i {
        color: #ffffff !important;
    }
    </style>
</head>

<body>

    <div class="login_wrapper">

        <!-- Header & Logo -->
        <div class="login_header">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="RK Export Logo" class="logo_img">
            </a>
            <h3>Welcome Back!</h3>
            <p>Please enter your credentials to log in.</p>
        </div>

        <div class="login_body">

            <!-- Flash / Error Messages -->
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show py-2 px-3 mb-3 fs-6" role="alert">
                <i class="zmdi zmdi-alert-circle me-1"></i> {{ session('error') }}
                <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show py-2 px-3 mb-3 fs-6" role="alert">
                <i class="zmdi zmdi-check-circle me-1"></i> {{ session('status') }}
                <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Login Form -->
            <form action="#" method="POST" id="loginForm">
                @csrf

                <!-- Email / Username -->
                <div class="form_group_custom">
                    <label for="email">Email or Username</label>
                    <div class="input_icon_wrap">
                        <i class="zmdi zmdi-email lead_icon"></i>
                        <input type="text" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            placeholder="Enter your email" required autofocus>
                    </div>
                    @error('email')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password with Show/Hide Toggle -->
                <div class="form_group_custom">
                    <label for="password">Password</label>
                    <div class="input_icon_wrap">
                        <i class="zmdi zmdi-lock lead_icon"></i>
                        <input type="password" name="password" id="passwordInput"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Enter your password" required>
                        <!-- Show/Hide Button -->
                        <button type="button" class="toggle_password" id="togglePasswordBtn"
                            title="Toggle Password Visibility">
                            <i class="zmdi zmdi-eye" id="togglePasswordIcon"></i>
                        </button>
                    </div>
                    @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="login_options">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="rememberMe">
                            Remember me
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn_login_submit">
                    <span>Log In</span>
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>

            <div class="login_footer_text">
                © {{ date('Y') }} <strong>RK Export</strong>. All rights reserved.
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Password Hide & Show Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('passwordInput');
        const toggleIcon = document.getElementById('togglePasswordIcon');

        if (toggleBtn && passwordInput && toggleIcon) {
            toggleBtn.addEventListener('click', function() {
                // Check current type
                const isPassword = passwordInput.getAttribute('type') === 'password';

                // Toggle Type
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

                // Toggle Icon
                if (isPassword) {
                    toggleIcon.classList.remove('zmdi-eye');
                    toggleIcon.classList.add('zmdi-eye-off');
                } else {
                    toggleIcon.classList.remove('zmdi-eye-off');
                    toggleIcon.classList.add('zmdi-eye');
                }
            });
        }
    });
    </script>

</body>

</html>