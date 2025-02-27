<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fragrance2.css">
    <title>Seeall</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <header>
        <h1>Seeall</h1>

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
            <img src="../img/Valentino.webp" alt="Fragrance-Women" >
            <h3>Valentino<p>Donna Born In Roma Eau de Parfum</p></h3>
            <p>$100.00</p> <p>Size: 1.7 oz/ 50 mL</p>
            <button class="add-to-cart" onclick="addToCart('Donna Born In Roma Eau de Parfum',100.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Gucci.webp" alt="Fragrance-Gift Sets" >
        <h3>Gucci<p>Mini Flora Gorgeous Jasmine Eau de Parfum Perfume Set</p></h3>
        <p>$39.00</p> 
        <button class="add-to-cart" onclick="addToCart('Mini Flora Gorgeous Jasmine Eau de Parfum Perfume Set',39.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/KAYALI.webp" alt="Fragrance-Unisex" >
    <h3>KAYALI<p>Vanilla Royale Sugared Patchouli | 64 Eau de Parfum Intense</p></h3>
    <p>$95.00</p> <p>Size: 1.7 oz/ 50 mL</p>
    <button class="add-to-cart" onclick="addToCart('Vanilla Royale Sugared Patchouli | 64 Eau de Parfum Intense',95.00)">Add to Cart</button>
</div>
<div class="product" >
    <img src="../img/Dior.webp" alt="Fragrance-Men" >
    <h3>Dior<p>Sauvage Eau de Toilette</p></h3>
    <p>$110.00</p> <p>Size: 2 oz/ 60 mL</p>

    <button class="add-to-cart" onclick="addToCart('Sauvage Eau de Toilette',110.00)">Add to Cart</button>
