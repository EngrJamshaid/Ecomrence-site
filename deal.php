<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Deals Of The Month</title>
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

        .deals-section {
            padding: 80px 20px;
            background-color: #f8f8f8;
            border-top: 3px solid #4a9eff;
            position: relative;
        }

        .deals-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 60px;
        }

        /* Left Content */
        .deals-content {
            flex: 0 0 400px;
        }

        .deals-title {
            font-size: 42px;
            font-weight: 400;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .deals-description {
            font-size: 14px;
            color: #999;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .buy-now-btn {
            padding: 12px 35px;
            background: #000;
            color: white;
            border: none;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
            margin-bottom: 40px;
        }

        .buy-now-btn:hover {
            background: #333;
        }

        /* Countdown Timer */
        .countdown-section {
            margin-top: 30px;
        }

        .countdown-text {
            font-size: 14px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .countdown-timer {
            display: flex;
            gap: 30px;
            position: relative;
        }

        .countdown-timer::before {
            content: '';
            position: absolute;
            left: -30px;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            background: #ff4444;
            border-radius: 50%;
        }

        .time-unit {
            text-align: center;
        }

        .time-value {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            min-width: 50px;
        }

        .time-label {
            font-size: 12px;
            color: #999;
            text-transform: capitalize;
        }

        /* Right Carousel */
        .deals-carousel {
            flex: 1;
            position: relative;
            overflow: hidden;
        }

        .carousel-container {
            display: flex;
            gap: 20px;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            flex: 0 0 280px;
            position: relative;
        }

        .carousel-image {
            width: 100%;
            height: 400px;
            overflow: hidden;
            background: #e0e0e0;
        }

        .carousel-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Discount Badge */
        .discount-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: white;
            padding: 15px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .badge-title {
            font-size: 11px;
            color: #999;
            margin-bottom: 5px;
        }

        .badge-discount {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        /* Carousel Navigation */
        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .carousel-nav.left {
            left: -60px;
        }

        .carousel-nav.right {
            right: -60px;
        }

        .nav-btn {
            width: 45px;
            height: 45px;
            background: white;
            border: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .nav-btn:hover {
            background: #000;
        }

        .nav-btn:hover svg {
            stroke: white;
        }

        .nav-btn svg {
            width: 20px;
            height: 20px;
            stroke: #000;
            transition: stroke 0.3s;
        }

        /* Carousel Dots */
        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ddd;
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: #000;
            width: 30px;
            border-radius: 5px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .deals-container {
                gap: 40px;
            }

            .deals-content {
                flex: 0 0 350px;
            }

            .carousel-nav.left {
                left: 10px;
            }

            .carousel-nav.right {
                right: 10px;
            }
        }

        @media (max-width: 968px) {
            .deals-container {
                flex-direction: column;
                gap: 50px;
            }

            .deals-content {
                flex: 1;
                text-align: center;
            }

            .countdown-timer {
                justify-content: center;
            }

            .countdown-timer::before {
                display: none;
            }

            .deals-title {
                font-size: 36px;
            }
        }

        @media (max-width: 640px) {
            .deals-title {
                font-size: 32px;
            }

            .carousel-item {
                flex: 0 0 250px;
            }

            .carousel-image {
                height: 350px;
            }

            .countdown-timer {
                gap: 20px;
            }

            .time-value {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <section class="deals-section">
        <div class="deals-container">
            <!-- Left Content -->
            <div class="deals-content">
                <h2 class="deals-title">Deals Of The Month</h2>
                <p class="deals-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis ultrices sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin
                </p>
                <button class="buy-now-btn">Buy Now</button>

                <!-- Countdown Timer -->
                <div class="countdown-section">
                    <p class="countdown-text">Hurry, Before It's Too Late!</p>
                    <div class="countdown-timer" id="countdown">
                        <div class="time-unit">
                            <div class="time-value" id="days">02</div>
                            <div class="time-label">Days</div>
                        </div>
                        <div class="time-unit">
                            <div class="time-value" id="hours">06</div>
                            <div class="time-label">Hr</div>
                        </div>
                        <div class="time-unit">
                            <div class="time-value" id="minutes">05</div>
                            <div class="time-label">Mins</div>
                        </div>
                        <div class="time-unit">
                            <div class="time-value" id="seconds">30</div>
                            <div class="time-label">Sec</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Carousel -->
            <div class="deals-carousel">
                <div class="carousel-container" id="carouselContainer">
                    <!-- Carousel Item 1 -->
                    <div class="carousel-item">
                        <div class="carousel-image">
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=600&fit=crop" alt="Fashion Deal 1">
                        </div>
                        <div class="discount-badge">
                            <div class="badge-title">— Spring Sale</div>
                            <div class="badge-discount">30% OFF</div>
                        </div>
                    </div>

                    <!-- Carousel Item 2 -->
                    <div class="carousel-item">
                        <div class="carousel-image">
                            <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=400&h=600&fit=crop" alt="Fashion Deal 2">
                        </div>
                        <div class="discount-badge">
                            <div class="badge-title">— Summer Sale</div>
                            <div class="badge-discount">40% OFF</div>
                        </div>
                    </div>

                    <!-- Carousel Item 3 -->
                    <div class="carousel-item">
                        <div class="carousel-image">
                            <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&h=600&fit=crop" alt="Fashion Deal 3">
                        </div>
                        <div class="discount-badge">
                            <div class="badge-title">— Fall Sale</div>
                            <div class="badge-discount">25% OFF</div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="carousel-nav left">
                    <button class="nav-btn" id="prevBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </button>
                </div>
                <div class="carousel-nav right">
                    <button class="nav-btn" id="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>

                <!-- Carousel Dots -->
                <div class="carousel-dots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                    <span class="dot" data-index="3"></span>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Countdown Timer
        function updateCountdown() {
            // Set target date (2 days, 6 hours, 5 minutes, 30 seconds from now)
            const now = new Date().getTime();
            const targetDate = now + (2 * 24 * 60 * 60 * 1000) + (6 * 60 * 60 * 1000) + (5 * 60 * 1000) + (30 * 1000);

            const timer = setInterval(function() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = String(days).padStart(2, '0');
                document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');

                if (distance < 0) {
                    clearInterval(timer);
                    document.getElementById('countdown').innerHTML = '<p>Deal Expired!</p>';
                }
            }, 1000);
        }

        updateCountdown();

        // Carousel functionality
        let currentIndex = 0;
        const carouselContainer = document.getElementById('carouselContainer');
        const dots = document.querySelectorAll('.dot');

        function updateCarousel() {
            const offset = -currentIndex * 300; // 280px width + 20px gap
            carouselContainer.style.transform = `translateX(${offset}px)`;
            
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        document.getElementById('prevBtn').addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + 3) % 3;
            updateCarousel();
        });

        document.getElementById('nextBtn').addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % 3;
            updateCarousel();
        });

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentIndex = parseInt(this.getAttribute('data-index'));
                updateCarousel();
            });
        });

        // Buy Now button
        document.querySelector('.buy-now-btn').addEventListener('click', function() {
            alert('Redirecting to deals...');
        });
    </script>
</body>
</html>