<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra Rodada</title>
    <style>
        td,th {border: 1px solid;}
    </style>
</head>
<body>
    <h1>Resgistra Rodada</h1>
    <?php
    if (!isset($_SESSION["equipea"]) && 
        !isset($_SESSION["equipeb"]) &&
        isset($_POST["fequipea"]) && 
        isset($_POST["fequipeb"])) {
            $_SESSION["equipea"] = $_POST["fequipea"];
            $_SESSION["equipeb"] = $_POST["fequipeb"];
    } 
    if (isset($_POST["excluir"])) {
        array_pop($_SESSION["rodada"]);
    }

    if (isset($_POST["fpontosa"]) && isset($_POST["fpontosb"])) {
        $_SESSION["rodada"][] = array("a" => $_POST["fpontosa"], "b" => $_POST["fpontosb"]);
    }
    ?>
    <table>
        <tr>
            <th>#</th>
            <form action="#" method="post">
                <th><label for="fpontosa">Pontos <?= $_SESSION["equipea"] ?>:</label>
                <input type="number" name="fpontosa" style="width: 80px";>
                </th>
                <th><label for="fpontosb">Pontos <?= $_SESSION["equipeb"] ?>:</label>
                <input type="number" name="fpontosb" style="width: 80px";></th>
                <tr><td colspan="3" style="text-align:center;">
                <button type="submit" style="width:80%;"><strong> + </strong></button></td></tr>
            </form> 
        </tr>
    <?php
          $somaa=0;
          $somab=0;
          $nrorodada = 0;
          foreach ($_SESSION["rodada"] as $rodada) {
            $nrorodada++;
            $somaa += $rodada["a"];
            $somab += $rodada["b"];
             echo "<tr><td>".$nrorodada."</td><td style='text-align:center;'>".$rodada["a"]."</td><td style='text-align:center;'>".$rodada["b"]."</td>
                   </tr>"; 
          }
        ?>
        <tr>
            <form action="#" method="post">
                <tr><td colspan="3" style="text-align:center;">
                <button type="submit" style="width:80%;" name="excluir" value="ultimo"><strong> Apagar rodada #<?= $nrorodada ?></strong></button></td></tr>
            </form> 
        <tr>
        <tr>
            <td>&nbsp;</td><th>Total <?= $_SESSION["equipea"] ?>: <?= $somaa ?></th><th>Total <?= $_SESSION["equipeb"] ?>:<?= $somab ?></th>
        </tr>
    </table>
    <a href=".">Reiniciar</a>
</body>
</html>