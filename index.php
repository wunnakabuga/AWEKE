<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Aweke Farm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
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
        <div class="dropdown">
            <button class="dropbtn">Account 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="login.php">login</a>
                <a href="signup.php">Sign Up</a>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size: 60px;">WELCOME TO AWEKE FARM</h1>
            <p>Where nature's bounty meets sustainable farming practices into a world of fresh, organic produce cultivated with passion and care.
               <br> Join us in our commitment to nourishing both body and planet, one harvest at a time.
               <br>Explore our fields, discover our story, and savor the essence of farm-to-table goodness.</p>
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
