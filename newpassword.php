<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Enter Your New Password</title>
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
            padding: 2rem;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
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
            margin-bottom: 30px;
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
            background: #4285f4;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 40px;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #357ae8;
        }

        .footer-text {
            position: absolute;
            bottom: 30px;
            right: 40px;
            font-size: 12px;
            color: #999;
        }

        .password-requirements {
            font-size: 12px;
            color: #666;
            margin-top: 8px;
            display: none;
        }

        .password-requirements.show {
            display: block;
        }

        .requirement {
            padding: 4px 0;
        }

        .requirement.valid {
            background-color: #34a853;
        }

        .requirement.invalid {
            background-color: #ea4335;
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
                <img src="confirm.svg" alt="Fashion Model" class="fashion-image">
            </div>
        </div>

        <div class="right-section">
            <div class="form-container">
                <div class="logo">FASCO</div>
                
                <h2 class="form-title">Enter Your New Password</h2>
                
                <form id="newPasswordForm">
                    <div class="input-group">
                        <input type="password" id="newPassword" placeholder="New Password" required minlength="8">
                        <div class="password-requirements" id="passwordRequirements">
                            <div class="requirement" id="lengthReq">• At least 8 characters</div>
                            <div class="requirement" id="upperReq">• One uppercase letter</div>
                            <div class="requirement" id="lowerReq">• One lowercase letter</div>
                            <div class="requirement" id="numberReq">• One number</div>
                        </div>
                    </div>

                    <div class="input-group">
                        <input type="password" id="confirmPassword" placeholder="Confirmation Password" required>
                    </div>

                    <button type="submit" class="submit-btn">Submit</button>
                </form>

   
            </div>
        </div>
    </div>

    <script>
        const newPasswordInput = document.getElementById('newPassword');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const passwordRequirements = document.getElementById('passwordRequirements');
        const form = document.getElementById('newPasswordForm');

        // Show password requirements when focusing on new password field
        newPasswordInput.addEventListener('focus', function() {
            passwordRequirements.classList.add('show');
        });

        // Validate password requirements in real-time
        newPasswordInput.addEventListener('input', function() {
            const password = this.value;
            
            // Check length
            const lengthReq = document.getElementById('lengthReq');
            if (password.length >= 8) {
                lengthReq.classList.add('valid');
                lengthReq.classList.remove('invalid');
            } else {
                lengthReq.classList.add('invalid');
                lengthReq.classList.remove('valid');
            }

            // Check uppercase
            const upperReq = document.getElementById('upperReq');
            if (/[A-Z]/.test(password)) {
                upperReq.classList.add('valid');
                upperReq.classList.remove('invalid');
            } else {
                upperReq.classList.add('invalid');
                upperReq.classList.remove('valid');
            }

            // Check lowercase
            const lowerReq = document.getElementById('lowerReq');
            if (/[a-z]/.test(password)) {
                lowerReq.classList.add('valid');
                lowerReq.classList.remove('invalid');
            } else {
                lowerReq.classList.add('invalid');
                lowerReq.classList.remove('valid');
            }

            // Check number
            const numberReq = document.getElementById('numberReq');
            if (/[0-9]/.test(password)) {
                numberReq.classList.add('valid');
                numberReq.classList.remove('invalid');
            } else {
                numberReq.classList.add('invalid');
                numberReq.classList.remove('valid');
            }
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newPassword = newPasswordInput.value;
            const confirmPassword = confirmPasswordInput.value;

            // Check if passwords match
            if (newPassword !== confirmPassword) {
                alert('Passwords do not match!\n\nPlease make sure both passwords are identical.');
                return;
            }

            // Check password strength
            if (newPassword.length < 8 || 
                !/[A-Z]/.test(newPassword) || 
                !/[a-z]/.test(newPassword) || 
                !/[0-9]/.test(newPassword)) {
                alert('Password does not meet requirements!\n\nPlease ensure your password has:\n• At least 8 characters\n• One uppercase letter\n• One lowercase letter\n• One number');
                return;
            }

            // Success
            alert('Password reset successful!\n\nYour password has been updated. You can now login with your new password.');
            
            // Here you would typically make an API call to update the password
            // and redirect to login page
            setTimeout(function() {
                window.location.href = 'login.html';
            }, 1500);
        });
    </script>
</body>
</html>