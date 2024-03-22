<!-- Create a simple HTML form and accept the user name and display the name through PHP echo statement.

Sample output of the HTML form : -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST["name"];
    ?>
    <h1>Please input your name:</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <input type="text" name="name" value="<?php echo $name?>" id="">
        <button type="submit">Submit</button>
    </form>

    <?php
        echo "<br><b>$name</b>";
    ?>
</body>
</html>