<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id,
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https://acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque elit et elit aliquam, vel elementum justo tristique. Ut a neque tincidunt, tempor metus eget, vestibulum odio. Aliquam mollis est nisl. Suspendisse a imperdiet libero, pharetra dictum mi. Maecenas ac ultricies lectus. Fusce aliquam dictum finibus.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@gmail.com',
        //     'website' => 'https://starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pellentesque elit et elit aliquam, vel elementum justo tristique. Ut a neque tincidunt, tempor metus eget, vestibulum odio. Aliquam mollis est nisl. Suspendisse a imperdiet libero, pharetra dictum mi. Maecenas ac ultricies lectus. Fusce aliquam dictum finibus.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
