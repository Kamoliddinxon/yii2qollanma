<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

 <div class="row">

  <!-- content boshlandi -->
  <div class="col p-0">
   <div class="text-center">
          <h1 class="display-5">13-qism</h1>
        <h5>
          <em>
               <p>DB ActiveQuery ActiveRecord
                  <a href="https://youtu.be/TEQJtmcOSLE" class="h6">Video varianti</a> <br/>
                </p>
           </em>
        </h5>
   </div>

      <hr class="style11"> <br />

      <div class="alert alert-dark" role="alert">
          📂common <br />
          &emsp; 📂models <br />
          &emsp; &emsp; 📄Person.php <br /> <br />

          <p class="bg-white text-dark p-3">
              namespace common\models; <br /> <br />

              use yii\db\ActiveRecord; <br /> <br />

              class <strong>Person</strong> extends <strong>ActiveRecord</strong> <br />
              { <br />
              public static function tableName() <br />
              { <br />
              return '{{<strong>person</strong>}}'; &emsp; <mark> <strong>Person</strong> Modelimiz <strong>person</strong> jadvali bilan bog'landi shu bilanbirga jadvaldagi barcha atributlar ham o'tdi </mark> <br />
              } <br />
              } <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          📂frontend <br />
          &emsp; 📂controllers <br />
          &emsp; &emsp; 📄PersonController.php <br /> <br />

          Jadvalga ma'lumot qo'shish <br />

          <p class="bg-white text-dark p-3">
              namespace frontend\controllers; <br /> <br />

              use common\models\Person; <br />
              use yii\web\Controller; <br />
              use Yii; <br /> <br />

              class PersonController extends Controller <br />
              { <br />
              public function actionIndex() <br />
              { <br />
              return $this->render('index'); <br />
              } <br /> <br />

              public function action<strong>Add</strong>() <br />
              { <br />
              $person = new <strong>Person</strong>(); <br />
              $person-><strong>first_name</strong> = \<strong>Faker</strong>\Provider\en_US\Person::firstNameMale(); &emsp; <mark> <strong>first_name</strong> ga o'zi <strong>Faker</strong> ism qo'yadi <s>xarhil</s> </mark> <br />
              $person-><strong>last_name</strong> = \Faker\Provider\en_US\Person::firstNameMale(); <br />
              $person-><strong>email</strong> = 'email.email.ruu'; <br />
              $person-><strong>gender</strong> = \Faker\Provider\en_US\Person::GENDER_MALE; <br />
              $person-><strong>save</strong>(); &emsp; <mark>Validatsiya qilib <strong>person</strong> jadvaliga saqlayabti, &emsp; agar save(<strong>false</strong>); qilsak Validatsiya qilmaydi</mark> <br /> <br />

              } <br /> <br />

              } <br /> <br />

              http://tajriba/person/<strong>add</strong> &emsp; <mark><strong>add</strong> actionni chaqirsak <strong>person</strong> jadvaliga bitta ma'lumot saqlaydi </mark>
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          Forma hosil qilib o'zimiz jadvalga ma'lumot yozamiz <br /> <br />

          📂frontend <br />
          &emsp; 📂views <br />
          &emsp; &emsp; 📂person <br />
          &emsp; &emsp; &emsp; 📄create.php <br /> <br />

          <p class="bg-white text-dark p-3">
              $form = \yii\widgets\ActiveForm::begin(); <br /> <br />

              echo $form->field($model, 'first_name'); <br />
              echo $form->field($model, 'last_name'); <br />
              echo $form->field($model, 'email'); <br />
              echo $form->field($model, 'gender'); <br /> <br />

              echo \yii\helpers\Html::submitButton('Send', ['class'=> 'btn btn-success']); <br /> <br />

              \yii\widgets\ActiveForm::end(); <br /> <br />
          </p>

          📄 <strong>Person</strong> modelimizga yangi function <strong>rules</strong> qo'shdik <br />

          <p class="bg-white text-dark p-3">
          public function <strong>rules</strong>() <br />
          { <br />
          return [ <br />
          [['first_name', 'last_name', 'email', 'gender'], '<strong>required</strong>'], <br />
          [['first_name', 'last_name', 'email', 'gender'], '<strong>string</strong>'] <br />
          ]; <br />
          } <br /> <br />
          </p>

          📄 Person<strong>Controller</strong> function<strong>Add</strong>ni o'zgartirdik <br />
          <p class="bg-white text-dark p-3">
              public function action<strong>Add</strong>() <br />
              { <br />
              $person = new Person(); <br />
              if ($person->load(Yii::$app->request->post())){ <br />
              if ($person-><strong>save</strong>()){ <br />
              Yii::$app->session->setFlash("success", "Qo'shildi"); <br />
              $this->redirect('index'); &emsp; <mark>ma'lumotlar <strong>save</strong> bolsa personni <strong>index</strong>iga o'tgin</mark> <br />
              } <br />
              } <br />
              return $this->render('<strong>create</strong>', ['model'=>$person]); <br /> <br />

              } <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          Bazadan ma'lumot olish, <br /> <br />

          o'tgan <a href="/qollanma/qism11">qisimda</a> query yordamida olgan edik endi <strong>ActiveRecord</strong>dan foydalanib olamiz  <br /> <br />

          <p class="bg-white text-dark p-3">
              public function actionIndex() <br />
              { <br />
              $users = Person::find()->one(); &emsp; <mark>person jadvalidan bir qator ma'lumot olyabti <s>topyabti</s></mark> <br />
              <br />
              return $this->render('index', ['users'=>$users]); <br />
              } <br />
          </p>

          <ol class="bg-white text-dark p-3">
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->one();</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->all();</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->count();</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->sum('id');</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->average('id');</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->min('id');</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->max('id');</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->scalar();</li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->exists();</li>

              <hr class="style11">
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::findOne(17); &emsp; <mark> jadvaldan id si 17 ga teng ma'lumotni oladi </mark> </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  $users = Person::findOne([ <br />
                  'id'=>1, <br />
                  'email'=> 'mimillioner72@gmail.com' <br />
                  ]); <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::findAll([1,17,5,33]);</li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  $users = Person::findAll([ <br />
                  'email'=>'email.email.ruu' <br />
                  ]); <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">$users = Person::find()->where(['email'=>'email.email.ruu'])->all();</li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  $users = Person::find() <br />
                  ->where(['email'=>'email.email.ruu']) <br />
                  ->limit(2) <br />
                  ->all(); <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  public function actionIndex() <br />
                  { <br />
                  $email = "email.email.ruu"; <br /> <br />

                  $sql = "SELECT * FROM person WHERE email=:email"; <br /> <br />

                  $users = Person::<strong>findBySql</strong>($sql, [':email'=>$email])->asArray()->all(); <br /> <br />

                  return $this->render('index', ['users'=>$users]); <br />
                  } <br />
              </li>
          </ol>
          <a href="https://yiiframework.com/doc/guide/2.0/ru/db-active-record">Documentation</a>
      </div>


  </div>
        <!-- content tugadi -->

  </div>

</div>
