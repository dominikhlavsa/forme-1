<?php require('db.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forme</title>
    <link rel="stylesheet" type="text/css" href="forma.css">



</head>
<body>
<h1>Formica</h1>

<p>


<?php

if ($result = $mysqli->query("SELECT  FROM  LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);
    $result->close();
}

if ($_POST['spol'] == 'M')
{
    $class = 'musko';
}
elseif ($_POST['spol'] == 'Ž')
{
    $class = 'zensko';
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
    <br>
    <a href="index.php">Ponovni unos</a>
</p>

</body>
</html>
