<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Peaky Blinders Collection</title>
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

        .product-section {
            padding: 60px 20px;
            background-color: #fff;
        }

        .product-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: stretch;
            gap: 0;
            background: white;
            overflow: hidden;
        }

        /* Left Side - Product Image */
        .product-image-wrapper {
            flex: 1;
            position: relative;
            background: linear-gradient(135deg, #f0f0f0 0%, #e0e0e0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px;
        }

        .product-image {
            position: relative;
            max-width: 500px;
            width: 100%;
        }

        .product-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Product Labels */
        .product-label {
            position: absolute;
            background: white;
            padding: 8px 16px;
            border: 1px solid #333;
            font-size: 13px;
            color: #333;
            white-space: nowrap;
            z-index: 10;
        }

        .product-label::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 1px;
            background: #333;
        }

        .label-flat-cap {
            top: 10%;
            right: -30px;
        }

        .label-flat-cap::after {
            left: -30px;
            top: 50%;
        }

        .label-suspender {
            top: 25%;
            left: -50px;
        }

        .label-suspender::after {
            right: -30px;
            top: 50%;
        }

        .label-hugo-boss {
            top: 45%;
            right: -40px;
        }

        .label-hugo-boss::after {
            left: -30px;
            top: 50%;
        }

        .label-hugo-boots {
            bottom: 30%;
            left: -60px;
        }

        .label-hugo-boots::after {
            right: -30px;
            top: 50%;
        }

        .label-solacia {
            bottom: 10%;
            right: -30px;
        }

        .label-solacia::after {
            left: -30px;
            top: 50%;
        }

        /* Right Side - Product Details */
        .product-details {
            flex: 1;
            background: #e8e8e8;
            padding: 80px 60px;
            clip-path: polygon(8% 0, 100% 0, 100% 100%, 0 100%);
            margin-left: -50px;
        }

        .collection-tag {
            font-size: 13px;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .product-title {
            font-size: 48px;
            font-weight: 400;
            color: #333;
            margin-bottom: 30px;
        }

        .section-subtitle {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .product-description {
            font-size: 14px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .size-selector {
            margin-bottom: 25px;
        }

        .size-label {
            font-size: 13px;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        .size-options {
            display: flex;
            gap: 10px;
        }

        .size-option {
            width: 40px;
            height: 40px;
            border: 1px solid #999;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .size-option:hover,
        .size-option.active {
            background: #000;
            color: white;
            border-color: #000;
        }

        .product-price {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
        }

        .buy-button {
            width: 200px;
            padding: 15px 30px;
            background: #000;
            color: white;
            border: none;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
        }

        .buy-button:hover {
            background: #333;
        }

        /* Features Section */
        .features-section {
            background: white;
            padding: 40px 20px;
            border-top: 1px solid #e0e0e0;
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-icon {
            flex-shrink: 0;
        }

        .feature-icon svg {
            width: 40px;
            height: 40px;
        }

        .feature-content h3 {
            font-size: 15px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .feature-content p {
            font-size: 12px;
            color: #999;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .product-container {
                flex-direction: column;
            }

            .product-details {
                clip-path: none;
                margin-left: 0;
                padding: 60px 40px;
            }

            .product-title {
                font-size: 38px;
            }

            .features-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-image-wrapper {
                padding: 40px 20px;
            }

            .product-label {
                font-size: 11px;
                padding: 6px 12px;
            }

            .product-title {
                font-size: 32px;
            }

            .product-details {
                padding: 40px 30px;
            }

            .features-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <section class="product-section">
        <div class="product-container">
            <!-- Left Side - Product Image with Labels -->
            <div class="product-image-wrapper">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1617127365659-c47fa864d8bc?w=600&h=800&fit=crop" alt="Peaky Blinders Fashion">
                    
                    <!-- Product Labels -->
                    <div class="product-label label-flat-cap">Flat Cap</div>
                    <div class="product-label label-suspender">Suspender</div>
                    <div class="product-label label-hugo-boss">Hugo Boss</div>
                    <div class="product-label label-hugo-boots">Hugo Boots</div>
                    <div class="product-label label-solacia">Solacia</div>
                </div>
            </div>

            <!-- Right Side - Product Details -->
            <div class="product-details">
                <p class="collection-tag">Women Collection</p>
                <h1 class="product-title">Peaky Blinders</h1>
                
                <h3 class="section-subtitle">Description</h3>
                <p class="product-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis ultrices sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis
                </p>

                <div class="size-selector">
                    <label class="size-label">Size:</label>
                    <div class="size-options">
                        <button class="size-option">XS</button>
                        <button class="size-option active">S</button>
                        <button class="size-option">M</button>
                        <button class="size-option">L</button>
                        <button class="size-option">XL</button>
                    </div>
                </div>

                <div class="product-price">$100.00</div>

                <button class="buy-button">Buy Now</button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-container">
            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="feature-content">
                    <h3>High Quality</h3>
                    <p>Crafted from top materials</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <div class="feature-content">
                    <h3>Warranty Protection</h3>
                    <p>Over 2 years</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                    </svg>
                </div>
                <div class="feature-content">
                    <h3>Free Shipping</h3>
                    <p>Order over 150 $</p>
                </div>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <div class="feature-content">
                    <h3>24 / 7 Support</h3>
                    <p>Dedicated support</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Size selector functionality
        const sizeOptions = document.querySelectorAll('.size-option');
        sizeOptions.forEach(option => {
            option.addEventListener('click', function() {
                sizeOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Buy Now button
        document.querySelector('.buy-button').addEventListener('click', function() {
            const selectedSize = document.querySelector('.size-option.active').textContent;
            alert(`Added to cart!\n\nProduct: Peaky Blinders\nSize: ${selectedSize}\nPrice: $100.00`);
        });
    </script>
</body>
</html>