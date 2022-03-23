<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

 <div class="row">

    <!-- content boshlandi -->
   <div class="col p-0">

            <div class="text-center">
                <h1 class="display-5">7-qism</h1>
                <h5>
                    <em>
                        <p>Modelning scenariolari
                            <a href="https://youtu.be/qAwYSlHd2u4" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>

       <div class="card m-3">
           <div class="card-body">
               <p class="card-text">
                   Yiiframeworkda rõyxatdan õtish va login qilish modellari alohi alohida qilingan <br />
                   Biz buyerda bularni bitta modelda qilamiz <br /> <br />

                   📂 frontend <br />
                   📂 models   (ga yangi PHP Class qõshamiz) <br /> <br />

                   📄LoginRegisterForm.php <s>nomli</s>
               </p>
           </div>
           <img src="/images/7d0.jpg" class="card-img-bottom" alt="!!!">
       </div>

       <div class="alert alert-dark" role="alert">

           📄 <strong>LoginRegisterForm.php</strong> ichiga quyidagilarni yozamiz <br /> <br /> <br />


namespace frontend\models; <br /> <br />

use common\models\User; <br />
use yii\base\Model; <br /> <br />

class LoginRegisterForm extends Model <br />
{ <br />
    public $username; <br />
    public $password; <br />
    public $email; <br />
    public $rememberMe = true; <br />
    private $_user; <br /> <br />

    const SCENARIO_LOGIN = "login"; <br />
    const SCENARIO_SIGNUP = "signup"; <br /> <br />

    public function rules() <br />
    { <br />
        return [ <br />
            ['username', 'trim'], <br />
            ['username', 'required'], <br />
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'], <br />
            ['username', 'string', 'min' => 2, 'max' => 255], <br /> <br />

            ['email', 'trim'], <br /> <br />
            ['email', 'required'], <br />
            ['email', 'email'], <br />
            ['email', 'string', 'max' => 255], <br />
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'], <br /> <br />

            ['password', 'required'], <br />
            ['password', 'string', 'min' => 6], <br />
            // rememberMe must be a boolean value <br />
            ['rememberMe', 'boolean'], <br />
            // password is validated by validatePassword() <br />
            ['password', 'validatePassword', 'on' => self::SCENARIO_LOGIN], <br />
        ]; <br /> <br />


    public function scenarios() <br />
    { <br />
        return [ <br />
            self::SCENARIO_LOGIN => ['username', 'password'], <br />
            self::SCENARIO_SIGNUP => ['username', 'password', 'email'] <br />
        ]; <br />
    } <br /> <br />

    /** <br />
     * Validates the password. <br />
     * This method serves as the inline validation for password. <br />
     * <br />
     * @param string $attribute the attribute currently being validated <br />
     * @param array $params the additional name-value pairs given in the rule <br />
     */ <br />
    public function validatePassword($attribute, $params) <br />
    { <br />
        if (!$this->hasErrors()) { <br />
            $user = $this->getUser(); <br />
            if (!$user || !$user->validatePassword($this->password)) { <br />
                $this->addError($attribute, 'Incorrect username or password.'); <br />
            } <br />
        } <br />
    } <br /> <br />

 /** <br />
 * Finds user by [[username]] <br />
 * <br />
 * @return User|null <br />
 */ <br />
    protected function getUser() <br />
    { <br />
        if ($this->_user === null) { <br />
            $this->_user = User::findByUsername($this->username); <br />
        } <br /> <br />

        return $this->_user; <br />
    } <br /> <br />

    /** <br />
     * Signs user up. <br />
     * <br />
     * @return bool whether the creating new account was successful and email was sent <br />
     */ <br />
    public function signup() <br />
    { <br />
        if (!$this->validate()) { <br />
            return null; <br />
        } <br /> <br />

        $user = new User(); <br />
        $user->username = $this->username; <br />
        $user->email = $this->email; <br />
        $user->setPassword($this->password); <br />
        $user->generateAuthKey(); <br />
        $user->generateEmailVerificationToken(); <br /> <br />

        return $user->save(); <br />
    } <br /> <br />

} <br />

       </div>

       <div class="alert alert-dark" role="alert">

           📂 frontend <br />
           📄 <strong>SiteController.php</strong> da quyidagicha o'zimizni scenarioni yozib qo'yamiz <strong>actionSignup</strong>ga <br /> <br />

          <o class="text-success">use frontend\models\LoginRegisterForm;</o> <br /> <br />

           public function actionSignup() <br />
           { <br />
           $model = new <strong>LoginRegisterForm();</strong> <br />
           <strong>$model->scenario = LoginRegisterForm::SCENARIO_SIGNUP;</strong> <br />
           if ($model->load(Yii::$app->request->post()) && $model->signup()) { <br />
           Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.'); <br />
           return $this->goHome(); <br />
           } <br /> <br />

           return $this->render('signup', [ <br />
           'model' => $model, <br />
           ]); <br />
           } <br />
       </div>

       <div class="alert alert-info" role="alert">
           Ana shu bilan model scenario tayyor <br />
           asosan videoda tushinib olasiz
       </div>


   </div>
        <!-- content tugadi -->

 </div>

</div>
