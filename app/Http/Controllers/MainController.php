<?php

namespace App\Http\Controllers;
use App\Services\ApartmentService;


class MainController extends Controller
{

//MAKE ONE ARRAY WITH APARTMENT COMPATIBILE WITH ALL COMPONENTS change image to img etc...
//THE SAME FOR MENU
//FOR MENU LIST MAKE NEW CLASS
// class MenuService
// {
//     public function getDesserts()
//     {
//         return [
//             [
//                 "title" => "Puchar lodowy",
//                 "ingredients" => "3 gałki lodów, bita śmietana, owoce, polewa",
//                 "price" => "20",
//             ],
//             [
//                 "title" => "Szarlotka z bitą śmietaną",
//                 "ingredients" => "",
//                 "price" => "15",
//             ],
//             [
//                 "title" => "Szarlotka na ciepło z gałką lodów",
//                 "ingredients" => "",
//                 "price" => "18",
//             ],
//         ];
//     }
// }




    protected $apartments;

    public function __construct()
    {
        $apartmentService = new ApartmentService();
        $this->apartments = $apartmentService->getApartments();
    }

   




    public function home()
    {

        $images = [
            '/assets/images/about-slider/slider--1.jpeg',
            '/assets/images/about-slider/slider--2.jpg',
            '/assets/images/about-slider/slider--3.jpg',
            '/assets/images/about-slider/slider--4.jpg',
            '/assets/images/about-slider/slider--5.jpeg',
        ];

        // $apartments = [
        //     [
        //         "title" => "Pokój z dwoma łóżkami King-Size",
        //         "img" => "assets/images/apartments/apartment-1.jpg",
        //         'link' => '#'
        //     ],
        //     [
        //         "title" => "Pokój czteroosobowy z balkonem",
        //         "img" => "assets/images/apartments/apartment-2.jpeg",
        //         'link' => '#'
        //     ],
        //     [
        //         "title" => "Pokój dwuosobowy",
        //         "img" => "assets/images/apartments/apartment-3.jpeg",
        //         'link' => '#'
        //     ],
        // ];



        $menu = [
            [
                "title" => "Szef Kuchni poleca",
                "img" => "assets/images/menu/chef.jpeg",
                "link" => "/menu#szef_kuchni_poleca"
            ],
            [
                "title" => "Sałatki",
                "img" => "assets/images/menu/salad.jpeg",
                "link" => "/menu#sałatki"
            ],
            [
                "title" => "Zupy",
                "img" => "assets/images/menu/soup.jpeg",
                "link" => "/menu#zupy"
            ],
            [
                "title" => "Zestawy",
                "img" => "assets/images/menu/set.jpeg",
                "link" => "/menu#zestawy"
            ],
            [
                "title" => "Pizza",
                "img" => "assets/images/menu/pizza.jpeg",
                "link" => "/menu#pizza"
            ],
            [
                "title" => "Napoje",
                "img" => "assets/images/menu/drink.jpeg",
                "link" => "/menu#napoje"
            ],
        ];



        return view('pages.home.index', ['images' => $images, 'apartments' => $this->apartments, 'menu' => $menu]);
    }

    public function apartments()
    {


        // $apartments = [
        //     [
        //         "title" => "Pokój z dwoma łóżkami typu King-Size",
        //         "img" => "assets/images/apartments/apartment-1.jpg",
        //         "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
        //         officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
        //         eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
        //         consequatur ullam?",
        //         "surface" => "50 m2",
        //         "persons" => 'max 4 os.',
        //         "bed" => 'dwuosobowe',
        //         'link' => '#'
        //     ],
        //     [
        //         "title" => "Pokój czteroosobowy z balkonem",
        //         "img" => "assets/images/apartments/apartment-2.jpeg",
        //         "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
        //         officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
        //         eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
        //         consequatur ullam?",
        //         "surface" => "50 m2",
        //         "persons" => 'max 4 os.',
        //         "bed" => 'dwuosobowe',
        //         'link' => '#'
        //     ],
        //     [
        //         "title" => "Pokój dwuosobowy",
        //         "img" => "assets/images/apartments/apartment-3.jpeg",
        //         "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
        //         officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
        //         eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
        //         consequatur ullam?",
        //         "surface" => "50 m2",
        //         "persons" => 'max 4 os.',
        //         "bed" => 'dwuosobowe',
        //         'link' => '#'
        //     ],
        // ];


        return view('pages.apartments.index', ['apartments' => $this->apartments]);
    }

