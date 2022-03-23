<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

 <div class="row">

  <!-- content boshlandi -->
  <div class="col p-0">
   <div class="text-center">
          <h1 class="display-5">11-qism</h1>
        <h5>
          <em>
               <p>Query Builder yordamida so'rov hosil qilish!
                  <a href="https://youtu.be/B7B2h6RPNyE" class="h6">Video varianti</a> <br/> <br/>
                </p>
           </em>
        </h5>
   </div>

      <div class="alert alert-dark" role="alert">
          📄 PersonController.php nomli <strong>controller</strong>ga quyidagilarni yozamiz <br /> <br />
          <p class="bg-white text-dark p-3">

namespace frontend\controllers; <br /> <br />

              <strong>use yii\db\Query;</strong> <br /> <br />
use yii\web\Controller; <br /> <br />

class PersonController extends Controller <br />
{ <br />
    public function actionIndex() <br />
    { <br />
        $query = new <strong>Query</strong>(); &emsp;<mark><strong>Query</strong> sinfidan yangi <strong>object</strong> hosil qilyabti</mark> <br /> <br />

        $rows = $query-><strong>select</strong>('*')-><strong>from</strong>('person')-><strong>all</strong>();  &emsp;<mark><strong>Query</strong> sinfini functionlarini chaqiryabti &emsp; <strong>select</strong>, &emsp; <strong>from</strong>, &emsp; <strong>all</strong> </mark> <br /> <br />

        echo "<?php echo htmlentities('<pre>')?>"; <br />
        print_r($rows); &emsp;<mark><strong>person</strong> jadvalidan barcha ma'lumotlarni ekranga chiqaryabti </mark> <br />
    } <br /> <br />

} <br /> <br />

              Bundan tashqari yuqorida <strong>all</strong>ni o'rniga <br /> <br />
              <strong>one</strong> &emsp;<mark>jadvaldagi <strong>bitta</strong> ma'lumotni ko'ramiz</mark> <br /> <br />
              <strong>column</strong> &emsp;<mark>jadvaldagi <strong>birinchi ustunidagi</strong> ma'lumotni ko'ramiz</mark> <br /> <br />
              <strong>scalar</strong> &emsp;<mark>jadvaldagi <strong>birinchi ustunidagi birinchi qatorini</strong> ma'lumotni ko'ramiz</mark> <br /> <br />
              <strong>count</strong> &emsp;<mark>jadvalda <strong>neshta</strong> ma'lumot borligini ko'ramiz</mark> <br /> <br />
              </p>

          <ol class="bg-white text-dark p-3">

              <strong>function</strong>larni ko'rib chiqsak <br />

              <p class="p-2">
                  $rows = $query <br />
                  ->select() <br />
                  ->from() <br />
                  ->where() <br />
                  ->limit() <br />
                  ->all(); <br />
              </p>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->select('<strong>*</strong>') &emsp;<mark>jadvaldagi <strong>hamma</strong> ma'lumotlarni ko'ramiz</mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->select('<strong>email</strong>') &emsp;<mark>jadvaldagi <strong>email ustunidagi</strong> ma'lumotlarni ko'ramiz</mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->select('<strong>email</strong>, <strong>first_name</strong>') &emsp;<mark>jadvaldagi <strong>email ustunidagi</strong> va <strong>firs_name ustunidagi</strong> ma'lumotlarni ko'ramiz</mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->select('[<strong>email</strong>', '<strong>first_name</strong>']) &emsp;<mark>jadvaldagi <strong>email ustunidagi</strong> va <strong>firs_name ustunidagi</strong> ma'lumotlarni ko'ramiz</mark> <br />
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->from('<strong>person</strong>') &emsp;<mark> <strong>person</strong> jadvaldagi ma'lumotlarni ko'ramiz</mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->from(['<strong>person</strong>', '<strong>user</strong>']) &emsp;<mark> <strong>person</strong> va <strong>user</strong> jadvallaridagi ma'lumotlarni ko'ramiz</mark> <br />
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where('<strong>id = 1</strong>') &emsp;<mark> jadvaldagi <strong>id</strong> si <strong>1</strong>ga teng bo'lgan ma'lumotlarni ko'ramiz</mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(<strong>'</strong>id=<strong>:id</strong> and email=<strong>:email</strong><strong>'</strong>, ['<strong>:id</strong>'=>1, '<strong>:email</strong>' => 'mimillioner72@gmail.com']) &emsp;<mark>string qilib jadvaldagi <strong>id</strong> si 1 <strong>email</strong>i mimillioner72@gmail.com bo'lgan ma'lumotlarni ko'ramiz <strong>bind</strong> qilib</mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where([ <br />
                  '<strong>id</strong>'=>1, <br />
                  '<strong>email</strong>'=>'mimillioner72@gmail.com' <br />
                  ]) &emsp;<mark>massiv orqali jadvaldagi <strong>id</strong> si 1 <strong>email</strong>i mimillioner72@gmail.com bo'lgan ma'lumotlarni ko'ramiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>and</strong>', '<strong>id</strong>=1', '<strong>email</strong>="mimillioner72@gmail.com"']) &emsp;<mark>jadvaldagi <strong>id</strong> si 1 <strong>email</strong>i mimillioner72@gmail.com bo'lgan ma'lumotlarni ko'ramiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>NOT</strong>', '<strong>id</strong>=1']) &emsp;<mark>jadvaldagi <strong>id</strong> si 1 ga teng bo'lgan ma'lumotlarni ko'ramaymiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>NOT</strong>', ['id'=>1, 'email'=>"mimillioner72@gmail.com"]])  &emsp;<mark>jadvaldagi <strong>id</strong> si 1 <strong>email</strong>i mimillioner72@gmail.com bo'lgan ma'lumotlarni ko'rmaymiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>between</strong>', 'id', 1, 10]) &emsp;<mark>jadvaldagi <strong>id</strong> si 1 dan 11 gacha bo'lgan ma'lumotlarni ko'ramiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>NOT between</strong>', 'id', 1, 10]) &emsp;<mark>jadvaldagi <strong>id</strong> si 1 dan 11 gacha bo'lgan ma'lumotlarni ko'rmaymiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>in</strong>', 'id', [1,2,3,4,5]]) &emsp;<mark>jadvaldagi <strong>id</strong> si 1,2,3,4,5 ga teng bo'lgan ma'lumotlarni ko'ramiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>not in</strong>', 'id', [1,2,3,4,5]]) &emsp;<mark>jadvaldagi <strong>id</strong> si 1,2,3,4,5 ga teng bo'lgan ma'lumotlarni ko'rmaymiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>like</strong>', 'email', 'oner']) &emsp;<mark>jadvaldagi <strong>email</strong> ustunidan oner jumlasi qatnashgan ma'lumotlarni ko'ramiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>not like</strong>', 'email', 'oner']) &emsp;<mark>jadvaldagi <strong>email</strong> ustunidan oner jumlasi qatnashgan ma'lumotlarni ko'rmaymiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>like</strong>', 'email', '%.uz', false]) &emsp;<mark>jadvaldagi <strong>email</strong> ustunidan .uz jumlasi bilan tugagan ma'lumotlarni ko'ramiz </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->where(['<strong>></strong>', 'id', 10]) &emsp;<mark>jadvaldagi <strong>id</strong> si 10 dan katta bo'lgan ma'lumotlarni ko'ramiz </mark> <br />
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  if (!empty($search_word)) { <br />
                  $rows = $query <br />
                  ->select('*') <br />
                  ->from('person') <br />
                  -><strong>andWhere</strong>(['like', 'title', $search_word]) &emsp;<mark>jadvaldagi <strong>title</strong> ustunidan $search_word ga yozilgan ma'lumotlarni ko'ramiz </mark> <br />
                  ->all(); <br />
                  } <br />
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->orderBy('id <strong>ASC</strong>') &emsp;<mark>jadvaldagi <strong>id</strong> ustuniga qarab ma'lumotlarni 1 dan yuqoriga qrab tartiblab beradi </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->orderBy('id <strong>DESC</strong>') &emsp;<mark>jadvaldagi <strong>id</strong> ustuniga qarab ma'lumotlarni yuqoridan 1ga qrab tartiblab beradi </mark> <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->orderBy('id <strong>ASC</strong>, email <strong>DESC</strong>') &emsp; <mark>Javobini bildingiz &emsp; :)</mark>
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->orderBy(['id'=><strong>SORT_ASC</strong>, 'email'=><strong>SORT_DESC</strong>])
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->groupBy('id, email') &emsp;<mark>Guruhlash</mark>
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->limit(10)->offset(10)
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->join('<strong>LEFT JOIN</strong>', 'post', 'post.category_id = category.id') &emsp; <mark>post.category_id si category.id ga teng bolsa bog'lasin</mark>
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  ->leftJoin( 'post', 'post.category_id = category.id') &emsp; <mark>post.category_id si category.id ga teng bolsa bog'lasin</mark>
              </li>

              <hr class="style11">

              <li class="alert alert-dark m-3 p-1" role="alert">
                  Sog' bo'linglar Salomat bo'linglar.
              </li>
          </ol>

      </div>


  </div>
        <!-- content tugadi -->

  </div>

</div>
