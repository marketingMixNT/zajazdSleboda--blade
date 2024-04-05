<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Services\ApartmentService;
use App\Services\MenuService;


class MainController extends Controller
{
    private function imageCollection(string $path)
    {

        $images = File::files(public_path("/assets/images/{{$path}}/"));

        $imagesArray = collect($images)->map(function ($image) {
            return asset(str_replace(public_path(), '', $image->getPathname()));
        })->shuffle()->toArray();

        return $imagesArray;
    }

    private function imageGalleryCollection(string $apartment)
    {
        $bigImages = File::files(public_path("/assets/images/apartments/{{$apartment}}/"));
        $smallImages = File::files(public_path("/assets/images/apartments/{{$apartment}}/mobile"));

        return collect($bigImages)->map(function ($bigImage) use ($smallImages) {
            $filename = $bigImage->getFilename();
            $smallImage = collect($smallImages)->first(function ($smallImage) use ($filename) {
                return $smallImage->getFilename() === $filename;
            });

            return [
                'thumbnail' => $smallImage ? asset(str_replace(public_path(), '', $smallImage->getPathname())) : null,
                'full' => asset(str_replace(public_path(), '', $bigImage->getPathname())),
            ];
        })->shuffle()->toArray();
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
    // public function singleApartament()
    // {
    //     $images = [
    //         ['img' => 'assets/images/apartments/apartment-1.jpg'],
    //         ['img' => 'assets/images/apartments/apartment-2.jpeg'],
    //         ['img' => 'assets/images/apartments/apartment-3.jpeg'],
    //         ['img' => 'assets/images/apartments/apartment-4.jpeg'],
    //         ['img' => 'assets/images/apartments/apartment-5.jpeg'],
    //     ];

    //     $otherApartments = collect($this->apartments)->filter(function ($apartment) {
    //         return $apartment['id'] == 1 || $apartment['id'] == 3;
    //     })->values();



    //     return view('pages.single-apartament.index', ['images' => $images, 'apartaments' => $otherApartments]);
    // }

    public function apartment_one()
    {
        $apartmentService = new ApartmentService();
        $apartment = $apartmentService->getApartmentById('1');

        $images = $this->imageCollection('apartment_one');

        $otherApartments = collect($this->apartments)->filter(function ($apartment) {
            return $apartment['id'] == 2 || $apartment['id'] == 3;
        })->values();

        return view('pages.apartments.apartment-one.index', ['images' => $images, 'apartaments' => $otherApartments, 'apartment' => $apartment]);
    }


    public function gallery()
    {

        $apartment1 = $this->imageGalleryCollection('apartment-1');
        $apartment2 = $this->imageGalleryCollection('apartment-2');
        $apartment3 = $this->imageGalleryCollection('apartment-3');


        return view('pages.gallery.index', ['apartment1' => $apartment1, 'apartment2' => $apartment2, 'apartment3' => $apartment3]);
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
