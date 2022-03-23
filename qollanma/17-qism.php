<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">

    <div class="row">

        <!-- content boshlandi -->
        <div class="col p-0">
            <div class="text-center">
                <h1 class="display-5">17-qism</h1>
                <h5>
                    <em>
                        <p>
                            DataProviderlar
                            <a href="https://youtu.be/h4BvimGNDGg" class="h6">Video varianti</a> <br/> <br/>
                        </p>
                    </em>
                </h5>
            </div>

            <div class="alert alert-dark" role="alert">
                Bizda <strong>employees</strong> nomli <strong>jadval</strong>imiz bor shunga bog'lab bitta <strong>model</strong> hosil qilamiz, <br /> <br />

                📂frontend<br />
                &emsp; 📂models <br />
                &emsp; &emsp; 📄<strong>Employees</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    <i class="text-success">
                        /** <br />
                        * Class Employees model <br />
                        * <br />
                        * @property int $<strong>employeeId</strong> <br />
                        * @property string $<strong>firstName</strong> <br />
                        * @property string $<strong>lastName</strong> <br />
                        */ <br /> <br /> <br />
                    </i>

                    class <strong>Employees</strong> extends <strong>ActiveRecord</strong> <br />
                    { <br /> <br />

                    public static function tableName() <br />
                    { <br />
                    return '{{<strong>employees</strong>}}'; <br />
                    } <br /> <br />

                    } <br />
                </p>
                <br />

                📂frontend<br />
                &emsp; 📂controller <br />
                &emsp; &emsp; 📄<strong>SiteController</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    public function <strong>actionDataprovider</strong>(){ <br /> <br />

                    $query = <strong>Employees::find</strong>(); <br /> <br />

                    $sort = <strong>new Sort</strong>([ <br />
                    'attributes' => [ <br />
                    'firstName', <br />
                    'lastName', <br />
                    'fullName'=>[ <br />
                    'asc' => ['firstName' => SORT_ASC, 'lastName' => SORT_ASC], <br />
                    'desc' => ['firstName' => SORT_DESC, 'lastName' => SORT_DESC], <br />
                    'default' => SORT_DESC, <br />
                    'label' => 'Full Name', <br />
                    ] <br />
                    ], <br />
                    ]); <br /> <br />

                    $provider = <strong>new ActiveDataProvider</strong>([ <br />
                    '<strong>query</strong>' => $query, <br />
                    '<strong>pagination</strong>'=>['pageSize'=>10], <br />
                    '<strong>sort</strong>'=>$sort <br />
                    ]); <br /> <br /> <br />


                    return $this->render('dataprovider', ['<strong>dataProvider</strong>' => $provider]); <br />
                    } <br />
                </p> <br />

                📂frontend<br />
                &emsp; 📂views <br />
                &emsp; 📂site <br />
                &emsp; &emsp; 📄<strong>dataprovider</strong>.php <br /> <br />

                <p class="bg-white text-dark p-3">
                    <o class="text-success">
                        /** <br />
                        * @var \yii\data\<strong>ActiveDataProvider</strong> $dataProvider <br />
                        */ <br /> <br />
                    </o>

                    $model = $dataProvider-><strong>getModels</strong>(); &emsp; <mark> dataProviderni <strong>getModels</strong> degan functioni bor bu bizni <strong>employees</strong> jadvalimizdagi barcha ma'lumotlarni <strong>olib beradi</strong> </mark> <br /> <br />


                    echo "<?php echo htmlentities("<table class='table'>")?>"; <br /> <br />

                   &emsp; echo "<?php echo htmlentities("<tr>")?>"; <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("<th>")?>"; <br />
                    &emsp; &emsp; &emsp; echo $dataProvider-><strong>sort</strong>->link('firstName'); <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("</th>")?>"; <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("<th>")?>"; <br />
                    &emsp; &emsp; &emsp; echo $dataProvider-><strong>sort</strong>->link('lastName'); <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("</th>")?>"; <br />
                    &emsp; echo "<?php echo htmlentities("</tr>")?>"; <br /> <br />

                    foreach (<strong>$model</strong> as $item){ <br /> <br />


                    &emsp; echo "<?php echo htmlentities("<tr>")?>"; <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("<td>")?>"; <br />
                    &emsp; &emsp; &emsp; echo $item->firstName; <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("</td>")?>"; <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("<td>")?>"; <br />
                    &emsp; &emsp; &emsp; echo $item->lastName; <br />
                    &emsp; &emsp; echo "<?php echo htmlentities("</td>")?>"; <br />
                    &emsp; echo "<?php echo htmlentities("</tr>")?>"; <br /> <br />

                    } <br /> <br />

                    echo "<?php echo htmlentities("</table>")?>"; <br /> <br />

                echo \yii\widgets\LinkPager::widget([ <br /> <br />

                '<strong>pagination</strong>'=>$dataProvider->pagination <br />
                ]); <br />
                </p>

                <a href="https://www.yiiframework.com/doc/api/2.0/yii-data-activedataprovider">Documentation</a>

            </div>
        </div>
        <!-- content tugadi -->

    </div>

</div>