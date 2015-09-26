<?php

//BINGO Rules
//B: 1-15
//I: 16-30
//N: 31-45
//G: 46-60
//O: 61-75

$bingo = array();

for($i = 0; $i < 5; $i++){

    $numbers = range($i*15+1, $i*15+15);
    shuffle($numbers);
    $rs = array_slice($numbers, 0, 5);
    $bingo[$i] = array_slice($numbers, 0, 5);
}
$s = "";

for($j=0; $j<5; $j++){
    $s .= "<tr>";
    for ($k=0; $k<5; $k++){
        $s .= ($j==2 && $k==2)?"<td></td>": sprintf("<td>%s</td>", $bingo[$k][$j]);
    }
    $s .= "</tr>";
}
?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8" />
        <title>BINGOシート</title>
    </head>
    <style>
        td, th{
            width: 50px;
            border: 1px solid #ccc;
            text-align: center;
        }

        body{
        background-color: yellow;
        }
    </style>

    <script>
        function koshin(){
        location.reload();
        }
    </script>

    <body>
        <h1>BINGOシート</h1>
        <table>
        <tr><th>B</th><th>I</th><th>N</th><th>G</th><th>O</th></tr>
        <?php echo $s; ?>
        </table>
    </body>

    <form>
    <input type="button" value="新しいシートの作成" onclick="koshin()">
    </form>
</html>
