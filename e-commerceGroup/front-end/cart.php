<!DOCTYPE html>
<html>

<head>
    <title>The Selling Board</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <style>
        .navbar-inverse .navbar-brand,
        .navbar-inverse .navbar-nav>li>a {
            color: white;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .cart-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .cart-items,
        .order-summary {
            border: 1px solid #ccc;
            padding: 20px;
            width: 45%;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .cart-item div {
            display: flex;
            align-items: center;
        }

        .cart-item input[type="number"] {
            width: 50px;
            margin-left: 10px;
        }

        .order-summary div {
            margin-bottom: 10px;
        }

        .order-summary button {
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .order-summary button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" name="logo">TSB</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="electronicdevices.php">Electronic Devices</a></li>
                            <li><a href="#">Home and Living</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Grocery</a></li>
                        </ul>
                    </li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="cart.php">Add to Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="cart-container">
            <div class="cart-items">
                <h2>Shopping Cart</h2>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 1">
                        <label>Item 1</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 2">
                        <label>Item 2</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 3">
                        <label>Item 3</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 4">
                        <label>Item 4</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 5">
                        <label>Item 5</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 6">
                        <label>Item 6</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 7">
                        <label>Item 7</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 8">
                        <label>Item 8</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 9">
                        <label>Item 9</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
                <div class="cart-item">
                    <div>
                        <input type="checkbox" class="select-item">
                        <img src="path/to/image1.jpg" alt="Item 10">
                        <label>Item 10</label>
                    </div>
                    <div>
                        <label>Quantity:</label>
                        <input type="number" value="1" min="0">
                        <button class="delete-item">Delete</button>
                    </div>
                </div>
            </div>
            <div class="order-summary">
                <h2>Order Summary</h2>
                <div>
                    <label>Subtotal: </label>
                    <span id="subtotal">$0.00</span>
                </div>
                <div>
                    <label>Shipping Fee: </label>
                    <span id="shipping-fee">$5.00</span>
                </div>
                <div>
                    <label>Apply Voucher: </label>
                    <input type="text" id="voucher-code">
                    <button id="apply-voucher">Apply</button>
                </div>
                <div>
                    <label>Total: </label>
                    <span id="total">$0.00</span>
                </div>
                <button id="checkout">Proceed to Checkout</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('apply-voucher').addEventListener('click', function () {
            const voucherCode = document.getElementById('voucher-code').value.trim();
            if (voucherCode === '3CS1') {
                // Apply 20% discount
                const subtotal = parseFloat(document.getElementById('subtotal').textContent.substring(1));
                const shippingFee = parseFloat(document.getElementById('shipping-fee').textContent.substring(1));
                const discount = subtotal * 0.20;
                const total = subtotal - discount + shippingFee;
                document.getElementById('total').textContent = `$${total.toFixed(2)}`;
            } else {
                alert('Invalid voucher code');
            }
        });
        document.querySelectorAll('.cart-item input[type="number"]').forEach(input => {
            input.addEventListener('input', function () {
                updateSummary();
            });
        });
        document.querySelectorAll('.delete-item').forEach(button => {
            button.addEventListener('click', function () {
                this.closest('.cart-item').remove();
                updateSummary();
            });
        });
        function updateSummary() {
            let subtotal = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                const quantity = item.querySelector('input[type="number"]').value;
                subtotal += quantity * 10; // Assuming each item is $10 for simplicity
            });
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            const shippingFee = 5; // Assuming flat $5 shipping fee
            const total = subtotal + shippingFee;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        }
        updateSummary();
    </script>
</body>

</html>