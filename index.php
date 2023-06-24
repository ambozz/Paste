<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Paste</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/darkmode.js"></script>
        <style id="darkmode">
            <?php
                include("assets/css/darkmode.php");
            ?>
        </style>
    </head>
    <body>
        <div class="darkmode_button" onclick="switchdarkmode();"></div>
        <div class="header">
            <a href="/"><h1>Paste</h1></a>
        </div>
        <div class="wrapper">
            <form method="POST" action="create.php">
                <textarea name="content"></textarea>
                <button type="submit">Paste</button>
            </form>
        </div>
        <div class="footer">
            <h3>Made with &#10084;&#65039; by Paste</h3>
        </div>
    </body>
</html>
