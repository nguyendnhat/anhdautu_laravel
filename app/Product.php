<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $fillable = [
        'name_en','name_vn','price','img','view','alias_vn',"alias_en",'content_en','content_vn','description_vn','description_en','ma_sp','meta_title_en','meta_title_vn','meta_keyword','meta_description','tieubieu','noibat','khuyenmai','cate_id','view'
    ];
    public function tag(){
    	return $this->hasMany(Tag_product::class);
    }
    public function cate(){
    	return $this->belongsTo(Cate::class);
    }
}
