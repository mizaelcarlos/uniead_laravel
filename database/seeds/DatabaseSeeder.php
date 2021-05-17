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
            'nome' => 'fausto',
            'email' => 'fausto@objetivopi.com.br',
            'password' => Hash::make('12345678'),
        ]);
		DB::table('coordenador')->insert([
            'nome' => 'wesley',
            'email' => 'wesley@objetivopi.com.br',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('aluno')->insert([
            'nome' => 'Carlos',
            'email' => 'carlos@gmail.com.br',
            'password' => Hash::make('12345678'),
        ]);
		DB::table('aluno')->insert([
            'nome' => 'Rafael',
            'email' => 'rafael@gmail.com.br',
            'password' => Hash::make('12345678'),
        ]);
		DB::table('aluno')->insert([
            'nome' => 'Romero',
            'email' => 'romero@gmail.com.br',
            'password' => Hash::make('12345678'),
        ]);
		DB::table('aluno')->insert([
            'nome' => 'Alan',
            'email' => 'alan@gmail.com.br',
            'password' => Hash::make('12345678'),
        ]);
		DB::table('aluno')->insert([
            'nome' => 'Patricia',
            'email' => 'patrcia@hotmail.com.br',
            'password' => Hash::make('12345678'),
        ]);
		
    }
}
