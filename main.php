<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Ultimate Sale</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        .hero-section {
            padding: 60px 20px;
            background-color: #f5f5f5;
            position: relative;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Hero Grid */
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin-bottom: 60px;
            position: relative;
        }

        /* Image Columns */
        .image-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .fashion-image {
            position: relative;
            overflow: hidden;
            background: #e0e0e0;
        }

        .fashion-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Left Column */
        .left-column .fashion-image {
            height: 550px;
        }

        /* Center Column */
        .center-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .center-top {
            height: 150px;
        }

        .sale-content {
            background: white;
            padding: 40px 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .sale-title-bold {
            font-size: 48px;
            font-weight: 700;
            color: #000;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .sale-title-outline {
            font-size: 48px;
            font-weight: 700;
            color: transparent;
            -webkit-text-stroke: 2px #000;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .sale-subtitle {
            font-size: 13px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 25px;
        }

        .shop-button {
            padding: 12px 35px;
            background: #000;
            color: white;
            border: none;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .shop-button:hover {
            background: #333;
        }

        .center-bottom {
            height: 150px;
        }

        /* Right Column */
        .right-column .fashion-image {
            height: 550px;
        }

        /* Navigation Arrows */
        .hero-navigation {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .nav-arrow {
            width: 45px;
            height: 45px;
            background: #000;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .nav-arrow:hover {
            background: #333;
        }

        .nav-arrow.white {
            background: white;
            border: 1px solid #e0e0e0;
        }

        .nav-arrow.white:hover {
            background: #f5f5f5;
        }

        .nav-arrow svg {
            width: 20px;
            height: 20px;
            stroke: white;
        }

        .nav-arrow.white svg {
            stroke: #000;
        }

        /* Brand Logos Section */
        .brands-section {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 80px;
            flex-wrap: wrap;
        }

        .brand-logo {
            font-size: 28px;
            font-weight: 600;
            color: #000;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .brand-logo:hover {
            opacity: 0.7;
        }

        .brand-logo.chanel {
            font-family: 'Times New Roman', serif;
            letter-spacing: 3px;
        }

        .brand-logo.lv {
            font-family: 'Georgia', serif;
            font-size: 24px;
        }

        .brand-logo.prada {
            font-family: 'Georgia', serif;
            letter-spacing: 2px;
        }

        .brand-logo.ck {
            font-family: 'Helvetica', sans-serif;
            font-weight: 300;
            font-size: 26px;
        }

        .brand-logo.denim {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .left-column .fashion-image,
            .right-column .fashion-image {
                height: 400px;
            }

            .center-column {
                order: -1;
            }

            .hero-navigation {
                position: static;
                justify-content: center;
                margin-top: 30px;
            }

            .brands-section {
                gap: 50px;
            }

            .sale-title-bold,
            .sale-title-outline {
                font-size: 40px;
            }
        }

        @media (max-width: 768px) {
            .brands-section {
                gap: 40px;
            }

            .brand-logo {
                font-size: 24px;
            }

            .sale-title-bold,
            .sale-title-outline {
                font-size: 36px;
            }

            .hero-section {
                padding: 40px 15px;
            }
        }

        @media (max-width: 480px) {
            .brands-section {
                gap: 30px;
                flex-wrap: wrap;
            }

            .brand-logo {
                font-size: 20px;
            }

            .sale-title-bold,
            .sale-title-outline {
                font-size: 32px;
            }

            .sale-content {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="hero-container">
            <!-- Hero Grid -->
            <div class="hero-grid">
                <!-- Left Column -->
                <div class="image-column left-column">
                    <div class="fashion-image">
                        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=500&h=700&fit=crop" alt="Fashion Model">
                    </div>
                </div>

                <!-- Center Column -->
                <div class="center-column">
                    <div class="fashion-image center-top">
                        <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=500&h=200&fit=crop" alt="Fashion Group">
                    </div>

                    <div class="sale-content">
                        <h1 class="sale-title-bold">ULTIMATE</h1>
                        <h1 class="sale-title-outline">SALE</h1>
                        <p class="sale-subtitle">New Collection</p>
                        <button class="shop-button">Shop Now</button>
                    </div>

                    <div class="fashion-image center-bottom">
                        <img src="https://images.unsplash.com/photo-1604176354204-9268737828e4?w=500&h=200&fit=crop" alt="Fashion Duo">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="image-column right-column">
                    <div class="fashion-image">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=700&fit=crop" alt="Fashion Model">
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="hero-navigation">
                    <button class="nav-arrow" id="prevBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                    <button class="nav-arrow white" id="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Brand Logos -->
            <div class="brands-section">
                <a href="#" class="brand-logo chanel">CHANEL</a>
                <a href="#" class="brand-logo lv">LOUIS VUITTON</a>
                <a href="#" class="brand-logo prada">PRADA</a>
                <a href="#" class="brand-logo ck">Calvin Klein</a>
                <a href="#" class="brand-logo denim">DENIM</a>
            </div>
        </div>
    </section>

    <script>
        // Shop Now button
        document.querySelector('.shop-button').addEventListener('click', function() {
            console.log('Shop Now clicked');
            alert('Redirecting to shop...');
            // window.location.href = 'shop.html';
        });

        // Navigation arrows
        let currentSlide = 0;
        const totalSlides = 3;

        document.getElementById('prevBtn').addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            console.log('Previous slide:', currentSlide);
            // Add slide transition logic here
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % totalSlides;
            console.log('Next slide:', currentSlide);
            // Add slide transition logic here
        });

        // Brand logos click
        document.querySelectorAll('.brand-logo').forEach(logo => {
            logo.addEventListener('click', function(e) {
                e.preventDefault();
                const brandName = this.textContent;
                console.log('Brand clicked:', brandName);
                alert(`Viewing ${brandName} collection...`);
            });
        });
    </script>
</body>
</html>