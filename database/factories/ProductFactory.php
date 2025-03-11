<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $diyImages = [

            '/images/hammer.jpg',
            '/images/drill.jpg',
            '/images/glue.jpg',
            '/images/glueStick.jpg',
            '/images/measuringTape.jpg',
            '/images/sekatör.jpg',
            '/images/skrews.jpg',
            '/images/toolkit.jpg',
            '/images/wrench.jpg',
    
        ];

        $diyHardwareProducts = [
            // Hand Tools
            'Claw Hammer',
            'Screwdriver Set',
            'Adjustable Wrench',
            'Pliers Set',
            'Tape Measure',
            'Utility Knife',
            'Level',
            'Hacksaw',
            'Chisel Set',
            'Allen Wrench Set',
            'Socket Wrench Set',
            'Wire Cutter',
            'Pry Bar',
            'Clamps',
            'Rubber Mallet',
            
            // Power Tools
            'Cordless Drill',
            'Circular Saw',
            'Jigsaw',
            'Orbital Sander',
            'Angle Grinder',
            'Router',
            'Heat Gun',
            'Belt Sander',
            'Nail Gun',
            'Electric Planer',
            'Rotary Tool',
            'Table Saw',
            'Miter Saw',
            'Power Drill Bits Set',
            'Impact Driver',
            
            // Painting Supplies
            'Paint Roller Set',
            'Paintbrushes',
            'Paint Tray',
            'Drop Cloth',
            'Paint Scraper',
            'Caulking Gun',
            'Paint Sprayer',
            'Sanding Block',
            'Painter\'s Tape',
            'Stir Sticks',
            
            // Fasteners & Hardware
            'Assorted Nails',
            'Assorted Screws',
            'Wall Anchors',
            'Nuts and Bolts Kit',
            'Picture Hangers',
            'Wire Cable',
            'Cabinet Hinges',
            'Door Hinges',
            'Drawer Slides',
            'Cabinet Knobs',
            'Cabinet Pulls',
            
            // Plumbing
            'Pipe Wrench',
            'Plunger',
            'Pipe Cutter',
            'Plumbing Tape',
            'PVC Pipes',
            'Pipe Fittings',
            'Drain Snake',
            'Toilet Repair Kit',
            'Faucet Wrench',
            
            // Electrical
            'Voltage Tester',
            'Wire Stripper',
            'Electrical Tape',
            'Wire Connectors',
            'Extension Cord',
            'Outlet Tester',
            'Light Switch',
            'Electrical Outlet',
            'Circuit Tester',
            
            // Garden & Outdoor
            'Garden Trowel',
            'Pruning Shears',
            'Garden Hose',
            'Leaf Rake',
            'Garden Shovel',
            'Lawn Mower',
            'String Trimmer',
            'Hedge Trimmer',
            'Wheelbarrow',
            'Garden Gloves',
            
            // Adhesives & Sealants
            'Wood Glue',
            'Super Glue',
            'Epoxy',
            'Construction Adhesive',
            'Silicone Sealant',
            'Duct Tape',
            'Gorilla Tape',
            'Weather Stripping',
            
            // Safety Equipment
            'Safety Glasses',
            'Work Gloves',
            'Dust Mask',
            'Ear Protection',
            'Knee Pads',
            'First Aid Kit',
            'Fire Extinguisher',
            
            // Measuring & Layout
            'Carpenter\'s Square',
            'Chalk Line',
            'Stud Finder',
            'Digital Caliper',
            'Laser Level',
            'Measuring Wheels',
            'Protractor'
        ];
        return [
            'name' => fake()->unique()->randomElement($diyHardwareProducts),
            'description' => fake()->text(100),
            'brand_id' => fake()->randomElement(Brand::pluck('id')),
            'price' => fake()->numberBetween(0, 2500),
            'height' => fake()->numberBetween(0, 20),
            'width' => fake()->numberBetween(0, 20),
            'weight' => fake()->numberBetween(0, 20),
            'category_id' => fake()->randomElement(Category::pluck('id')),
            'image_url' => fake()->randomElement($diyImages),
        ];
    }
}
