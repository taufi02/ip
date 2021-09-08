<?php

namespace Database\Factories;

use App\Models\NilaiSemTiga;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSemTigaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSemTiga::class;

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
            'hkn' => $this->faker->randomFloat(2,2.75,4),
            'akbi' => $this->faker->randomFloat(2,2.75,4),
            'mankeu' => $this->faker->randomFloat(2,2.75,4),
            'hukpertanahan' => $this->faker->randomFloat(2,2.75,4),
            'lelang' => $this->faker->randomFloat(2,2.75,4),
            'pap1' => $this->faker->randomFloat(2,2.75,4),
            'bmn1' => $this->faker->randomFloat(2,2.75,4),
            'hap' => $this->faker->randomFloat(2,2.75,4),
            'ip' => $this->faker->randomFloat(2,2.75,4),
        ];
    }
}
