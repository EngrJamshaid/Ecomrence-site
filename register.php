<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@400;500&family=Volkhov:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            width: 100vw;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
           
        }

        .container {
            display: flex;
            width: 900px;
            max-width: 95%;
            height: 500px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .left {
            flex: 1;
            background: url('registerimg.svg') center/cover no-repeat;
        }

        .right {
            flex: 1;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right h1 {
            font-family: 'Volkhov', serif;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .right p {
            margin-bottom: 20px;
            font-size: 14px;
            color: #555;
        }

        .google-btn, .email-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }

        .google-btn:hover, .email-btn:hover {
            background-color: #f2f2f2;
        }

        .divider {
            text-align: center;
            margin: 15px 0;
            position: relative;
            font-size: 12px;
            color: #888;
        }

        .divider::before, .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #ccc;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-grid input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .create-btn {
            margin-top: 20px;
            padding: 12px;
            width: 100%;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }

        .create-btn:hover {
            background-color: #333;
        }

        .login-text {
            font-size: 12px;
            text-align: center;
            margin-top: 10px;
        }

        .login-text a {
            color: #007bff;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        .terms {
            font-size: 10px;
            text-align: center;
            margin-top: 10px;
            color: #888;
        }

        @media(max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }
            .left {
                height: 200px;
            }
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <div class="left"></div>
    <div class="right">
        <h1>FASCO</h1>
        <p>Create Account</p>
        <div class="google-btn">
            <img src="https://img.icons8.com/color/16/google-logo.png" alt=""> Sign up with Google
        </div>
        <div class="email-btn">
            <img src="https://img.icons8.com/ios-glyphs/16/new-post.png" alt=""> Sign up with Email
        </div>
        <div class="divider">— OR —</div>
        <div class="form-grid">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="email" placeholder="Email Address">
            <input type="text" placeholder="Phone Number">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Confirm Password">
        </div>
        <button class="create-btn">Create Account</button>
        <div class="login-text">
            Already have an account? <a href="#">Login</a>
        </div>
        <div class="terms">FASCO Terms & Conditions</div>
    </div>
</div>

</body>
</html>
