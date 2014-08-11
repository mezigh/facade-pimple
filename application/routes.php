<?php


Route::get('/soon',"HomeMediator::setSoon");
Route::get('/json',"HomeMediator::setJsonResponse");
Route::post('/process',"HomeMediator::processForm");
Route::get('/bye',"HomeMediator::setForm");
Route::post('/loginprocess',"HomeMediator::processLogin");
Route::get('/login',"HomeMediator::login");
Route::get('/',"HomeMediator::setLayout");

Route::group(array("prefix"=>"/admin","filter"=>"auth"),function () {
    Route::addToGroup('','GET' ,function(){return Response::setContent("ADMIN HOME");});
    Route::addToGroup('/users','GET' ,function(){return Response::setContent("ADMIN DES USERS");});
    Route::addToGroup('/articles','GET', function(){
        //Url::generate("/soon",array(),true);
        return Redirect::setTargetUrl("/soon");; 
    });
    
});