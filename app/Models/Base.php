<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Base extends Model
{
    use HasFactory;
    public function defaultListingConfigs(){
        return array(
             array(
                 'field' => "updated_at",
                 'name'=>'Ngày cập nhật',
                 'type'=> 'text'
             ),
             array(
                 'field' => "created_at",
                 'name'=>'Ngày khởi tạo',
                 'type'=> 'text'
             ),
             array(
                'field' => "copy",
                'name'=>'copy',
                'type'=> 'copy'
            ),
            array(
                'field' => "edit",
                'name'=>'Sửa',
                'type'=> 'edit'
            ),
            array(
                'field' => "delete",
                'name'=>'Xoá',
                'type'=> 'delete'
            )
 
        );
        
     }
}
