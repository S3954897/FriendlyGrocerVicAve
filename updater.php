<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <title>Friendly Grocer - Victoria Ave</title>
    <link id="stylecss" type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
</head>
    <body>
        <header>
            <h1>Updater</h1>
        </header>
        <main>
            <button onclick="<?php header("Refresh:0; url=/index.php")?>">Refresh Menu</button>
        </main>
    </body>
</html>

