<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'wp_users';
    protected $primaryKey = 'ID';
    protected $fillable = ['user_login', 'user_pass','user_nicename', 'user_nicename', 
        'user_email', 'user_url','user_registered','user_activation_key','user_status','display_name' ];
    
    public $timestamps = false;
    
    public function myCreeds(){
        
        return $this->hasMany('App\myCRED_log', 'user_id');
    }
}
