<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	public $timestamps=false;
    protected $fillable = [
      'logo','meta_title','meta_keywords','meta_description','facebook','twitter','google','youtube','skype','home_id1','home_num_id1','home_id2','home_num_id2','home_intro_video1','home_intro_video2','home_intro_video3','home_intro_video4','footer_left','footer_right','home_intro_partner','home_intro_customer','home_select','home_select_1a','home_select_2a','home_select_3a','home_select_4a','list_num_project','list_num_pages','favicon','copyright','home_select_1b','home_select_2b','home_select_3b','home_select_4b','home_intro_partner2','help_img1','help_description1','help_page1','help_img2','help_description2','help_page2','email_lienhe','num_sidebar','tu_van','chi_tiet_sidebar','tiendo','tiendo_img', 'hotline_img', 'hotline_img2',
        'hotline', 'hotline2'
    ];
}
