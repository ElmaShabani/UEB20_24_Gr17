<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script> 
      $(document).ready(function() {
        $("#shtype").click(function(){
            $("#ann").css("color","blue").slideUp(3200);
            $("#text").text("Lips Section Sale at EverGlow Beauty.  ");
            $("#text").append("Go check it out!!!");
        });
      });

      function sendFeedback() {
        var name = $("#name").val();
        var feedback = $("#feedback").val();
        
        $.ajax({
            url: 'processFeedback.php',
            type: 'POST',
            data: {
                name: name,
                feedback: feedback
            },
            success: function(response) {
                $("#feedbackResponse").html(response);
                $("#feedbackForm")[0].reset();
            },
            error: function() {
                $("#feedbackResponse").html('<p class="text-danger">An error occurred. Please try again.</p>');
            }
        });
      }
    </script>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
</head>
<body>
    <header>
        <a href="MainPage.php"><img src="../img/logo.jpg" alt="Your Brand Logo"></a>
        <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><div class="text-with-shadow"> EverGlow Beauty</h3></div>
    </header>

    <div class="container3" style="font-family: Georgia, 'Times New Roman', Times, serif;">
      <div class="middle-box d-flex justify-content-around">
            <div class="sub-box">
                <a href="facee.php" class="btn btn-light">FACE</a>
            </div>
            <div class="sub-box">
                <a href="eyes.php" class="btn btn-light">EYES</a>
            </div>
            <div class="sub-box">
                <a href="lips.php" class="btn btn-light">LIPS</a>
            </div>
            <div class="sub-box">
                <a href="cheeks.php" class="btn btn-light">CHEEK</a>
            </div>
            <div class="sub-box">
                <a href="makeup.php" class="btn btn-light">SEE ALL</a>
            </div>
        </div>
    </div>

    <section id="video-section">
        <video width="100%" height="100%" autoplay loop muted>
            <source src="../img/maakeup.mp4" type="video/mp4">
        </video>
    </section>

    <div class="fourth-container" style="font-family:Georgia, 'Times New Roman', Times, serif;">
        <div class="image-container" style="float: left; margin-right: 20px;">
            <img src="../img/pretty.jpg" alt="Image2" class="round-image img-fluid">
        </div>
        <div class="quote-container">
            <blockquote>
                <div class="text-wrapping">
                    <h3 class="text-dark">When it comes to serving face, we've got you covered. Whether you have a favorite brand or need help finding the perfect match,
                        <i>Everglow Beauty</i> is your No.1 destination for everything beauty.</h3>
                </div>
                <br>
                <p>Make sure you have a solid foundation with the perfect primer - this will ensure that the rest of your face makeup goes on smoothly and lasts longer. Next, it's time for concealer. 
                Some of the most popular foundation brands include <u><a href="../img/nars.webp">NARS</a></u>, <u><a href="../img/flawlessfilter.webp">Charlotte Tilbury</a></u> and <u><a href="../img/diorfoundation.webp">Dior</a></u>.
                </p><br>
                <p>Add some color with a contour palette. Start with a darker, matte shade that simulates a shadowed-look and enunciates your cheekbones.
                Next, add some warmth with a bronzer in a C-shape along your hairline. Finally, apply blush for that perfect rosy look. Some of the best
                face palette brands include <u><a href="../img/rareblush.webp">Rare Beauty</a></u> and <u><a href="../img/anastasiablush.webp"> Anastasia Beverly Hills</a>.</u>
                </p><br>
                <p>Whether you want a natural or dramatic look can depend heavily on your eye makeup. For a natural look, stick to mascara, a very light eyeshadow (if any) and a boy brow. Make sure to get a good lengthening and volumizing mascara for extra lash definition. For a dramatic look, the options are endless. 
                You'll definitely need some liquid eyeliner, the perfect palette and all of the brushes 
                necessary to get started. Try some of the top eye makeup brands like <u><a href="../img/urbandecay.webp">Urban Decay</a></u>, <u><a href="../img/makeupbymario.webp">MAKEUP BY MARIO</a></u> and <u><a href="../img/tartelette.webp">Tarte</a>.</u>
                </p><br>
                <p>Last, but not least - don't forgot those lips! A more subdued look may only require some lip gloss or a shade that's closer to
                your skin tone. For fuller looking lips, make use of the right lip liner and some plumping gloss. You can always make your lips stand out with a bold shade in whatever finish suits your look, whether it be glossy or matte. A couple of our favorite brands are <u><a href="../img/fentygloss.webp">Fenty Beauty</a></u> and <u><a href="../img/diorlipglow.webp">Dior</a>.</u></p>
                <p id="ann">Special Announcement</p>
                <p id="text"></p>
                <button id="shtype">Click me!!</button>
            </blockquote>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Submit Your Feedback</h2>
        <form id="feedbackForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Feedback</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="sendFeedback()">Submit</button>
        </form>
        <div id="feedbackResponse" class="mt-3"></div>
        <h2>Feedback List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Feedback</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="feedbackTable">
                <!-- Feedbacks will be loaded here -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function loadFeedbacks() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "read_feedback.php", true);
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    document.getElementById('feedbackTable').innerHTML = this.responseText;
                }
            }
            xhr.send();
        }

        function sendFeedback() {
            var id = document.getElementById('feedbackId').value;
            var name = document.getElementById('name').value;
            var feedback = document.getElementById('feedback').value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", id ? "update_feedback.php" : "processFeedback.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    document.getElementById('feedbackResponse').innerHTML = this.responseText;
                    document.getElementById('feedbackForm').reset();
                    document.getElementById('feedbackId').value = "";
                    loadFeedbacks(); // Refresh feedback list
                }
            }
            xhr.send("id=" + encodeURIComponent(id) + "&name=" + encodeURIComponent(name) + "&feedback=" + encodeURIComponent(feedback));
        }

        function populateUpdateForm(id, name, feedback) {
            document.getElementById('feedbackId').value = id;
            document.getElementById('name').value = name;
            document.getElementById('feedback').value = feedback;
        }

        // Load feedbacks when the page loads
        window.onload = function() {
            loadFeedbacks();
        }
    </script>
