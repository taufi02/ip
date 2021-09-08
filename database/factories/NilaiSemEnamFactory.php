<?php

namespace Database\Factories;

use App\Models\NilaiSemEnam;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSemEnamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSemEnam::class;

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
            'pu2' => $this->faker->randomFloat(2,2.75,4),
            'manris' => $this->faker->randomFloat(2,2.75,4),
            'etikor' => $this->faker->randomFloat(2,2.75,4),
            'bnpk' => $this->faker->randomFloat(2,2.75,4),
            'ktta' => $this->faker->randomFloat(2,2.75,4),
            'pkl' => $this->faker->randomFloat(2,2.75,4),
            'ip' => $this->faker->randomFloat(2,2.75,4),
        ];
    }
}
