<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bee Products - Aweke Farm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bee.css">
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="dairy.php">Dairy</a>
        <a href="poultry.php">Poultry</a>
        <a href="bee.php">Bee</a>
        <a href="about.php">About</a>
        <a href="news.php">News</a>
        <a href="contact.php">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <header>
        <h1>Bee Products - Aweke Farm</h1>
    </header>
    <div class="container">
        <h2>Our Bee Products</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="honey.jpg" alt="Honey">
                    <h3>Honey</h3>
                    <p>Pure and organic honey harvested from our hives. Perfect for your health and a sweetener for your meals.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="beeswax.jpg" alt="Beeswax">
                    <h3>Beeswax</h3>
                    <p>Natural beeswax, ideal for making candles, cosmetics, and various crafts.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="propolis.jpg" alt="Propolis">
                    <h3>Propolis</h3>
                    <p>High-quality propolis, known for its medicinal properties and use in health supplements.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Aweke Farm. All rights reserved.</p>
    </footer>

    <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>
</body>
</html>
