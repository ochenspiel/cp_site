<?php
if ($_GET['randomId'] != "pTQI3DJvJUHirK7ONISnI5UJAOkRNEuZ8fksRwtNR1GjMD1cgSH0yT2IuZ_nE5me") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
