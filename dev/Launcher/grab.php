<? $verification = 1 ?>

<?

set_error_handler("customError");
//session_start();
function is_animated($ava_str) {
    $das = substr($ava_str, 0, 2);
    if ($das == "a_") {
        return ".gif";
    } else {
        return ".png";
    }
}

include 'discord.php';
$clientid = "471646493422649345";
$clientsecretid = "7lhtwbmf3WoP5v7P3GNG6Gy2BjxFi0Wk";
$redirect = "https://www.axius.design/dev/Launcher/grab.php";
$scope = "identify";

init("", $redirect, $clientid, $clientsecretid);
get_user();

$extention = is_animated($_SESSION['user_avatar']);

$myfile = fopen(dirname(__FILE__). "/codes/" . str_replace(".", "", get_client_ip_env()) . ".txt", "w");
fwrite($myfile, $_SESSION['username'] . "#" . $_SESSION['discrim'] . "\n");
fwrite($myfile, $_SESSION['user_id'] . "\n");
fwrite($myfile, "https://cdn.discordapp.com/avatars/" . $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention . "\n");
fclose($myfile);
?>