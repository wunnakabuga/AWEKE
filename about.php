<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us</title>
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

<div class="about-section">
    <h1>About Us</h1>
    <p>Welcome to Aweke Land Selling Company, where dreams of property ownership become reality. <br>With a commitment to integrity, transparency, and excellence, we specialize in facilitating the acquisition and sale of prime land parcels tailored to your desires. <br>Our mission is simple: to empower individuals and families to find their perfect piece of land, whether for residential, commercial, or investment purposes.<br> Backed by a team of dedicated professionals, we offer personalized service every step of the way, ensuring a seamless and rewarding experience. <br>At Aweke Land Selling Company, we don't just sell land; we pave the way for a brighter future and endless possibilities.</p>
    <p>Feel free to visit our offices at Tilisi Limuru KE</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
    <div class="column">
        <div class="card">
            <img src="judy.jpg" alt="Judy Kageni">
            <div class="container">
                <h2>Judy Kageni</h2>
                <p class="title">CEO & Founder</p>
                <p>Judy is passionate about real estate and has dedicated her career to helping people find their perfect property.</p>
                <p>judyk@gmail.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="charles.jpg" alt="Charles kabuga">
            <div class="container">
                <h2>Charles kabuga</h2>
                <p class="title">Art Director</p>
                <p>Mike's creative vision and expertise drive our branding and marketing efforts, ensuring we reach the right audience.</p>
                <p>mike@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="gunna.jpg" alt="sergio giavanni kitchens">
            <div class="container">
                <h2>Sergio Giovanni Kitchens</h2>
                <p class="title">Designer</p>
                <p>John's innovative designs and attention to detail bring our properties to life, creating spaces that are both functional and beautiful.</p>
                <p>john@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>
</div>

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
