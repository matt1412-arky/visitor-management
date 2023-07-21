<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Visit;
use App\Models\Visitor;
use App\Models\KaryawanGA;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Generate a random id_karyawan that is not equal to 1 (reserved for admin)
        do {
            $id_karyawan = DB::table('karyawan_ga')->pluck('id')->random();
        } while ($id_karyawan == 1);

        // Mendapatkan id_visitor secara acak dari database
        $id_visitor = DB::table('visitors')->pluck('id')->random();

        // Mendapatkan nama karyawan berdasarkan id_karyawan
        $karyawan = KaryawanGA::find($id_karyawan);
        $visitor = Visitor::find($id_visitor);

        // Generate random phone number with Indonesian format (maximum length: 15 characters)
        $phoneNumber = '08' . $this->faker->numerify('###########');

        // Define visitation purposes
        $visitationPurposes = ['Meeting', 'Company Visit'];

        return [
            'id_visitor' => $id_visitor,
            'id_karyawan' => $id_karyawan,
            'name' => $visitor->name,
            'phone' => Str::limit($phoneNumber, 15),
            'invitation_from' => $karyawan->name !== 'Admin' ? $karyawan->name : null,
            'visitation_purpose' => $this->faker->randomElement($visitationPurposes),
            'visit_date' => $this->faker->date,
            'arrival_time' => $this->faker->time,
            'checkin' => 'pending', // Set 'checkin' menjadi 'pending'
            'checkout' => 'pending', // Set 'checkout' menjadi 'pending'
        ];
    }
}
