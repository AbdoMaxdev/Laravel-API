<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class usersfactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'first_name' => 'admin',
            'password' => '12345678', // password
            'last_name' => 'dev-admin',
        ];
    }
}
