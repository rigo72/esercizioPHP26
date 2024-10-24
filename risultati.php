<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>Nome</td>
            <td>Cognome</td>
            <td>Data di nascita</td>
            <td>Orario di rientro a casa</td>
            <td>Metodo per andare a scuola</td>
            <td>Corsi Pomeridiani</td>
        </tr>
    <?php
        $nome = $_GET["nome"];
        $cognome = $_GET["cognome"];
        $dataDiNascita = $_GET["dataNascita"];
        $rientroACasa = $_GET["orarioRitorno"];
        $mezzoUtilizzatoPerAndareAScuola = $_GET["metodoPerAndareAScuola"];
        $corsoPomeridiano = array();
        if(isset($_GET["corsoPomeridiano1"])){
            array_push($corsoPomeridiano, $_GET["corsoPomeridiano1"]);
        }
        if(isset($_GET["corsoPomeridiano2"])){
            array_push($corsoPomeridiano , $_GET["corsoPomeridiano2"]);
        }
        if(isset($_GET["corsoPomeridiano3"])){
            array_push($corsoPomeridiano , $_GET["corsoPomeridiano3"]);
        }
        if($corsoPomeridiano == null){
            $corsoPomeridiano = "Nessun Corso";
        }
        echo 
        "<tr> 
            <td>{$nome}</td> 
            <td>{$cognome}</td> 
            <td>{$dataDiNascita}</td>
            <td>{$rientroACasa}</td> 
            <td>{$mezzoUtilizzatoPerAndareAScuola}</td> <td>";
        foreach($corsoPomeridiano as $value){
           echo "{$value} <br>";
        }
    ?>  
            </td>
        </tr>
    </table>
</body>
</html>