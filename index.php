<?php


$name = 'PierMario';
$last_name = 'Salis';

$paragrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quo incidunt et adipisci deleniti consectetur';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - badwords</title>
</head>
<body>
    

<h1> Bevenuto <?php  echo $name . ' ' . $last_name?> </h1>

<p><?php echo $paragrafo ?></p>

<p><h3> Questo è un paragrafo lungo: <?php echo strlen($paragrafo) ?> caratteri </h3></p>

<h2>Badword: <?php echo str_replace($_GET['badword'], '***', $_GET['badword'] ) ?></h2>

</body>
</html>

