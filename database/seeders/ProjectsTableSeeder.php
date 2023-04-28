<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'Restaurant Laravel project',
                'slug' => 'restaurant',
                'image' => 'restaurant.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias tenetur
                minus quaerat aliquid, aut provident blanditiis, deleniti aspernatur ipsam eaque veniam
                voluptatem corporis vitae mollitia laborum corrupti ullam rem. Lorem ipsum dolor sit amet consectetur adipisicing elit.'
             ],

            [
                'title' => 'Fitness Laravel project',
                'slug' => 'fitness',
                'image' => 'gym.jpg',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque alias tenetur
                minus quaerat aliquid, aut provident blanditiis, deleniti aspernatur ipsam eaque veniam
                voluptatem corporis vitae mollitia laborum corrupti ullam rem. Lorem ipsum dolor sit amet consectetur adipisicing elit.'
             ],
        ];

        DB::table('projects')->insert($projects);
    }
}
