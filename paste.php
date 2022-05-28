<?php
// Import config.php
require_once("config.php");

if(!isset($_GET["p"])){
    exit("Error p not defined.");
}

$content = "";

if($stmt = mysqli_prepare($mysqli, "SELECT content FROM pastes WHERE id = ?")){
    mysqli_stmt_bind_param($stmt, "s", $param_id);
    $param_id = $_GET["p"];

    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $temp_content);

    while( $stmt->fetch() ) {
        $content = $temp_content;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pastehub</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header">
            <a href="/"><h1>Pastehub</h1></a>
        </div>
        <div class="wrapper">
            <form>
                <textarea name="content" readonly><?php echo htmlspecialchars($content); ?></textarea>
            </form>
        </div>
        <div class="footer">
            <h3>Made with ❤️ by Pastehub</h3>
        </div>
    </body>
</html>