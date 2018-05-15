<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <a href="login.php"><h5 id="login">login</h5></a>


    <img id="picture1" src="img/Thurgau2.PNG">
    <img id="picture2" src="img/Download.png">
</head>
<style>
    h2{
        font-family: 'Audiowide';font-size: 50px;
        color:   bisque;
    }

    label {

        font-family: 'Cantora One';font-size: 20px;
        color: black;
        padding-left: 20px;
    }
    #container
    {
        width: 1800px;
        margin-top: 200px;
        height: 1080px;
        margin-left: auto;
        margin-right: auto;
        background-size: cover;
        background-color:  white;

    }
    head{

        position: absolute;
       top: 20px;
        left: 20px;
    }
    div{
        width: 400px;

        height: 1080px;
        margin-left: auto;
        margin-right: auto;
        background-size: cover;
        background-color:  white;
    }
    #picture1{
        position: absolute;
        left: 20px;
        top: 20px;

    }
    #picture2 {
        position: absolute;
        width: 30px;
        height: 30px;
        right: 20px;
        top: 20px;
    }
    #login{
        position: absolute;
        right: 55px;
        top: 20px;

    }



</style>
<body id="container" >

<div class="form-group" >
    <label id="rangeValLabel">Ständige Wohnbevölkerung ab 2015</label>
    <input type="range" min="2015" max="2018" step="1" name="anzTickets" oninput="document.getElementById('rangeValLabel').innerHTML = 'Wohnbevölkerung im Jahr: ' + this.value;">
    <img src="img/Thurgau.PNG" style="height: 400px; width: 700px; >
    <div>
        <form method="post" action="index.php">
    <div>
        <form method="post" action="index.php">
        <label>Bezirke</label>
        <select class="form-control" name="kanton">
            <option>Bitte Auswählen</option>
            <option> Kanton Thurgau</option>
            <option>   Bezirk Arbon</option>
            <option>   Bezirk Frauenfeld</option>
            <option>  Bezirk Kreuzlingen</option>
            <option>   Bezirk Münchwilen</option>
            <option>   Bezirk Weinfelden</option>
            </select>
<label>Gemeinden</label>
<select class="form-control" name="bezirk">
    <option>Bitte Auswählen</option><option>Aadorf</option>
    <option>Affeltrangen</option>
    <option>Altnau</option>
    <option>Amlikon-Bissegg</option>
    <option>Amriswil</option>
    <option>Arbon</option>
    <option>Basadingen-Schlattingen</option>
    <option>Berg</option>
    <option>Berlingen</option>
    <option>Bettwiesen</option>
    <option>Bichelsee-Balterswil</option>
    <option>Birwinken</option>
    <option>Bischofszell</option>
    <option>Bottighofen</option>
    <option>Braunau</option>
    <option>Bürglen</option>
    <option>Bussnang</option>
    <option>Diessenhofen</option>
    <option>Dozwil</option>
    <option>Egnach</option>
    <option>Erlen</option>
    <option>Ermatingen</option>
    <option>Eschenz</option>
    <option>Eschlikon</option>
    <option>Felben-Wellhausen</option>
    <option>Fischingen</option>
    <option>Frauenfeld</option>
    <option>Gachnang</option>
    <option>Gottlieben</option>
    <option>Güttingen</option>
    <option>Hauptwil-Gottshaus</option>
    <option>Hefenhofen</option>
    <option>Herdern</option>
    <option>Hohentannen</option>
    <option>Homburg</option>
    <option>Horn</option>
    <option>Hüttlingen</option>
    <option>Hüttwilen</option>
    <option>Kemmental</option>
    <option>Kesswil</option>
    <option>Kradolf-Schönenberg</option>
    <option>Kreuzlingen</option>
    <option>Langrickenbach</option>
    <option>Lengwil</option>
    <option>Lommis</option>
    <option>Mammern</option>
    <option>Märstetten</option>
    <option>Matzingen</option>
    <option>Müllheim</option>
    <option>Münchwilen</option>
    <option>Münsterlingen</option>
    <option>Neunforn</option>
    <option>Pfyn</option>
    <option>Raperswilen</option>
    <option>Rickenbach</option>
    <option>Roggwil</option>
    <option>Romanshorn</option>
    <option>Salenstein</option>
    <option>Salmsach</option>
    <option>Schlatt</option>
    <option>Schönholzerswilen</option>
    <option>Sirnach</option>
    <option>Sommeri</option>
    <option>Steckborn</option>
    <option>Stettfurt</option>
    <option>Sulgen</option>
    <option>Tägerwilen</option>
    <option>Thundorf</option>
    <option>Tobel-Tägerschen</option>
    <option>Uesslingen-Buch</option>
    <option>Uttwil</option>
    <option>Wagenhausen</option>
    <option>Wäldi</option>
    <option>Wängi</option>
    <option>Warth-Weiningen</option>
    <option>Weinfelden</option>
    <option>Wigoltingen</option>
    <option>Wilen</option>
    <option>Wuppenau</option>
    <option>Zihlschlacht-Sitterdorf</option>

