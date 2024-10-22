<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserModel;

class SemesterSeeder extends Seeder
{
    public function run()
    {
        $data = [
            5,
        ];

        foreach ($data as $semester) {
            $user = UserModel::find(1);

            if ($user) {
                $user->update([
                    'semester' => $semester,
                ]);
            }
        }
    }
}
