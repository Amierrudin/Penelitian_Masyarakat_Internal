<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengusul extends Model
{
    protected $table = 'pengusul';
    protected $fillable = ['nama_lengkap','brithdate','agama','jenis_kelamin','email','telphone','avatar','user_id','role'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.png');
        }

        return asset('images/'.$this->avatar);
    }
}
