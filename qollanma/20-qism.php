<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

    <div class="row">

        <!-- content boshlandi -->
        <div class="col p-0">
            <div class="text-center">
                <h1 class="display-5">20-qism</h1>
                <h5>
                    <em>
                        <p>
                            Modallar
                            <a href="" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>


            <div class="alert alert-dark" role="alert">
                <ol class="bg-white text-dark p-3">
                    📂common<br />
                    &emsp; 📂models <br />
                    &emsp; &emsp; 📄<strong>Productlines</strong>.php <br />

                    <p class="alert alert-dark bg-secondary text-white-50 m-3 p-1" role="alert">

                        namespace common\models; <br /> <br />

                        use yii\db\ActiveRecord; <br /> <br />

                        class <strong>Productlines</strong> extends <strong>ActiveRecord</strong> <br />
                        { <br />
                        &emsp; public static function <strong>tableName</strong>() <br />
                        &emsp; { <br />
                        &emsp; return '{{<strong>productlines</strong>}}'; <br />
                        &emsp; } <br />
                        } <br /> <br />

                        <mark>Bizni bazamizda <strong>productlines</strong> degan jadval bor o'shanga ulab &emsp; <strong>gii</strong> moduli yordamida bitta forma hosil qildik</mark>
                    </p> <br />

                        <img src="/images/20d0.jpg" class="figure-img img-fluid rounded" alt="!!!">
                    Manashu joyda <strong>Create Productlines</strong> tugmasi bosilganida yangi sahifaga o'tmastdan <strong>modal</strong> ochilib bazaga yangi ma'lumot qo'shadigan qilamiz,
                </ol>
            </div>
                    <hr class="style11"> <br />

            <div class="alert alert-dark" role="alert">
                📂frontend<br />
                &emsp; 📂views <br />
                &emsp; &emsp; 📂productlines <br />
                &emsp; &emsp; &emsp; 📄<strong>index</strong>.php <br />

                <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                    <g class="text-warning">use yii\bootstrap4\Modal;</g> <br />
                    use yii\helpers\Html; <br />
                    use yii\helpers\Url; <br />
                    use yii\grid\ActionColumn; <br />
                    use yii\grid\GridView; <br />
                    use yii\widgets\Pjax; <br />
                    /* @var $this yii\web\View */ <br />
                    /* @var $searchModel common\models\ProductlinesSearch */ <br />
                    /* @var $dataProvider yii\data\ActiveDataProvider */ <br /> <br />

                    $this->title = 'Productlines'; <br />
                    $this->params['breadcrumbs'][] = $this->title; <br />
                    ?> <br />
                <?php echo htmlentities('<div class="productlines-index">')?> <br /> <br />

                    <?php echo htmlentities('<?= Html::encode($this->title) ?></h1>')?> <br /> <br />

                    <?php echo htmlentities('<p>')?> <br />
                    <?php echo htmlentities('<?=')?> Html::a('Create Productlines', <br />
                            ['create'], <br />
                    ['class' => 'btn btn-success', <g class="text-warning">'id' => 'create-button'</g>]) ?> <br />
                        <?php echo htmlentities('</p>')?> <br /> <br />

                    <?php echo htmlentities('<?')?>php Pjax::begin([<g class="text-warning">'id' => 'prl-pjax'</g>]); ?> <br />
                    <?php echo htmlentities('<?')?>php // echo $this->render('_search', ['model' => $searchModel]); ?> <br /> <br />

                    <?php echo htmlentities('<?')?>= GridView::widget([ <br />
                        'dataProvider' => $dataProvider, <br />
                        'filterModel' => $searchModel, <br />
                        'columns' => [ <br />
                            ['class' => 'yii\grid\SerialColumn'], <br /> <br />

                            'id', <br />
                            'ProductLine', <br />
                            'HtmlDescription', <br />
                            'image', <br />
                            [ <br />
                                'class' => ActionColumn::className(), <br />
                                'urlCreator' => function ($action, \common\models\Productlines $model, $key, $index, $column) { <br />
                                    return Url::toRoute([$action, 'id' => $model->id]); <br />
                                } <br />
                            ], <br />
                        ], <br />
                    ]); ?> <br /> <br />

                    <?php echo htmlentities('<?')?>php Pjax::end(); ?> <br /> <br />

                <?php echo htmlentities('</div>')?> <br /> <br />

                    <?php echo htmlentities('<?')?>php <br />

                    <g class="text-warning">
                Modal::begin([ <br /> <br />

    &emsp;'title' => '<?php echo htmlentities('<h4>')?>Title<?php echo htmlentities('</h4>')?>', <br />
    &emsp;'id' => 'myModal', <br />
    &emsp;'size' => 'modal-lg' <br />
                ]); <br /> <br />

                echo "<?php echo htmlentities('<div')?> id='modalContent'>Content<?php echo htmlentities('</div>')?>"; <br /> <br />

    Modal::end();</g> <br />
                ?> <br />
                </p>

                <hr class="style11"> <br />

            📂frontend<br />
            &emsp; 📂controllers <br />
            &emsp; &emsp; 📄<strong>ProductController</strong>.php <br />

            <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                use Yii;  <br /> <br /> <br />


                public function <strong>actionCreate</strong>() <br />
                { <br />
                &emsp;$model = new Productlines(); <br />
                &emsp;Yii::$app-><strong>response->format</strong> = \yii\web\Response::FORMAT_<strong>JSON</strong>; <br />
                &emsp;if (Yii::$app->request-><strong>isAjax</strong>) { <br />
                &emsp;&emsp;$result['<strong>status</strong>'] = false; <br />
                &emsp;&emsp;if ($model->load($this->request-><strong>post</strong>()) && $model-><strong>save</strong>()) { <br />
                &emsp;&emsp;&emsp;$result['<strong>status</strong>'] = true; <br />
                &emsp;&emsp;&emsp;return $<strong>result</strong>; <br />
                &emsp;&emsp;} <br />
                &emsp;&emsp;$result['<strong>content</strong>'] = $this-><strong>renderAjax</strong>('_form', ['model' => $model]); <br />
                &emsp;&emsp;return $<strong>result</strong>; <br />
                &emsp;} <br /> <br />

                &emsp;return $this->render('<strong>create</strong>', [ <br />
                &emsp;&emsp;'model' => $model, <br />
                &emsp;]); <br />
                } <br />
            </p>

                <hr class="style11"> <br />


                    📂frontend<br />
                    &emsp; 📂views <br />
                    &emsp; &emsp; 📂productlines <br />
                    &emsp; &emsp; &emsp; 📄<strong>_from</strong>.php <br />

                    <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                        use yii\helpers\Html; <br />
                        use yii\widgets\ActiveForm; <br /> <br />

                        /* @var $this yii\web\View */ <br />
                        /* @var $model common\models\Productlines */ <br />
                        /* @var $form yii\widgets\ActiveForm */ <br />
                        ?> <br /> <br />

                    <?php echo htmlentities('<div')?> class="productlines-form"> <br /> <br />

                        <?php echo htmlentities('<?php')?> $form = ActiveForm::begin( <o class="text-warning">[ <br />
                            'id' => 'prl-form' <br />
                        ]</o>); ?> <br /> <br />

                        <?php echo htmlentities('<?=')?> $form->field($model, 'ProductLine')->textInput(['maxlength' => true]) ?> <br /> <br />

                        <?php echo htmlentities('<?=')?> $form->field($model, 'HtmlDescription')->textInput(['maxlength' => true]) ?> <br /> <br />

                        <?php echo htmlentities('<?=')?> $form->field($model, 'image')->textInput(['maxlength' => true]) ?> <br /> <br />

                        <?php echo htmlentities('<div')?> class="form-group"> <br />
                        <?php echo htmlentities('<?=')?> Html::submitButton('Save', ['class' => 'btn btn-success', 'id' => 'save-button']) ?> <br />
                            <?php echo htmlentities('</div>')?> <br /> <br />

                        <?php echo htmlentities('<?php')?> ActiveForm::end(); ?> <br /> <br />

                        <?php echo htmlentities('</div>')?> <br />
                    </p>

                    <hr class="style11"> <br />

                        📂frontend<br />
                        &emsp; 📂web <br />
                        &emsp; &emsp; 📂js <br />
                        &emsp; &emsp; &emsp; 📄<strong>app</strong>.js <br />

                        <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                            $('<o class="text-warning">#create-button</o>').on('click', <g class="text-warning">function</g> (event) { <br />
                            &emsp;event.<o class="text-warning">preventDefault</o>>(); <br />
                            &emsp;var <o class="text-warning">url</o> = $(this).attr('<o class="text-warning">href</o>>'); <br />
                            &emsp;$('<o class="text-warning">#myModal</o>>').modal('<o class="text-warning">show</o>>'); <br />
                            &emsp;<o class="text-warning">send</o>>(url); <br />
                            }); <br /> <br />

                            function <o class="text-warning">send</o>>(_url, formData = null){ <br /> <br />

                            &emsp;$.<o class="text-warning">ajax</o>>({ <br />
                            &emsp;&emsp;<o class="text-warning">url</o>>:_url, <br />
                            &emsp;&emsp;<o class="text-warning">type</o>>: "<o class="text-warning">POST</o>>", <br />
                            &emsp;&emsp;<o class="text-warning">dataType</o>>: "<o class="text-warning">json</o>>", <br />
                            &emsp;&emsp;<o class="text-warning">data</o>>: formData, <br />
                            &emsp;&emsp;<o class="text-warning">success:function</o>> (data){ <br />
                            &emsp;&emsp;&emsp;<o class="text-warning">if</o> (data.<o class="text-warning">status</o>> == false) { <br />
                            &emsp;&emsp;&emsp;&emsp;$('<o class="text-warning">#myModal</o>>').modal('<o class="text-warning">show</o>>').find('<o class="text-warning">#modalContent</o>>').html(data.<o class="text-warning">content</o>); <br />
                            &emsp;&emsp;&emsp;&emsp;$('<o class="text-warning">#save-button</o>>').on('click', <o class="text-warning">function</o>> (e) { <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;e.<o class="text-warning">preventDefault</o>>(); <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;var <o class="text-warning">form</o>> = $('<o class="text-warning">#prl-form</o>>').<o class="text-warning">serialize</o>>(); <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;<o class="text-warning">send</o>>(_url, <o class="text-warning">form</o>>); <br />
                            &emsp;&emsp;&emsp;&emsp;&emsp;return false; <br />
                            &emsp;&emsp;&emsp;&emsp;}); <br />
                            &emsp;&emsp;&emsp;&emsp;return false; <br />
                            &emsp;&emsp;&emsp;}<o class="text-warning">else</o>> { <br />
                            &emsp;&emsp;&emsp;&emsp;$.<o class="text-warning">pjax.reload</o>>({container:"<o class="text-warning">#prl-pjax</o>>"}) <br />
                            &emsp;&emsp;&emsp;&emsp;$('<o class="text-warning">#myModal</o>>').modal('hide'); <br />
                            &emsp;&emsp;&emsp;} <br />
                            &emsp;&emsp;} <br />
                            &emsp;}); <br /> <br />

                            }
                        </p>

                <hr class="style11"> <br />

                📂frontend<br />
                &emsp; 📂assets <br />
                &emsp; &emsp; 📄<strong>AppAssets</strong>.php <br />

                <p class="bg-secondary text-white-50 alert alert-dark  m-3 p-1 " role="alert">
                    namespace frontend\assets; <br /> <br />

                    use yii\web\AssetBundle; <br /> <br />

                    /** <br />
                    * Main frontend application asset bundle. <br />
                    */ <br />
                    class AppAsset extends AssetBundle <br />
                    { <br />
                    public $basePath = '@webroot'; <br />
                    public $baseUrl = '@web'; <br />
                    public $css = [ <br />
                    'css/site.css', <br />
                    ]; <br />
                    &emsp;public $js = [ <br />
                    &emsp;&emsp;<o class="text-warning">'js/app.js'</o> <br />
                    &emsp;]; <br />
                    public $depends = [ <br />
                    'yii\web\YiiAsset', <br />
                    'yii\bootstrap4\BootstrapAsset', <br />
                    ]; <br />
                    } <br />
                </p>

                <hr class="style11"> <br />

                <img src="/images/20d1.jpg" class="figure-img img-fluid rounded" alt="!!!"> <br /> <br />

                <a href="https://www.yiiframework.com/extension/yiisoft/yii2-bootstrap/doc/api/2.0/yii-bootstrap-modal">Documentation</a>
            </div>

        </div>
        <!-- content tugadi -->
    </div>

</div>