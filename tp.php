<?php
if (!isset($_REQUEST["url"])) {
    echo '<form method="post"><input name="url" type="text"><input type="submit" value="Open"></form>';
    exit;
}
echo file_get_contents($_REQUEST["url"]);
?>
