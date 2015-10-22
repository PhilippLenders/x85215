<?php
/**
 * Created by PhpStorm.
 * User: philipp
 * Date: 02.10.2015
 * Time: 12:17
 */
require_once "../extern/log4php/Logger.php";
require_once "../extern/log4php/LoggerMDC.php";

Logger::configure('../log4php.xml');
LoggerMDC::put("login", "phil");
$log = Logger::getLogger("new");

// include_once "../core/database/MySQLDriver.php";

// $driver = new MySQLDriver();

//Remove request parameters:
echo $_SERVER['REQUEST_URI'];
list($path) = explode('?', $_SERVER['REQUEST_URI']);
//Remove script path:
$path = substr($path, strlen($_SERVER['SCRIPT_NAME'])+1);
//Explode path to directories and remove empty items:
$pathInfo = array();
foreach (explode('/', $path) as $dir) {
    if (!empty($dir)) {
        $pathInfo[] = urldecode($dir);
    }
}
if (count($pathInfo) > 0) {
    //Remove file extension from the last element:
    $last = $pathInfo[count($pathInfo)-1];
    list($last) = explode('.', $last);
    $pathInfo[count($pathInfo)-1] = $last;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
    <!-- <script src="extern/react-0.14.0.js"></script>-->
    <!-- <script src="extern/react-0.14.0-dom.js"></script>-->
    <!-- <script src="extern/babel-5.8.25.browser.js"></script>-->
    <!-- <script src="extern/jquery-2.1.4.js"></script>-->
    <!-- <script src="extern/angular-1.4.7.js"></script>-->
    <style>
        * { font: 12px/1.4 Helvetica, arial, nimbussansl, liberationsans, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";
        	color: #333;
        	padding: 0px;
        	margin: 0px;
        }
    </style>
</head>

<body>
    <?php //$driver->connect(); ?>
    <?php echo 'great'; ?>
    <?php
        foreach ($pathInfo as $path) {
            echo 'path: ' + $path;
        }
    ?>
    <div id="content"></div>
    <!-- <script type="text/babel" src="script/example.js"></script>-->
</body>

</html>