<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <title>Styling </title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <header>
        <h1>Styling</h1>
        <div id="cart" class="hidden">
            <h2>Shopping Cart</h2>
            <ul id="cart-items">
            </ul>
            <p>Total: $<span id="cart-total">0.00</span></p>
            <label for="payment-method">Select Payment Method:</label>
            <select id="payment-method" name="payment-method">
            <option value="paypal">PayPal</option>
            <option value="clearpay">Clearpay</option>
            <option value="visa"> Visa</option>
            <option value="amex">American Express</option>
            <option value="mastercard">Mastercard</option>
            <option value="maestro">Maestro</option>
            </select><br><br>
            <label for="card-number">Enter Card Number:</label>
            <input type="text" id="card-number" name="card-number">
            <br><br>
            <label for="cvv">Enter CVV:</label>
            <input type="password" id="cvv" name="cvv">
            <br><br>
            <button id="order-now-button" style="background-color: green; color: white; outline: 2px solid black;"  onclick="placeOrder()">Order Now</button>
        </div>
    
        <div id="cart-image" onclick="toggleCart()">
            <img src="../img/cart.jpg" alt="Cart" width="70px">
        </div>
    </header>

    <section id="products">
        <div class="product" >
            <img src="../img/wowhair.webp" alt="Styling Cream" >
            <h3>COLOR WOW<p>Mini One Minute Transformation Anti Frizz Styling Cream</p></h3>
            <p>$12.00</p>
            <button class="add-to-cart" onclick="addToCart('Mini One Minute Transformation Anti Frizz Styling Cream', 12.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/patterncream.webp" alt="Styling Cream" >
        <h3>PATTERN by Tracee Ellis Ross<p> Styling Cream for Curly &Coily Hair</p></h3>
        <p>$28.00 </p>
        <button class="add-to-cart" onclick="addToCart('Styling Cream for Curly &Coily Hair', 28.00)">Add to Cart</button>
        
    </div>
    <div class="product" >
        <img src="../img/curlsmith.webp" alt="Heat Protectant" >
        <h3>Curlsmith<p>Heat Protectant Leave In Teatment</p> </h3>
        <p>$24.00  <del>$33.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Heat Protectant Leave In Teatment', 24.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/bumble.webp" alt="Prep" >
        <h3>Bumble and bumble<p>Prep</p> </h3>
        <p>$30.00</p>
        <button class="add-to-cart" onclick="addToCart('Prep', 30.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/vegamour.webp" alt="Hair Foam" >
        <h3>Vegamour<p>GRO Hair Foam for Thinning Hair </p></h3>
        <p>$58.00</p>
        <button class="add-to-cart" onclick="addToCart('GRO Hair Foam for Thinning Hair', 58.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/amikahair.webp" alt="Hair Gel" >
        <h3>Amika<p>Curl Corps Curl Enhancing Hair Gel</p></h3>
        <p>$15.00 <del>$24.99</del></p>
        <button class="add-to-cart" onclick="addToCart('Curl Corps Curl Enhancing Hair Gel', 15.00)">Add to Cart</button>
    </div>
    
</section>

    <script src="forall.js"></script>
    

</body>
</html>