<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Account extends Model
{
    //
    use HasFactory;

    public function run()
    {
        Account::create([
            'id' => 1,
            [
                'name' => 'jobi',
                'password' => Hash::make('jobi')
            ],
            2,
            [
                'name' => 'Emedia',
                'password' => Hash::make('Emedia')
            ],
        ]);
    }
}
