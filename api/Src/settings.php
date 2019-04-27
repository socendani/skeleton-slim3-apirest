<?php
// Init params
define("CODIGO", "999999");
define("SHORTCAPTION", "subfolder");
$host = $_SERVER["HTTP_HOST"];
$subfolder = "";

//view errors during development or needed
if (1 == 2) {
    error_reporting(E_ALL ^ E_STRICT);
    ini_set('display_errors', 'On');
} else {
    error_reporting(0);
    ini_set('display_errors', 'Off');
}

//Params base of $host
switch ($host) {

    case (substr($host, 0, 6) == "local."):
    case (substr($host, 0, 5) == "local"):
        define("DMR_ENV", "local");
        $subfolder = SHORTCAPTION;
        error_reporting(E_ALL ^ E_STRICT);
        ini_set('display_errors', 'On');
        break;
    case (substr($host, 0, 5) == "test."):
    case (stristr($host, ".test.") != ""):
        define("DMR_ENV", "test");
        break;
    case (stristr($host, ".hist.") != ""):
        define("DMR_ENV", "hist");
        error_reporting(0);
        ini_set('display_errors', 'Off');
    default:
        define("DMR_ENV", "prod");
        error_reporting(0);
        ini_set('display_errors', 'Off');
        break;
}
define("FILES_PATH", $_SERVER["DOCUMENT_ROOT"] . "/" . $subfolder . "files/");
define("FILES_URL", $host . "/" . $subfolder . "files/");
define("EMAIL_TEMPLATE", FILES_PATH . "emails/");
define("EMAIL_WEBMASTER", "socendani@gmail.com");
define("DEBUG", FALSE);

//FIXME: No need ¿?
define("API_KEY", "xxxxx");


//Parametrized Object
$settings['local'] = [
    'db' => [
        'database' => 'xxxx',
        'username' => 'xxxx',
        'password' => 'xxxx',
    ],
];





/// Settings de salida
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        'ID' => CODIGO,
        'API-KEY' => API_KEY,


        // Database settings
        'db' => array_merge([
            'host' => 'localhost',
            'driver' => 'mysql',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ], $settings[DMR_ENV]['db']),


        //For AUTH-JWT
        'auth' => [
            'secret' => 'xxxxx',
            'expires' => 30, // in minutes
            'hash' => xxxxxx,
            'jwt' => 'HS256'
        ]
    ],
];
