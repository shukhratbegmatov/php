<html>

<body>
    <?php
    $email=$_POST['email'];
    $password=$_POST['password'];
    $file=fopen("user.txt","r");
    while(!feof($file)){
        $text=fgets($file);
        if(!empty($text)){
        $line=explode(' ',$text);
        if($email==$line[1] && md5($password)==$line[2])
        {
            $login=true;
            break;
        }
    }
    }
    fclose($file);
    if($login)
    {
        echo "<h1>Welcome $line[0]</h1>";
    }
    else
    {
        echo "error";
    }
    ?>

</body>

</html>