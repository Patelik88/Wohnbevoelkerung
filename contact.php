<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Neuer Benutzer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>

    <link rel="stylesheet" href="css/index.css">
</head>
<style>


    a {

        font-size: 20px;
    }
    h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 50px;
        color: #3e8e41;
    }
    #passwort{
        width: 300px;
        height: 30px;
        border: 2px solid #3e8e41;
        border-radius: 5px;


    }

    #name{
        width: 300px;
        height: 30px;
        border: 2px solid #3e8e41;
        border-radius: 5px;


    }
    #email{
        width: 300px;
        height: 30px;
        border: 2px solid #3e8e41;
        border-radius: 5px;

    }


    h1 {

        font-family: 'Montserrat', sans-serif;
        font-size: 100px;
        color: #3e8e41;
    }
    p {

        font-family: 'Montserrat', sans-serif; font-size: 17px;
        border:2px solid forestgreen;
        border-radius: 10px;
        padding-left: 7px;
        padding-top: 10px;
        padding-bottom: 10px;
        width: 700px;
    }

    label {

        font-family: 'Montserrat', sans-serif; font-size: 17px;
        font-size: 25px;
        color: black;

    }

    h5 {

        font-family: 'Montserrat', sans-serif; font-size: 17px;
        font-size: 25px;
        color: black;

    }



    #container {
        margin-left: 50px;
        margin-top: 50px;
        width: 500px;





    }


    ul {

        list-style-type: none;
        margin: 0;
        padding: 0;

        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
        border-right:1px solid #bbb;
    }

    li:last-child {
        border-right: none;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #4CAF50;
    }



</style>

<body >
<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li style="float:right"><a href="newuser.php">register</a></li>
    <li style="float:right"><a href="login.php">login</a></li>
</ul>

<div id="container">
    <h2>Entwickler</h2>
<img src="img/bedi.png" width="50" height="50"><h5>Patrik Studer</h5></img>
    <a id="git" href="https://github.com/Patelik88">Link to Github</a>
    <a id="insta" href="https://www.instagram.com/s.patrlk/">Link to Instagram</a>
<br>
<br>
<br>
<img src="img/lingling.png" width="50" height="50"><h5>Daniel Nguy</h5></img>
    <a id="git" href="https://github.com/DanielNguy">Link to Github</a>
    <a id="insta" href="https://www.instagram.com/btstaedn/">Link to Instagram</a>

</div>
</body>
</html>