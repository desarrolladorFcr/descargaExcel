<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myCRED_log extends Model
{
    protected $table= 'wp_myCRED_log';
    protected $primaryKey = 'id';
    protected $fillable = ['ref', 'ref_id', 'user_id', 'creds', 'ctype', 'time', 'entry', 'data'];
    public $timestamps = false;
    
    public function usuarios(){
        
        return $this->belongsTo('App\usuarios', 'user_id');
    }
}
