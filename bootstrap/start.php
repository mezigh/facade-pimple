<?php
date_default_timezone_set('Europe/Paris');

$vartags = array();

function addTag($tagName,$message)  {
  $vartags[$tagName] = $message;
  return $vartags;
}

function varD($message,$subjet) {
    
    var_dump(addTag($message,$message));
    if(is_array($subjet)) {
        foreach ($subjet as $key => $value) {
            var_dump($key);
            var_dump("---");
            var_dump($value);
        }
    } elseif (is_object($subjet)) {
       var_dump(get_class($subjet));
       
    } else {
        var_dump($subjet);
    }
    //var_dump("--------------------");
}

function enableTag($tag) {
    
}

use Devmedia\Application;
use Devmedia\ToolBox;
use Devmedia\Facade;
use Devmedia\Config\Configurator as Config;
use Devmedia\Security\Firewall;
use Symfony\Component\Finder\Finder as SymfonyFinder;
use Symfony\Component\HttpKernel\HttpCache\HttpCache;
use Symfony\Component\HttpKernel\HttpCache\Store;

//Config files
$confPath = __DIR__.'/../application/config';
$bootstrap = __DIR__;

$confFiles = array($confPath,$bootstrap);
$config = new Config(new SymfonyFinder());
$config->buildConfig($confFiles);

$firewall = new Firewall();

//var_dump($config);

$app = new Application();
$toolbox= new ToolBox($app);
$app['toolbox'] = $toolbox;
$app->instance('app', $app);
$app->instance('config',$config); 
$app->init();

/**
 * HTttpCache
 */
$framework = new HttpCache($app, new Store(__DIR__.'/../cache'));

// EDIT OF THE 6 JULY 2014  var_dump($framework);

//$toolbox->visit($app);
//var_dump($toolbox);

/**
 * Facades
 */
Facade::clearResolvedInstances();
Facade::setFacadeApplication($app);
//varD("AFTER FACADES",$app);

/**
 * Routes
 */
require __DIR__ . '/../application/routes.php';
//varD("AFTER routes.php",$app);

/**
 * Modules Routes
 */
if (file_exists($app['modules.routes'])) {
    require $app['modules.routes'];
}
//varD("AFTER modules.routes",$app);

/**
 * Modules Config
 */
if (file_exists($app['modules.config'])) {
    $myArray = require $app['modules.config'];
}
//varD("AFTER modules.config",$app);

$app->requestSignal->add(function($request) use($firewall){
    $firewall->onRequestSignal($request);
});

$handlableRequest = $app->webFoundation($app['request']);
//$sendableResponse = $app->handle($handlableRequest);

$cachableResponse = $framework->handle($handlableRequest);
//$cachableResponse->setPublic();
//$cachableResponse->setPrivate();
//$cachableResponse->setMaxAge(600);
//$cachableResponse->setSharedMaxAge(600);
$cachableResponse->setTtl(50);
$cachableResponse->send();
/*
if($response instanceof \Symfony\Component\HttpFoundation\Response) {
    $response->setMaxAge(60);
    $response->setTtl(10);
}
*/
