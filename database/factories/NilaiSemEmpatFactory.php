<?php

namespace Database\Factories;

use App\Models\NilaiSemEmpat;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSemEmpatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSemEmpat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = [1,2,3,4,5,6,7,8,9,10];
        return [
            'user_id' => $this->faker->unique()->randomElement($id),
            'akpem' => $this->faker->randomFloat(2,2.75,4),
            'pap2' => $this->faker->randomFloat(2,2.75,4),
            'bmn2' => $this->faker->randomFloat(2,2.75,4),
            'knd' => $this->faker->randomFloat(2,2.75,4),
            'knl' => $this->faker->randomFloat(2,2.75,4),
            'simkn' => $this->faker->randomFloat(2,2.75,4),
            'makro' => $this->faker->randomFloat(2,2.75,4),
            'ptun' => $this->faker->randomFloat(2,2.75,4),
            'ip' => $this->faker->randomFloat(2,2.75,4),
        ];
    }
}
