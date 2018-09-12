<link rel="stylesheet" href="https://www.axius.design/static/css/style.css" type="text/css">
<link href="https://www.axius.design/static/fonts/stylesheet.css" rel="stylesheet" type="text/css">
<style>
hb {
    display: block;
    unicode-bidi: isolate;
    -webkit-margin-before: 2.5em;
    -webkit-margin-start: auto;
    -webkit-margin-end: auto;
    overflow: hidden;
}
upper {
    display: block;
    margin: 0;
    color: #111;
    font-family: "Open Sans";
    text-transform: capitalize;
}
</style>
<?
include 'Parse/Parsedown.php';
$Parsedown = new Parsedown();
if ($_GET['license'] != null) {
    if(file_exists('raw/' . $_GET['license'] . '.txt')) {
        echo "<upper>License viewer for license: " . strtoupper($_GET['license']) . ".</upper>";
        echo "<upper> View the raw license <a href=\"https://www.axius.design/licenses/raw/" . $_GET['license'] . ".txt\">here</a>.</upper>";
        echo "<upper> Download the raw license <a href=\"https://www.axius.design/licenses/download.php?license=" . $_GET['license'] . "\">here</a></p>";
        echo "<hb></hb>";
        $file = file_get_contents('raw/' . $_GET['license'] . '.txt');
        echo $Parsedown->text($file);
    }
    else echo "<upper>The license specified wasn't found. Please click <a href=\"https://www.axius.design\">here</a> to return to the main site.</upper>";
}
else {
    $scanned = array_diff(scandir('raw'), array('..', '.'));
    echo "<p>All licenses search results. " . count($scanned) . " License files found!</p><br>";
    foreach($scanned as $a) {
        $file = preg_replace('/\\.[^.\\s]{3,4}$/', '', $a);
        echo "<h2>" . $file . "<h2>";
        echo "<p>View the license <a href=\"https://www.axius.design/licenses/index.php?license=" . $file . "\">here</a>.</p>";
        echo "<p>License last edited - " . date("F d Y H:i:s.", filemtime("raw/" . $a));
        echo "<hr>";
    }
}
?>