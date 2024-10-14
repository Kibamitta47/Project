<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ComputerSeeder::class, // เรียกใช้งาน ComputerSeeder
            // คุณสามารถเรียกใช้งาน seeder อื่นๆ ที่ต้องการได้ที่นี่
        ]);
        \App\Models\User::factory(10)->create(); // ถ้าต้องการสร้าง User
    }
}
