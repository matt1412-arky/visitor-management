<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use App\Models\Visitor;
use App\Models\KaryawanGA;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitors = Visitor::all();
        $karyawan = KaryawanGA::where('name', '<>', 'admin')->get();

        for ($i = 0; $i < 25; $i++) {
            $visitor = $visitors->random();
            $phone = '08' . mt_rand(100000000, 999999999); // Generate random Indonesian phone number
            $invitationFrom = $karyawan->random()->name;
            $visitationPurpose = $this->getRandomVisitationPurpose();

            Appointment::create([
                'id_visitor' => $visitor->id,
                'name' => $visitor->name,
                'phone' => $phone,
                'invitation_from' => $invitationFrom,
                'visitation_purpose' => $visitationPurpose,
                'visit_date' => now()->addDays(mt_rand(1, 30)),
                'arrival_time' => now()->addHours(mt_rand(8, 17))->format('H:i'),
            ]);
        }
    }

    /**
     * Get a random visitation purpose.
     *
     * @return string
     */
    private function getRandomVisitationPurpose()
    {
        $options = ['Meeting', 'Company Visit'];
        return $options[array_rand($options)];
    }
}
