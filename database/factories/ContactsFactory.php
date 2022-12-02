<?php

namespace Database\Factories;

use App\Models\Contacts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ContactsFactory extends Factory
{
    protected $contacts = Contacts::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this-> faker->randomElement($array = ['1', '2']),
            'email' => $this->faker->unique()->safeEmail,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->address,
            'building_name' => $this->faker->buildingNumber,
            'opinion' => $this->faker->realtext(120),
            'created_at' => $now,
            'updated_at' => $now
        ];
    }
}