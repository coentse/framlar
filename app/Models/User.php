<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','appid','appkey','mch_id','image','desc','state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'appkey'
    ];

    public function getKeyValue(){
        return self::pluck('name','id')->toArray();
    }

    public function baseInfo(){
        return [
            'id'        => $this->id,
            'appid'     => $this->appid,
            'appkey'    => $this->appkey,
            'mch_id'    => $this->mch_id,
            'image'     => $this->image,
            'desc'      => $this->desc,
            'state'     => $this->state,
        ];
    }
}