<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>
</head>
<body>

<h2>Select a Color to change the background</h2>
<form method="post" action="">
    <select name="color">
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
        <option value="yellow">Yellow</option>
    </select>
    <input type="submit" name="submit" value="Change Color">
</form>

<?php
$bgColor = "white"; // default color

if (isset($_POST['submit'])) {
    $color = $_POST['color'];

    // Switch case to change color
    switch ($color) {
        case "red":
            $bgColor = "red";
            break;
        case "blue":
            $bgColor = "blue";
            break;
        case "green":
            $bgColor = "green";
            break;
        case "yellow":
            $bgColor = "yellow";
            break;
        default:
            $bgColor = "white";
            break;
    }
}
?>

<style>
    body {
        background-color: <?php echo $bgColor; ?>;
        color: <?php echo ($bgColor == "yellow" || $bgColor == "white") ? "black" : "white"; ?>;
        transition: background-color 0.5s ease;
    }
</style>

</body>
</html>
