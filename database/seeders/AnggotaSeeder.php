<?php

namespace Database\Seeders;

use App\Models\TmDataAnggota;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define your seed data here
        $anggota = [
            ['name' => 'Ade Abdul Rahman', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Ahmad Raikhan', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Ahmad Taufik', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Billy Aditya Priandhika', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Dandi', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Faris Gymnastiar Rahman', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Febri Syawaldi', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Ganjar Ramadhani', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Gunawan Bayu', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Lodka Viemanda', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Muhamad Ilham', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Muhammad Naufal', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Widi Mulyasana', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Amelia Anjani', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Anisa Noveliana', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Anisa Yan Januarti', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Azmi Rifah M', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Desti Indriana', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Eli Yulianti', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Fadilah Maulana Nursalin', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Firda Salamah', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Hilma Arifah', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Ima Sonia Marsela', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Nova Ananda', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Nurul Madani', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Prisila Dwioktafinia', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Rahma Durotul Fadhilah', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Rieke Puspita', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Sri Setiawan', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Suci Lusiana Putri', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Zahra Nurul Fazriah', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Zia Agnia Tazkia', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            ['name' => 'Nastia Sari Z Janah', 'email' => 'email@gmail.com','nim' => '17200024','no_telepon' => '0828331084','jenis_kelamin' => 'pria','tanggal_lahir' => '2023-05-17','ukuran_baju' => 'm','alamat' => 'antapani','image_url' => '/storage/images/mUbr3BLOZSx5y93oYA4yPvZ30JyYSydIdWw1pNwQ.jpg','status' => 1],
            
            // Add more seed data as needed
            ];

        // Seed the data into the TmRefCategory model
        foreach ($anggota as $data) {
            TmDataAnggota::create($data);
        }
    }
}
