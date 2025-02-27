<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.PNG">
    <title>Beauty Quiz</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-image: url(../img/backgroundJA.jpg);
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.quiz-container {
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.question {
    margin-bottom: 30px;
    
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#resultContainer {
    margin-top: 20px;
}

.hidden {
    display: none;
}
label {
  text-align: left;
}
li {
    text-align: left;
}
    </style>
</head>
<body>
    <div class="quiz-container">
        <h1 style="color: peru;">Welcome to the Beauty Quiz!</h1>
        <form id="beautyQuizForm">
            <div class="question">
                <label for="makeupPreference">What's your go-to makeup look?</label>
                <select id="makeupPreference" name="makeupPreference">
                    <option value="natural">Natural</option>
                    <option value="glam">Glam</option>
                </select>
            </div>
            <div class="question">
                <label for="hairType">What is you're hair type?</label>
                <select id="hairType" name="hairType">
                    <option value="straight">Straight</option>
                    <option value="curly">Curly</option>
                    
                </select>
            </div>
            <div class="question">
                <label for="favoriteIngredient">Pick a skincare ingredient you love:</label>
                <select id="favoriteIngredient" name="favoriteIngredient">
                    <option value="FaceMasks">Face Masks</option>
                    <option value="Serums">Serums</option>
                </select>
            </div>
            <button type="button" onclick="calculatePersona()">Discover Your Beauty Persona</button>
        </form>
        <div id="resultContainer" class="hidden">
            <h2>Your Beauty Persona:</h2>
            <p id="resultText"></p>
            <ol>
            <li>Explore our <a href="makeup.php" style="color: peru;"><i>Makeup products</i></a></li>
            <li>Explore our <a href="seall.php" style="color: peru;"><i>Hair products</i></a></li>
            <li>Explore our <a href="Seeall.php" style="color: peru;"><i>Fragrance products</i></a></li>
            <li>Explore our <a href="Serum.php" style="color: peru;"><i>SkinCare products</i></a></li>
            </ol>
        </div>
    </div>
    
   
    <script>
        function BeautyPersona(makeupPreference, hairType, favoriteIngredient) {
            this.makeupPreference = makeupPreference;
            this.hairType = hairType;
            this.favoriteIngredient = favoriteIngredient;
    
            this.calculatePersona = function() {
                if (this.makeupPreference === 'natural' && this.hairType === 'curly' && this.favoriteIngredient === 'Serums') {
                    return 'You are a Curly Natural Beauty Enthusiast!';
                } else if (this.makeupPreference === 'glam' && this.hairType === 'straight' && this.favoriteIngredient === 'FaceMasks') {
                    return 'You are a Glam Diva with Radiant Skin!';
                } else if (this.makeupPreference === 'natural' && this.hairType === 'curly' && this.favoriteIngredient === 'FaceMasks') {
                    return 'You are a Natural Trendsetter with Hydrated Skin!';
                } else if (this.makeupPreference === 'natural' && this.hairType === 'straight' && this.favoriteIngredient === 'Serums') {
                    return 'You are a Straight Haired Natural Beauty and a Skin Care Enthusiast!';
                } else if (this.makeupPreference === 'natural' && this.hairType === 'straight' && this.favoriteIngredient === 'FaceMasks') {
                    return 'You are a Bold Trendsetter with Hydrated Skin!';
                } else if (this.makeupPreference === 'glam' && this.hairType === 'curly' && this.favoriteIngredient === 'Serums') {
                    return 'You are a Glam Queen with a Cool Hairstyle!';
                } else if (this.makeupPreference === 'glam' && this.hairType === 'curly' && this.favoriteIngredient === 'FaceMasks') {
                    return 'You are Glamorous Barbie with Hydrated Skin!';
                } else if (this.makeupPreference === 'glam' && this.hairType === 'straight' && this.favoriteIngredient === 'Serums') {
                    return 'You are a Glam Babe with Glowy Skin!';
                } else {
                    return 'Discover your unique beauty persona!';
                }
            };
        }
    
        const userPersona = new BeautyPersona(
            document.getElementById('makeupPreference').value,
            document.getElementById('hairType').value,
            document.getElementById('favoriteIngredient').value
        );
    
        function calculatePersona() {
            const resultText = userPersona.calculatePersona();
            document.getElementById('resultText').innerText = resultText;
            document.getElementById('resultContainer').classList.remove('hidden');
        }
    </script>
    
</body>
</html>

