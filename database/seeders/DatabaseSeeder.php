<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);
        $this->call(CarroSeeder::class);
        $this->call(MotorSeeder::class);
        $this->call(DocumentoSeeder::class);
        $this->call(LatariaSeeder::class);
        $this->call(PneuSeeder::class);
        $this->call(FreioSeeder::class);
        $this->call(SuspensaoSeeder::class);
        $this->call(EmbreagemSeeder::class);
        $this->call(SistemaEletricoSeeder::class);
    }
}
