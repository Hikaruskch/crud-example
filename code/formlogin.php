<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Dekorasi Background */
        .bg-decoration {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .circle-1 {
            width: 400px;
            height: 400px;
            background: #79083e;
            top: -100px;
            right: -100px;
        }

        .circle-2 {
            width: 300px;
            height: 300px;
            background: #79083e;
            bottom: -50px;
            left: -50px;
        }

        .dots-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(#79083e 1px, transparent 1px);
            background-size: 30px 30px;
            opacity: 0.05;
        }

        .wave {
            position: absolute;
            width: 100%;
            height: 100px;
            background: linear-gradient(45deg, #79083e, #a67c8e);
            opacity: 0.1;
            transform: skewY(-5deg);
        }

        .wave-1 {
            top: 20%;
        }

        .wave-2 {
            bottom: 20%;
            transform: skewY(5deg);
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
            z-index: 1;
            backdrop-filter: blur(5px);
            background: rgba(255, 255, 255, 0.95);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-family: 'Great Vibes', cursive;
            color: #79083e;
            font-size: 3rem;
            font-weight: 400;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-header p {
            font-family: 'Playfair Display', serif;
            color: #6c757d;
            font-size: 1rem;
            letter-spacing: 1px;
        }

        .form-control {
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #79083e;
            box-shadow: 0 0 0 0.2rem rgba(121, 8, 62, 0.25);
        }

        .btn-login {
            background-color: #79083e;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            width: 100%;
            margin-bottom: 10px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background-color: #5c062f;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(121, 8, 62, 0.2);
        }

        .btn-cancel {
            background-color: #f8f9fa;
            color: #79083e;
            padding: 12px 20px;
            border: 1px solid #79083e;
            border-radius: 8px;
            width: 100%;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-cancel:hover {
            background-color: #e9ecef;
            color: #5c062f;
            transform: translateY(-2px);
        }

        .form-floating {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Dekorasi Background -->
    <div class="bg-decoration">
        <div class="dots-pattern"></div>
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="login-container">
        <div class="login-header">
            <h2>Welcome Back!</h2>
            <p>Please login to continue</p>
        </div>
        
        <form method="POST" action="ceklogin.php">
            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                <label for="username">Username</label>
            </div>
            
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-login">Sign In</button>
                <button type="button" class="btn btn-cancel">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>