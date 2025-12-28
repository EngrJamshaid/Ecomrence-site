<?php
include ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASCO - Product Listing</title>
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

        .shop-section {
            padding: 40px 20px;
        }

        .shop-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            gap: 40px;
        }

        /* Sidebar Filters */
        .sidebar {
            flex: 0 0 250px;
        }

        .filter-section {
            margin-bottom: 35px;
        }

        .filter-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .toggle-icon {
            font-size: 14px;
            color: #999;
            cursor: pointer;
        }

        /* Size Filter */
        .size-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .size-option {
            width: 38px;
            height: 38px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s;
            background: white;
        }

        .size-option:hover,
        .size-option.active {
            border-color: #000;
            background: #000;
            color: white;
        }

        /* Color Filter */
        .color-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .color-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid transparent;
            transition: transform 0.3s;
        }

        .color-option:hover {
            transform: scale(1.1);
        }

        .color-option.active {
            border-color: #333;
            box-shadow: 0 0 0 2px white, 0 0 0 4px #333;
        }

        /* Price Filter */
        .price-ranges {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .price-range {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .price-range input[type="checkbox"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .price-range label {
            font-size: 14px;
            color: #666;
            cursor: pointer;
        }

        /* Brands & Collections */
        .filter-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .filter-item {
            font-size: 14px;
            color: #666;
            cursor: pointer;
            transition: color 0.3s;
        }

        .filter-item:hover {
            color: #000;
        }

        /* Tags */
        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag-item {
            padding: 6px 12px;
            border: 1px solid #ddd;
            font-size: 12px;
            color: #666;
            cursor: pointer;
            transition: all 0.3s;
        }

        .tag-item:hover {
            border-color: #000;
            color: #000;
        }

        /* Main Content */
        .main-content {
            flex: 1;
        }

        /* Top Bar */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .sort-dropdown {
            padding: 10px 15px;
            border: 1px solid #ddd;
            font-size: 14px;
            color: #666;
            cursor: pointer;
        }

        .view-options {
            display: flex;
            gap: 8px;
        }

        .view-btn {
            width: 35px;
            height: 35px;
            border: 1px solid #ddd;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .view-btn:hover,
        .view-btn.active {
            border-color: #000;
            background: #000;
        }

        .view-btn:hover svg,
        .view-btn.active svg {
            fill: white;
        }

        .view-btn svg {
            width: 16px;
            height: 16px;
            fill: #666;
        }

        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 50px;
        }

        .product-card {
            background: #fafafa;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 350px;
            overflow: hidden;
            background: #e0e0e0;
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

        .product-prices {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .current-price {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }

        .original-price {
            font-size: 14px;
            color: #999;
            text-decoration: line-through;
        }

        .product-colors {
            display: flex;
            gap: 8px;
        }

        .color-dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .page-btn {
            width: 35px;
            height: 35px;
            border: 1px solid #ddd;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .page-btn:hover,
        .page-btn.active {
            border-color: #000;
            background: #000;
            color: white;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .shop-container {
                flex-direction: column;
            }

            .sidebar {
                flex: 1;
            }

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .product-image {
                height: 300px;
            }
        }

        @media (max-width: 640px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <section class="shop-section">
        <div class="shop-container">
            <!-- Sidebar Filters -->
            <aside class="sidebar">
                <!-- Size Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">Size</h3>
                    <div class="size-options">
                        <div class="size-option">S</div>
                        <div class="size-option">M</div>
                        <div class="size-option">L</div>
                        <div class="size-option">XL</div>
                    </div>
                </div>

                <!-- Color Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">Colors</h3>
                    <div class="color-options">
                        <div class="color-option" style="background: #ff6b6b;"></div>
                        <div class="color-option" style="background: #ffa500;"></div>
                        <div class="color-option" style="background: #ffeb3b;"></div>
                        <div class="color-option" style="background: #4caf50;"></div>
                        <div class="color-option" style="background: #00bcd4;"></div>
                        <div class="color-option" style="background: #2196f3;"></div>
                        <div class="color-option" style="background: #9c27b0;"></div>
                        <div class="color-option" style="background: #f48fb1;"></div>
                        <div class="color-option" style="background: #795548;"></div>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">Prices</h3>
                    <div class="price-ranges">
                        <div class="price-range">
                            <input type="checkbox" id="price1">
                            <label for="price1">$50 - $100</label>
                        </div>
                        <div class="price-range">
                            <input type="checkbox" id="price2">
                            <label for="price2">$100 - $150</label>
                        </div>
                        <div class="price-range">
                            <input type="checkbox" id="price3">
                            <label for="price3">$150 - $200</label>
                        </div>
                        <div class="price-range">
                            <input type="checkbox" id="price4">
                            <label for="price4">$200 - $300</label>
                        </div>
                        <div class="price-range">
                            <input type="checkbox" id="price5">
                            <label for="price5">$300 - $400</label>
                        </div>
                    </div>
                </div>

                <!-- Brands Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">
                        Brands
                        <span class="toggle-icon">∧</span>
                    </h3>
                    <div class="filter-list">
                        <div class="filter-item">Gucci</div>
                        <div class="filter-item">Benneton Brand</div>
                        <div class="filter-item">Levis®</div>
                        <div class="filter-item">Vugaland</div>
                        <div class="filter-item">Abja</div>
                    </div>
                </div>

                <!-- Collections Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">
                        Collections
                        <span class="toggle-icon">∧</span>
                    </h3>
                    <div class="filter-list">
                        <div class="filter-item">#Playababe</div>
                        <div class="filter-item">New Arrivals</div>
                        <div class="filter-item">Best Sellers</div>
                        <div class="filter-item">Special Offers</div>
                    </div>
                </div>

                <!-- Tags Filter -->
                <div class="filter-section">
                    <h3 class="filter-title">Tags</h3>
                    <div class="tag-list">
                        <div class="tag-item">Fashion</div>
                        <div class="tag-item">Hats</div>
                        <div class="tag-item">Sandal</div>
                        <div class="tag-item">Belt</div>
                        <div class="tag-item">Bags</div>
                        <div class="tag-item">Snacker</div>
                        <div class="tag-item">Denim</div>
                        <div class="tag-item">Minimog</div>
                        <div class="tag-item">Vagabond</div>
                        <div class="tag-item">Sunglasses</div>
                        <div class="tag-item">Beachwear</div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="main-content">
                <!-- Top Bar -->
                <div class="top-bar">
                    <select class="sort-dropdown">
                        <option>Best selling</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest</option>
                    </select>

                    <div class="view-options">
                        <button class="view-btn">
                            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                        </button>
                        <button class="view-btn active">
                            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="13" y="3" width="8" height="7"/><rect x="3" y="13" width="7" height="8"/><rect x="13" y="13" width="8" height="8"/></svg>
                        </button>
                        <button class="view-btn">
                            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="3"/><rect x="3" y="10" width="18" height="3"/><rect x="3" y="16" width="18" height="3"/></svg>
                        </button>
                        <button class="view-btn">
                            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="4"/><rect x="3" y="9" width="18" height="4"/><rect x="3" y="15" width="18" height="4"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="products-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop" alt="Blushed Red Hat">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Blushed Red Hat</h3>
                            <div class="product-prices">
                                <span class="current-price">$8.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #ffeb3b;"></div>
                                <div class="color-dot" style="background: #333;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1539533018447-63fcce2678e3?w=400&h=500&fit=crop" alt="Luxry Ghost Shirt">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Luxry Ghost Shirt</h3>
                            <div class="product-prices">
                                <span class="current-price">$1.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #e0e0e0;"></div>
                                <div class="color-dot" style="background: #ffb6c1;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=400&h=500&fit=crop" alt="Long Sleeve Coat">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Long Sleeve Coat</h3>
                            <div class="product-prices">
                                <span class="current-price">$190.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #90ee90;"></div>
                                <div class="color-dot" style="background: #add8e6;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&h=500&fit=crop" alt="Rosy Denim Hat">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Rosy Denim Hat</h3>
                            <div class="product-prices">
                                <span class="current-price">$25.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #e0e0e0;"></div>
                                <div class="color-dot" style="background: #191970;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?w=400&h=500&fit=crop" alt="Luxro Plain Top">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Luxro Plain Top</h3>
                            <div class="product-prices">
                                <span class="current-price">$50.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #e0e0e0;"></div>
                                <div class="color-dot" style="background: #d2691e;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1583496661160-fb5886a0aaaa?w=400&h=500&fit=crop" alt="Oversized T-Shirt">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Oversized T-Shirt</h3>
                            <div class="product-prices">
                                <span class="current-price">$11.00</span>
                                <span class="original-price">$22.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #ffb6c1;"></div>
                                <div class="color-dot" style="background: #dda0dd;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="Patterned Sunglasses">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Patterned Sunglasses</h3>
                            <div class="product-prices">
                                <span class="current-price">$16.00</span>
                                <span class="original-price">$21.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #333;"></div>
                                <div class="color-dot" style="background: #d2b48c;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=400&h=500&fit=crop" alt="Buckram Jacket">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Buckram Jacket</h3>
                            <div class="product-prices">
                                <span class="current-price">$82.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #e0e0e0;"></div>
                                <div class="color-dot" style="background: #87ceeb;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Product 9 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=500&fit=crop" alt="Dotted Black Dress">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Dotted Black Dress</h3>
                            <div class="product-prices">
                                <span class="current-price">$97.00</span>
                            </div>
                            <div class="product-colors">
                                <div class="color-dot" style="background: #333;"></div>
                                <div class="color-dot" style="background: #87ceeb;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">›</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Size selection
        document.querySelectorAll('.size-option').forEach(size => {
            size.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // Color selection
        document.querySelectorAll('.color-option').forEach(color => {
            color.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // View options
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Pagination
        document.querySelectorAll('.page-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if(this.textContent !== '›') {
                    document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>



<?php
include ('blind.php');
include ('followoninsta.php');
include ('footer.php');
?>