<?php

namespace App\Models;

class Students
{
    private static $data_student = [
        [
            'id' => 1,
            'nis' => '1234567',
            'name' => 'Rafiu Sidqi',
            'class' => '11 pplg 2',
            'birthdate' => '27-08-2007',
            'address' => 'Jl. Raya Cikarang Cibarusah No. 27'
        ],
        [
            'id' => 1,
            'name' => 'Rizky Raditya',
            'class' => '11 pplg 2',
            'nis' => '1234568',
            'address' => 'Jl. Raya Cikarang Cibarusah No. 27'
        ],
        [
            'id' => 1,
            'name' => 'Yasa Kafi',
            'class' => '11 pplg 2',
            'nis' => '1234569',
            'address' => 'Jl. Raya Cikarang Cibarusah No. 27'
        ],
        [
            'id' => 1,
            'name' => 'Alethea',
            'class' => '11 pplg 2',
            'nis' => '1234560',
            'address' => 'Jl. Raya Cikarang Cibarusah No. 27'
        ],
        [
            'id' => 1,
            'name' => 'Zaskia ',
            'class' => '11 pplg 2',
            'nis' => '12345671',
            'address' => 'Jl. Raya Cikarang Cibarusah No. 27'
        ],
        [
            'id' => 1,
            'name' => 'Dude Nova',
            'class' => '11 pplg 2',
            'nis' => '12345672',
            'address' => 'Jl. Raya Cikarang Cibarusah No. 27'
        ],
    ];

    public static function all(){
        return self::$data_student;
    }
}
