<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

  <div class="row">

    <!-- content boshlandi -->
    <div class="col p-0">

       <div class="text-center">
           <h1 class="display-5">9-qism</h1>
            <h5>
                <em>
                   <p>Formalar bilan ishlash
                    <a href="https://youtu.be/tYVqbXBtLw8" class="h6">Video varianti</a> <br/> <br/>
                    </p>
             </em>
            </h5>
       </div>

     <div class="alert alert-dark" role="alert">

         📂 frontend <br />
         📂 models <br />
         📄 PersonForm.php nomli <strong>model</strong> 📄fayl bor <br /> <br />

                📂 frontend <br />
                📂 controllers <br />
                📄 PersonController.php nomli <strong>controller</strong> bor <br /> <br />

                📂 frontend <br />
                📂 views <br />
                📂 person <br />
                📄 index.php nomli <strong>views</strong> 📄fayl bor <br /> <br />

                bular qanday bo'lishligini <a href="<?=\yii\helpers\Url::to(['../qollanma/qism5']);?>">5-qism</a>da ko'rib chiqgan edik,
      <p class="bg-white text-dark p-3">
              <strong>db</strong> &emsp;<br />
          <strong>Person</strong> nomli <strong>jadval</strong>imiz bor <br />
          <strong>id</strong> &emsp; <strong>first_name</strong> &emsp; <strong>last_name</strong> &emsp; <strong>email</strong> &emsp; <strong>gender</strong> &emsp; <o class="text-info"> degan <strong>ustun</strong>lari bor</o>
       </p>
     </div>

        <div class="alert alert-dark" role="alert">
            PersonForm.php nomli <strong>model</strong> 📄faylga quyidagilarni yozamiz <br /> <br />
            <p class="bg-white text-dark p-3">
                namespace frontend\models; <br /> <br />

                use yii\base\Model; <br /> <br />

                class PersonForm extends Model <br />
                { <br />
                public $id; <br />
                public $first_name; <br />
                public $last_name;  &emsp; &emsp; <o class="text-success">modelning <strong>attribute</strong>lari </o> <br />
                public $email; <br />
                public $gender; <br /> <br />

                public function rules() <br />
                { <br />
                return [ <br />
                [['first_name', 'last_name', 'email', 'gender'], 'required'], <br />
                [['first_name', 'last_name', 'email'], 'string', 'max' => 50], &emsp; &emsp; <o class="text-success">modelning <strong>required</strong> tekshiruvlari </o> <br />
                ['email', 'email'], <br />
                ['gender', 'in', 'range' => ['erkak', 'ayol']] <br />
                ]; <br />
                } <br /> <br />

                public function save() &emsp; &emsp; <o class="text-success">modelning <strong>function</strong>i  <s>save</s>nomli kiritilgan ma'lumotlarni bazaga saqlaydigan</o> <br />
                { <br />
                $sql = "insert into person (first_name, last_name, email, gender) &emsp; <o class="text-success">modelning attributelarini kiritib saqlayabti</o> <br />
                values (:first_name, :last_name, :email, :gender)"; &emsp; <o class="text-success">attributelarni qiymatlarini kiritayabti</o> <br /> <br />

                $values = [  &emsp; <o class="text-success">attributelarni qiymatlarini <s>$values</s>da saqlayabti</o> <br />
                ':first_name'=>$this->first_name, <br />
                ':last_name'=>$this->last_name, <br />
                ':email'=>$this->email, <br />
                ':gender'=>$this->gender, <br />
                ]; <br /> <br />

                $command = \Yii::$app->db->createCommand($sql)->bindValues($values); &emsp; <o class="text-success">bazaga barcha attributelarni qiymatlari bilan saqlab <s>$command</s>ga berayabti</o> <br /> <br />

                return $command->execute();  &emsp; <o class="text-success">ushbu so'rovni (<s>$command->execute</s>) bajarib bersin</o> <br /> <br />
                } <br /> <br />
                } <br />
            </p>
        </div>

        <div class="alert alert-dark" role="alert">
            📄 PersonController.php nomli <strong>controller</strong>ga quyidagilarni yozamiz <br /> <br />
            <p class="bg-white text-dark p-3">
                namespace frontend\controllers; <br /> <br />

                use frontend\models\PersonForm; <br /> <br />

                class PersonController extends \yii\web\Controller <br />
                { <br />
                public function actionIndex(){ <br />
                $model = new PersonForm(); &emsp; <o class="text-success"><s>Person</s> modeldan yangi <strong>object</strong> <s>$model</s> hosil qilyabti,</o> <br />
                if ($model->load(\Yii::$app->request->post())){ &emsp; <o class="text-success">agar post orqali ma'lumot kelsa modelning attributelariga yuklasin</o> <br />
                if ($model->validate() && $model->save()){ &emsp;<o class="text-success">agar post orqali kelgan ma'lumotlar validatsiyadan o'tsa va saqlansa</o> <br />
                \Yii::$app->session->setFlash('success', 'bazaga yozildi'); &emsp;<o class="text-success"><s>bazaga yozildi</s> degan xabar chiqsinda</o> <br />
                $model = new PersonForm(); &emsp;<o class="text-success">formani bo'shatsin.</o> <br />
                } <br />
                } <br /> <br />
                return $this->render('index', ['model'=>$model]); <br />
                } <br /> <br />
                } <br />
            </p>
        </div>

        <div class="alert alert-dark" role="alert">
            📄 view faylga quyidagilarni yozamiz <br /> <br />

            <p class="bg-white text-dark p-3">
                use yii\widgets\ActiveForm; <br />
                use yii\helpers\Html;<br /> <br />

                <strong>$form</strong> = <strong>ActiveForm</strong>::begin([ &emsp; <o class="text-success">forma elementlari <s>ActiveForm::begin</s>dan boshlanadi,</o> <o class="text-info">bularni <strong>$form</strong>ga ovoldik </o> <br />
                'id' => 'person-form', <br /> &emsp;
                'options' => ['class' => 'form-horizontal'], &emsp; <o class="text-success">Formni <strong>attribute</strong>lari</o> <br />
                ]); <br /> <br />

                echo $form-><strong>field</strong>($model, 'first_name');<br />
                echo $form-><strong>field</strong>($model, 'last_name');<br />
                echo $form-><strong>field</strong>($model, 'email')->input('email');<br />
                echo $form-><strong>field</strong>($model, 'gender')->radioList([ <br />
                'erkak'=>'Erkak', <br />
                'ayol'=>'Ayol' <br />
                ]); <br />
                echo Html::submitButton('yuborish', ['class'=>'btn btn-success']); <br />
                ActiveForm::end() ?> &emsp; <o class="text-success">forma elementlari <s>ActiveForm::end</s>da tugaydi</o> <br />
            <p class="bg-info text-white p-3">
                ushbu widgetni <strong>field</strong> degan functioni mavjud, bu <strong>field</strong> functioni ushbularni qabul qiladi <strong>model</strong>ini <strong>attribute</strong>ni <strong>option</strong>nini <br />
                yuqorida <strong>$model</strong>ni ko'rsatiyabmiz bu model <strong>Controller</strong>dan kelyabti, o'z navbatida Controller <strong>PersonForm</strong> modeldan qabul qilyabti yangi <s>$model = new PersonForm();</s> sifatida.
            </p>
        </div>


  </div>
  <!-- content tugadi -->

  </div>

</div>