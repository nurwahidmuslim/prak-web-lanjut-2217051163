<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserModel;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'Ilmu Komputer',
        ];

        foreach ($data as $jurusan) {
            $user = UserModel::find(1);

            if ($user) {
                $user->update([
                    'jurusan' => $jurusan,
                ]);
            }
        }
    }
}
