<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		DB::table('coordenador')->insert([
            'nome' => 'Coordenador',
            'email' => 'coordenador@objetivopi.com.br',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('aluno')->insert([
            'nome' => 'Aluno',
            'email' => 'aluno@objetivopi.com.br',
            'password' => Hash::make('12345678'),
        ]);
    }
}
