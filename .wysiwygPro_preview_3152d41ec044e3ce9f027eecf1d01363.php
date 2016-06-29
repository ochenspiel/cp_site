<?php
if ($_GET['randomId'] != "zHZyEI_qGX37yZG10HIRT_E_ixydDIafWpPEF0X6PZG38hZoOTkUTZ1PBtjXkMPb") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
