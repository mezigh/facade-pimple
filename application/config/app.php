<?php

return array(

	'debug' => true,
	'url' => 'http://localhost',
    'url.dev' => 'http://localhost:8000',
	'timezone' => 'Europe/Paris',
	'locale' => 'fr',

	//'key' => 'grANNCFUZUm9xztTBRTSHFtyIN5jMkkr',

	'providers' => array(

		"Devmedia\Signals\SignalServiceProvider",
        // "Devmedia\Config\ConfiguratorServiceProvider",
        "Devmedia\Routing\RouteCollectionServiceProvider",
        "Devmedia\Auth\AuthServiceProvider",
        "Devmedia\Routing\RouteServiceProvider",
        "Devmedia\Routing\RouterServiceProvider",
        "Devmedia\Routing\RequestContextServiceProvider",
        "Devmedia\Routing\UrlMatcherServiceProvider",
        "Devmedia\Routing\UrlGeneratorServiceProvider",
        "Devmedia\WebFoundation\ResponseServiceProvider",
        "Devmedia\WebFoundation\JsonResponseServiceProvider",
        "Devmedia\WebFoundation\RedirectResponseServiceProvider",
        "Devmedia\WebFoundation\RequestServiceProvider",
        "Devmedia\WebFoundation\Session\SessionServiceProvider",
        "Devmedia\WebKernel\ControllerResolverServiceProvider",
        "Devmedia\DataOrm\CapsuleServiceProvider",
        "Devmedia\View\ViewServiceProvider",
        "Devmedia\View\TwigServiceProvider",
        "Devmedia\FileSystem\FileSystemServiceProvider",
        "Devmedia\Finder\FinderServiceProvider",
        "Devmedia\Hashing\HashingServiceProvider",
        "Devmedia\Utility\CollectionServiceProvider",
        "CmsServiceProvider"
	),

	'aliases' => array(

		"Devmedia\Facades\View"=>"View",
        "Devmedia\Facades\Response"=>"Response",
        "Devmedia\Facades\JsonResponse"=>"JsonResponse",
        "Devmedia\Facades\Route"=>"Route",
        "Devmedia\Facades\Signal"=>"Signal",
        "Devmedia\Facades\RedirectResponse"=>"Redirect",
        "Devmedia\Facades\UrlGenerator"=>"Url",
        "Devmedia\Facades\Configurator"=>"Config",
        "Devmedia\Facades\Collection"=>"Collection",
        "Devmedia\Facades\Session"=>"Session",
        "Devmedia\Facades\Auth"=>"Auth",
        "Devmedia\Facades\Hash"=>"Hash",
        "Devmedia\Facades\File"=>"File",
        "Devmedia\Facades\Finder"=>"Finder",
        "Devmedia\Facades\Twig"=>"Twig"
	),

);
