<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Subscribe To Our Newsletter</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
        }

        .newsletter-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
            position: relative;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            width: 100%;
            gap: 40px;
        }

        .model-image {
            flex: 0 0 auto;
            max-width: 280px;
        }

        .model-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .newsletter-content {
            flex: 1;
            text-align: center;
            max-width: 600px;
            padding: 0 40px;
        }

        .newsletter-title {
            font-size: 42px;
            font-weight: 400;
            color: #333;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .newsletter-description {
            font-size: 15px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 35px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .subscription-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .email-input {
            width: 100%;
            max-width: 400px;
            padding: 15px 20px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 15px;
            color: #333;
            outline: none;
            transition: border-color 0.3s;
            background-color: #fafafa;
        }

        .email-input::placeholder {
            color: #999;
        }

        .email-input:focus {
            border-color: #000;
            background-color: #fff;
        }

        .subscribe-btn {
            padding: 15px 50px;
            background: #000;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
        }

        .subscribe-btn:hover {
            background: #333;
        }

        /* Footer Section */
        .footer {
            background-color: #fafafa;
            padding: 40px 20px 30px;
            border-top: 1px solid #e0e0e0;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-logo {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 6px;
            color: #000;
        }

        .footer-links {
            display: flex;
            gap: 35px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #000;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid #e0e0e0;
        }

        .copyright {
            font-size: 13px;
            color: #999;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .content-wrapper {
                flex-direction: column;
                gap: 40px;
            }

            .model-image {
                max-width: 220px;
            }

            .model-image.left {
                order: 1;
            }

            .newsletter-content {
                order: 2;
            }

            .model-image.right {
                order: 3;
            }

            .newsletter-title {
                font-size: 36px;
            }
        }

        @media (max-width: 768px) {
            .newsletter-title {
                font-size: 30px;
            }

            .newsletter-description {
                font-size: 14px;
            }

            .model-image {
                max-width: 180px;
            }

            .footer-top {
                flex-direction: column;
                text-align: center;
            }

            .footer-links {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .newsletter-title {
                font-size: 26px;
            }

            .email-input {
                font-size: 14px;
                padding: 12px 16px;
            }

            .subscribe-btn {
                padding: 12px 40px;
                font-size: 14px;
            }

            .footer-links {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="content-wrapper">
            <!-- Left Model -->
            <div class="model-image left">
                <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&h=600&fit=crop" alt="Fashion Model Left">
            </div>

            <!-- Newsletter Content -->
            <div class="newsletter-content">
                <h1 class="newsletter-title">Subscribe To Our Newsletter</h1>
                <p class="newsletter-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis ultrices sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin
                </p>

                <form class="subscription-form" id="newsletterForm">
                    <input 
                        type="email" 
                        class="email-input" 
                        placeholder="michael@ymail.com" 
                        required
                        id="emailInput"
                    >
                    <button type="submit" class="subscribe-btn">Subscribe Now</button>
                </form>
            </div>

            <!-- Right Model -->
            <div class="model-image right">
                <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=600&fit=crop" alt="Fashion Model Right">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-top">
                <div class="footer-logo">FASCO</div>
                <nav class="footer-links">
                    <a href="#support">Support Center</a>
                    <a href="#invoicing">Invoicing</a>
                    <a href="#contract">Contract</a>
                    <a href="#careers">Careers</a>
                    <a href="#blog">Blog</a>
                    <a href="#faqs">FAQs</a>
                </nav>
            </div>
            <div class="footer-bottom">
                <p class="copyright">Copyright © 2022 Xpro. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Newsletter form submission
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('emailInput').value;

            if (email && validateEmail(email)) {
                // Show success message
                alert('Thank you for subscribing!\n\nWelcome to the FASCO newsletter. You will receive updates at:\n' + email);
                
                // Clear the input
                document.getElementById('emailInput').value = '';
                
                // Here you would typically make an API call to subscribe the email
                // Example:
                // fetch('/api/subscribe', {
                //     method: 'POST',
                //     body: JSON.stringify({ email: email }),
                //     headers: { 'Content-Type': 'application/json' }
                // });
            } else {
                alert('Please enter a valid email address.');
            }
        });

        // Email validation function
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add smooth scroll for footer links
        document.querySelectorAll('.footer-links a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                console.log('Navigating to:', href);
                // Add your navigation logic here
            });
        });
    </script>
</body>
</html>