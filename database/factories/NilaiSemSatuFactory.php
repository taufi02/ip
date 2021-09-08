<?php

namespace Database\Factories;

use App\Models\NilaiSemSatu;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSemSatuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSemSatu::class;

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
            'agama' => $this->faker->randomFloat(2,2.75,4),
            'kwn' => $this->faker->randomFloat(2,2.75,4),
            'pih' => $this->faker->randomFloat(2,2.75,4),
            'pie' => $this->faker->randomFloat(2,2.75,4),
            'bi' => $this->faker->randomFloat(2,2.75,4),
            'stat' => $this->faker->randomFloat(2,2.75,4),
            'pengakun1' => $this->faker->randomFloat(2,2.75,4),
            'manajemen' => $this->faker->randomFloat(2,2.75,4),
            'ip' => $this->faker->randomFloat(2,2.75,4),
        ];
    }
}
