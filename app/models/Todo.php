<?php

class Todo extends \Eloquent {
	protected $fillable = ['id', 'token', 'body', 'completed'];

    /**
    * cast "0" and "1" string in true and false in todo route output
    */
    public function getCompletedAttribute($value)
    {
        return (boolean) $value;
    }
}