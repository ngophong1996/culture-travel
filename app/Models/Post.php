<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Post extends Base
{
    use HasFactory;
    public function listingConfigs(){
        $defaultListingConfigs = parent::defaultListingConfigs();
        $listingConfigs= array(
            array(
                'field' => 'id',
                'name'=>'ID',
                'type'=> 'text'
            ),
            array(
                'field' => "user_id",
                'name'=>'ID người dùng',
                'type'=> 'text'
            ),
            array(
                'field' => "area",
                'name'=>'Địa chỉ',
                'type'=> 'text'
            ),
            array(
                'field' => "title",
                'name'=>'Tiêu đề',
                'type'=> 'text'
            ),
            array(
                'field' => "image",
                'name'=>'Ảnh',
                'type'=> 'image'
            )

       );

       return array_merge($listingConfigs, $defaultListingConfigs);
    }
    
    protected $fillable = [
        'user_id',
        'area',
        'title',
        'image',
        'content',
    ];
}
