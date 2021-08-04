<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ["title", "description", "slug", "status"];

    use HasFactory;

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
