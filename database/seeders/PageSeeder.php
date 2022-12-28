<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'title' => 'Home'
            ],
            [
                'title' => 'Quizzes'
            ],
            [
                'title' => 'FAQ'
            ],
            [
                'title' => 'Contact'
            ],
            [
                'title' => 'Terms and conditions'
            ],

        ];
        foreach ($pages as $key => $page) {
            Page::create($page);
        }
    }
}
