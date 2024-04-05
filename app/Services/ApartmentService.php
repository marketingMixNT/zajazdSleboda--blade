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
                "img" => "assets/images/apartment_two/pokój_czteroosobowy_z_balkonem-9.jpg",
                'link' => route('apartment_two'),
                "description" => "Nasz pokój czteroosobowy wyposażony jest w telewizor z płaskim ekranem i dostępem do usług streamingowych, prywatną łazienkę oraz balkon. W pokoju znajdują się 2 wygodne łóżka, zapewniające komfortowy wypoczynek dla czterech osób.,
                consequatur ullam?",
                "surface" => "39 m2",
                "persons" => 'max 4 os.',
                "bed" => '2x dwuosobowe',
            ],
            [
                "id"=>"3",
                "title" => "Pokój dwuosobowy",
                "img" => "assets/images/apartment_three/pokój_dwuosobowy-5.jpg",
                'link' => route('apartment_three'),
                "description" => "Pokój dwuosobowy wyposażony jest w prywatną łazienkę z prysznicem. Przestronny pokój oferuje czajnik elektryczny, podłogi z parkietu, ogrzewanie oraz telewizor z płaskim ekranem i dostępem do usług streamingowych. W pokoju znajduje się 1 wygodne łóżko, zapewniające idealne warunki do odpoczynku.",
                "surface" => "28 m2",
                "persons" => 'max 2 os.',
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