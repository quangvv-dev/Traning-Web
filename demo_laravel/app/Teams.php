<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    //
    protected $table = 'teams';
    public $timestamps = false;
    protected $fillable = ['id','name','description','logo','leader_id'];
    protected $primaryKey = 'id';
}
