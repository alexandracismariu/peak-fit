<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->date('Y-m-d', 'now'),
            'start' => $this->faker->date('H:i:s', 'now'),
            'stop' => $this->faker->date('H:i:s', 'now'),
            'category' => collect(config('settings.schedule.categories'))->keys()->random(),
            'target_area' => collect(config('settings.schedule.target_areas'))->keys()->random(),
            'intensity' => collect(config('settings.schedule.intensities'))->keys()->random(),
            'equipment' => collect(config('settings.schedule.equipments'))->keys()->random(),
        ];
    }
}
