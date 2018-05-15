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
</head>
<style>
    h2{
        font-family: 'Audiowide';font-size: 50px;
        color:   bisque;
    }
    h5 {
        font-family: 'Cantora One';font-size: 20px;
        color: white;
        padding-left: 20px;
    }
    #container
    {
        width: 400px;
        margin-top: 200px;
        height: 1080px;
        margin-left: auto;
        margin-right: auto;
        background-size: cover;
        background-color: cadetblue;

    }
</style>
<body id="container">

<form method="post" action="newuser.php">
    <h5>Name:</h5>  <input type="text" name="name" /><br />
    <h5> E-Mail:</h5> <input type="text" name="email" /><br />
    <h5> Passwort:</h5> <input type="password" name="passwort" /><br />

    <input type="submit" value="Registrieren" />

</form>












</body>
</html>