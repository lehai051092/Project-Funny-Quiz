<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new  Question();
        $question->question = 'Những sự thật thú vị bất ngờ về World Cup';
        $question->category_id = 1;
        $question->save();

        $question = new  Question();
        $question->question = 'Bạn phù hợp vs kiểu style nào';
        $question->category_id = 2;
        $question->save();
    }
}
