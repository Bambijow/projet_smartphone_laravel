<?php

namespace Database\Factories;

use App\Models\Smartphone;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmartphoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Smartphone::class;

    private static $i = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => self::$i++,
            'nom' => $this->faker->randomElement($array = array('Galaxy S12', 'Iphone 12', 'Mate 40 pro', 'One Plus Nord')),
            'taille' => $this->faker->randomElement($array = array('4 pouces', '6 pouces', 'Tablette', '6,22 pouces')),
            'type_reseau' => $this->faker->randomElement($array = array('4G', '4G +', '5G')),
            'systeme' => $this->faker->randomElement($array = array('Android', 'IOS')),
            'connectique' => $this->faker->randomElement($array = array('Type C', 'Lightning', 'Micro USB')),
            'autonomie' => $this->faker->randomElement($array = array('4h', '45h', '80h')),
            'caracteristiques' => $this->faker->randomElement($array = array('Bon appareil photo', 'Pas grand chose', 'Un peu cassé'))
        ];
    }
}
