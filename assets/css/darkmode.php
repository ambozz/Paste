<?php

//Check if cookie "darkmode" exists
//If yes show the color variables for dark mode
if(isset($_COOKIE["darkmode"])){

?>

/* Dark Mode */
:root {
    --background: #222831;
    --background-textarea: #2c3440;
    --textarea-border: #2c3440;
    --text-color: #ffffff;
    --text-color-hover: #e0e0e0;
}

<?php

}

?>