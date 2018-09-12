<?
if ($_GET['license'] != null) {
    if(file_exists('raw/' . $_GET['license'] . '.txt')) {
        $file_url = 'https://www.axius.design/licenses/raw/' . $_GET['license'] . '.txt';
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile('raw/' . $_GET['license'] . '.txt');
        echo "<meta http-equiv=\"refresh\" content=\"0;url=" . $_GET['redirect'] . "\">";
    }
    else echo "<meta http-equiv=\"refresh\" content=\"0;url=" . $_GET['redirect'] . "\">";
}
else {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=" . $_GET['redirect'] . "\">";
}
?>