    public function gallery()
    {
        return view('pages.gallery.index');
    }
    public function restaurant()
    {

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

        return view('pages.restaurant.index', ['images' => $images, 'menu' => $menu]);
    }

    public function menu()
    {

        $chefChoice = [
            [
                "title" => "Golonka po bawarsku cena wg wagi /100g",
                "ingredients" => "pieczywo, chrzan, musztarda",
                "price" => "8",
            ],
            [
                "title" => "Polędwiczki w sosie borowikowym",
                "ingredients" => "sos borowikowy, placki ziemniaczane, surówka",
                "price" => "45",
            ],
            [
                "title" => "Pierś z kaczki",
                "ingredients" => "ziemiaki, buraczki zasmażane, sos żurawinowy",
                "price" => "45",
            ],
            [
                "title" => "Żeberka w sosie barbecue",
                "ingredients" => "ziemniak pieczony, śmietana",
                "price" => "45",
            ],
            [
                "title" => "Korytko (dla dwóch osób)",
                "ingredients" => "żeberko, filet z grilla, golonka, pierogi ruskie (domowej roboty), ziemniaki opiekane, kapusta zasmażana",
                "price" => "90",
            ],
            [
                "title" => "Pstrąg z patelni cena wg wagi / 100 g",
                "ingredients" => "",
                "price" => "10",
            ],
            [
                "title" => "Hamburger Wołowy",
                "ingredients" => "pomidor, ogórek kiszony, krążki cebulowe, sos do burgera",
                "price" => "30",
            ],
        ];

        $salad = [
            [
                "title" => "Sałatka grecka",
                "ingredients" => "sałata, ser feta, pomidor, ogórek, oliwki, czerwona cebulka, sos winegret, grzanka",
                "price" => "25",
            ],
            [
                "title" => "Sałatka pasterska",
                "ingredients" => "sałata, boczek, oscypek, jajko gotowane, pomidor, ogórek, sos winegret, grzanka",
                "price" => "30",
            ],
            [
                "title" => "Sałatka z grillowanym kurczakiem",
                "ingredients" => "sałata, pomidor, ogórek, grilowany kurczak, sos winegret, grzanka",
                "price" => "30",
            ],

        ];

        $appetizers = [
            [
                "title" => "
Oscypek z grila z żurawiną",
                "ingredients" => "",
                "price" => "13",
            ],
            [
                "title" => "Moskol pasterski z masłem czosnkowym",
                "ingredients" => "",
                "price" => "12",
            ],
        ];
        $soups = [
            [
                "title" => "
                Zupa dnia",
                "ingredients" => "",
                "price" => "8",
            ],
            [
                "title" => "Kwaśnica z żeberkiem wędzonym",
                "ingredients" => "ziemniaki",
                "price" => "15",
            ],
            [
                "title" => "Barszcz z uszkami",
                "ingredients" => "uszka z grzybami domowej roboty",
                "price" => "15",
            ],
            [
                "title" => "Barszcz solo",
                "ingredients" => "",
                "price" => "6",
            ],
            [
                "title" => "Zupa Chilli",
                "ingredients" => "pieczywo",
                "price" => "15",
            ],
            [
                "title" => "Rosół z kołdunami",
                "ingredients" => "pierożki z mieszanym mięsem jagnięcym i wieprzowym",
                "price" => "15",
            ],
            [
                "title" => "Rosół z makaronem",
                "ingredients" => "marchewka",
                "price" => "10",
            ],

        ];

        $chickenSets = [
            [
                "title" => "Kotlet Devolay",
                "ingredients" => "frytki, surówka",
                "price" => "35",
            ],
            [
                "title" => "Filet z kurczaka po parysku",
                "ingredients" => "frytki, surówka",
                "price" => "35",
            ],
            [
                "title" => "Filet z kurczaka panierowany",
                "ingredients" => "frytki, surówka",
                "price" => "35",
            ],
            [
                "title" => "Filet z kurczaka z grila",
                "ingredients" => "frytki, surówka",
                "price" => "35",
            ],
            [
                "title" => "Polędwiczki z kurczaka (15 sztuk)",
                "ingredients" => "",
                "price" => "35",
            ],
            [
                "title" => "Polędwiczki z kurczaka (25 sztuk)",
                "ingredients" => "",
                "price" => "45",
            ],
            [
                "title" => "Burger z kurczakiem i serem",
                "ingredients" => "sałata zielona, pomidor, ogórek, sos musztardowy, sos majonezowo – pomidorowy",
                "price" => "20",
            ],
        ];
        $meatSets = [
            [
                "title" => "Kotlet schabowy panierowany",
                "ingredients" => "ziemniaki, kapusta zasmażana",
                "price" => "35",
            ],
            [
                "title" => "Schab z grilla z boczkiem i cebulą",
                "ingredients" => "frytki, surówka",
                "price" => "37",
            ],
            [
                "title" => "Placek po zbójnicku",
                "ingredients" => "ogórek kiszony",
                "price" => "35",
            ],
        ];

        $otherSets = [
            [
                "title" => "Naleśniki z serem i bitą śmietaną",
                "ingredients" => "",
                "price" => "20",
            ],
            [
                "title" => "Pierogi – domowej roboty 10 szt.",
                "ingredients" => "z owocami, ruskie, z mięsem, z bryndzą",
                "price" => "22",
            ],
            [
                "title" => "Kotlet serowy",
                "ingredients" => "frytki, surówka",
                "price" => "35",
            ],
            [
                "title" => "Makaron zapiekany ze szpinakiem, pomidorem i serem",
                "ingredients" => "",
                "price" => "30",
            ],
        ];

        $additives = [
            [
                "title" => "Ryż",
                "ingredients" => "",
                "price" => "6",
            ],
            [
                "title" => "Frytki",
                "ingredients" => "",
                "price" => "10",
            ],
            [
                "title" => "Ziemniaki",
                "ingredients" => "",
                "price" => "7",
            ],
            [
                "title" => "Kapusta Zasmażana",
                "ingredients" => "",
                "price" => "8",
            ],
            [
                "title" => "Zestaw Surówek",
                "ingredients" => "",
                "price" => "7",
            ],
            [
                "title" => "Pieczywo",
                "ingredients" => "",
                "price" => "4",
            ],
            [
                "title" => "Musztarda",
                "ingredients" => "",
                "price" => "4",
            ],
            [
                "title" => "Ketchup",
                "ingredients" => "",
                "price" => "4",
            ],
            [
                "title" => "Chrzan",
                "ingredients" => "",
                "price" => "4",
            ],
            [
                "title" => "Sos czosnkowy",
                "ingredients" => "",
                "price" => "4",
            ],
        ];

        $desserts = [
            [
                "title" => "Puchar lodowy",
                "ingredients" => "3 gałki lodów, bita śmietana, owoce, polewa",
                "price" => "20",
            ],
            [
                "title" => "Szarlotka z bitą śmietaną",
                "ingredients" => "",
                "price" => "15",
            ],
            [
                "title" => "Szarlotka na ciepło z gałką lodów",
                "ingredients" => "",
                "price" => "18",
            ],
        ];


        return view('pages.menu.index', ['chefChoice' => $chefChoice, 'salad' => $salad, 'appetizers' => $appetizers, 'soups' => $soups, 'chickenSets' => $chickenSets, 'meatSets' => $meatSets, 'otherSets' => $otherSets, 'additives' => $additives, 'desserts' => $desserts]);
    }
    public function singleApartament()
    {


        $images = [
            ['img' => 'assets/images/apartments/apartment-1.jpg'],
            ['img' => 'assets/images/apartments/apartment-2.jpeg'],
            ['img' => 'assets/images/apartments/apartment-3.jpeg'],
            ['img' => 'assets/images/apartments/apartment-4.jpeg'],
            ['img' => 'assets/images/apartments/apartment-5.jpeg'],


        ];

        $apartments = [
            [
                'title' => 'Apartament 1',
                'image' =>  '/assets/images/apartments/apartment-1.jpg'
            ],
            [
                'title' => 'Apartament 2',
                'image' =>  '/assets/images/apartments/apartment-2.jpeg'
            ],
            [
                'title' => 'Apartament 3',
                'image' =>  '/assets/images/apartments/apartment-3.jpeg'
            ],
            [
                'title' => 'Apartament 4',
                'image' =>  '/assets/images/apartments/apartment-4.jpeg'
            ],
            [
                'title' => 'Apartament 5',
                'image' =>  '/assets/images/apartments/apartment-5.jpeg'
            ],
        ];

        return view('pages.single-apartament.index', ['images' => $images, 'apartaments' => $apartments]);
    }


    public function contact()
    {
        return view('pages.contact.index');
    }

    public function privacy_policy()
    {
        return view('pages.privacy_policy');
    }
}
