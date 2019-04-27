<?php
namespace Src\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    // protected $table = "users";
    protected $guarded = array('id');
    private $id = 0;
    public $timestamps = false;
    protected $fillable = ['username', 'password']; // for mass creation
    protected $hidden = ['password', 'deleted_at']; // hidden columns from select results
    protected $dates = ['deleted_at']; // the attributes that should be mutated to dates


    // public function courses()
    // {
    //     return $this->belongsToMany('Models\Course');
    // }
    // public function all()
    // {
    //     echo "YHHH";
    // }

    public function get($query)
    { }
}
