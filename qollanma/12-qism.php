<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

 <div class="row">

  <!-- content boshlandi -->
  <div class="col p-0">
   <div class="text-center">
          <h1 class="display-5">12-qism</h1>
        <h5>
          <em>
               <p>DB Migrationlar
                  <a href="https://youtu.be/7qJKqtRQWqQ" class="h6">Video varianti</a> <br/> <br/>
                </p>
           </em>
        </h5>
   </div>


      <div class="alert alert-dark" role="alert">
          Terminalni <s>consol</s> ochib projectimizni papkasiga kiramiz,

          <p class="bg-white text-dark p-3">
              php yii migrate/create create_table_<strong>post</strong> &emsp;<mark>yozib <strong>Enter</strong>ni bosamiz, tasdiqlaymiz <s>yes</s> </mark>
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          📂console <br />
          &emsp; 📂migrations <br />
          &emsp; &emsp; 📄<s>m220306_053208_create_table_<strong>post</strong></s>.php <br /> <br />
<mark>Yangi migration fayl hosil bo'ldi <strong>post</strong> nomli</mark> <br /> <br />
          <p class="bg-white text-dark p-3">
              use yii\db\Migration; <br /> <br />

              /** <br />
              * Class m220306_053208_create_table_<strong>post</strong> <br />
              */ <br />
              class m220306_053208_create_table_<strong>post</strong> extends Migration <br />
              { <br />
              /** <br />
              * {@inheritdoc} <br />
              */ <br />
              public function <strong>safeUp</strong>() <br />
              { <br />
              &emsp;<mark>barcha o'zgarishlarni shu yerga yozamiz</mark> <br />
              } <br /> <br />

              /** <br />
              * {@inheritdoc} <br />
              */ <br />
              public function <strong>safeDown</strong>() <br />
              { <br />
              echo "m220306_053208_create_table_post cannot be reverted.\n"; <br />
              &emsp;<mark>o'zgarishlarni qaytarish kerak bo'lsa shu yerga yozamiz</mark> <br />
              return false; <br />
              } <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          Yangi jadval hosil qilish <br /> <br />

          <p class="bg-white text-dark p-3">
              public function safeUp() <br />
              { <br />
              $this-><strong>createTable</strong>('<strong>post</strong>', [ &emsp;<mark>Yangi jadval hosil qilish <strong>function</strong>ni chaqirdik va jadval nomini ko'rsatdik <strong>post</strong></mark> <br />
              '<strong>id</strong>'=>$this->primaryKey(), <br />
              '<strong>title</strong>'=>$this->string(60)->notNull(), <br />
              '<strong>content</strong>'=>$this->text(), <br />
              '<strong>created_at</strong>'=>$this->dateTime()->notNull(), <br />
              '<strong>updated_at</strong>'=>$this->dateTime(), <br />
              '<strong>type</strong>'=>$this->integer()->notNull()->defaultValue(10), <br />
              ]); <br />
              } <br />
             <mark>massiv ochib ichiga ustun nomlarini &emsp; <s>id title content created_at updated_at type</s><br />
                 tiplarini  &emsp;<s>primaryKey()->string(60)->notNull()->text()->integer()->notNull()->defaultValue(10) </s> &emsp; yozdik</mark> <br /> <br />
              Endi buni yurgizdiramiz
          </p>

          Terminalni <s>consol</s> ochib

          <p class="bg-white text-dark p-3">
              php yii migrate &emsp;<mark>yozib <strong>Enter</strong>ni bosamiz, tasdiqlaymiz <s>yes</s></mark><br /><br />

              <strong>migration</strong>lar orqali, bazamizga yangi bitta <strong>post</strong> nomli jadval hosil qildik
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
          O'zgarishni orqaga qaytarish <br /> <br />

          <p class="bg-white text-dark p-3">
              public function <strong>safeDown</strong>() <br />
              { <br />
              $this->dropTable('<strong>post</strong>'); &emsp; <mark>Yangi <strong>post</strong> jadvalni o'chirayabmiz</mark> <br />
              } <br />
          </p>
          Terminalni <s>consol</s> ochib

          <p class="bg-white text-dark p-3">
              php yii migrate/down &emsp;<mark>yozib <strong>Enter</strong>ni bosamiz, tasdiqlaymiz <s>yes</s></mark><br /><br /> <br />

              <strong>migration</strong>lar orqali, bazamizdan yangi bitta <strong>post</strong> nomli jadvalni o'chirdik <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">
      <img src="/images/12d0.jpg" class="card-img-bottom" alt="!!!"> <br /> <br />
          <a href="https://www.yiiframework.com/doc/guide/2.0/en/db-migrations">Documentation</a>
      </div>


  </div>
        <!-- content tugadi -->

  </div>

</div>