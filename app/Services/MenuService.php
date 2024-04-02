<?php

namespace App\Services;


class MenuService
{
    public function getMenu()
    {
        return   [
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
    }

    public function getChefChoice()
    {
        return
            [
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
    }

    public function getSalads()
    {
        return  [
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
    }

    public function getAppetizers()
    {
        return [
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
    }

    public function getSoups()
    {
        return   [
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
    }

    public function getChickenSets(){
        return [
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
    }

    public function getMeatSets(){
        return [
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
    }

    public function getOtherSets(){
        return  [
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
    }

    public function additives(){
        return   [
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
    }

    public function desserts(){
        return  [
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
    }
}
