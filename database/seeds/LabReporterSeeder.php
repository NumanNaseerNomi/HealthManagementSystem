<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Faker\Factory as faker;
use Illuminate\Support\Str;

class LabReporterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        $user = [
            'first_name' => 'LabReporter',
            'last_name' => 'Doctorly',
            'mobile' => '5142323114',
            'profile_photo' => 're-avatar-' . 1 . '.jpg',
            'email' => 'labReporter@labReporter.com',
            'password' => 'labReporter@labReporter.com',
        ];
        $user = Sentinel::registerAndActivate($user);
        $role = Sentinel::findRoleBySlug('labReporter');
        $role->users()->attach($user);
        $i = 1;
        foreach (range(31, 45) as $item) {
            $fakerName = $faker->name;
            $user = [
                'first_name' => Str::before($fakerName, ' '),
                'last_name' => Str::after($fakerName, ' '),
                'mobile' => rand(1000000000, 2000000000),
                'profile_photo' => 're-avatar-' . $i . '.jpg',
                'email' => $faker->safeEmail,
                'password' => 'labReporter@labReporter.com',
            ];
            $user = Sentinel::registerAndActivate($user);
            $role = Sentinel::findRoleBySlug('labReporter');
            $role->users()->attach($user);
            $i++;
        }
    }
}
