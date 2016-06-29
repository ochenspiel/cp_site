<?php
if ($_GET['randomId'] != "MN4KuRhI_2uBPS_c6nJRE_JuQjyWCMms3arlCRtlwA4C3HojNqIDbRsUeBMcmk8L") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
