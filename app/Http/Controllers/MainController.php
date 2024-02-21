<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {

        $images = [
            '/assets/images/about-slider/slider--1.jpeg',
            '/assets/images/about-slider/slider--2.jpg',
            '/assets/images/about-slider/slider--3.jpg',
            '/assets/images/about-slider/slider--4.jpg',
            '/assets/images/about-slider/slider--5.jpeg',
        ];

        $apartments = [
            [
                "title" => "Apatrament 1",
                "img" => "assets/images/apartments/apartment-1.jpg"
            ],
            [
                "title" => "Apatrament 2",
                "img" => "assets/images/apartments/apartment-2.jpeg"
            ],
            [
                "title" => "Apatrament 3",
                "img" => "assets/images/apartments/apartment-3.jpeg"
            ],
            [
                "title" => "Apatrament 4",
                "img" => "assets/images/apartments/apartment-4.jpeg"
            ],
            [
                "title" => "Apatrament 5",
                "img" => "assets/images/apartments/apartment-5.jpeg"
            ],
        ];
        $menu = [
            [
                "title" => "Szef Kuchni poleca",
                "img" => "assets/images/menu/chef.jpeg"
            ],
            [
                "title" => "Sałatki",
                "img" => "assets/images/menu/salad.jpeg"
            ],
            [
                "title" => "Zupy",
                "img" => "assets/images/menu/soup.jpeg"
            ],
            [
                "title" => "Zestawy",
                "img" => "assets/images/menu/set.jpeg"
            ],
            [
                "title" => "Pizza",
                "img" => "assets/images/menu/pizza.jpeg"
            ],
            [
                "title" => "Napoje",
                "img" => "assets/images/menu/drink.jpeg"
            ],
        ];



        return view('pages.home.index', ['images' => $images,'apartments'=>$apartments,'menu'=>$menu]);
    }
}
