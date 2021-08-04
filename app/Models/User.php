<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'fname',
        'lname',
        'mpno',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function statusR(){

        $data_ = [
            "a" => [
                "name" => "Aktif",
                "style" => "success"
            ],
            "p" => [
                "name" => "Pasif",
                "style" => "secondary"
            ],
            "t" => [
                "name" => "Çöpte",
                "style" => "danger"
            ],
        ];

        $html = '<div style="width: 70px;
                            height: 30px;
                            align-items: center;
                            align-content: center;
                            text-align: center;
                            padding-top: 2px;"
                            class="card bg-'
            . $data_[$this->status]["style"] .
            ' text-white shadow">'
            . $data_[$this->status]["name"] .
            '</div>';

        return $html;
    }
}
