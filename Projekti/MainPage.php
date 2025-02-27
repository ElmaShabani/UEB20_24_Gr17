


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MainPage.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <title>EverGlow Beauty</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {

            $('header').hide().fadeIn(1000);
        });
        
   </script>
</head>
<body>
      <header>
        <a href="MainPage.php"><img src="../img/logo.jpg" alt="Your Brand Logo"></a>
        <div class="text-with-shadow" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">EverGlow Beauty</div>
         <nav>
         <ul>
             <li><a href="allformakeup.php">Makeup</a>
                 <ul class="subcategories">

                     <li><a href="facee.php">Face</a></li>

                     <li><a href="facee.php">Face</a></li>
                     <li><a href="eyes.php">Eyes</a></li>
                     <li><a href="lips.php">Lips</a></li>
                     <li><a href="cheeks.php">Cheek</a></li>
                     <li><a href="makeup.php">See All</a></li>
                 </ul></li>
             <li><a href="index.php">Skin Care</a>
                 <ul class="subcategories">
                     <li><a href="Dehydration.php">Dehydration</a></li>
                     <li><a href="Daycream.php">Day & Night Cream Moisturiser</a></li>
                     <li><a href="Face.php">Face Masks & Cleansers</a></li>
                     <li><a href="Serum.php">Serums & Lip Care</a></li>
                     <li><a href="Skintips.php">Skin Tips</a></li>
                 </ul>
             </li>
             <li><a href="Fragrance.php">Fragrance</a>
                 <ul class="subcategories">
                     <li><a href="Women.php">Women</a></li>
                     <li><a href="Men.php">Men</a></li>
                     <li><a href="Gift Sets.php">Gift Sets</a></li>
                     <li><a href="Seeall.php">See All</a></li>  
                     <a href="Unisex.php">Uni Sex</a></li>
                 </ul>
             </li>
             <li><a href="allforhair.php">Hair Care</a>
                 <ul class="subcategories">
                     <li><a href="treatments.php">Treatments</a></li>
                     <li><a href="styling.php">Styling</a></li>
                     <li><a href="gifts.php">Gifts</a></li>
                     <li><a href="seall.php">See All</a></li>
                 </ul>
             </li>
         </ul>
     </nav>
     <div id="login-image" onclick="showLogin()">
        <a href="login.php" ><img src="../img/login-removebg-preview (1).png" alt="Login" width="70px" style="cursor: pointer; width: 20px;"></a>
     </div>
  </header> 
   <section id="video-section">
        <video width="100%" height="100%" autoplay loop muted>
            <source src="../img/Untitled video - Made with Clipchamp (2).mp4" type="video/mp4" autoplay>
        </video>
    </section>
    <br>
    <div class="linear-gradient"
        style="font-family: 'Times New Roman', Times, serif; text-align: center; font-size: 2.0em;">
        If you're looking for the best beauty products (and we know you are) a good place to start is with our
            <b><i>Best Sellers:</i></b>
    </div>
    <div class="slider-container" style="font-family: 'Times New Roman', Times, serif;">
        <div class="slider">
            <div class="slide">
               <img src="../img/night4.jpg" alt="Image 1"> 
                <h4 style="text-align: center;">Vichy</h4>
                <p style="text-align: center;">Neovadiol Rose Platinium Night <br>Cream</p>
                <p style="text-align: center;">$48.50</p>
                <div class="sub-box">
                <a href="Daycream.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                <img src="../img/hudabeauty.webp" alt="Image 2">
                <h4 style="text-align: center;">Huda Beauty</h4>
                <p style="text-align: center;">Easy Bake Loose Baking <br> & Setting Powder</p>
                <p style="text-align: center;">$38.00</p>
                <div class="sub-box">
                <a href="facee.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                <img src="../img/day4.jpg" alt="Image 3"> 
                <h4 style="text-align: center;">Vichy</h4>
                <p style="text-align: center;">Neovadiol Perimenopause<br> Plumping Day Cream for Dry Skin</p>
                <p style="text-align: center;">$60.00</p>
                <div class="sub-box">
                <a href="Daycream.php" class=" btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                <img src="../img/fentydiamond.webp" alt="Image 4"> 
                <h3 style="text-align: center;">Fenty Beauty by Rihanna</h3>
                <p style="text-align: center;">Diamond Bomb All-Over Diamond Veil</p>
                <p style="text-align: center;">$42.00 <del>$67.00</del></p>
                <div class="sub-box">
                <a href="cheeks.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                <img src="../img/fentygloss.webp" alt="Image 5">
                <h3 style="text-align: center;">Fenty Beauty</h3>
                <p style="text-align: center;">Gloss Bomb Universal</p>
                <p style="text-align: center;">$21.00 <del>$35.00</del></p>
                <div class="sub-box">
                <a href="lips.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                <img src="../img/Dior.webp" alt="Image 6">
                <h3 style="text-align: center;">Dior</h3>
                <p style="text-align: center;">Sauvage Eau de Toilette</p>
                <p style="text-align: center;">$110.00</p>
                <div class="sub-box">
                <a href="Men.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                <img src="../img/puresilk.webp" alt="Image 7">
                <h3 style="text-align: center;">Slip</h3>
                <p style="text-align: center;">Pure Silk Turban</p>
                <p style="text-align: center;"> $85.00</p>
                <div class="sub-box">
                <a href="gifts.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
            <div class="slide">
                    <img src="../img/dyson.webp" alt="Image 8">
                <h3 style="text-align: center;">Dyson</h3>
                <p style="text-align: center;">Airwrap Multi Styler in Ceramic Pop</p>
                <p style="text-align: center;"> $599.00</p>
                <div class="sub-box">
                <a href="gifts.php" class="btn btn-light">SHOP NOW</a>
                </div>
            </div>
             </div>
    </div>
    <button class="prev" onclick="prevSlide()">❮</button>
    <button class="next" onclick="nextSlide()">❯</button>
    <br>
    <div class="second-container" style="font-family: 'Times New Roman', Times, serif;">
        <div class="image-container" style="float:left;">
            <img src="../img/006_210519_FACIAL_OIL_HM_DUO_FACIAL_OIL_RM_2202.jpg" alt="Image" class="round-image">
        </div>
        <div class="quote-container">
            <blockquote>
                <h1 style="color: peru;">What makes us Unique?</h1>
                <p>Together we’re building a safe, welcoming <br> space in beauty and beyond. This is <br> makeup made
                    to feel good in, without <br>hiding what makes you unique. And it’s all <br> vegan and cruelty free.
                </p>
                <a href="OurStory.php" style="color: peru;">OUR STORY</a>
            </blockquote>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
    <h1 style="font-size: 2.5em; background-color: #fff; margin-bottom: 50px; font-family:'Times New Roman', Times, serif; text-align:center; margin-top: 150px;">
        <b>Click on "Beauty Quiz" below to play a fun quiz!</b></h1>
    <p style="text-align: center; margin-bottom: 150px;"><a href="BeautyQuiz.php" target="_self"
            style="font-size: 2.2em; background-color: #fff;font-family:'Times New Roman', Times, serif;color: peru; text-align: center; margin-bottom: 150px;">Beauty Quiz</a></p>
        </div>
    </div>
    <h1 style="font-family: 'Times New Roman', Times, serif;font-size: 3.0em;"><i>Our Beautiful Clients</i></h1><br>
    <div class="carousel-container">
        <div class="image-row">
            <div class="image-item">
                <img src="../img/original.avif" alt="Image 1">
                <p>@cashincolor</p>
            </div>
            <div class="image-item">
                <img src="../img/original (1).avif" alt="Image 3">
                <p>@stephanieteap</p>
            </div>
            <div class="image-item">
                <img src="../img/original (2).avif" alt="Image 4">
                <p>@honeyflushed</p>
            </div>
            <div class="image-item">
                <img src="../img/original (3).avif" alt="Image 5">
                <p>@makeupbypamela</p>
            </div>
            <div class="image-item">
                <img src="../img/original (4).avif" alt="Image 6">
                <p>@steelethelook</p>
            </div>
            <div class="image-item">
                <img src="../img/original (5).avif" alt="Image 7">
                <p>@lisameyy</p>
            </div>
        </div>
        <div class="image-row">
            <div class="image-item">
                <img src="../img/original (6).avif" alt="Image 8">
                <p>@hollywardbeauty</p>
            </div>
            <div class="image-item">
                <img src="../img/original (7).avif" alt="Image 9">
                <p>@wherestarlandd</p>
            </div>
            <div class="image-item">
                <img src="../img/original (8).avif" alt="Image 10">
                <p>@bigaldoesmakeup</p>
            </div>
            <div class="image-item">
                <img src="../img/original (9).avif" alt="Image 11">
                <p>@mitziivonne</p>
            </div>
            <div class="image-item">
                <img src="../img/original (10).avif" alt="Image 12">
                <p>@misscharicmatic__</p>
            </div>
            <div class="image-item">
                <img src="../img/original (11).avif" alt="Image 13">
                <p>@uniquely.cenestial.inc</p>
            </div>
            <div class="image-item">
                <img src="../img/original (12).avif" alt="Image 14">
                <p>@tanikka143</p>
            </div>
        </div>
    </div>
    <div class="third-container"
        style="font-family: 'Times New Roman', Times, serif; background-color:rgba(247, 230, 203, 0.919);">
        <div class="quote-container">
            <blockquote>
                <h1>Make an <b><i>impact</i></b> on mental health</h1>
                <p>3% of EverGlow Beauty’s annual sales will go <br> directly to the EverGlow Fund <abbr
                        title="World Health Organization">WHO</abbr> to <br> expand mental health
                    services in <br>underserved communities.</p>
            </blockquote>
        </div>
        <div class="image-container" style="float: right;">
            <img src="../img/Happy-people-800x533.jpg" alt="Image5" class="square-image">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
    <h1 style="font-size: 2.5em; background-color: #fff; margin-bottom: 50px; font-family:'Times New Roman', Times, serif; text-align:center; margin-top: 150px;">
        <b>If you're looking for a job in our company click on "Job Application" below!</b></h1>
    <p style="text-align: center; margin-bottom: 150px;"><a href="JobApplication.php" target="_blank"
            style="font-size: 2.5em; background-color: #fff;font-family:'Times New Roman', Times, serif;color: peru; text-align: center; margin-bottom: 150px;">Job
            Application</a></p>
        </div>
    </div>

    <table border="1" cellspacing="8" cellpadding="9">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Rating</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: antiquewhite;">Dalin&euml; Vranovci</td>
                <td style="background-color: tan;" rowspan="3">10/10</td>
                <td style="background-color: rosybrown;">In a world full of beauty options, this brand stands out for
                    its commitment to quality. My new favorite beauty destination!</td>
            </tr>
            <tr>
                <td style="background-color: beige;">Dhurat&euml; Hyseni</td>

                <td style="background-color: wheat;">I've tried many brands, and this one stands out. Effective and
                    worth every penny.</td>
            </tr>
            <tr>
                <td style="background-color: mistyrose;">Tr&euml;ndelina Zeqiri</td>

                <td style="background-color: bisque;">Tried a few items, and now I'm hooked. My go-to brand for all
                    things beauty.</td>
            </tr>
            <tr>
                <td style="background-color: navajowhite;">&Ccedil;elik Tasholli</td>
                <td style="background-color: rgb(237, 222, 202);" rowspan="4">9/10</td>
                <td style="background-color: peachpuff;">Finally found a brand that delivers on its promises. Delighted
                    with the results!</td>
            </tr>
            <tr>
                <td style="background-color: peachpuff;">&Ccedil;lirimtar Halimi</td>

                <td style="background-color: navajowhite;">The attention to detail in both formulation and presentation
                    is evident. Truly a luxurious beauty experience</td>
            </tr>
            <tr>
                <td style="background-color: bisque;">&Euml;mbla Bucaliu</td>

                <td style="background-color: mistyrose;">From packaging to performance, everything is top-notch. A
                    must-try for beauty enthusiasts!</td>
            </tr>
            <tr>
                <td style="background-color: wheat;">F&euml;ll&euml;nza Fejza</td>

                <td style="background-color: beige;">Exceptional service and a fantastic range of beauty products.
                    Couldn't be happier with my purchase!</td>
            </tr>
            <tr>
                <td style="background-color: rosybrown;">Isak Shabani</td>
                <td style="background-color: rgb(214, 171, 107);">8/10</td>
                <td style="background-color: antiquewhite;">A game-changer for my skincare routine! These products have
                    transformed my skin, and I can't thank this brand enough.</td>
            </tr>
        </tbody>
    </table>

    <footer>
        <div class="container d-flex footer-container">
            <div class="left">
                <h2>Everglow Beauty</h2>
                <span style="font-size: 20px; cursor: pointer;" onclick="shfaqMesazhin()">Everglow Beauty Kosova</span>
            </div>
            <div class="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="MainPage.php">Home</a></li>
                    <li><a href="OurStory.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a>
                    <li><div id="currentDateElement"></div>
                        <script>
                            const currentDate = new Date();
                            const currentDateElement = document.getElementById('currentDateElement');
                            if (currentDateElement) {
                                currentDateElement.textContent = `Current Date: ${currentDate.toLocaleDateString()} - Current time: ${currentDate.toLocaleTimeString()}`;
                            }
                        </script>
                    </li>
                </ul>

            </div>
            <?php

