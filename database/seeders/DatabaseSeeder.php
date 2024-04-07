<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Service;
use App\Models\Serviceitem;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::create([
            'no_plat' => 'ab1234cd',
            'mobil' => 'Toyota Avanza 2012',
            'pemilik' => 'Yogi',
            'no_pemilik' => '08212342315'
        ]);

        Service::create([
            'no_plat' => 'b4567ac',
            'mobil' => 'Toyota Innova 2012',
            'pemilik' => 'Septian',
            'no_pemilik' => '08213515232'
        ]);

        Serviceitem::create([
            'no_plat' => 'ab1234cd',
            'tanggal' => Carbon::create('2024', '04', '07'),
            'jasa' => '- Service/Tune Up
            - Service Dinamo Starter',
            'barang' => '- Oli
            - Busi NGK
            - Filter Oli'
        ]);

        Serviceitem::create([
            'no_plat' => 'ab1234cd',
            'tanggal' => Carbon::create('2024', '04', '07'),
            'jasa' => '- Service/Tune Up
            - Service Kaki-kaki',
            'barang' => '- Oli'
        ]);

        Serviceitem::create([
            'no_plat' => 'b4567ac',
            'tanggal' => Carbon::create('2024', '04', '07'),
            'jasa' => '- Service Dinamo Starter',
            'barang' => '- Dinamo'
        ]);
    }
}
