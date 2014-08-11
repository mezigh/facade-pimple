<?php

class Role extends Illuminate\Database\Eloquent\Model
{
    protected $table="roles";
    
    public function user()
    {
        return $this->hasMany('User');
    }

}