<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // cara pertama
    $buah ["jb"]= "jambu";
    $buah ["ps"] = "pisang";
    $buah ["rm"] = "rambutan";
    $buah ["mg"] = "mangga";
    echo " saya suka makan $buah[rm] dan $buah[mg]";

    // cara ka dua
    echo "<br>";
    $buah= array ("jb" => "jambu","ps" => "pisang","rm"=> "rambutan","mg"=>"mangga"); 
    echo " saya suka makan $buah[jb] dan $buah[mg]";
    ?>
</body>
</html>