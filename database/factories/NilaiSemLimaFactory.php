<?php

namespace Database\Factories;

use App\Models\NilaiSemLima;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSemLimaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSemLima::class;

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
            'pap3' => $this->faker->randomFloat(2,2.75,4),
            'pu1' => $this->faker->randomFloat(2,2.75,4),
            'keupub' => $this->faker->randomFloat(2,2.75,4),
            'pbj' => $this->faker->randomFloat(2,2.75,4),
            'aplbmn' => $this->faker->randomFloat(2,2.75,4),
            'simkn2' => $this->faker->randomFloat(2,2.75,4),
            'ip' => $this->faker->randomFloat(2,2.75,4),
        ];
    }
}
