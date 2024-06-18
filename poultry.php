<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry - Aweke Farm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .topnav {
            overflow: hidden;
            background-color: #333;
        }
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: white;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .column {
            flex: 33.33%;
            padding: 15px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            border-bottom: 1px solid #ddd;
        }
        .card h3, .card p {
            margin: 15px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="index.html" class="active">Home</a>
        <a href="dairy.html">Dairy</a>
        <a href="poultry.html">Poultry</a>
        <a href="bee.html">Bee</a>
        <a href="about.html">About</a>
        <a href="news.html">News</a>
        <a href="contact.html">Contact</a>
    </div>
    <header>
        <h1>Poultry - Aweke Farm</h1>
    </header>
    <div class="container">
        <h2>Our Poultry Products</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="your-image-path.jpg" alt="Turkey meat">
                    <h3>Turkey Meat</h3>
                    <p>Known for its lean quality and mild flavor, turkey meat is commonly consumed during holidays like Thanksgiving. <br>It is available in various forms, including whole turkey, turkey breasts, ground turkey, and deli slices, and is used in a variety of dishes from roasts to sandwiches.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="your-image-path.jpg" alt="Chicken Eggs">
                    <h3>Chicken Eggs</h3>
                    <p>These are a versatile food staple, rich in protein, vitamins, and minerals.<br> can be prepared in various ways, such as boiled, scrambled, or used in baking and cooking.<br>Widely consumed and used in various culinary dishes, they are a primary source of protein and essential nutrients.</p>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="your-image-path.jpg" alt="Chicken Meat">
                    <h3>Chicken Meat</h3>
                    <p>This includes various cuts like chicken breasts, thighs, wings, and drumsticks, which are staples in many diets around the world.<br>Chicken meat is lean, high in protein, and can be cooked in numerous ways, such as grilling, baking, frying, and roasting.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Aweke Farm. All rights reserved.</p>
    </footer>
</body>
</html>