</body>
</html>

    <div style="border: 2px dashed #ccc;">
      <h1>A little game for our lovely customers...</h1>
      <h2>Put the products in their places!</h2>
      <div class="drop-container">
        <div id="face" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
          <h3>Face</h3>
        </div>
        <div id="eyes" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
          <h3>Eyes</h3>
        </div>
        
        <div id="lips" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
          <h3>Lips</h3>
        </div>
        <div id="cheeks" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h3>Cheeks</h3>
          </div>
          <div id="eyes" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h3>Eyes</h3>
          </div>
          <div id="lips" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h3>Lips</h3>
          </div>
          <div id="cheeks" class="drop-zone" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h3>Cheeks</h3>
          </div>
        </div>
        <nav>
        <img id="lipstick" src="../img/armanilips.webp" alt="Lipstick" style="width:200px; padding:0px;" draggable="true" ondragstart="drag(event)">
        <img id="highlighter" src="../img/fentydiamond.webp" alt="Highlighter" style="width:200px; padding:2px;" draggable="true" ondragstart="drag(event)">
        <img id="blush" src="../img/charlotteblush.webp" alt="Blush" style="width:200px; padding:2px;" draggable="true" ondragstart="drag(event)">
        <img id="eyeshadow" src="../img/tartelette.webp" alt="Eyeshadow" style="width:200px; padding:2px;" draggable="true" ondragstart="drag(event)">
        <img id="lip liner" src="../img/charlottelips.webp" alt="Lip Liner" style="width:200px; padding:2px;" draggable="true" ondragstart="drag(event)">
        <img id="eyeshadoow" src="../img/kaja.webp" alt="Eyes" style="width:200px; padding:2px;" draggable="true" ondragstart="drag(event)">
        <img id="foundation" src="../img/diorfoundation.webp" alt="Foundation" style="width:200px; padding:2px;" draggable="true" ondragstart="drag(event)"></nav></div>
        <br>
        <div class="generator" style="background-color:  rgba(236, 206, 176, 0.5);padding: 20px;  border-radius: 10px;margin-left: 30px; margin-right: 30px; margin-top: 50px; margin-bottom: 60px;">
        <h3><a href="palette.php" class="text-dark">Click here to unlock the artistry of self-expression with our Color Palette Generator! Dive into a world of endless 
          possibilities as you curate your makeup palette, selecting hues for eyeshadow, lipstick, blush, foundation, and contour.</a></h3></div>
  
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
        <div class="get-in-touch">
            <h2>Get in Touch</h2>
            <address style="margin-left: 100px; font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;">
                <a id="adresa" href="https://maps.app.goo.gl/scmxnwzCazoUVT8b9">Address: Prishtine</a> </address>
            <p>Email: <mark style="background-color: white;"> <a href="mailto:everglowbeauty@gmail.com">everglowbeauty@gmail.com</a> </mark></p>
            <p>Phone: <mark style="background-color: white;">+383 48 555 111</mark> </p>
        </div>
    </div>
    <div class="container-fluid site-footer-payments">
        <aside>
            <h2>Payment methods: </h2>
        </aside>
        <div class="row">
          <div class="col text-center">
        <a id="payPallink" class="site-footer-payments__link" href="https://www.paypal.com/" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/6rDEb4sJOBkiIga3rkaSfA/b705c283f12f64d22365f9d168d2e9be/PayPal.svg" alt="PayPal" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a id="ClearpayLink" class="site-footer-payments__link" href="https://www.clearpay.co.uk/en-GB" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/2fVeO7f2x78KlbQuhqmuVb/a195d07a55c2bb8e1f595d5b541d4d79/Clearpay.svg" alt="Clearpay" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a id="VisaLink" class="site-footer-payments__link" href="https://usa.visa.com/" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/4QTzSyV3E2jIfll4u3GgIW/46acc6659798376dc8bb416454f2baba/Visa.svg" alt="Visa" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a id="AmexLink" class="site-footer-payments__link" href="https://www.americanexpress.com/" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/1R0NBLVCShxTQNVHNjanE4/c970e9e15ecbb026929000ae3fcce6ae/Amex.svg" alt="Amex" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a id="MastercardLink" class="site-footer-payments__link" href="https://www.mastercard.us/en-us.php" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/5bs4r6UiioP3Fkj4Qg35o8/5583c0ecc4b6500a1083fd38cfabf6dc/Mastercard.svg" alt="Mastercard" class="site-footer-payments__link__icon"></a></div>
         <div class="col text-center"><a id="MaestroLink" class="site-footer-payments__link" href="https://n26.com/en-eu/maestro-card" style="pointer-events: auto;">
            <img src="https://images.ctfassets.net/eoaaqxyywn6o/5IdXqCmgjNCVwZNyssRsdE/702c37ee931258aad2071e063bbd337e/Maestro.svg" alt="Maestro" class="site-footer-payments__link__icon"></a></div>
    </div>
    </div>
</footer>
    <script>
        function shfaqMesazhin() {
            alert('Everglow Beauty Kosova: Where beauty meets excellence, making us the best choice for all your cosmetic needs!');
        }

            function allowDrop(event) {
              event.preventDefault();
            }
          
            function drag(event) {
              event.dataTransfer.setData("text", event.target.id);
            }
          
            function drop(event) {
              event.preventDefault();
              var data = event.dataTransfer.getData("text");
              var draggedElement = document.getElementById(data);
              event.target.appendChild(draggedElement);
            }
          
</script>

    

          
    </body>
    </html>

