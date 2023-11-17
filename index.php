<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class="container">
    <h1>Author Registration Form</h1>

<h3>Fill in your details</h3>
<form action="" method="POST" >
    <label for="Author id">Author id:</label><br>
    <input type="text" name="author_id" id="author_id" placeholder="Enter Author id" maxlength="60" required /><br><br>

    <label for="Author full name">Author full name:</label><br>
    <input type="text" name="author_fullname" id="author_fullname" placeholder="Enter your full name" maxlength="60" /><br><br>

    <label for="Author_email">Author Email:</label><br>
    <input type="email" name="author_email" id="author_email" placeholder="Enter your Email" maxlength="60" /><br><br>

    <label for="Author_Address">address</address>:</label><br>
    <input type="text" name="Address" id="Address" placeholder="Enter your address" maxlength="160" required /><br><br>

    <label for="Author_Biography">Biography:</label><br>
    <textarea name="biography" id="biography" placeholder="Enter your Biography" rows="10" required></textarea><br><br>

    <label for="dob">Author Date of Birth:</label><br>
    <input type="date" name="dob" id="dob" /><br><br>

    <label for="Author suspended">Author Suspended:</label><br>
    <input type="boolean" name="author_suspended" id="author_suspended" placeholder="" maxlength="60" /><br><br>




    <input type="submit" name="Register" value="Register" />
</form>

<!-- the main content section ends here -->
<div class="footer">
copyright &copy; DBIT 2023
</div>
</body>
</html>