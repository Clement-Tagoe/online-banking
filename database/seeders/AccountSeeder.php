<?php

namespace Database\Seeders;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'account_number' => '1542672027013',
            'credit' => 209250,
            'debit' => 201140,
            'balance' => 23653,
            'date' => Carbon::create('2024', '01', '30'),
            'time' => '11:35:28'
        ]);
    }
}