</div>
    <div class="product" >
       
        <img src="../img/Carolina Herrera.webp" alt="Fragrance-Women" >
        <h3>Carolina Herrera<p>Mini Good Girl Blush Eau de Parfum</p></h3>
        <p>$15.00</p> <p>Size: 0.2 oz/ 7mL</p>
        <button class="add-to-cart" onclick="addToCart('Mini Good Girl Blush Eau de Parfum',15.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Libre Discovery Trio Set.webp" alt="Fragrance-Gift Sets" >
        <h3>Yves Saint Laurent<p> Libre Discovery Trio Set</p></h3>
        <p>$45.00</p>
        <button class="add-to-cart" onclick="addToCart(' Libre Discovery Trio Set',45.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/KILIAN Paris.webp" alt="Fragrance-Unisex" >
        <h3>KILIAN Paris<p>Love, Don't Be Shy</p></h3>
        <p>$250.00</p> <p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Love, Do not be',250.00)">Add to Cart</button>
    </div>
    <div class="product">
       
        <img src="../img/BleudeChanel.webp" alt="Fragrance-Men" >
        <h3>CHANEL<p>BLEU DE CHANEL Eau de Parfum</p></h3>
        <p>$150.00</p> <p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('BLEU DE CHANEL Eau de Parfum',150.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Blacopium.webp" alt="Fragrance-Women" >
        <h3>Yves Saint Laurent<p> Black Opium Eau de Parfum</p> </h3>
        <p>$140.00</p><p>Size: 3 oz/ 90 mL</p>
        <button class="add-to-cart" onclick="addToCart('Black Opium Eau de Parfum',140.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Chanel1.webp" alt="Fragrance-Gift Sets" >
        <h3>CHANEL<p> CHANCE EAU TENDRE Eau de Toilette Gift Set
        <p>$178.00</p>
        <button class="add-to-cart" onclick="addToCart('CHANCE EAU TENDRE Eau de Toilette Gift Set',178.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Ombré Leather Eau de Parfum.webp" alt="Fragrance-Unisex" >
        <h3>TOM FORD<p> Ombré Leather Eau de Parfum</p> </h3>
        <p>$220.00</p><p>Size: 3 oz/ 90 mL</p>
        <button class="add-to-cart" onclick="addToCart('Ode to Dullness Eau de Parfum',160.00)">Add to Cart</button>

    </div>
    <div class="product" >
        <img src="../img/Rabanne.webp" alt="Fragrance-Men" >
        <h3>Rabanne<p> 1 Million Eau de Toilette</p> </h3>
        <p>$140.00</p><p>Size: 3 oz/ 90 mL</p>
        <button class="add-to-cart" onclick="addToCart('1 Million Eau de Toilette',140.00)">Add to Cart</button>
        
    </div>
    <div class="product" >
        <img src="../img/Libre Eau De Parfum.webp" alt="Fragrance-Women" >
        <h3>Yves Saint Laurent<p>Libre Eau De Parfum</p> </h3>
        <p>$95.00</p><p>Size: 1 oz / 30 mL</p>
        <button class="add-to-cart" onclick="addToCart('Libre Eau De Parfum',95.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Marc Jacobs Fragrances.webp" alt="Fragrance-Gift Sets" >
        <h3>Marc Jacobs Fragrances<p> Mini Daisy Eau de Toilette Perfume Gift Set</p> </h3>
        <p>$79.00</p>
        <button class="add-to-cart" onclick="addToCart('Mini Daisy Eau de Toilette Perfume Gift Set',79.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Juliette Has a Gun.webp" alt="Fragrance-Unisex" >
        <h3>Juliette Has a Gun<p> Ode to Dullness Eau de Parfum</p> </h3>
        <p>$160.00</p><p>Size: 1.7 oz / 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Ode to Dullness Eau de Parfum',160.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Uomo Born In Roma Intense Eau de Parfum.webp" alt="Fragrance-Men" >
        <h3>Valentino<p> Uomo Born In Roma Intense Eau de Parfum</p> </h3>
        <p>$110.00</p><p>Size: 1.7 oz / 50 mL</p>
        <button class="add-to-cart" onclick="addToCart(' Uomo Born In Roma Intense Eau de Parfum',110.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/MissDior11.webp" alt="Fragrance-Women" >
        <h3>Dior<p>Miss Dior Eau de Parfum</p></h3>
        <p>$160.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Miss Dior Eau de Parfum',160.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/CLEAN RESERVE.webp" alt="Fragrance-Gift Sets" >
        <h3>CLEAN RESERVE<p>Sparkling Sugar Travel Size Perfume Se</p></h3>
        <p>$48.00</p> 
        <button class="add-to-cart" onclick="addToCart('Sparkling Sugar Travel Size Perfume Se',48.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/The Maker.webp" alt="Fragrance-Unisex" >
        <h3>The Maker<p>Naked Eau de Parfum </p></h3>
        <p>$135.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Naked Eau de Parfum',135.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Y Eau de Parfum.webp" alt="Fragrance-Men" >
        <h3>Yves Saint Laurent<p>Y Eau de Parfum </p></h3>
        <p>$148.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Y Eau de Parfum',148.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Fenty Beauty by Rihann.webp" alt="Fragrance-Gift Sets" >
        <h3>Fenty Beauty by Rihanna <p> Fenty Eau de Parfum Perfume Se</p></h3>
        <p>$150.00</p>
        <button class="add-to-cart" onclick="addToCart('Fenty Eau de Parfum Perfume Se',150.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Commodity.webp" alt="Fragrance-Unisex" >
        <h3>Commodity <p>Gold Expressive </p></h3>
        <p>$90.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Gold Expressive',90.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Y Eau de Toilette.webp" alt="Fragrance-Men" >
        <h3>Yves Saint Laurent <p> Y Eau de Toilette</p></h3>
        <p>$80.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Y Eau de Toilette',80.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/cocochanel.webp" alt="Fragrance-Women" >
        <h3>CHANEL <p>COCO MADEMOISELLE Eau de Parfum</p></h3>
        <p>$130.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('COCO MADEMOISELLE Eau de Parfum',130.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/hypnotic poison.webp" alt="Fragrance-Women" >
        <h3>Dior <p>Hypnotic Poison</p></h3>
        <p>$80.00</p> <p>Size: 3.1 oz/ 50mL</p>
        <button class="add-to-cart" onclick="addToCart(' Hypnotic Poison',80.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/versace.webp" alt="Fragrance-Men" >
        <h3>Versace <p> Eros</p></h3>
        <p>$96.00</p><p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Eros',96.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Hermes.webp" alt="Fragrance-Gift Sets" >
        <h3>HERMÈS<p> Mini Fragrance Discovery Set</p></h3>
        <p>$60.00</p>
        <button class="add-to-cart" onclick="addToCart('  Mini Fragrance Discovery Set',60.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/black orchid.webp" alt="Fragrance-Unisex" >
        <h3>TOM FORD <p> Black Orchid Eau de Parfum Fragrance </p></h3>
        <p>$155.00</p><p>Size: 2.4 oz/ 75 mL</p>
        <button class="add-to-cart" onclick="addToCart(' Black Orchid Eau de Parfum Fragrance',155.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Viktor&Rolf.webp" alt="Fragrance-Women" >
        <h3>Viktor&Rolf<p>Flowerbomb Eau de Parfum</p></h3>
        <p>$170.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Flowerbomb Eau de Parfum',170.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/mini good fortune.webp" alt="Fragrance-Gift Sets" >
        <h3>Viktor&Rolf<p> Mini Good Fortune & Flowerbomb Perfume Set</p></h3>
        <p>$29.00</p>
        <button class="add-to-cart" onclick="addToCart(' Mini Good Fortune & Flowerbomb Perfume Set',29.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Armani.webp" alt="Fragrance-Men" >
        <h3>Armani Beauty<p>  Armani Code Parfum</p></h3>
        <p>$144.00</p><p>Size: 2.5 oz / 75 mL</p>
        <button class="add-to-cart" onclick="addToCart('Armani Code Parfum',144.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/phlur.webp" alt="Fragrance-Unisex" >
        <h3>PHLUR <p>Tangerine Boy Eau de Parfum </p></h3>
        <p>$99.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Tangerine Boy Eau de Parfum',99.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Dior home.webp" alt="Fragrance-Men" >
        <h3> Dior <p>Homme Eau de Toilette</p></h3>
        <p>$95.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart(' Homme Eau de Toilette',95.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/libre,black.webp" alt="Fragrance-Gift Sets" >
        <h3>Yves Saint Laurent <p>  Mini Black Opium & Libre Eau de Parfum Set</p></h3>
        <p>$55.00</p>
        <button class="add-to-cart" onclick="addToCart(' Mini Black Opium & Libre Eau de Parfum Set',55.00)">Add to Cart</button>
    </div>
    <div class="product" >
       
        <img src="../img/Daisy.webp" alt="Fragrance-Women" >
        <h3>Daisy<p>Marc Jacobs Fragrances</p></h3>
        <p>$137.00</p> <p>Size: 3.4 oz/ 100 mL</p>
        <button class="add-to-cart" onclick="addToCart('Marc Jacobs Fragrances',137.00)">Add to Cart</button>
    </div>
    <div class="product" >
        <img src="../img/Golisser.webp" alt="Fragrance-Unisex" >
        <h3>Glossier<p> Glossier You Eau de Parfum </p></h3>
        <p>$90.00</p><p>Size: 1.7 oz/ 50 mL</p>
        <button class="add-to-cart" onclick="addToCart('Glossier You Eau de Parfum',68.00)">Add to Cart</button>
    </div>
</section>

<script src="forall.js"></script>
    

</body>
</html>