</select>
            <br>
            <br>
            <br>
            <input type="submit" value="Anschauen" />
</div>

</div>


</form>
</body>
<?php
if (isset($_POST["kanton"])){
$kanton = $_POST["kanton"];

diese($kanton);


}
function diese($kanton){
    if ($kanton == "Kanton Thurgau"){
        echo"gut";}
    if ($kanton == "Bezirk Arbon"){
        echo"gut";
    }
    if ($kanton == "Bezirk Frauenfeld"){
        echo"gut";
    }
    if ($kanton == "Bezirk Kreuzlingen"){
        echo"gut";
    }
    if ($kanton == "Bezirk Münchwilen"){
        echo"gut";
    }
    if ($kanton == "Bezirk Weinfelden"){
        echo"gut";
    }}

if (isset($_POST["bezirk"])) {
    $bezirk = $_POST["bezirk"];

    diese1($bezirk);
}

function diese1($bezirk){
    if ($bezirk == "Amriswil"){
        echo"gut";}
    if ($bezirk == "Arbon"){
        echo"gut";
    }
    if ($bezirk == "Dozwil"){
        echo"gut";
    }
    if ($bezirk == "Egnach"){
        echo"gut";
    }
    if ($bezirk == "Hefenhofen"){
        echo"gut";
    }
    if ($bezirk == "Horn"){
        echo"gut";
    }
    if ($bezirk == "Kesswil"){
        echo"gut";
    }
    if ($bezirk == "Roggwil"){
        echo"gut";
    }
    if ($bezirk == "Romanshorn"){
        echo"gut";
    }
    if ($bezirk == "Salmsach"){
        echo"gut";
    } if ($bezirk == "Sommeri"){
        echo"gut";
    } if ($bezirk == "Uttwil"){
        echo"gut";
    } if ($bezirk == "Basadingen-Schlattingen"){
        echo"gut";
    } if ($bezirk == "Berlingen"){
        echo"gut";
    }
    if ($bezirk == "Diessenhofen"){
        echo"gut";
    }
    if ($bezirk == "Eschenz"){
        echo"gut";
    }
    if ($bezirk == "Felben-Wellhausen
"){
        echo"gut";}
    if ($bezirk == "Frauenfeld"){
        echo"gut";
    }
    if ($bezirk == "Gachnang"){
        echo"gut";
    }
    if ($bezirk == "Herdern"){
        echo"gut";
    }
    if ($bezirk == "Homburg"){
        echo"gut";
    }
    if ($bezirk == "Hüttlingen"){
        echo"gut";
    }
    if ($bezirk == "Mammern"){
        echo"gut";
    }
    if ($bezirk == "Matzingen"){
        echo"gut";
    }
    if ($bezirk == "Müllheim"){
        echo"gut";
    }
    if ($bezirk == "Neunforn"){
        echo"gut";
    } if ($bezirk == "Phyn"){
        echo"gut";
    } if ($bezirk == "Schlatt"){
        echo"gut";
    } if ($bezirk == "Steckborn"){
        echo"gut";
    } if ($bezirk == "Stettfurt"){
        echo"gut";
    }
    if ($bezirk == "Thundorf"){
        echo"gut";
    }
    if ($bezirk == "Uesslingen-Buch"){
        echo"gut";
    }
    if ($bezirk == "Wagenhausen"){
        echo"gut";}
    if ($bezirk == "Warth-Weiningen"){
        echo"gut";
    }
    if ($bezirk == "Altnau"){
        echo"gut";
    }
    if ($bezirk == "Bottighofen"){
        echo"gut";
    }
    if ($bezirk == "Ermatingen"){
        echo"gut";
    }
    if ($bezirk == "Gottlieben"){
        echo"gut";
    }
    if ($bezirk == "Güttingen"){
        echo"gut";
    }
    if ($bezirk == "Kemmental"){
        echo"gut";
    }
    if ($bezirk == "Kreuzlingen"){
        echo"gut";
    }
    if ($bezirk == "Langenrickenback"){
        echo"gut";
    } if ($bezirk == "Lengwil"){
        echo"gut";
    } if ($bezirk == "Münsterlingen"){
        echo"gut";
    } if ($bezirk == "Raperswil"){
        echo"gut";
    } if ($bezirk == "Salenstein"){
        echo"gut";
    }
    if ($bezirk == "Tägerwilen"){
        echo"gut";
    }
    if ($bezirk == "Wäldi"){
        echo"gut";
    }
    if ($bezirk == "Aadorf"){
        echo"gut";}
    if ($bezirk == "Bettwiesen"){
        echo"gut";
    }
    if ($bezirk == "Bichelsee-Balterswil"){
        echo"gut";
    }
    if ($bezirk == "Braunau"){
        echo"gut";
    }
    if ($bezirk == "Eschlikon"){
        echo"gut";
    }
    if ($bezirk == "Fischingen"){
        echo"gut";
    }
    if ($bezirk == "Lommis"){
        echo"gut";
    }
    if ($bezirk == "Münchwilen"){
        echo"gut";
    }
    if ($bezirk == "Rickenbach"){
        echo"gut";
    }
    if ($bezirk == "Sirnach"){
        echo"gut";
    } if ($bezirk == "Tobel-Tägerschen"){
        echo"gut";
    } if ($bezirk == "Sulgen"){
        echo"gut";
    } if ($bezirk == "Wängi"){
        echo"gut";
    } if ($bezirk == "Wilen"){
        echo"gut";
    }

    if ($bezirk == "Affeltrangen"){
        echo"gut";}
    if ($bezirk == "Amlikon-Bissegg"){
        echo"gut";
    }
    if ($bezirk == "Berg"){
        echo"gut";
    }
    if ($bezirk == "Birwinken"){
        echo"gut";
    }
    if ($bezirk == "Bischofszell"){
        echo"gut";
    }
    if ($bezirk == "Erlen"){
        echo"gut";
    }
    if ($bezirk == "Hauptwil-Gottshaus"){
        echo"gut";
    }
    if ($bezirk == "Hohentannen"){
        echo"gut";
    }
    if ($bezirk == "Kradolf-Schönenberg"){
        echo"gut";
    }
    if ($bezirk == "Märstetten"){
        echo"gut";
    } if ($bezirk == "Schönholzerswilen"){
        echo"gut";
    } if ($bezirk == "Sulgen"){
        echo"gut";
    } if ($bezirk == "Weinfelden"){
        echo"gut";
    } if ($bezirk == "Wigoltingen"){
        echo"gut";
    }
    if ($bezirk == "Wuppenau"){
        echo"gut";
    }
    if ($bezirk == "Zihlschlacht-Sitterdorf"){
        echo"gut";
    }
}
?>


</html>