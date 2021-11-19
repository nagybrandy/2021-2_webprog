<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sikeres hozzáadás!</h1>

    <?php
        $uj_eloado = $_POST["eloado"];
        $uj_cim = $_POST["cim"];
        $uj_ev = intval($_POST["ev"]);
        $uj_link = $_POST["link"];
        $ujadat = [
            "eloado" => $uj_eloado,
            "cim" => $uj_cim,
            "ev" => $uj_ev,
            "link" => $uj_link
        ];
        var_dump($_POST);
        if(file_exists("musics.json")){
            $json_szoveg = file_get_contents("musics.json");
            $zenek_tomb = json_decode($json_szoveg);
            array_push($zenek_tomb, $ujadat);
        } else {
            array_push($zenek_tomb, $ujadat);
        }
        $uj_tomb = json_encode($zenek_tomb, JSON_PRETTY_PRINT);
        file_put_contents("musics.json", $uj_tomb);
    ?>
    <br>
    <button onclick="window.location.href='index.php'">Vissza a főoldalra</button>
</body>
</html>
