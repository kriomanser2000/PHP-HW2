<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.custom-div 
{
    position: absolute;
}
</style>
</head>
<body>
    <?php
    $left = 100;
    $top = 150;
    $color = "red";
    $screenWidth = 1920;
    $screenHeight = 1080;
    if ($left >= 0 && $top >= 0 && $left <= $screenWidth && $top <= $screenHeight) 
    {
        echo "<div class='custom-div' style='left: ${left}px; top: ${top}px; background-color: $color; width: 100px; height: 100px;'></div>";
    } 
    else 
    {
        echo "Координати виходять за межі екрану";
    }
    ?>
</body>
</html>