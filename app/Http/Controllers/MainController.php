<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Services\ApartmentService;
use App\Services\MenuService;


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

    private function imageCollection(string $path)
    {

        $images = File::files(public_path("/assets/images/{{$path}}/"));

        $imagesArray = collect($images)->map(function ($image) {
            return asset(str_replace(public_path(), '', $image->getPathname()));
        })->shuffle()->toArray();

        return $imagesArray;
    }


    protected $apartments;
    protected $menu;

    public function __construct()
    {
        $apartmentService = new ApartmentService();
        $this->apartments = $apartmentService->getApartments();

        $menuService = new MenuService();
        $this->menu = $menuService->getMenu();
    }


    public function home()
    {

        $images = $this->imageCollection('about-slider');

        return view('pages.home.index', ['images' => $images, 'apartments' => $this->apartments, 'menu' => $this->menu]);
    }

    public function apartments()
    {

        return view('pages.apartments.index', ['apartments' => $this->apartments]);
    }


    public function restaurant()
    {
        //$this->menu will change for images array
        $images = $this->imageCollection('about-slider');

        return view('pages.restaurant.index', ['images' => $images, 'menu' => $this->menu]);
    }

    public function menu()
    {

        $menuService = new MenuService();
        $chefChoice = $menuService->getChefChoice();
        $salad = $menuService->getSalads();
        $appetizers = $menuService->getAppetizers();
        $soups = $menuService->getSoups();
        $chickenSets = $menuService->getSoups();
        $meatSets = $menuService->getMeatSets();
        $otherSets = $menuService->getOtherSets();
        $additives = $menuService->additives();
        $desserts = $menuService->desserts();


        return view('pages.menu.index', ['chefChoice' => $chefChoice, 'salad' => $salad, 'appetizers' => $appetizers, 'soups' => $soups, 'chickenSets' => $chickenSets, 'meatSets' => $meatSets, 'otherSets' => $otherSets, 'additives' => $additives, 'desserts' => $desserts]);
    }
    public function singleApartament()
    {


        $images = $this->imageCollection('apartment');

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


    public function gallery()
    {
        return view('pages.gallery.index');
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
