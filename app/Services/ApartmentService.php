<?php

namespace App\Services;

class ApartmentService
{
    public function getApartments()
    {
        return [
            [
                "title" => "Pokój z dwoma łóżkami King-Size",
                "img" => "assets/images/apartments/apartment-1.jpg",
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
}