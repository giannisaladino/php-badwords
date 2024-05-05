<?php 
// var_dump($_GET);
$message = $_GET['message'];
$newMessage = str_replace('ciao', 'SALVE', $message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p> <strong>Messaggio inviato:</strong> "<?php echo $message; ?>" <p>
        <p> <strong>Lunghezza del messaggio: </strong> <?php echo strlen($message); ?> car. </p>
    </div>

    <div>
        <p> <strong>Messaggio censurato:</strong> "<?php echo $newMessage ?>" </p>
        <p> <strong>Lunghezza del nuovo messaggio:</strong> <?php echo strlen($newMessage); ?> car. </p>
    </div>
</body>
</html>