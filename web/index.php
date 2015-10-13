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

include_once "../core/database/MySQLDriver.php";

$driver = new MySQLDriver();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
    <script src="extern/react-0.13.3.js"></script>
    <script src="extern/babel-5.8.25.browser.js"></script>
    <style>
        * { font: 12px/1.4 Helvetica, arial, nimbussansl, liberationsans, freesans, clean, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol";
        	color: #333;
        	padding: 0px;
        	margin: 0px;
        }
    </style>
</head>

<body>
    <?php $driver->connect(); ?>
    <div id="example"></div>
    <script type="text/babel">
        React.render(
        <h1>Hello, world!</h1>,
            document.getElementById('example')
        );
    </script>
</body>

</html>