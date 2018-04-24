<?php

namespace App\Modules\Home\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $table = 'photo';
    protected $guarded = ['id'];
    public function photoCate()
    {
        return $this->belongsTo(PhotoCate::class,'cate_id','id');
    }
    public function User()
    {
        return $this->belongsTo(Userinfo::class,'userid','id');
    }
}