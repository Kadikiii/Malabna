<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'reservation_id' => 1,
            'amount' => 50,
            'status' => 'paid',
            'payment_method' => 'cash',
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
