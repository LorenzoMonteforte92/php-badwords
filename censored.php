<?php
$userWord = $_GET['userWord'];
$userText = $_GET['userText'];
$censoredText = str_replace($userWord, '***', $userText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p> 
    <h3>Testo Originale</h3>
    <?php echo $userWord?> <div> n. caratteri: <?php echo strlen($userWord)?></div> </p>
  <p>
    <h3>
        Testo Censurato
    </h3>
    <?php echo $censoredText?>
    <div> n. caratteri: <?php echo strlen($censoredText)?></div>
</p>
</body>
</html>