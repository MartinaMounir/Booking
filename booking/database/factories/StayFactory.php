<?php

namespace Database\Factories;

use App\Models\Country;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stay>
 */
class StayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->word,
            'description'=>$this->faker->word,
            'numberofrooms'=>$this->faker->numberBetween(int1: 0,int2: 5),
            'available'=>$this->faker->boolean,
            'address'=>$this->faker->word,
            'image1'=>$this->faker->image('public/storage/stays',640,480,null,false) ,
           'image2'=>$this->faker->image('public/storage/stays',640,480,null,false),
            'image3'=>$this->faker->image('public/storage/stays',640,480,null,false),
            'image4'=>$this->faker->image('public/storage/stays',640,480,null,false),
            'country_id'=>Country::Factory()->create()->id
        ];


    }
}
