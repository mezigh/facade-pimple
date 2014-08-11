<?php

class CmsServiceProvider extends \ModuleServiceProvider
{
    public function register()
    {
        parent::register('cms');
    }
 
    public function buildRequest()
    {
        parent::boot('cms');
    }
}
