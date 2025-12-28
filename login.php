<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO Sign In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Volkhov:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f8f8;
            /* margin: 2rem; */
            overflow-y: hidden;
        }

        .container {
            display: flex;
            max-width: 900px;
            width: 95%;
            height: 490px;
            background-color: #fff;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .left {
            flex: 1;
            background: url('confirm.svg') center/cover no-repeat;
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
            margin-bottom: 5px;
        }

        .right p {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #f2f2f2;
        }

        .google-btn img {
            width: 16px;
            height: 16px;
        }

        .divider {
            text-align: center;
            position: relative;
            margin: 15px 0;
            color: #888;
            font-size: 12px;
        }

        .divider::before, .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #ccc;
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .sign-in-btn {
            margin-top: 15px;
            padding: 12px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        .sign-in-btn:hover {
            background-color: #333;
        }

        .links {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-top: 8px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .terms {
            font-size: 10px;
            color: #888;
            text-align: center;
            margin-top: 15px;
        }

        @media(max-width: 768px){
            .container {
                flex-direction: column;
                height: auto;
            }

            .left {
                height: 200px;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <div class="left"></div>
    <div class="right">
        <h1>FASCO</h1>
        <p>Sign In To FASCO</p>

        <div class="btn google-btn">
            <img src="https://img.icons8.com/color/16/google-logo.png" alt="Google"> Sign up with Google
        </div>
        <div class="btn email-btn">
            <img src="https://img.icons8.com/ios-glyphs/16/new-post.png" alt="Email"> Sign up with Email
        </div>

        <div class="divider">— OR —</div>

        <div class="form-group">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
        </div>

        <button class="sign-in-btn">Sign In</button>

        <div class="links">
            <a href="#">Register Now</a>
            <a href="#">Forget Password?</a>
        </div>

        <div class="terms">FASCO Terms & Conditions</div>
    </div>
</div>

</body>
</html>
