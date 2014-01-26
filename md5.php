<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    if (substr($file, -1, 1) == "*") {
        $folder = str_replace("*", "", $file);
        showDir($folder, 0);
    } else {
        echo 'MD5-Dateihash von <b>' . $file . '</b>: ' . md5_file($file);
    }
}
function showDir($folder, $level)
{
    $handle = opendir($folder);
    while (false !== ($file = readdir($handle))) {
        if ($file == "." || $file == "..") {
            //do nothing
        } elseif (is_dir($folder . $file)) {
            $level++;
            //if ($level < 10){ //rekursion max 5
            showDir($folder . $file . "/", $level);
            //}
        } else {
            // action - get md5
            $resultat = md5_file($folder . $file) . " " . $folder . $file;

            $original = str_replace("*", "", $_GET['file']); // replace * on the end of file param
            echo str_replace($original, "", $resultat) . "<br>"; //remove original file parameter @ result

        }
    }
    closedir($handle);
}
?>