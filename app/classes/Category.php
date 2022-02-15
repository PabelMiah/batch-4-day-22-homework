<?php

namespace App\classes;

class Category
{
    public function index()
    {
        return [
            0 => [
                'id' => 1,
                'name' =>'বাংলাদেশ'
            ],
            1 => [
                'id' => 2,
                'name' =>'বিশ্ব'
            ],
            2 => [
                'id' => 3,
                'name' =>'বাণিজ্য'
            ],
        ];
    }

}