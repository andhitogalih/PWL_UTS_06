<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
        //     [
        //     'nip'=>'00001',
        //     'nama' => 'Andhito Galih Nur Cahyo',
        //     'alamat'=> 'jalan gambuta III',
        //     'jabatan' => 'Manager',
        //     'gaji_pokok' => '15.500.000',
        // ],
        [
            'nip'=>'00002',
            'nama' => 'Andhito Galih',
            'alamat'=> 'jalan gambuta IV',
            'jabatan' => 'Manager',
            'gaji_pokok' => '14.500.000',
        ],
        [
            'nip'=>'00011',
            'nama' => 'Andi',
            'alamat'=> 'jalan gambuta III',
            'jabatan' => 'Manager',
            'gaji_pokok' => '11.500.000',
        ],
        [
            'nip'=>'00031',
            'nama' => 'Aa',
            'alamat'=> 'jalan gambuta V',
            'jabatan' => 'Manager',
            'gaji_pokok' => '10.500.000',
        ],
        [
            'nip'=>'00002',
            'nama' => 'Budi',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Sales',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00004',
            'nama' => 'Budi H',
            'alamat'=> 'jalan gambuta I',
            'jabatan' => 'Sales',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00021',
            'nama' => 'Bapoi',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Sales',
            'gaji_pokok' => '5.500.000',
        ],
        [
            'nip'=>'00031',
            'nama' => 'Budi U',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Sales',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00001',
            'nama' => 'Budii I',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Sales Supervisor',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00001',
            'nama' => 'Budi',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Sales',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00002',
            'nama' => 'Lia',
            'alamat'=> 'jalan gambuta IV',
            'jabatan' => 'Manager',
            'gaji_pokok' => '14.500.000',
        ],
        [
            'nip'=>'00011',
            'nama' => 'Andi',
            'alamat'=> 'jalan gambuta III',
            'jabatan' => 'Manager',
            'gaji_pokok' => '11.500.000',
        ],
        [
            'nip'=>'00031',
            'nama' => 'Aaa',
            'alamat'=> 'jalan gambuta VI',
            'jabatan' => 'Manager',
            'gaji_pokok' => '10.500.000',
        ],
        [
            'nip'=>'00082',
            'nama' => 'Didi',
            'alamat'=> 'jalan gambuta IXX',
            'jabatan' => 'Sales',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00074',
            'nama' => 'Budi H',
            'alamat'=> 'jalan gambuta I',
            'jabatan' => 'Progammer',
            'gaji_pokok' => '7.500.000',
        ],
        [
            'nip'=>'00221',
            'nama' => 'Bapoi A',
            'alamat'=> 'jalan gambuta III',
            'jabatan' => 'Sales',
            'gaji_pokok' => '5.500.000',
        ],
        [
            'nip'=>'00071',
            'nama' => 'Dian',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Manager',
            'gaji_pokok' => '10.500.000',
        ],
        [
            'nip'=>'10001',
            'nama' => 'Bubu I',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Sales Supervisor',
            'gaji_pokok' => '4.500.000',
        ],
        [
            'nip'=>'00041',
            'nama' => 'Didi',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Progamer',
            'gaji_pokok' => '9.500.000',
        ],
        [
            'nip'=>'10001',
            'nama' => 'Budi j',
            'alamat'=> 'jalan gambuta II',
            'jabatan' => 'Progamer',
            'gaji_pokok' => '8.500.000',
        ],
    ];
    DB::table('pegawai')->insert($data);
    }
}
