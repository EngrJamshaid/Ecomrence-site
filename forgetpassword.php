<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Forget Password</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
            padding: 3rem;
        }

        .left-section {
            flex: 1;
            background: linear-gradient(135deg, #00d4ff 0%, #7b4fff 25%, #ff6b9d 50%, #ffd93d 75%, #6bff8f 100%);
            position: relative;
            overflow: hidden;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.1) 35px, rgba(255,255,255,.1) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(0,0,0,.1) 35px, rgba(0,0,0,.1) 70px);
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .fashion-image {
            max-width: 450px;
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            object-fit: cover;
        }

        .graffiti-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .color-block {
            position: absolute;
            border: 4px solid #000;
        }

        .block-1 {
            width: 200px;
            height: 150px;
            background: #00d4ff;
            top: 5%;
            left: 5%;
            transform: rotate(-10deg);
        }

        .block-2 {
            width: 180px;
            height: 180px;
            background: #4169e1;
            top: 8%;
            left: 25%;
            transform: rotate(15deg);
        }

        .block-3 {
            width: 160px;
            height: 140px;
            background: #ff1493;
            top: 3%;
            right: 15%;
            transform: rotate(-8deg);
        }

        .block-4 {
            width: 140px;
            height: 160px;
            background: #ffd700;
            top: 10%;
            right: 5%;
            transform: rotate(12deg);
        }

        .block-5 {
            width: 190px;
            height: 145px;
            background: #ff69b4;
            bottom: 8%;
            left: 8%;
            transform: rotate(8deg);
        }

        .block-6 {
            width: 170px;
            height: 170px;
            background: #32cd32;
            bottom: 5%;
            left: 28%;
            transform: rotate(-12deg);
        }

        .block-7 {
            width: 155px;
            height: 155px;
            background: #ffff00;
            bottom: 10%;
            right: 25%;
            transform: rotate(10deg);
        }

        .block-8 {
            width: 165px;
            height: 145px;
            background: #9370db;
            bottom: 12%;
            right: 5%;
            transform: rotate(-15deg);
        }

        .right-section {
            flex: 1;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .form-container {
            width: 100%;
            max-width: 480px;
            padding: 20px;
        }

        .logo {
            font-size: 42px;
            font-weight: 700;
            letter-spacing: 8px;
            color: #000;
            margin-bottom: 80px;
        }

        .form-title {
            font-size: 28px;
            font-weight: 400;
            color: #333;
            margin-bottom: 50px;
        }

        .input-row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .input-group {
            flex: 1;
        }

        .input-group.full {
            width: 100%;
        }

        input {
            width: 100%;
            padding: 14px 0;
            border: none;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: border-color 0.3s;
            background: transparent;
        }

        input::placeholder {
            color: #999;
        }

        input:focus {
            border-bottom-color: #000;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: #000;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 35px;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #333;
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .login-link a {
            color: #000;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .footer-text {
            position: absolute;
            bottom: 30px;
            right: 40px;
            font-size: 12px;
            color: #999;
        }

        @media (max-width: 968px) {
            .container {
                flex-direction: column;
            }

            .left-section {
                height: 40vh;
            }

            .right-section {
                height: 60vh;
            }

            .logo {
                margin-bottom: 40px;
                font-size: 36px;
            }

            .form-title {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 640px) {
            .input-row {
                flex-direction: column;
                gap: 25px;
            }

            .fashion-image {
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">

            <div class="image-container">
                <img src="confirm.svg" alt="Fashion Model" class="fashion-image">
            </div>
        </div>

        <div class="right-section">
            <div class="form-container">
                <div class="logo">FASCO</div>
                
                <h2 class="form-title">Forget Password</h2>
                
                <form id="forgetPasswordForm">
                    <div class="input-row">
                        <div class="input-group">
                            <input type="text" placeholder="First Name" required>
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group full">
                            <input type="email" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group full">
                            <input type="tel" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">Send Confirmation Code</button>

                    <div class="login-link">
                        Already have an account? <a href="#" id="loginLink">Login</a>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <script>
        document.getElementById('forgetPasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const firstName = this.querySelector('input[placeholder="First Name"]').value;
            const lastName = this.querySelector('input[placeholder="Last Name"]').value;
            const email = this.querySelector('input[placeholder="Email Address"]').value;
            const phone = this.querySelector('input[placeholder="Phone Number"]').value;

            if (firstName && lastName && email && phone) {
                alert('Confirmation code sent successfully!\n\nA password reset code has been sent to:\n' + email);
                
                // Here you would typically make an API call to send the confirmation code
                // For demo purposes, we're just showing an alert
            }
        });

        document.getElementById('loginLink').addEventListener('click', function(e) {
            e.preventDefault();
            alert('Redirecting to login page...');
            // In a real application, this would navigate to the login page
        });
    </script>
</body>
</html>