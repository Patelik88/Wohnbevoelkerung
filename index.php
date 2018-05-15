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
        margin-top: 200px;
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

<div class="form-group">
    <label id="rangeValLabel">Ständige Wohnbevölkerung ab 2105</label>
    <input type="range" min="2015" max="2018" step="1" name="anzTickets" oninput="document.getElementById('rangeValLabel').innerHTML = 'Wohnbevölkerung im Jahr: ' + this.value;">
    <div>

<label>Bezirk Arbon</label>
<select class="form-control" name="bezirkar">
    <option>Bitte Auswählen</option>
    <option>   Amriswil</option>
    <option>   Arbon</option>
    <option>   Dozwil</option>
    <option>  Egnach</option>
    <option>   Hefenhofen</option>
    <option>   Horn</option>
    <option>   Kesswil</option>
    <option>    Roggwil</option>
    <option>    Romanshorn</option>
    <option>  Salmsach</option>
    <option>   Sommeri</option>
    <option>    Uttwil</option></select>

        <label>Bezirk Frauenfeld</label>
    <select class="form-control" name="bezirkff">
        <option>Bitte Auswählen</option>
    <option>   Basadingen-Schlattingen</option>
    <option>   Berlingen</option>
    <option>   Diessenhofen</option>
    <option>   Eschenz</option>
    <option>    Felben-Wellhausen</option>
    <option>    Frauenfeld</option>
    <option>   Gachnang</option>
    <option>   Herdern</option>
    <option>   Homburg</option>
    <option>   Hüttlingen</option>
    <option>    Hüttwilen</option>
    <option>   Mammern</option>
    <option>    Matzingen</option>
    <option>    Müllheim</option>
    <option>    Neunforn</option>
    <option>    Pfyn</option>
    <option>    Schlatt</option>
    <option>    Steckborn</option>
    <option>    Stettfurt</option>
    <option>    Thundorf</option>
    <option>   Uesslingen-Buch</option>
    <option>    Wagenhausen</option>
    <option>  Warth-Weiningen</option></select>

        <label>Bezirk Kreuzlingen</label>
        <select class="form-control" name="bezirkkz">
            <option>Bitte Auswählen</option>
    <option>  Altnau</option>
    <option>   Bottighofen</option>
    <option>   Ermatingen</option>
    <option>   Gottlieben</option>
    <option>   Güttingen</option>
    <option>   Kemmental</option>
    <option>   Kreuzlingen</option>
    <option>   Langrickenbach</option>
    <option>   Lengwil</option>
    <option>  Münsterlingen</option>
    <option>  Raperswilen</option>
    <option>    Salenstein</option>
    <option>    Tägerwilen</option>
    <option>    Wäldi</option></select>

            <label>Bezirk Münchwilen</label>
            <select class="form-control" name="bezirkmw">
                <option>Bitte Auswählen</option>
    <option>   Aadorf</option>
    <option>   Bettwiesen</option>
    <option>  Bichelsee-Balterswil</option>
    <option>   Braunau</option>
    <option>   Eschlikon</option>
    <option>   Fischingen</option>
    <option>    Lommis</option>
    <option>   Münchwilen</option>
    <option>   Rickenbach</option>
    <option>   Sirnach</option>
    <option>   Tobel-Tägerschen</option>
    <option>  Wängi</option>
    <option>    Wilen</option></select>

                <label>Bezirk Weinfelden</label>
                <select class="form-control" name="bezirkwe">
                    <option>Bitte Auswählen</option>
    <option>   Affeltrangen</option>
    <option>   Amlikon-Bissegg</option>
    <option>    Berg</option>
    <option>   Birwinken</option>
    <option>    Bischofszell</option>
    <option>    Bürglen</option>
    <option>    Bussnang</option>
    <option>   Erlen</option>
    <option>   Hauptwil-Gottshaus</option>
    <option>   Hohentannen</option>
    <option>Kradolf-Schönenberg</option>
    <option>    Märstetten</option>
    <option> Schönholzerswilen</option>
    <option>   Sulgen</option>
    <option>Weinfelden</option>
    <option>Wigoltingen</option>
    <option>Wuppenau</option>
 <option>Zihlschlacht-Sitterdorf</option>
                </select>


</div>


</div>

</body>
</html>