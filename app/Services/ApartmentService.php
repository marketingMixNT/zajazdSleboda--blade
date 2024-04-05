<?php

namespace App\Services;

class ApartmentService
{
    public function getApartments()
    {
        return [
            [
                "id"=>"1",
                "title" => "Pokój z dwoma łóżkami King-Size",
                "img" => "assets/images/apartment_one/pokój_z_2_łóżkami_typu_king-size-1.jpg",
                'link' => route('apartment_one'),
                "description" => "Luksusowy pokój czteroosobowy z dwoma łóżkami king-size, prywatnym balkonem oferującym malownicze widoki oraz nowoczesną łazienką. Wyposażony w telewizor z płaskim ekranem i dostępem do platform streamingowych, zapewnia idealne warunki do relaksu i rozrywki.",
                "surface" => "34 m2",
                "persons" => 'max 4 os.',
                "bed" => '2x dwuosobowe',
            ],
            [
                "id"=>"2",
                "title" => "Pokój czteroosobowy z balkonem",
                "img" => "assets/images/apartments/apartment-2.jpeg",
                'link' => '#',
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface" => "50 m2",
                "persons" => 'max 4 os.',
                "bed" => 'dwuosobowe',
            ],
            [
                "id"=>"3",
                "title" => "Pokój dwuosobowy",
                "img" => "assets/images/apartments/apartment-3.jpeg",
                'link' => '#',
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis expedita amet possimus eaque
                officiis earum obcaecati! Animi, necessitatibus molestias? Qui soluta doloremque, laudantium error
                eaque culpa in debitis a earum nesciunt! Voluptatum blanditiis ex quam recusandae nulla numquam,
                consequatur ullam?",
                "surface" => "50 m2",
                "persons" => 'max 4 os.',
                "bed" => 'dwuosobowe',
            ],
        ];
    }

    public function getApartmentById($id)
    {
        $apartments = $this->getApartments();
        foreach ($apartments as $apartment) {
            if ($apartment['id'] == $id) {
                return $apartment;
            }
        }
        return null; 
    }
}