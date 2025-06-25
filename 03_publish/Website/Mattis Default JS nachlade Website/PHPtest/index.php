<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zähler</title>
</head>
<body>
    <h1>Aktuelle Nummer: <?php echo $_SESSION['counter']; ?></h1>
    <form method="post">
        <button type="submit">Hochzählen</button>
    </form>
</body>
</html>