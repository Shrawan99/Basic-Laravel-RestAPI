<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'category'=> $this->faker-> text(50),
            'description'=>$this->faker->text(50),
            'author'=> $this->faker->name,
            'signee'=>$this->faker->numberBetween(0,100000)

            //
        ];
    }
}
