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
        $question->title = 'Những sự thật thú vị bất ngờ về World Cup';
        $question->desc = 'World Cup - giải vô địch bóng đá thế giới chứa đựng rất nhiều thông tin thú vị bất ngờ không phải ai cũng biết. Hãy cùng tìm hiểu sau đây nhé.';
        $question->contentQuestion = 'abc';
        $question->category_id = 1;
        $question->save();

        $question = new  Question();
        $question->title = 'Bạn phù hợp vs kiểu style nào';
        $question->desc = 'Mỗi style sẽ quyết định đến tích cách và sở thích của mỗi người.Style là một điều quan trọng trong cuộc sống mỗi người đều có một kiểu style riêng. Nhưng liệu bạn có biết kiểu style nào thực sự phù hợp vs bạn ko cùng bắt đầu nào.';
        $question->contentQuestion = 'abc';
        $question->category_id = 2;
        $question->save();
    }
}
