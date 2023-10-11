<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2.4 A - Cavone Antonio</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="variabile">Variabile da trasformare</label>
        <input type="text" name="variabile" required>
        <br>
        <input type="submit" value="<- OK ->">
    </form>
    <?php include('script.php'); ?>
</body>
</html>