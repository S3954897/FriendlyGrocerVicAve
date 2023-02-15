<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Friendly Grocer - Victoria Ave</title>
    <link id="stylecss" type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <?php include "phpMain.php"; ?>
</head>
    <body>
        <header>
            <h1>Settings</h1>
        </header>
        <main>
            <form action="settings.php" method="post">
                <input type="text" name="menu_item">
                <input type="text" name="price">
                <br>
                <input type="submit" name="newItem" value="Submit">

            </form>
        </main>
    </body>
</html>

