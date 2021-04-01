<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> 
    <?php
            if(!empty(trim($_POST['width'])) && !empty(trim($_POST['height']))) {
        $width = trim($_POST['width']);
        $height = trim($_POST['height']);
        $area = $width * $height;
        echo "Total (" . $area . "m<sup>2</sup>): " . $area * 1000 . " UZS";
      }    
      
    ?>
    </h1>    
    <a href="mypage.php">Back</a>
</body>
</html>