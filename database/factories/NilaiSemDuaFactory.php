<?php

namespace Database\Factories;

use App\Models\NilaiSemDua;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSemDuaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSemDua::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id= [1,2,3,4,5,6,7,8,9,10];
        return [
            'user_id' => $this->faker->unique()->randomElement($id),
            'pancasila' => $this->faker->randomFloat(2,2.75,4),
            'bing' => $this->faker->randomFloat(2,2.75,4),
            'mikro' => $this->faker->randomFloat(2,2.75,4),
            'pajak' => $this->faker->randomFloat(2,2.75,4),
            'ppkn' => $this->faker->randomFloat(2,2.75,4),
            'pengakun2' => $this->faker->randomFloat(2,2.75,4),
            'hukperus' => $this->faker->randomFloat(2,2.75,4),
            'hukper' => $this->faker->randomFloat(2,2.75,4),
            'piutang' => $this->faker->randomFloat(2,2.75,4),
            'ip' => $this->faker->randomFloat(2,2.75,4),
        ];
    }
}
