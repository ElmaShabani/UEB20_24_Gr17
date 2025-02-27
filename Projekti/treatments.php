<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <title>Treatments </title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">

    
</head>
<body>
    <header>
        <h1>Treatments</h1>
        
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

            <img src="../img/ouaii.webp" alt="Hair Mask" >
            <h3>OUAI<p>Treatment Mask for Thick Hair</p></h3>
            <p>$38.00</p>
            <button class="add-to-cart" onclick="addToCart('Treatment Mask for Thick Hair', 38.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/sephoramask.webp" alt="Sleeping Mask" >
        <h3>Sephora Collection<p>Clean Hair Sleeping Mask</p></h3>
        <p>$5.00 <del>$13.00</del></p>
        <button class="add-to-cart" onclick="addToCart('Clean Hair Sleeping Mask', 5.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/pureology.webp" alt="Hair Mask" >
        <h3>Pureology<p>Strength Cure Superfoods Treatment Hair Mask</p> </h3>
        <p>$44.00</p>
        <button class="add-to-cart" onclick="addToCart('Strength Cure Superfoods Treatment Hair Mask', 44.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/dryshampoo.jpeg" alt="Dry Shampoo" >
        <h3>Crown Affair<p>The Dry Shampoo</p> </h3>
        <p>$36.00</p>
        <button class="add-to-cart" onclick="addToCart('The Dry Shampoo', 36.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/lorealrepair.webp" alt="Hair Mask" >
        <h3>L'Oréal Professionnel<p> Absolut Repair Protein Treatment Hair Mask </p></h3>
        <p>$45.00</p>
        <button class="add-to-cart" onclick="addToCart('Absolut Repair Protein Treatment Hair Mask', 45.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/hairmask.webp" alt="Conditioner" >
        <h3>BREAD BEAUTY SUPPLY<p>Hair Mask Creamy Deep Conditioner</p></h3>
        <p>$28.00</p>
        <button class="add-to-cart" onclick="addToCart('Hair Mask Creamy Deep Conditioner', 28.00)">Add to Cart</button>
    </div>
    <div class="product">
        <img src="../img/igk.webp" alt="Hair Mask" >
        <h3>IGK Offline<p> 3-Minute Hydration Hair Mask</p></h3>
        <p>$38.00</p>
        <button class="add-to-cart" onclick="addToCart('3-Minute Hydration Hair Mask', 38.00)">Add to Cart</button>
    </div>
    
    </section>

    <script src="forall.js"></script>
    
    

</body>
</html>



