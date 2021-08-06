<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    protected $breweries = [
        [
            "name"=>"Moe's",
            "description"=>"El mas famoso de la tele",
            "city"=>"Springfield",
            "img"=>"https://i.pinimg.com/originals/2b/a4/8c/2ba48c5bbbe17711192ad280c81a662e.jpg"
        ],
        [
            "name"=>"Piccolo Bar",
            "description"=>"Historico, el unico bar con la peroni a 1 euro",
            "city"=>"Bari",
            "img"=>"https://kocsmaturista.hu/wp-content/uploads/2017/12/kocsmaturista-bari-bar-piccolo-bar.jpg"
        ],
        [
            "name"=>"Bar Manolo",
            "description"=>"El tipico de España",
            "city"=>"Cuenca",
            "img"=>"https://10619-2.s.cdn12.com/rests/original/110_505317856.jpg"
        ],
        [
            "name"=>"Bar Manolo",
            "description"=>"El tipico de España",
            "city"=>"Cuenca",
            "img"=>"https://10619-2.s.cdn12.com/rests/original/110_505317856.jpg"
        ]
    ];
}
