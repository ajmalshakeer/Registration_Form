<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>ROLL NO:</em> <?php echo $_POST["rollno"]?></li>
        <li><em>AGE:</em> <?php echo $_POST["age"]?></li>
        <li><em>DOB:</em> <?php echo $_POST["DOB"]?></li>
    </ol>
</body>
</html>