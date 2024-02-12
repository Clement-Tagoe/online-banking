<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '23'),
            'narration' => 'transfer',
            'credit' => 15000,
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '12'),
            'narration' => 'transfer',
            'debit' => 1800,
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'debit' => 1800,
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'credit' => 1200,
            'created_at' => Carbon::now()->subDays(30),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'debit' => 1300,
            'created_at' => Carbon::now()->subDays(30),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'credit' => 2400,
            'created_at' => Carbon::now()->subDays(60),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'debit' => 3400,
            'created_at' => Carbon::now()->subDays(90),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'credit' => 7000,
            'created_at' => Carbon::now()->subDays(90),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'debit' => 8500,
            'created_at' => Carbon::now()->subDays(120),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'credit' => 3200,
            'created_at' => Carbon::now()->subDays(120),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'debit' => 3400,
            'created_at' => Carbon::now()->subDays(120),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'credit' => 180,
            'created_at' => Carbon::now()->subDays(120),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'debit' => 5300,
            'created_at' => Carbon::now()->subDays(120),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer',
            'credit' => 3800,
            'created_at' => Carbon::now()->subDays(150),
        ]);

        Transaction::create([
            'date_posted' => Carbon::create('2023', '01', '27'),
            'narration' => 'transfer by Conor Blake',
            'credit' => 14000,
            'created_at' => Carbon::now()->subDays(150),
        ]);
    }
}
