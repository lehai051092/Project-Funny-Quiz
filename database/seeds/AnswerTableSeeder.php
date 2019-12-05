<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ans = new \App\Answer();
        $ans->question_id= 1;
        $ans->answer = "aaaaaaaaaa";
        $ans->is_right = 0;
        $ans->save();

         $ans = new \App\Answer();
        $ans->question_id= 1;
        $ans->answer = "bbbbbbbbbbb";
        $ans->is_right = 1;
        $ans->save();

         $ans = new \App\Answer();
        $ans->question_id= 1;
        $ans->answer = "cccccccc";
        $ans->is_right = 0;
        $ans->save();

         $ans = new \App\Answer();
        $ans->question_id= 1;
        $ans->answer = "ddddddddd";
        $ans->is_right = 0;
        $ans->save();


    }
}
