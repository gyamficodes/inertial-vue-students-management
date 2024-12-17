<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\classes;
use App\Models\Section;
use App\Models\student;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        classes::factory()
            ->count(10)
            ->Sequence(fn($sequence) => ['name' => 'classes' . $sequence->index + 1])
            ->has(
                Section::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            ['name' => "Section A"],
                            ['name' => "Section B"]
                        )
                    )
                    ->has(
                        Student::factory()
                            ->count(5)
                            ->state(
                                function (array $attributes, Section $section) {
                                    return ['classes_id' => $section->classes_id];
                                }
                            )
                    )
            )
            ->create();
    }
}
