<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
	protected $fillable = [
        'title','img','alias','content','description','meta_title','meta_keywords','meta_description','file','page_id','source','investment_capital','large','status','finish','uu_dai', 'tong_quan','vi_tri','tien_ich','giai_phap','chinh_sach','address','price','phone'
    ];
    public function page(){
    	return $this->belongsTo(Page::class);
    }
     public function relate(){
    	return $this->hasMany(Post_relate::class);
    }
     public function calendar(){
    	return $this->hasMany(Calendar::class);
    }
    public function tab(){
        return $this->hasMany(Tab::class);
    }
}
