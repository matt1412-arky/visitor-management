<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VisitorRegis;
use App\Models\LinkVisitor;
use App\Models\User;

use Faker\Factory as Fake;

class VisitorRegisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // $faker that created by the worst way wkwkwk, I think, though that the way I pass through is a bad i will be getting better to get the best way
    public function run()
    {
        $links = LinkVisitor::all();
        $faker = Fake::create();
        foreach (range(1, 10) as $i) {
            // $index = $faker->numberBetween(1, 10);
            $index = $faker->randomElement($links)['id'];
            $id_user = $links->find($index)['user_id'];
            VisitorRegis::insert([
                'link_visitor_id' => $index,
                'fullname' => $faker->name,
                'phone' => '085338' . random_int(10, 99) . $faker->numberBetween(1111, 9999),
                'invitation_from' => User::find($id_user)['name'],
                'visitation_purpose' => $faker->sentence(),
                'transportation_used' => $faker->sentence(2),
                'file_doc' => '',
                'picture' => '',
            ]);
        }
    }
}
