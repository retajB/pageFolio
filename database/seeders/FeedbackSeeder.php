<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        DB::table('feedback')->insert([
            [
                'user' => 'دنيا فقيه',
                'content' => 'كنت أبغى صفحة بسيطة تعبر عن شغلي، وفعليًا ما توقعت إنه الموضوع يكون بهالسهولة، قال لهم فكرتي ونفذوها باحتراف. وبعد 24 ساعة كانت الصفحة جاهزة وأحلى مما تخيلت. شكرًا هِـبـّـاب، ريحتوني من وجع الراس! 💖',
                'rating' => 4.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'وسام لولو',
                'content' => 'ولا غلطة تسلم يدكم هبّاب ',
                'rating' => 5.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'عبدالاله',
                'content' => 'في حياتي كلها ما اتعاملت مع شركة بهذا الرقي والاهتمام للعميل حقيقي شكرا',
                'rating' => 4.6,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'غسان',
                'content' => 'صاير انصح اي احد بيه لانو فعلا يستاهلو',
                'rating' => 2.9,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'ماجد',
                'content' => 'اهتمام بأدق التفاصيل ويرسمولك الموقع زي اللي فبالك واحلى بمليون مرا',
                'rating' => 3.9,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'محمد',
                'content' => 'صراحة اهتمام بالعميل وخدمة ولا فالخيال واحب اشكر الموظف يزيد على صبره معايا واجتهاده بأنه يبغا يطلع الموقع زي اللي فبالي بالضببط',
                'rating' => 3.5,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'بندر',
                'content' => 'هبّاب الجندي المجهول في نجاح اي براند',
                'rating' => 3.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'عهـد',
                'content' => 'الخدمة عندهم والاهتمام برضى العميل يدرس',
                'rating' => 4.5,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'رتاج باعقيل',
                'content' => 'رهيبين شكرا هبّاب على تحقيق حلمي',
                'rating' => 4.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'راشـد ***',
                'content' => 'شغلهم يخلي المنافسين يهجدو',
                'rating' => 5.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'لمار فلمبان',
                'content' => 'افضل شي سويته اني اتوجهت لهم وسلمته فكرتي للموقع ونفذوها بدقة ومن دون اهمال',
                'rating' => 5.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'ميار الحربي',
                'content' => 'هبّاب الافضلللل',
                'rating' => 4.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'خالد',
                'content' => 'هبّاب يهب اجمل ما عنده',
                'rating' => 3.5,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'جنى',
                'content' => 'هبّاب والله العظيم الافضل فالسوق نصحت كل صحباتي انه يسوو عنده اللاندينج بيج',
                'rating' => 4.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'دينا الحربي',
                'content' => 'just perfect 🔥',
                'rating' => 3.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'سهل الريس',
                'content' => 'العميل بالنسبه لهم هو الاهم وبرافو حقيقي',
                'rating' => 4.0,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'مروج',
                'content' => 'احلا شي فيهم انه يرضوك للنهاية حتى لو العميل الغلطان',
                'rating' => 4.5,
                'feedback_title_id' => 1,
            ],
            [
                'user' => 'نسرين',
                'content' => 'الله يباركلهم في شغلهم ويوفقهم حقيقي نفتخر بالشباب السعودي وابداعه',
                'rating' => 3.5,
                'feedback_title_id' => 1,
            ],
        ]);
    }
}