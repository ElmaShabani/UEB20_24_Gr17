<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fragrance2.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Men</title>
</head>
<body>
    <header>
        <h1>Men</h1>

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
            <img src="../img/Dior.webp" alt="Fragrance-Men" >
            <h3>Dior<p>Sauvage Eau de Toilette</p></h3>
            <p>$110.00</p> <p>Size: 2 oz/ 60 mL</p>
    
            <button class="add-to-cart" onclick="addToCart('Sauvage Eau de Toilette',110.00)">Add to Cart</button>
    </div>
    <div class="product">
       
        <img src="../img/BleudeChanel.webp" alt="Fragrance-Men" >
        <h3>CHANEL<p>BLEU DE CHANEL Eau de Parfum</p></h3>
        <p>$150.00</p> <p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('BLEU DE CHANEL Eau de Parfum',150.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Rabanne.webp" alt="Fragrance-Men" >
        <h3>Rabanne<p> 1 Million Eau de Toilette</p> </h3>
        <p>$140.00</p><p>Size: 3 oz/ 90 mL</p>
        <button class="add-to-cart" onclick="addToCart('1 Million Eau de Toilette',140.00)">Add to Cart</button>
        
    </div>
    <div class="product" >
        <img src="../img/Uomo Born In Roma Intense Eau de Parfum.webp" alt="Fragrance-Men" >
        <h3>Valentino<p> Uomo Born In Roma Intense Eau de Parfum</p> </h3>
        <p>$110.00</p><p>Size: 1.7 oz / 50 mL</p>
        <button class="add-to-cart" onclick="addToCart(' Uomo Born In Roma Intense Eau de Parfum',110.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Y Eau de Parfum.webp" alt="Fragrance-Men" >
        <h3>Yves Saint Laurent<p>Y Eau de Parfum </p></h3>
        <p>$148.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Y Eau de Parfum',148.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Y Eau de Toilette.webp" alt="Fragrance-Men" >
        <h3>Yves Saint Laurent <p> Y Eau de Toilette</p></h3>
        <p>$80.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Y Eau de Toilette',80.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Dior home.webp" alt="Fragrance-Men" >
        <h3> Dior <p>Homme Eau de Toilette</p></h3>
        <p>$95.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart(' Homme Eau de Toilette',95.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Armani.webp" alt="Fragrance-Men" >
        <h3>Armani Beauty<p>  Armani Code Parfum</p></h3>
        <p>$144.00</p><p>Size: 2.5 oz / 75 mL</p>
        <button class="add-to-cart" onclick="addToCart('Armani Code Parfum',144.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/versace.webp" alt="Fragrance-Men" >
        <h3>Versace <p> Eros</p></h3>
        <p>$96.00</p><p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Eros',96.00)">Add to Cart</button>
    </div>
    </section>
    <script>
      setTimeout(function () {
    alert("Welcome to the  Men's fragrance sector");
      }, 500);
    </script>
    
    
    <script src="forall.js"></script>
    

</body>
</html>
