<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JokeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jokes')->insert([
            'name' => 'Jonas Fronchetti',
            'email' => 'jonas@gmail.com',
            'joke' => 'Dou aula de química e física, duas disciplinas pelas quais a maioria dos alunos tem aversão.

Um dia comentei, depois de uma das muitas badernas em classe:

– Eu ganho pouco, mas me divirto com vocês.

E um deles, para não perder a oportunidade, respondeu:

– Nós também, não aprendemos nada, mas nos divertimos muito.',
            'like' => 0,
            'deslike' => 0,
        ]);
    }
}
