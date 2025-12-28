<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Header</title>
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

        .header {
            background-color: #fff;
            padding: 20px 40px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Logo */
        .logo {
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 6px;
            color: #000;
            text-decoration: none;
        }

        /* Navigation */
        .nav-menu {
            display: flex;
            align-items: center;
            gap: 40px;
            list-style: none;
        }

        .nav-link {
            color: #666;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s;
            position: relative;
        }

        .nav-link:hover {
            color: #000;
        }

        /* Auth Buttons */
        .auth-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn-signin {
            padding: 10px 25px;
            background: transparent;
            border: none;
            color: #666;
            font-size: 15px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .btn-signin:hover {
            color: #000;
        }

        .btn-signup {
            padding: 10px 30px;
            background: #000;
            border: none;
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-signup:hover {
            background: #333;
        }

        /* Mobile Menu Toggle */
        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .mobile-menu-toggle span {
            width: 25px;
            height: 3px;
            background: #000;
            transition: all 0.3s;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .header {
                padding: 20px 30px;
            }

            .nav-menu {
                gap: 30px;
            }

            .logo {
                font-size: 24px;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                background: white;
                flex-direction: column;
                align-items: flex-start;
                padding: 30px 40px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                transition: left 0.3s;
                z-index: 1000;
            }

            .nav-menu.active {
                left: 0;
            }

            .auth-buttons {
                flex-direction: column;
                width: 100%;
                gap: 10px;
                margin-top: 20px;
            }

            .btn-signin,
            .btn-signup {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 15px 20px;
            }

            .logo {
                font-size: 20px;
                letter-spacing: 4px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <!-- Logo -->
            <a href="#" class="logo">FASCO</a>

            <!-- Navigation Menu -->
            <nav>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#deals" class="nav-link">Deals</a></li>
                    <li><a href="#new-arrivals" class="nav-link">New Arrivals</a></li>
                    <li><a href="#packages" class="nav-link">Packages</a></li>
                    
                    <!-- Auth Buttons (for mobile) -->
                    <li class="auth-buttons" style="display: none;">
                        <button class="btn-signin">Sign In</button>
                        <button class="btn-signup">Sign Up</button>
                    </li>
                </ul>
            </nav>

            <!-- Auth Buttons (for desktop) -->
            <div class="auth-buttons auth-desktop">
                <button class="btn-signin">Sign In</button>
                <button class="btn-signup">Sign Up</button>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle" id="mobileMenuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navMenu = document.getElementById('navMenu');

        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            
            // Animate hamburger to X
            const spans = this.querySelectorAll('span');
            if (navMenu.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        // Sign In button
        document.querySelectorAll('.btn-signin').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Redirecting to Sign In page...');
                // window.location.href = 'signin.html';
            });
        });

        // Sign Up button
        document.querySelectorAll('.btn-signup').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Redirecting to Sign Up page...');
                // window.location.href = 'signup.html';
            });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                console.log('Navigating to:', targetId);
                
                // Close mobile menu if open
                navMenu.classList.remove('active');
                const spans = mobileMenuToggle.querySelectorAll('span');
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            });
        });

        // Show auth buttons in mobile menu
        window.addEventListener('resize', function() {
            const authButtonsInMenu = navMenu.querySelector('.auth-buttons');
            if (window.innerWidth <= 768) {
                authButtonsInMenu.style.display = 'flex';
                document.querySelector('.auth-desktop').style.display = 'none';
            } else {
                authButtonsInMenu.style.display = 'none';
                document.querySelector('.auth-desktop').style.display = 'flex';
            }
        });
    </script>
</body>
</html>