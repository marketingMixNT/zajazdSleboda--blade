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
                "title" => "Pokój z dwoma łóżkami King-Size",
                "img" => "assets/images/apartments/apartment-1.jpg",
                'link' =>'#'
            ],
            [
                "title" => "Pokój czteroosobowy z balkonem",
                "img" => "assets/images/apartments/apartment-2.jpeg",
                'link' =>'#'
            ],
            [
                "title" => "Pokój dwuosobowy",
                "img" => "assets/images/apartments/apartment-3.jpeg",
                'link' =>'#'
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
                "title" => "Pokój z dwoma łóżkami typu King-Size",
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
                "title" => "Pokój czteroosobowy z balkonem",
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
                "title" => "Pokój dwuosobowy",
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
        ];


        return view('pages.apartments.index',['apartments'=>$apartments]);
    }

    public function gallery() {
        return view('pages.gallery.index');
    }
    public function restaurant() {

        $images = [
            '/assets/images/about-slider/slider--1.jpeg',
            '/assets/images/about-slider/slider--2.jpg',
            '/assets/images/about-slider/slider--3.jpg',
            '/assets/images/about-slider/slider--4.jpg',
            '/assets/images/about-slider/slider--5.jpeg',
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

        return view('pages.restaurant.index',['images'=>$images,'menu'=>$menu]);
    }

    public function menu(){
        return view('pages.menu.index');
    }
    public function singleApartament(){


        $images = [
            '/assets/images/apartments/apartment-1.jpg',
            '/assets/images/apartments/apartment-2.jpeg',
            '/assets/images/apartments/apartment-3.jpeg',
            '/assets/images/apartments/apartment-4.jpeg',
            '/assets/images/apartments/apartment-5.jpeg',
        ];

        $apartments=[
            ['title'=>'Apartament 1',
            'image'=>  '/assets/images/apartments/apartment-1.jpg'],
            ['title'=>'Apartament 2',
            'image'=>  '/assets/images/apartments/apartment-2.jpeg'],
            ['title'=>'Apartament 3',
            'image'=>  '/assets/images/apartments/apartment-3.jpeg'],
            ['title'=>'Apartament 4',
            'image'=>  '/assets/images/apartments/apartment-4.jpeg'],
            ['title'=>'Apartament 5',
            'image'=>  '/assets/images/apartments/apartment-5.jpeg'],
        ];

        return view('pages.single-apartament.index',['images'=>$images,'apartaments'=>$apartments]);
    }


    public function contact(){
        return view('pages.contact.index');
    }
}
