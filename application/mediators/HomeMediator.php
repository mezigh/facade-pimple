<?php

class HomeMediator extends \Mediator
{
	protected $context;
	
	public function __construct()
	{
        parent::__construct();
        //var_dump($this->getPathForView());
        $this->viewPath = __DIR__.'/../views/';
        View::setViewPath($this->viewPath);
	}
	
    public function setLayout(Devmedia\Application $app)
	{

        $users = User::all();
        /*$finder = Finder::files()->in(__DIR__.'/../');
        foreach ($finder as $file) {
            // affiche le chemin absolu
            print $file->getRealpath()."\n";
            // affiche le chemin relatif d'un fichier, sans le nom du fichier
            print $file->getRelativePath()."\n";
            // affiche le chemin relatif du fichier
            print $file->getRelativePathname()."\n";
        }*/
        return Response::setContent( View::make("articles",  $users , $app['paths']['public'] )->with($users) );
        
        // TODO implémenter : return View::make("viewname");
	}
    
    public function setSoon(Devmedia\Application $app)
    {
        $roles = Role::all();
        //var_dump(View::getViewPath());
        return Response::setContent( View::make("soon",  $roles , $app['paths']['public'] )->with( $roles) );
    }
    
    public function setJsonResponse(Devmedia\Application $app)
    {
        $users = User::all();
        return JsonResponse::setData($users->toArray());
//        $data = array('payload' => 'received','status'=>'active');
//        $dataCollection = Collection::make($data);
//        return JsonResponse::setData($dataCollection->toArray());

    }
    
    public function setForm(Devmedia\Application $app)
    {
        return Response::setContent( View::make("form",array("Form"=>"Submit"),$app['paths']['public'] )->with( array("Form"=>"Submit")) );
    }
    
    public function processForm()
    {
        $data = array("processing" => $_POST['name']);
        return JsonResponse::setData($data);
    }
    
    public function login(Devmedia\Application $app)
    {
        return Response::setContent( View::make("login",array("Form"=>"Submit"),$app['paths']['public'] )->with( array("Form"=>"Submit")) );
    }
    
    public function processLogin()
    {
        //var_dump($_POST);
        // TODO implement return Route::intended
        $data = array("processing" => $_POST['name']);
        return Redirect::create('http://localhost:8000/cms/pages');
        //return JsonResponse::setData($data); 
    }

    
    public function __toString()
    {
        return parent::__toString()."\\".get_class();
    }
    
	
}