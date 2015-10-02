<?php
/**
 * Created by PhpStorm.
 * User: philipp
 * Date: 02.10.2015
 * Time: 12:17
 */
include_once "../core/database/MySQLDriver.php";

$driver = new MySQLDriver();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
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
</body>

</html>