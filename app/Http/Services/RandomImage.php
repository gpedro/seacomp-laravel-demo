<?php

namespace App\Http\Services;


class RandomImage {

    private $categories = [
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'night',
        'life', 'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    ];

    public function get($category = '', $width = 200, $height = 200) {
        if (!$category) {
            $category = $this->categories[array_rand($this->categories, 1)];
        }

        return "http://lorempixel.com/$width/$height/$category";
    }

}