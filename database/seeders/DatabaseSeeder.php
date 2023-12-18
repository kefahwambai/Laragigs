<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);


        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        // Listing::create( [
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'full stack, web development',
        //     'company' => 'TechSolutions Inc.',
        //     'location' => 'San Francisco, CA',
        //     'email' => 'email12@email.com',
        //     'website' => 'https://www.techsolutions.com',
        //     'description' => 'Join our dynamic team as a full stack developer and contribute to the development of innovative web solutions.',
        // ],
        // );
        // Listing::create( [
        //     'title' => 'UI Designer',
        //     'tags' => 'UI design, graphic design',
        //     'company' => 'DesignCrafters Studio',
        //     'location' => 'Los Angeles, CA',
        //     'email' => 'email13@email.com',
        //     'website' => 'https://www.designcraftersstudio.com',
        //     'description' => 'Exciting opportunity for a talented UI designer to create visually appealing and user-friendly interfaces.',
        // ]);
    }
}