class BaseInfo {
    public $Address;
    public $Gmail;
    protected $Phone;
    private $AddressLink;
    private $MailLink;

    function __construct($Address, $Gmail, $Phone) {
        $this->Address = $Address;
        $this->Gmail = $Gmail;
        $this->Phone = $Phone;
    }
     
    
}

class Info extends BaseInfo {
    function set_data($AddressLink, $MailLink) {
        $this->AddressLink = $AddressLink;
        $this->MailLink = $MailLink;
    }

    function get_data() {
        $generateData = '<div class="get-in-touch">
            <h2>Get in Touch</h2>
            <address style="margin-left: 100px; font-size: 20px; font-family:Georgia, \'Times New Roman\', Times, serif;">
                <a href="' . $this->AddressLink . '">Address: ' . $this->Address . '</a>
            </address>
            <p>Email: <mark style="background-color: white;"><a href="' . $this->MailLink . '">' . $this->Gmail . '</a></mark></p>
            <p>Phone: <mark style="background-color: white;">' . $this->Phone . '</mark></p>
        </div>';

        return $generateData;
    }

    function print_data() {
        echo $this->get_data();
    }
}

$Our_info = new Info("Ferizaj", "everglowbeauty@gmail.com", "+383 44 898 395");
$Our_info->set_data("https://maps.app.goo.gl/scmxnwzCazoUVT8b9", "mailto:everglowbeauty@gmail.com");

   $Our_info->print_data();
