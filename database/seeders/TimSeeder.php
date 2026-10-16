<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tim;

class TimSeeder extends Seeder
{
    public function run(): void
    {
        $tims = [
            [
                'nama' => 'Creative Talent',
                'posisi' => 'UI/UX Designer',
                'keahlian' => 'Figma, Laravel, VueJS, Branding',
                'bio' => 'Berpengalaman lebih dari 3 tahun dalam industri creative digital agency.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim1.jpg',
            ],
            [
                'nama' => 'Creative Talent 2',
                'posisi' => 'Front-End Developer',
                'keahlian' => 'HTML, CSS, JavaScript, ReactJS',
                'bio' => 'Berpengalaman lebih dari 2 tahun dalam pengembangan front-end.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim2.jpg',
            ],
            [
                'nama' => 'Creative Talent 3',
                'posisi' => 'Back-End Developer',
                'keahlian' => 'PHP, Laravel, MySQL',
                'bio' => 'Berpengalaman lebih dari 4 tahun dalam pengembangan back-end.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim3.jpg',
            ],
            [
                'nama' => 'Creative Talent 4',
                'posisi' => 'Graphic Designer',
                'keahlian' => 'Adobe Photoshop, Illustrator, InDesign',
                'bio' => 'Berpengalaman lebih dari 5 tahun dalam desain grafis.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim4.jpg',
            ],
            [
                'nama' => 'Creative Talent 5',
                'posisi' => 'Digital Marketing Specialist',
                'keahlian' => 'SEO, SEM, Social Media Marketing',
                'bio' => 'Berpengalaman lebih dari 3 tahun dalam strategi pemasaran digital.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim5.jpg',
            ],
            [
                'nama' => 'Creative Talent 6',
                'posisi' => 'Content Writer',
                'keahlian' => 'Copywriting, Blogging, Content Strategy',
                'bio' => 'Berpengalaman lebih dari 4 tahun dalam penulisan konten kreatif.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim6.jpg',
            ],
            [
                'nama' => 'Creative Talent 7',
                'posisi' => 'Video Editor',
                'keahlian' => 'Adobe Premiere, After Effects, Motion Graphics',
                'bio' => 'Berpengalaman lebih dari 5 tahun dalam pengeditan video dan animasi.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim7.jpg',
            ],
            [
                'nama' => 'Creative Talent 8',
                'posisi' => 'Photographer',
                'keahlian' => 'Photography, Photo Editing, Lighting Techniques',
                'bio' => 'Berpengalaman lebih dari 6 tahun dalam fotografi profesional.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim8.jpg',
            ],
            [
                'nama' => 'Creative Talent 9',
                'posisi' => 'Animator',
                'keahlian' => '2D Animation, 3D Animation, Storyboarding',
                'bio' => 'Berpengalaman lebih dari 4 tahun dalam animasi kreatif.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim9.jpg',
            ],
            [
                'nama' => 'Creative Talent 10',
                'posisi' => 'Project Manager',
                'keahlian' => 'Project Management, Agile, Scrum',
                'bio' => 'Berpengalaman lebih dari 7 tahun dalam manajemen proyek kreatif.',
                'email' => '@agency.com',
                'foto' => 'image/tim/tim10.jpg',
            ],
        ];

        foreach ($tims as $tim) {
            Tim::create($tim);
        }
    }
}
