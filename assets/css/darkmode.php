<?php

//Set CSS MIME Type as Header
header("Content-Type: text/css");

//Check if cookie "darkmode" equals 1
//If yes show the color variables for dark mode
if($_COOKIE["darkmode"] == 1){

?>

/* Dark Mode */
:root {
    --background: #222831;
    --background-textarea: #2c3440;
    --text-color: #ffffff;
    --text-color-hover: #e0e0e0;
}

<?php

}

?>