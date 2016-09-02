<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'wp_posts';
    protected $primaryKey = 'ID';
    protected $fillable = ['post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title',
        'post_excerpt', 'post_status', 'comment_status', 'post_name', 'to_ping', 'pinged',
        'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'menu_order', 'post_type', 
        'post_mime_type', 'comment_count'];
    public $timestamps = false;
    
    public function postmetas(){
        
        return $this->hasMany('App\Postmeta', 'post_id');
    }
    
    public function woo_order_items(){
        
        return $this->hasMany('App\wp_woocommerce_order_items', 'order_id');
    }
}
