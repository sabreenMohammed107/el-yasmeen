<?php

namespace Database\Seeders;

use App\Models\Company_contact;
use Illuminate\Database\Seeder;

class CompanyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Company_contact::create([

            'address'=>'قطعة 508، مخازن الشباب، منطقة',

        'phones'=>'  <span>201001140214</span>  <span>201033597474</span>
        ',
        'email'=>'admin@gmail.com',
        'facebook'=>Null,
        'twitter'=>Null,
        'instagram'=>Null,

        'linkedin'=>Null,
        ]);

    }
}
