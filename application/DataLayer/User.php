<?php

class User extends Illuminate\Database\Eloquent\Model
{
    protected $table = "users";
    
    public function role()
    {
        return $this->belongsTo('Role');
    }
}