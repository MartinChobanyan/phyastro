<?php
// объявляем работу с сессиями
session_start();
// Defend stage - 1
if (isset($_SESSION["telecod_ip"])) {
    $t = ((int)(time()-$_SESSION["telecod_ip"]));
    if ($t < 1) 
    	die('<title>SDF - Server Defend System</title><h2>Server Defend System<sup style="font-size:8px">Powered by Martin</sup></h2><p style="top: 10px">&nbsp&nbspՀամակարգին կատարվել է չափազանց շատ դիմում փոքր ժամանակահատվածում։</p>');
}

$_SESSION["telecod_ip"]=time();
?>