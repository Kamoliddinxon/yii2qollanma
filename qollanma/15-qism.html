<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

 <div class="row">

  <!-- content boshlandi -->
  <div class="col p-0">
   <div class="text-center">
          <h1 class="display-5">15-qism</h1>
        <h5>
          <em>
               <p>
                   Tizimga kirishda oddiy ro'l
                  <a href="https://youtu.be/Wo18uzkiC20" class="h6">Video varianti</a> <br/> <br/>
                </p>
           </em>
        </h5>
   </div>

      <div class="alert alert-dark" role="alert">

          <strong>user</strong> jadvaliga yangi ustun qo'shdik <strong>role</strong> nomli,  &emsp; <s>tipi <strong>string</strong></s>

          <figure class="figure m-3">
              <img src="/images/15d0.jpg" class="figure-img img-fluid rounded" alt="db">
          </figure>
          <strong>u</strong> ikkita qiymat qabul qiladi &emsp; <strong>client</strong> &emsp; <strong>admin</strong>
      </div>

      <div class="alert alert-dark bg-white text-dark" role="alert">
          Yuqoridagi ikkita ro'lni <strong>user</strong> modelida elon qilamiz, <br /> <br />

          📂common <br />
          &emsp; 📂models <br />
          &emsp; &emsp; 📄<strong>User</strong>.php <br /> <br />

          <o class="text-success"> * @property string <strong>$role</strong> </o>

          <hr class="style11">

              const STATUS_DELETED = 0;  <br />
              const STATUS_INACTIVE = 9; <br />
              const STATUS_ACTIVE = 10; <br /> <br />

              const ROLE_ADMIN = '<strong>admin</strong>'; <br />
              const ROLE_CLIENT = '<strong>client</strong>'; <br /> <br />

          <hr class="style11">

          <o class="text-success">
              /** <br />
              * {@inheritdoc} <br />
              */ <br /> <br />

              /** userning roli client yoki client emsligini tekshiradi <br />
              * @return bool <br />
              */ <br /> <br />
          </o>

              public function <strong>isClient</strong>(){ <br />
          if ($this->role === <strong>self::ROLE_CLIENT</strong> || $this->role === <strong>self::ROLE_ADMIN</strong>){ <br />
              return true; <br />
              } <br /> <br />

              return false; <br />
              } <br /> <br />

          <o class="text-success">
              /** userning roli admin yoki admin emsligini tekshiradi <br />
              * @return bool <br />
              */ <br /> <br />
          </o>

              public function <strong>isAdmin</strong>(){ <br />
              if ($this->role === <strong>self::ROLE_ADMIN</strong>){ <br />
              return true; <br />
              } <br /> <br />

              return false; <br />
              } <br />

      </div>


      <div class="alert alert-dark" role="alert">

          📂common <br />
          &emsp; 📂models <br />
          &emsp; &emsp; 📄<strong>LoginForm</strong>.php <br /> <br />

          <p class="bg-white text-dark p-3">
              public function <strong>login</strong>() <br />
              { <br /> <br />

              <strong>$user</strong> = $this-><strong>getUser</strong>(); <br /> <br />

              if ($this->validate() && $user-><strong>isClient</strong>()) { <br />
              return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0); <br />
              } <br /> <br />

              return false; <br />
              } <br />

              public function <strong>loginAdmin</strong>() <br />
              { <br /> <br />

              $user = $this-><strong>getUser</strong>(); <br /> <br />

              if ($this->validate() && $user-><strong>isAdmin</strong>()) { <br />
              return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0); <br />
              } <br /> <br />

              return false; <br />
              } <br /> <br />

              <o class="text-success">
              /** <br />
              * Finds user by [[username]] <br />
              * <br />
              * @return User|null <br />
              */ <br />
              </o>
              protected function <strong>getUser(</strong>) <br />
              { <br />
              if ($this->_user === null) { <br />
              $this->_user = User::findByUsername($this->username); <br />
              } <br /> <br />

              return $this->_user; <br />
              } <br />
              } <br />

          </p>
      </div>

      <div class="alert alert-dark" role="alert">

          📂frontend<br />
          &emsp; 📂controller <br />
          &emsp; &emsp; 📄<strong>SiteController</strong>.php <br /> <br />

          <p class="bg-white text-dark p-3">
              public function actionLogin() <br />
              { <br />
              if (!Yii::$app->user->isGuest) { <br />
              return $this->goHome(); <br />
              } <br /> <br />

              $model = new LoginForm(); <br />
              if ($model->load(Yii::$app->request->post()) && $model-><strong>loginAdmin</strong>()) { <br />
              return $this->goBack(); <br />
              } <br /> <br />

              $model->password = ''; <br /> <br />

              return $this->render('login', [ <br />
              'model' => $model, <br />
              ]); <br />
              } <br />
          </p>
      </div>

      <div class="alert alert-dark" role="alert">

          📂frontend<br />
          &emsp; 📂views <br />
          &emsp; 📂site <br />
          &emsp; &emsp; 📄<strong>index</strong>.php <br /> <br />

          <p class="bg-white text-dark p-3">
              <strong>if</strong> (!Yii::$app-><strong>user</strong>-><strong>isGuest</strong>){ &emsp; <mark>agar foydalanuvchi <s>user</s> mehmon bo'lmasa</mark> <br /> <br />

              echo "<?php echo htmlentities('<h1>')?> Xush kelibsiz <?php echo htmlentities('<h1>')?>"; <br />
          }else{ <br /> <br />

          echo "<?php echo htmlentities('<h1>')?> Login qiling! <?php echo htmlentities('<h1>')?>"; <br />
          } <br />
          </p>

          <a href="https://www.yiiframework.com/doc/guide/2.0/en/security-authorization">Documentation</a>

      </div>


  </div>
        <!-- content tugadi -->

  </div>

</div>
