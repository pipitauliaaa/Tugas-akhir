<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\TimKreatif;

class TimKreatifSeeder extends Seeder
{
    public function run(): void
    {
            TimKreatif::create([
                'nama' => 'Creative Talent ',
                'posisi' => 'UI/UX Designer',
                'keahlian' => 'Figma, Laravel, VueJS, Branding',
                'bio' => 'Berpengalaman lebih dari 3 tahun dalam industri creative digital agency.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim1.jpg',
            ]);
        }
}