?>

                        
                        
                        
                        

       <!--     <div class="get-in-touch">
>>>>>>> e3eb0e02d4c2f61595d719e725adac6174113fba
                <h2>Get in Touch</h2>
                <address
                    style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                    <a href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
                <p>Email: <mark style="background-color: white;"> <a
                            href ="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
                <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
            </div>    --> 
        </div>
        <div class="container-fluid site-footer-payments">
            <aside>
                <h2>Payment methods: </h2>
            </aside>
    
            <div class="row">
              <div class="col text-center">
            <a id="payPallink" class="site-footer-payments__link"  href="https://www.paypal.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg"
                    alt="PayPal" class="site-footer-payments__link__icon"></a></div>
             <div id="ClearpayLink" class="col text-center"><a class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg"
                    alt="Clearpay" class="site-footer-payments__link__icon"></a></div>
             <div id="VisaLink" class="col text-center"><a class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg"
                    alt="Visa" class="site-footer-payments__link__icon"></a></div>
             <div id="AmexLink" class="col text-center"><a class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg"
                    alt="Amex" class="site-footer-payments__link__icon"></a></div>
             <div id="MastercardLink" class="col text-center"><a class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg"
                    alt="Mastercard" class="site-footer-payments__link__icon"></a></div>
             <div id="MaestroLink" class="col text-center"><a class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
                <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjNCVwZNyssRsdE/702c37ee931258aad2071e063bbd337e/Maestro.svg"
                    alt="Maestro" class="site-footer-payments__link__icon"></a></div>
        </div>
        </div>
        <p class="copyright" style="text-align: center;">&copy; 2023 EverGlow Beauty. All rights reserved.</p>
      
    </footer>
    <script src="MainPage.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script>
        $(document).ready(function () {

            $('.subcategories').hide();


            $('nav li').hover(
                function () {
                    $(this).find('.subcategories').stop(true, true).slideDown();
                },
                function () {
                    $(this).find('.subcategories').stop(true, true).slideUp();
                }
            );
        });
    </script>
    
</body>

</html>
