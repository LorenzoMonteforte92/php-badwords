<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="censored.php" method="GET">
        <div>
            <label for="censored-word">parola da censurare</label>
            <input type="text" name="userWord" id="censored-word" required>
        </div>
        <div>
            <label for="">testo censurato</label>
            <textarea name="userText" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" >Submit</button>
    </form>
</body>
</html>