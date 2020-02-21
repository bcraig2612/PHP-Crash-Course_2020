<!DOCTYPE html>
<html>

<head>
    <title>Calculating The Length Of A String</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="string">
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
if(isset($_POST['submit'])) {
    $string = $_POST['string'];
    $length = strlen($string);

    echo "The string is " . $length . " characters long.";
}