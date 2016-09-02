<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wp_woocommerce_order_items extends Model {

    protected $table = 'wp_woocommerce_order_items';
    protected $primaryKey = 'order_item_id';
    protected $fillable = ['order_item_name', 'order_item_type', 'order_id'];
    public $timestamps = false;
    
    public function woo_order_metadata(){
        
        return $this->hasMany('App\wp_woocommerce_order_itemmeta', 'order_item_id');
    }

}
