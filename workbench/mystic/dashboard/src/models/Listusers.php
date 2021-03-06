<?php
namespace Mystic\Listusers\Models;


class Listusers extends \Eloquent
{

    public $timestamps = true;
    protected $table = 'users';

    protected $fillable = array('id', 'name', 'contact', 'email', 'message', 'feedback');
    protected $visible = array('id', 'name', 'contact', 'email', 'message', 'feedback');

}