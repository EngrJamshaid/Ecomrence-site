<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Enter Confirmation Code</title>
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
            border: 3px solid #00a8e8;
            margin: 20px;
            background: white;
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
            margin-bottom: 120px;
        }

        .form-title {
            font-size: 24px;
            font-weight: 400;
            color: #333;
            margin-bottom: 60px;
        }

        .input-group {
            width: 100%;
            margin-bottom: 25px;
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

        .resend-link {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .resend-link a {
            color: #00a8e8;
            text-decoration: none;
            font-weight: 500;
        }

        .resend-link a:hover {
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
                margin: 10px;
            }

            .left-section {
                height: 40vh;
            }

            .right-section {
                height: 60vh;
            }

            .logo {
                margin-bottom: 60px;
                font-size: 36px;
            }

            .form-title {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 640px) {
            .fashion-image {
                max-width: 300px;
            }

            .container {
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="graffiti-background">
                <div class="color-block block-1"></div>
                <div class="color-block block-2"></div>
                <div class="color-block block-3"></div>
                <div class="color-block block-4"></div>
                <div class="color-block block-5"></div>
                <div class="color-block block-6"></div>
                <div class="color-block block-7"></div>
                <div class="color-block block-8"></div>
            </div>
            <div class="image-container">
                <img src="confirm.svg" alt="Fashion Model" class="fashion-image" onerror="this.src='https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&h=800&fit=crop'">
            </div>
        </div>

        <div class="right-section">
            <div class="form-container">
                <div class="logo">FASCO</div>
                
                <h2 class="form-title">Enter The Confirmation Code</h2>
                
                <form id="confirmationForm">
                    <div class="input-group">
                        <input type="text" id="confirmationCode" placeholder="Confirmation Code" required maxlength="6">
                    </div>

                    <button type="submit" class="submit-btn">Recover Account</button>

                    <div class="resend-link">
                        Didn't receive confirmation code? <a href="#" id="resendLink">Resend Now</a>
                    </div>
                </form>

                <div class="footer-text">
                    FASCO Terms & Conditions
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('confirmationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const code = document.getElementById('confirmationCode').value;

            if (code && code.length >= 4) {
                alert('Verification successful!\n\nYour account is being recovered...');
                
                // Here you would typically verify the code with your backend
                // and redirect to password reset page
                setTimeout(function() {
                    // Redirect to password reset page
                    window.location.href = 'reset-password.html';
                }, 1500);
            } else {
                alert('Please enter a valid confirmation code.');
            }
        });

        document.getElementById('resendLink').addEventListener('click', function(e) {
            e.preventDefault();
            
            alert('Confirmation code resent!\n\nPlease check your email for the new code.');
            
            // Here you would typically make an API call to resend the code
        });

        // Auto-format confirmation code input (optional)
        document.getElementById('confirmationCode').addEventListener('input', function(e) {
            // Remove any non-numeric characters
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>