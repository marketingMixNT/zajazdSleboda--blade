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

    public function apartments () {


        $apartments = [
            [
                "title" => "Apatrament 1",
                "img" => "assets/images/apartments/apartment-1.jpg",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface"=>"50 m2",
                "persons"=>'max 4 os.',
                "bed"=>'dwuosobowe',
                'link'=>'#'
            ],
            [
                "title" => "Apatrament 2",
                "img" => "assets/images/apartments/apartment-2.jpeg",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface"=>"50 m2",
                "persons"=>'max 4 os.',
                "bed"=>'dwuosobowe',
                'link'=>'#'
            ],
            [
                "title" => "Apatrament 3",
                "img" => "assets/images/apartments/apartment-3.jpeg",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface"=>"50 m2",
                "persons"=>'max 4 os.',
                "bed"=>'dwuosobowe',
                'link'=>'#'
            ],
            [
                "title" => "Apatrament 4",
                "img" => "assets/images/apartments/apartment-4.jpeg",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface"=>"50 m2",
                "persons"=>'max 4 os.',
                "bed"=>'dwuosobowe',
                'link'=>'#'
            ],
            [
                "title" => "Apatrament 5",
                "img" => "assets/images/apartments/apartment-5.jpeg",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface"=>"50 m2",
                "persons"=>'max 4 os.',
                "bed"=>'dwuosobowe',
                'link'=>'#'
            ],
        ];


        return view('pages.apartments.index',['apartments'=>$apartments]);
    }
}
