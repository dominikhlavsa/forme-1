<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forme</title>
    <link rel="stylesheet" type="text/css" href="forma.css">
</head>
<body>
<h1>FORME</h1>

<p>

<form method="post">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    <br><br>Spol:<br>
    <input type="radio" name="spol" value="M"> Muško<br>
    <input type="radio" name="spol" value="Ž"> Žensko<br>
    <br><input type="submit" value="Pošalji!">

</form>

<?php

if($_POST['spol'] == 'M')
{
    echo('<p.class = Muško>');
}
elseif ($_POST['spol'] == 'Ž')
{
    echo('<p.class = Žensko>');
}

echo('Vaše ime je: ' . htmlspecialchars($_POST['ime']) . '<br>');
echo('Vaše prezime je: ' .htmlspecialchars($_POST['prezime']) . '<br>');
echo('Vaš spol: ' .htmlspecialchars($_POST['spol']). '<br>');


if($_POST['spol'] == 'M')

{
    echo('Vi ste pravi muškarac');


}
elseif ($_POST['spol'] == 'Ž')
{
    echo('Vi ste prava žena');
}
else
{
    echo('A šta si onda');
}



?>

</p>

</body>
</html>
