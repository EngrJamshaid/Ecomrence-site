<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - New Arrivals</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fafafa;
        }

        .new-arrivals-section {
            padding: 80px 20px;
            background-color: #fff;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title {
            font-size: 40px;
            font-weight: 400;
            color: #333;
            margin-bottom: 20px;
        }

        .section-description {
            font-size: 14px;
            color: #999;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 40px;
        }

        /* Category Tabs */
        .category-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }

        .tab-button {
            padding: 12px 30px;
            background: transparent;
            border: 1px solid #ddd;
            color: #666;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .tab-button:hover {
            border-color: #333;
            color: #333;
        }

        .tab-button.active {
            background: #000;
            color: white;
            border-color: #000;
        }

        /* Product Grid */
        .products-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        .product-card {
            background: #fafafa;
            overflow: hidden;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 350px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-info {
            padding: 20px;
        }

        .product-name {
            font-size: 16px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }

        .product-category {
            font-size: 12px;
            color: #999;
            margin-bottom: 12px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .stars {
            display: flex;
            gap: 2px;
        }

        .star {
            color: #ffa500;
            font-size: 14px;
        }

        .reviews-count {
            font-size: 12px;
            color: #666;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-price {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .cart-icon {
            width: 35px;
            height: 35px;
            border: 1px solid #ff6b6b;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .cart-icon:hover {
            background: #ff6b6b;
        }

        .cart-icon svg {
            width: 18px;
            height: 18px;
            stroke: #ff6b6b;
            transition: stroke 0.3s;
        }

        .cart-icon:hover svg {
            stroke: white;
        }

        /* View More Button */
        .view-more-container {
            text-align: center;
        }

        .view-more-btn {
            padding: 15px 50px;
            background: #000;
            color: white;
            border: none;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
        }

        .view-more-btn:hover {
            background: #333;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 32px;
            }

            .category-tabs {
                gap: 10px;
            }

            .tab-button {
                padding: 10px 20px;
                font-size: 13px;
            }

            .products-grid {
                gap: 20px;
            }

            .product-image {
                height: 300px;
            }
        }

        @media (max-width: 640px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 28px;
            }

            .new-arrivals-section {
                padding: 60px 15px;
            }
        }
    </style>
</head>
<body>
    <section class="new-arrivals-section">
        <div class="section-header">
            <h2 class="section-title">New Arrivals</h2>
            <p class="section-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis ultrices sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin
            </p>

            <!-- Category Tabs -->
            <div class="category-tabs">
                <button class="tab-button">Men's Fashion</button>
                <button class="tab-button active">Women's Fashion</button>
                <button class="tab-button">Women Accessories</button>
                <button class="tab-button">Men Accessories</button>
                <button class="tab-button">Discount Deals</button>
            </div>
        </div>

        <div class="products-container">
            <!-- Products Grid -->
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card" data-id="1">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop" alt="Shiny Dress">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Shiny Dress</h3>
                        <p class="product-category">Al Karam</p>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="reviews-count">(4.5) Customer Reviews</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">$95.50</span>
                            <div class="cart-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card" data-id="2">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=500&fit=crop" alt="Long Dress">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Long Dress</h3>
                        <p class="product-category">Al Karam</p>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="reviews-count">(4.5) Customer Reviews</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">$95.50</span>
                            <div class="cart-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card" data-id="3">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1583496661160-fb5886a0aaaa?w=400&h=500&fit=crop" alt="Full Sweater">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Full Sweater</h3>
                        <p class="product-category">Al Karam</p>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="reviews-count">(4.5) Customer Reviews</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">$95.50</span>
                            <div class="cart-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card" data-id="4">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=400&h=500&fit=crop" alt="White Dress">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">White Dress</h3>
                        <p class="product-category">Al Karam</p>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="reviews-count">(4.5) Customer Reviews</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">$95.50</span>
                            <div class="cart-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card" data-id="5">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?w=400&h=500&fit=crop" alt="Colorful Dress">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Colorful Dress</h3>
                        <p class="product-category">Al Karam</p>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="reviews-count">(4.5) Customer Reviews</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">$95.50</span>
                            <div class="cart-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card" data-id="6">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="White Shirt">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">White Shirt</h3>
                        <p class="product-category">Al Karam</p>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="reviews-count">(4.5) Customer Reviews</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">$95.50</span>
                            <div class="cart-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="view-more-container">
                <button class="view-more-btn">View More</button>
            </div>
        </div>
    </section>

    <script>
        // Category tabs functionality
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                console.log('Category changed to:', this.textContent);
            });
        });

        // Add to cart functionality
        const cartIcons = document.querySelectorAll('.cart-icon');
        cartIcons.forEach(icon => {
            icon.addEventListener('click', function(e) {
                e.stopPropagation();
                const card = this.closest('.product-card');
                const productName = card.querySelector('.product-name').textContent;
                const productPrice = card.querySelector('.product-price').textContent;
                
                alert(`Added to cart!\n\n${productName}\n${productPrice}`);
            });
        });

        // Product card click functionality
        const productCards = document.querySelectorAll('.product-card');
        productCards.forEach(card => {
            card.addEventListener('click', function() {
                const productName = this.querySelector('.product-name').textContent;
                console.log('Viewing product:', productName);
                // Redirect to product detail page
            });
        });

        // View More button
        document.querySelector('.view-more-btn').addEventListener('click', function() {
            console.log('Loading more products...');
            alert('Loading more products...');
            // Load more products via AJAX
        });
    </script>
</body>
</html>