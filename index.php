<?php
if($_POST && empty($_POST['number_1']) && empty($_POST['number_2']) ){
    header('Location: index.php');
}
if(isset($_POST['number_1']) && isset($_POST['number_2']) && is_numeric($_POST['number_1']) && is_numeric($_POST['number_2']))
{

$operation = $_POST['operation'];
$number_1 = $_POST['number_1']; 
$number_2 = $_POST['number_2'];

switch ($operation) {
    case '0':
        $result = $number_1 + $number_2;        
        break;
    case '1':
        $result = $number_1 - $number_2;        
        break;
    case '2':
        $result = $number_1 * $number_2;        
        break;
    case '3':
        if($number_1 == '0' || $number_2 == '0'){
            $result =  'Error';
        }
        else {
            $result = $number_1 / $number_2;     
        }
        break;
}
}
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

        <form action="index.php" method="post">
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
        
        <?php //if(isset($result)){?>
        <h3 class="result">Result: <?php echo $result?></h3>
        
        <?php //} ?>
    </article>

</body>

</html>