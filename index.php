//Elijah Hilfiker
//11/10/2025
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building a Dynamic Form with PHP</title>
</head>
<body>
<h1> Building a Dynamic Form with PHP </h1>
<p>Elijah Hilfiker</p>
<p>11/10/2025</p>
<form action="confirm.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>