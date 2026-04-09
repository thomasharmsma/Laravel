<?php

namespace Database\Seeders;
<<<<<<< HEAD

=======
>>>>>>> 249eb2c6ca3d2aaf7dafaa7dbcdbb05560b276c7
use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participant::factory(100)->create();
    }
}
