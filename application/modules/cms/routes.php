<?php

Route::get('/cms',"CmsMediator::setLayout");
Route::get('/cms/users',"CmsMediator::showUsers");
Route::get('/cms/pages',"CmsMediator::showPages");
