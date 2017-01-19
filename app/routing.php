<?php
require_once ('app/controllers/mainController.php');
$controller = new MainController();
$siteFolder = '/auslogics1';
if ($url = getRequestUrl()) {
    if (!empty($siteFolder))
        $siteFolder = preg_quote($siteFolder, "/");

    if (preg_match('/^'.$siteFolder.'\/files\/[^\.\/]+.exe$/i', $url))
        $controller->test1();

    if (preg_match('/^'.$siteFolder.'\/test2$/i', $url))
        $controller->test2();

    if (preg_match('/^'.$siteFolder.'\/test3$/i', $url))
        $controller->test3();

}