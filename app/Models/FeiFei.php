<?php

namespace App\Models;

class FeiFei
{
    private static $coffee_hist2 = [
        [
            "title1" => "Hot",
            "title2" => "Mocha",
            "price" => "30.000 IDR",
            "date" => "Tuesday, 21st March 2023",
            "gambar" => "hot-moc.png"
        ],

        [
            "title1" => "Iced",
            "title2" => "Americano",
            "price" => "25.000 IDR",
            "date" => "Sunday, 19th March 2023",
            "gambar" => "iced-ame.png"
        ],

        [
            "title1" => "Iced Caramel",
            "title2" => "Macchiato",
            "price" => "35.000 IDR",
            "date" => "Saturday, 18th March 2023",
            "gambar" => "iced-car-mac.png"
        ],
    ];

    public static function all()
    {
        return self::$coffee_hist2;
    }
}
