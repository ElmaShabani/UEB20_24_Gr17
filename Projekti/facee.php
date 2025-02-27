<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forall.css">
    <script src="forall.js"></script>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Face </title>
</head>
<body>
    <header>
        <h1>Face</h1>
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
<div class="product">
            <img src="../img/flawlessfilter.webp" alt="Foundation" >
            <h3>Charlotte Tilbury<p>Hollywood Flawless Filter</p></h3>
            <p>$49.00    <del>$72.00</del></p>
            <button class="add-to-cart" onclick="addToCart('Hollywood Flawless Filter', 49.00)">Add to Cart</button>
        </div>
<div class="product">
                <img src="../img/hudabeauty.webp" alt="Baking & Setting Powder" >
                <h3>HUDA BEAUTY <p>Easy Bake Loose Baking & Setting Powder</p></h3>
                <p>$38.00</p>
                <button class="add-to-cart" onclick="addToCart('Easy Bake Loose Baking & Setting Powder', 38.00)">Add to Cart</button>
        </div>
<div class="product">
            <img src="../img/nars.webp" alt="Concealer" >
            <h3>NARS<p>Soft Matte Complete Concealer</p></h3>
            <p>$32.00</p>
            <button class="add-to-cart" onclick="addToCart('Soft Matte Complete Concealer', 32.00)">Add to Cart</button>
    </div>
<div class="product">
    <img src="../img/toofacedfoundation.webp" alt="Foundation" >
    <h3>Too Faced<p>Natural Finish Longwear Liquid Foundation</p></h3>
    <p>$46.00</p>
    <button class="add-to-cart" onclick="addToCart('Natural Finish Longwear Liquid Foundation', 46.00)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/toofacedprimer.webp" alt="Primer" >
    <h3>Too Faced<p>Hangover Replenishing Face Primer</p></h3>
    <p>$19.50 <del>$32.00</del></p>
    <button class="add-to-cart" onclick="addToCart('Hangover Replenishing Face Primer', 19.50)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/charlottepowder.webp" alt="Setting Powder" >
    <h3>Charlotte Tilbury<p>Airbrush Flawless Finish Setting Powder</p></h3>
    <p>$48.00 </p>
    <button class="add-to-cart" onclick="addToCart('Airbrush Flawless Finish Setting Powder', 48.00)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/diorfoundation.webp" alt="Foundation" >
    <h3>Dior<p>Backstage Face & Body Foundation</p></h3>
    <p>$42.00 </p>
    <button class="add-to-cart" onclick="addToCart('Backstage Face & Body Foundation', 42.00)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/miniairbrush.webp" alt="Setting Spray" >
    <h3>Charlotte Tilbury<p>Mini Airbrush Flawless Setting Spray</p></h3>
    <p>$23.00 </p>
    <button class="add-to-cart" onclick="addToCart('Mini Airbrush Flawless Setting Spray', 23.00)">Add to Cart</button>
</div>
<div class="product">
    <img src="../img/givenchy.webp" alt="Setting and Finishing Powder" >
    <h3>Givenchy<p>Mini Prisme Libre Loose Setting and Finishing Powder</p></h3>
    <p>$29.00 </p>
    <button class="add-to-cart" onclick="addToCart('Mini Prisme Libre Loose Setting and Finishing Powder', 29.00)">Add to Cart</button>
</div>
    </section>

   
    
   
    

</body>
</html>
