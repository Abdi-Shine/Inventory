<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Optional: Clear existing features so we don't duplicate
        // Feature::truncate(); 

        $features = [
            [
                'title' => 'Software Testing',
                'description' => 'Welcome to our Software Testing Services. We rigorously test your software to ensure it meets the highest quality standards.',
                'icon' => 'fas fa-tools',
            ],
            [
                'title' => 'UI/UX DESIGN',
                'description' => 'Our UI/UX design services are tailored to ensure your products are user-friendly, accessible, and aligned with your brand.',
                'icon' => 'fas fa-desktop',
            ],
            [
                'title' => 'CUSTOM SOFTWARE DEVELOPMENT',
                'description' => 'Your trusted partner for tailor-made software solutions that meet your business objectives',
                'icon' => 'fas fa-code',
            ],
            [
                'title' => 'WEB DEVELOPMENT',
                'description' => 'Creating modern websites and online stores that boost digital presence.',
                'icon' => 'fas fa-laptop-code',
            ],
            [
                'title' => 'BUSINESS & IT CONSULTANCY',
                'description' => 'Offering Expert guidance on business & ICT solutions for SMEs and individuals',
                'icon' => 'fas fa-user-group',
            ],
            [
                'title' => 'MOBILE APP DEVELOPMENT',
                'description' => 'Welcome to our Mobile App Development service, bringing your ideas to life',
                'icon' => 'fas fa-mobile-screen',
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
