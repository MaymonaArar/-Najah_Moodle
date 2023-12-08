<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('images/login_back.jpg') no-repeat center center fixed; 
            background-size: cover;
        }
        .login-container {
            background: white;
            padding: 7rem;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 30%;
        }
        .login-logo {
            text-align: center;
            margin-bottom: 1rem;
            
        }
        .form-control {
            margin-bottom: 1rem;
            width: 100%;
            margin-left: 10px;

            
        }
        .btn-primary {
            width: 50%;
            margin-left: 60px;
            
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-logo">
            <img src="{{ asset('images/Najah_logo.png') }}" alt="Logo" height="70"> 
        </div>
        <h2 class="text-center mb-4">LOGIN</h2>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Username or Email ID" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="text-center mt-3">
                <a href="#">Forget Password?</a>
            </div>
          
        </form>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.7.12/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
