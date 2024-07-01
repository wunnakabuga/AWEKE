<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Aweke Farm</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
    <a href="index.php" class="active">Home</a>
    <a href="dairy.php">Dairy</a>
    <a href="poultry.php">Poultry</a>
    <a href="bee.php">Bee</a>
    <a href="about.php">About</a>
    <a href="news.php">News</a>
    <a href="contact.php">Contact</a>
</div>

<h3>Contact Form</h3>

<div class="container">
    <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="kenya">Kenya</option>
            <option value="tanzania">Tanzania</option>
            <option value="rwanda">Rwanda</option>
            <option value="uganda">Uganda</option>
            <option value="southafrica">South Africa</option>
            <option value="namibia">Namibia</option>
            <option value="nigeria">Nigeria</option>
            <option value="algeria">Algeria</option>
            <option value="congo">Congo</option>
            <option value="burundi">Burundi</option>
            <option value="egypt">Egypt</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
