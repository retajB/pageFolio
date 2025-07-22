<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        $feedbackList = [
            // ✅ النسخة العربية
            ['user' => 'دنيا فقيه', 'content' => 'كنت أبغى صفحة بسيطة تعبر عن شغلي...💖', 'rating' => 4.0, 'title_id' => 1],
            ['user' => 'وسام لولو', 'content' => 'ولا غلطة تسلم يدكم هبّاب', 'rating' => 5.0, 'title_id' => 1],
            ['user' => 'عبدالاله', 'content' => 'ما اتعاملت مع شركة بهذا الرقي والاهتمام', 'rating' => 4.6, 'title_id' => 1],
            ['user' => 'غسان', 'content' => 'صاير انصح اي احد بيه لانو فعلا يستاهلو', 'rating' => 2.9, 'title_id' => 1],
            ['user' => 'ماجد', 'content' => 'اهتمام بأدق التفاصيل ويرسمولك الموقع', 'rating' => 3.9, 'title_id' => 1],
            ['user' => 'محمد', 'content' => 'احب اشكر الموظف يزيد على صبره', 'rating' => 3.5, 'title_id' => 1],
            ['user' => 'بندر', 'content' => 'هبّاب الجندي المجهول في نجاح اي براند', 'rating' => 3.0, 'title_id' => 1],
            ['user' => 'عهـد', 'content' => 'الخدمة عندهم والاهتمام برضى العميل يدرس', 'rating' => 4.5, 'title_id' => 1],
            ['user' => 'رتاج باعقيل', 'content' => 'رهيبين شكرا هبّاب على تحقيق حلمي', 'rating' => 4.0, 'title_id' => 1],
            ['user' => 'راشد ***', 'content' => 'شغلهم يخلي المنافسين يهجدو', 'rating' => 5.0, 'title_id' => 1],
            ['user' => 'لمار فلمبان', 'content' => 'نفذوا فكرتي بدقة ومن دون اهمال', 'rating' => 5.0, 'title_id' => 1],
            ['user' => 'ميار الحربي', 'content' => 'هبّاب الافضلللل', 'rating' => 4.0, 'title_id' => 1],
            ['user' => 'خالد', 'content' => 'هبّاب يهب اجمل ما عنده', 'rating' => 3.5, 'title_id' => 1],
            ['user' => 'جنى', 'content' => 'هبّاب والله العظيم الافضل فالسوق', 'rating' => 4.0, 'title_id' => 1],
            ['user' => 'دينا الحربي', 'content' => 'just perfect 🔥', 'rating' => 3.0, 'title_id' => 1],
            ['user' => 'سهل الريس', 'content' => 'العميل بالنسبه لهم هو الاهم', 'rating' => 4.0, 'title_id' => 1],
            ['user' => 'مروج', 'content' => 'يرضوك للنهاية حتى لو العميل الغلطان', 'rating' => 4.5, 'title_id' => 1],
            ['user' => 'نسرين', 'content' => 'نفتخر بالشباب السعودي وابداعه', 'rating' => 3.5, 'title_id' => 1],

            // ✅ النسخة الإنجليزية
            ['user' => 'Dunya Faqih', 'content' => 'I just wanted a simple page to express my work...💖', 'rating' => 4.0, 'title_id' => 2],
            ['user' => 'Wissam Lolo', 'content' => 'Not a single mistake — flawless job, hats off!', 'rating' => 5.0, 'title_id' => 2],
            ['user' => 'Abdulilah', 'content' => 'Never dealt with a company this classy and attentive.', 'rating' => 4.6, 'title_id' => 2],
            ['user' => 'Ghassan', 'content' => 'I recommend them to everyone — they truly deserve it.', 'rating' => 2.9, 'title_id' => 2],
            ['user' => 'Majed', 'content' => 'They nailed every detail and visually designed my site.', 'rating' => 3.9, 'title_id' => 2],
            ['user' => 'Mohammed', 'content' => 'Big shoutout to Yazid for his patience!', 'rating' => 3.5, 'title_id' => 2],
            ['user' => 'Bandar', 'content' => 'The hidden hero behind every successful brand.', 'rating' => 3.0, 'title_id' => 2],
            ['user' => 'Ahd', 'content' => 'Their focus on customer satisfaction should be studied.', 'rating' => 4.5, 'title_id' => 2],
            ['user' => 'Retaj Ba Aqeel', 'content' => 'Amazing! Thanks for turning my dream into reality.', 'rating' => 4.0, 'title_id' => 2],
            ['user' => 'Rashed ***', 'content' => 'Their work makes competitors fall back.', 'rating' => 5.0, 'title_id' => 2],
            ['user' => 'Lamar Filmban', 'content' => 'They executed my idea precisely and without neglect.', 'rating' => 5.0, 'title_id' => 2],
            ['user' => 'Mayar Al-Harbi', 'content' => 'TechWin is just the bestttt!', 'rating' => 4.0, 'title_id' => 2],
            ['user' => 'Khaled', 'content' => 'They always bring their A-game.', 'rating' => 3.5, 'title_id' => 2],
            ['user' => 'Jana', 'content' => 'Honestly, the best in the market.', 'rating' => 4.0, 'title_id' => 2],
            ['user' => 'Dina Al-Harbi', 'content' => 'just perfect 🔥', 'rating' => 3.0, 'title_id' => 2],
            ['user' => 'Sahl Al-Rayes', 'content' => 'To them, the client always comes first.', 'rating' => 4.0, 'title_id' => 2],
            ['user' => 'Marouj', 'content' => 'They satisfy you to the end, even if you’re the one at fault!', 'rating' => 4.5, 'title_id' => 2],
            ['user' => 'Nasreen', 'content' => 'Proud of Saudi youth and their creativity.', 'rating' => 3.5, 'title_id' => 2],
        ];

        foreach ($feedbackList as $feedback) {
            Feedback::create([
                'user' => $feedback['user'],
                'content' => $feedback['content'],
                'rating' => $feedback['rating'],
                'feedback_title_id' => $feedback['title_id'],
            ]);
        }
    }
}