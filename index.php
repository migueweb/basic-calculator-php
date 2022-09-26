<?php
if(isset($_GET['number_1']) && isset($_GET['number_2']) && is_numeric($_GET['number_1']) && is_numeric($_GET['number_2']))
{
    
$number_1 = $_GET['number_1']; 
$number_2 = $_GET['number_2']; 
$result = $number_1 + $number_2;
}
if(isset($_GET))[]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <!-- Custom css-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <article class="wrapper">
        <h2 class="title">PHP Calculator</h2>
        <form action="index.php" method="get">
            <input class="field" type="number" name="number_1">
            <select class="field select"name="operation">
                <option class="option" value="0">+</option>
                <option class="option" value="1">-</option>
                <option class="option" value="2">*</option>
                <option class="option" value="3">/</option>
            </select>
            <input class="field" type="number" name="number_2">
            <button class="btn" type="submit">send</button>
        </form>
        <?php if(isset($result)){?>
        <h3 class="result">Result: <?php echo $result?></h3>
        <?php }?>
    </article>

</body>

</html>