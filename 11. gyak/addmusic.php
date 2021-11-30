<?php
session_start();
$isadmin = false;
$loginname = "guest";
if(isset($_POST["loginname"]) && isset($_POST["pw"])){
    $_SESSION["loginname"] = $_POST["loginname"];
    $_SESSION["pw"] = $_POST["pw"];
    echo "post";
    var_dump($_SESSION);
}
$loggedin = isset($_SESSION["loginname"]) && isset($_SESSION["pw"]);
if($loggedin){
    $loginname = $_SESSION['loginname'];
    $pw = $_SESSION['pw'];
    $isadmin = $loginname == 'admin' && $pw == 'admin';
    echo "session";
}

?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <?php
    if(!$loggedin){
        echo "
        <h1>A form kitöltéséhez bejelentkezés szükséges</h1>
        <form action='addmusic.php' method='POST'>
        Név <br><input type='text' name='loginname'><br><br>
        Jelszó <br><input type='text' name='pw'><br><br>
        <input type='submit' value='KÜLDÉS'>
         </form>
        ";
    }else if($isadmin){
        echo "<h1>Zene hozzáadása</h1>
        <form action='success.php' method='post'>
            Előadó <br> <input type='text' name='eloado'> <br><br>
            Cím <br> <input type='text' name='cim'> <br><br>
            Év <br> <input type='number' name='ev'> <br><br>
            Link <br> <input type='text' name='link'> <br><br>
            <input type='submit' value='KÜLDÉS'>
        </form>";
    } else {
      echo "<h1>üdv," .  $loginname . "!</h1>";
      echo "Sajnos zenéket csak admin adhat hozzá";
    }
    ?>
    
</body>
</html>