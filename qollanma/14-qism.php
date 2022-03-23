<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

 <div class="row">

  <!-- content boshlandi -->
  <div class="col p-0">
   <div class="text-center">
          <h1 class="display-5">14-qism</h1>
        <h5>
          <em>
               <p>DB ActiveRecord Relations
                  <a href="https://youtu.be/ICucziVIIKQ" class="h6">Video varianti</a> <br/>
                </p>
           </em>
        </h5>
   </div>

      <hr class="style11"> <br />

      <div class="alert alert-dark" role="alert">
          <strong>Rlationlar bog'lanishlar join</strong> <br /> <br />
          Ikkita jadval bor &emsp; <strong>client</strong> &emsp; <strong>order</strong> &emsp; nomli <br /> <br />

      <table class="table bg-white">
          <strong>client</strong> jadvali <br />
          <thead>
          <tr>
              <th scope="col">id</th>
              <th scope="col">first_name</th>
              <th scope="col">last_name</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td>Kamoliddin</td>
              <td>Abdullayev</td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>Bolta</td>
              <td>Boltaboyev</td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>Tesha</td>
              <td>Teshayev</td>
          </tr>
          <tr>
              <th scope="row">4</th>
              <td>Qilnch</td>
              <td>Qilnchev</td>
          </tr>
          </tbody>
      </table> <br />

      <hr class="style11"> <br />

      <table class="table bg-white">
          <strong>order</strong> jadvali <br />
          <thead>
          <tr>
              <th scope="col">id</th>
              <th scope="col">client_id</th>
              <th scope="col">ordered_at</th>
              <th scope="col">status</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td>1</td>
              <td>08.03.2022 21:37:43</td>
              <td>1</td>
          </tr>
          <tr>
              <th scope="row">2</th>
              <td>1</td>
              <td>08.03.2022 21:38:23</td>
              <td>0</td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td>3</td>
              <td>08.03.2022 21:40:37</td>
              <td>0</td>
          </tr>
          <tr>
              <th scope="row">4</th>
              <td>4</td>
              <td>08.03.2022 12:44:33</td>
              <td>1</td>
          </tr>
          </tbody>
      </table> <br />

          <hr class="style11"> <br />

          📂common <br />
          &emsp; 📂models <br />
          &emsp; &emsp; 📄Client.php <br /> <br />

          <p class="bg-white text-dark p-3">
              namespace common\models; <br /> <br />

              use yii\db\ActiveRecord; <br /> <br />

              class <strong>Client</strong> extends ActiveRecord <br />
              { <br />
              public static function <strong>tableName</strong>() <br />
              { <br />
              return 'client'; <br />
              } <br /> <br />

              public function <strong>getOrders</strong>(){ <br /> <br />

              return $this-><strong>hasMany</strong>(Order::className(), ['<strong>client_id</strong>'=>'<strong>id</strong>']); <br />
              } <br /> <br />

              } <br /> <br />

              <mark>
                  <strong>hasMany</strong> bir ga ko'p bog'lanish <strong>Order</strong> classini <strong>client_id</strong> si <strong>Client</strong> classini <strong>id</strong> isiga bog'lansin <br />
                  bitta clientni birneshta zakazlari bulishi mumkin
              </mark> <br />
          </p>

          <hr class="style11"> <br />

          📂common <br />
          &emsp; 📂models <br />
          &emsp; &emsp; 📄Order.php <br /> <br />

          <p class="bg-white text-dark p-3">
              namespace common\models; <br /> <br />

              use yii\db\ActiveRecord; <br /> <br />

              class <strong>Order</strong> extends ActiveRecord <br />
              { <br />
              public static function <strong>tableName</strong>() <br />
              { <br />
              return 'order'; <br />
              } <br /> <br />

              public function <strong>getClient</strong>(){ <br /> <br />

              return $this-><strong>hasOne</strong>(Client::className(), ['<strong>id</strong>'=>'<strong>client_id</strong>']); <br />
              } <br /> <br />

              <mark>
                  <strong>hasOne</strong> bir ga bir bog'lanish <strong>Client</strong> classini <strong>id</strong> si <strong>Order</strong> classini <strong>client_id</strong> isiga bog'lansin <br />
                  bitta orderni bitta clienti bo'ladi!
              </mark> <br />
          </p>

          <hr class="style11"> <br />

          📂frontend <br />
          &emsp; 📂controllers <br />
          &emsp; &emsp; 📄ProfileController.php <br /> <br />

          <p class="bg-white text-dark p-3">
          namespace frontend\controllers; <br /> <br />

          use common\models\Client; <br />
          use common\models\Order; <br />
          use yii\web\Controller; <br /> <br />

              class <strong>ProfileController</strong> extends Controller <br />
          { <br /> <br />

          public function actionIndex() <br />
          { <br />
              $model = <strong>Client::find</strong>()->where(['<strong>id</strong>'=><strong>1</strong>])->one(); &emsp; <mark> <strong>client</strong>ni <strong>id</strong> isi <strong>1</strong> ga teng bo'lganni ma'lumotlarini olgin</mark> <br /> <br />

          return $this->render('index', ['<strong>model</strong>'=>$model]); <br />
          } <br /> <br />

          } <br />
          </p>

          <hr class="style11"> <br />

          📂frontend <br />
          &emsp; 📂views <br />
          &emsp; &emsp; 📂profile <br />
          &emsp; &emsp; &emsp; 📄index.php <br /> <br />

          <p class="bg-white text-dark p-3">
              <br />
              echo "<?php echo htmlentities('<pre>')?>"; <br /> <br />

              echo $model-><strong>first_name</strong> . "<?php echo htmlentities('<br>')?>"; &emsp; <mark> clientni <strong>first_name</strong> chiqadi </mark> <br /> <br />

              foreach ($model->orders as $<strong>item</strong>) &emsp; <mark>orderni attributelarini olyabti <s>ustundagi qiymatlari</s> </mark> <br />
              { <br />
              echo $item-><strong>client_id</strong> . '/' . $item-><strong>ordered_at</strong> . "<?php echo htmlentities('<br>')?>"; &emsp; <mark> orderni <strong>client_id</strong> isi va <strong>ordered_at</strong>i chiqadi</mark> &ensp; (<i>zakazlari</i>) <br />
              } <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
<strong>Barcha</strong> klientlarni ma'lumotlarini olish &emsp; <mark><strong>hasMany</strong> birga ko'p bog'lanish</mark> <br /> <br />

Controller
          <p class="bg-white text-dark p-3">
              public function actionIndex() <br />
              { <br />
              $model = Client::find()->all(); <br /> <br />

              return $this->render('index', ['model'=>$model]); <br />
              } <br />
          </p>
          view
          <p class="bg-white text-dark p-3">
              echo "<?php echo htmlentities('<pre>')?>";
foreach ($model as $<strong>m</strong>){ &emsp; <mark>clientni attributelarini olyabti <s>ustundagi qiymatlari</s> </mark> <br /> <br />

              echo $m-><strong>id</strong> . '/' . $m-><strong>first_name</strong> . "<?php echo htmlentities('<br />')?>"; &emsp; <mark> clientni <strong>id</strong> isi va <strong>first_name</strong>ni chiqaradi</mark> <br /> <br />

              foreach ($<strong>m</strong>-><strong>orders</strong> as $<strong>order</strong>){ &emsp; <mark>clientni orders larini olyabti va order ustundagi qiymatlarini olyabti </mark> <br /> <br />

              echo $order-><strong>id</strong> . '/' . $order-><strong>ordered_at</strong> . "<?php echo htmlentities('<br />')?>"; &emsp; <mark> orderni <strong>id</strong> isi va <strong>ordered_at</strong>ini chiqaradi</mark> <br />
    } <br />
} <br />
          </p>

          Natijasi &ensp; <s>ekran</s>
          <p class="bg-white text-dark p-3">
              1/Kamoliddin &emsp; <mark>ikkita zakazi bor ekan</mark> <br />
              1/08.03.2022 21:37:43 <br />
              2/08.03.2022 21:38:23 <br />
              2/Bolta &emsp; <mark>zakazi yo'q ekan</mark> <br />
              3/Tesha &emsp; <mark>bitta zakazi bor ekan</mark> <br />
              3/08.03.2022 21:40:37 <br />
              4/Qilnch &emsp; <mark>bitta zakazi bor ekan</mark> <br />
              4/08.03.2022 12:44:33 <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          Orderlarni ma'lumotlarini olish &emsp; <mark><strong>hasOne</strong> birga bir bog'lanish</mark> <br /> <br />

          Controller
          <p class="bg-white text-dark p-3">
              public function actionIndex() <br />
              { <br />
              $model = <strong>Order</strong>::find()->where(['<strong>id</strong>'=><strong>1</strong>])->one(); <br /> <br />

              return $this->render('index', ['<strong>model</strong>'=>$model]); <br />
              } <br />
          </p>
          view
              <br />
          <ol class="bg-white text-dark p-3">
              <li class="alert alert-dark m-3 p-1" role="alert">
                  echo "<?php echo htmlentities('<pre>')?>"; <br />
                  print_r($model->client); &emsp; <mark>orderni clientini olyabti</mark> (<i>zakazni egasi</i>) <br />
              </li>
              <li class="alert alert-dark m-3 p-1" role="alert">
                  echo "<?php echo htmlentities('<pre>')?>"; <br />
                  echo  $model->id. " / " . $model->client->first_name. "<?php echo htmlentities('<br />')?>"; <br />
              </li>
          </ol>

          <a href="https://yiiframework.com/doc/guide/2.0/ru/db-active-record">Documentation</a>

      </div>


  </div>
        <!-- content tugadi -->

  </div>

</div>
