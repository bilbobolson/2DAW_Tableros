<?php

namespace Database\Factories;

use App\Models\Nota;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                    'idUsu'      => $this->faker->numberBetween(1,10),
                    'idTab'      => $this->faker->numberBetween(1,15),
                    'texto'      => $this->faker->text(100),
                    'completada' => $this->faker->boolean(40),
               ];
    }
}
