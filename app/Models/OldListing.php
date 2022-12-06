<?php 
namespace App\Models;

class Listing {
    public static function all(){
       return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem'
            ],
            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => 'got me 3 milk'
            ]
            ];
    }
    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }
        }
    }
}