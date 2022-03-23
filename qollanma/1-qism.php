<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid">
    <div class="row">

        <!-- content boshlandi -->
        <div class="col p-0">

    <div class="text-center">
        <h1 class="display-5">1-qism</h1>
           <h5>
              <em>
                  <p> Ushbu qisimda yiiframeworkni qanday qilib kompyuterga lokal webserverga o'rnatishni ko'rib chiqamiz
                     <a href="https://youtu.be/m51Eh6TsxqI" class="h6">Video varianti</a> <br/> <br/>
                      Buning uchun bizga <strong>web server</strong> kerak bo'ladi web server sifatida
                      <a href="https://ospanel.io/download/">Open Server Panel</a> dan foydalanamiz,
                  </p>
              </em>
        </h5>
    </div>

            <figure class="figure m-3">
                <img src="/images/photo_2022-02-08_19-00-33.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Open serverdan
                    настройки ga kiramiz</figcaption>
            </figure>

            <div class="alert alert-primary" role="alert">
                Shuyerda mavzudan chetlashsamda bir narsani yozib ketmasam bo'lmaydi
                yiiframeworkda rasm qo'ymoqchi bo'lsangiz bilib oling! <br />
                rasm web papkasida saqlanadi rasmga yo'l
                agar rasm web papkani o'zida bo'lsa <e class="text-secondary"> <?echo htmlentities('<img src="/rasm.jpg">')?> </e>deb ketaverasiz, <br />
                agar web papkani ichida images papka bo'lib uni ichida bo'lsa yo'l<e class="text-secondary"> <?echo htmlentities('<img src="/images/rasm.jpg">')?></e>
            </div>

            <div class="card m-3">
                <img src="/images/1d1.jpg" class="card-img-top" alt="rasm varianti">
                <div class="card-body">
                    <h5 class="card-title">shularni tanlab сохранить tugmasini bosamiz,</h5>
                </div>
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">Yiiframework ni arxivlangan fayldan o'rnatish usuli buning uchun<a href="https://www.yiiframework.com/download"> ushbu saytdan</a>,
                        quyida ko'rsatilganini kõchirib olamiz</h5>
                </div>
                <img src="/images/1d2.jpg" class="card-img-bottom">
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Ko'chirib bo'lgandan keyin uni arxivdan ochamiz va<strong> копировать</strong> qiliamiz</h5>
                </div>
                <img src="/images/1d3.jpg" class="card-img-bottom" alt="...">
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">Копировать qilingan fayllarni Open Server papkasidagi domains papkasiga birorta nomdagi yangi papka ochib
                        (man unga <strong>yii</strong> degan nom berdim) ushbu papkaga вставить qilamiz tashlaymiz!</h5>
                </div>
                <img src="/images/1d4.jpg" class="card-img-bottom">
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">Копировать qilingan fayllarni Open Server papkasidagi domains papkasiga birorta nomdagi yangi papka ochib
                        (man unga <strong>yii</strong> degan nom berdim) ushbu papkaga вставить qilamiz tashlaymiz!</h5>
                </div>
                <img src="/images/1d4.jpg" class="card-img-bottom" alt="!!!">
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">Open Server/настройки/домена Имя домена (ga birorta nom beramiz)
                yii.loc   deb nomladim va папка домена ga yii papkamizni tanlaymiz va добавить tugmasini bosamiz</h5>
                </div>
                <img src="/images/1d5.jpg" class="card-img-bottom" alt="!!!">
                Сохранить qilamiz
            </div>

            <figure class="figure m-3">
                <img src="/images/1d6.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Open Server/дополнительно/консоль ga kiramiz</figcaption>
            </figure>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">cd domains\yii   (yozamiz) <br />
                        Enter   (ni bosamiz) <br />
                        yiiframework fayllar turgan papkaga kirdik</h5>
                </div>
                <img src="/images/1d7.jpg" class="card-img-bottom" alt="!!!">
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">php init (yozamiz) <br />
                        Enter (ni bosamiz) <br />
                        0 yozamiz          <br />
                        Enter (bosamiz)    <br />
                        yes (yozamiz)      <br />
                        Enter (bosamiz)
                    </h5>
                </div>
                <img src="/images/1d8.jpg" class="card-img-bottom" alt="!!!">
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h5 class="card-title">Yiiframework uchun kerak bo'ladigan fayllarni qõshib berdi</h5>
                </div>
                <img src="/images/1d9.jpg" class="card-img-bottom" alt="!!!">
            </div>

            <figure class="figure m-3">
                <img src="/images/1d10.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Ospanel da <br />PhpMyAdmin ga kiramiz</figcaption>
            </figure>

            <figure class="figure m-3">
                <img src="/images/1d11.jpg" class="figure-img img-fluid rounded" alt="!!!">
                <figcaption class="figure-caption">Создать <br />
                    База данных              <br />
                    Qilamiz </figcaption>
            </figure>

            <figure class="figure m-3">
                <img src="/images/1d12.jpg" class="figure-img img-fluid rounded" alt="!!!">
                <figcaption class="figure-caption">Nom qõyamiz <br />
                    yii   (degan nom berdim) <br />
                    OK   (bosamiz)</figcaption>
            </figure>

            <figure class="figure m-3">
                <img src="/images/1d13.jpg" class="figure-img img-fluid rounded" alt="!!!">
                <figcaption class="figure-caption">yii   papkani   ochamiz <br />
                    idea yoki SublimeText  da </figcaption>
            </figure>

            <figure class="figure m-3">
                <img src="/images/1d14.jpg" class="figure-img img-fluid rounded" alt="!!!">
                <figcaption class="figure-caption">📂common <br />
                    📂config <br />
                    📄main-local.php <br />
                    db <br />
                    dbname   ga  uzimizni  baza dannix nomini yozamiz   ( yii )</figcaption>
            </figure>

            <div class="card m-3">
                <div class="card-body">
                    <h6 class="card-title">консоль ga yii migrate   (yozamiz) <br />
                        Enter   (bosamiz) <br />
                        yes   (yozamiz) <br />
                        Enter   (bosamiz)</h6>
                </div>
                <img src="/images/1d15.jpg" class="card-img-bottom" alt="!!!">
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h6 class="card-title">PhpMyAdminga qaraymiz Ikkita tablitsiya hosil bõldi <br />
                        migration va user</h6>
                </div>
                <img src="/images/1d16.jpg" class="card-img-bottom" alt="!!!">
            </div>

            <figure class="figure m-3">
                <img src="/images/1d17.jpg" class="figure-img img-fluid rounded" alt="!!!">
                <figcaption class="figure-caption">Ospanel <br />
                    🌍 Мои проекты <br />
                    📄  yii.loc <br />
                    (ochamiz)</figcaption>
            </figure>

            <figure class="figure m-3">
                <img src="/images/1d18.jpg" class="figure-img img-fluid rounded" alt="!!!">
                <figcaption class="figure-caption">Ochildi!</figcaption>
            </figure>

            <div class="card m-3">
                <div class="card-body">
                    <h6 class="card-title">📂 frontend <br />
                        📂config <br />
                        📄main.php <br />
                        ('request'=>[ ga yangi argument qõshamiz) <br />
                        <o class="text-success">'baseUrl'=>'', </o>  Degan va ('urlManager'=>[ ni kommentariya dan ochamiz) <o class="text-success">'scriptUrl'=>'/index.php', </o>  Shuni qõshamiz, <br />
                        </h6>
                </div>
                <img src="/images/1d19.jpg" class="card-img-bottom" alt="!!!"> <br />
                <a href="https://www.yiiframework.com/wiki/799/yii2-app-advanced-on-single-domain-apache-nginx" class="h6">To'liq ma'lumot</a>
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h6 class="card-title">Asosiy papkamizga (yii) yangi fayl ochamiz uni nomini <o class="text-success">.htaccess</o> (deb nomlaymiz) Uni ichiga quyidagilarni yozamiz <br />
                        <o class="text-success">
                            # End the processing, if a rewrite already occurred <br />
                            RewriteRule ^(frontend|backend)/web/ - [L] <br />
                            RewriteRule .* frontend/web/$0 <br />
                            # Uncomment the following, if you want speaking URL <br />
                            RewriteCond %{REQUEST_FILENAME} !-f <br />
                            RewriteCond %{REQUEST_FILENAME} !-d <br />
                            RewriteRule ^([^/]+/web)/.*$ $1/index.php</o>
                        </h6>
                </div>
                <img src="/images/1d20.jpg" class="card-img-bottom" alt="!!!"> <br />
            </div>

            <div class="card m-3">
                <div class="card-body">
                    <h6 class="card-title">🔄 Sahifamizni yangilaymiz ✓ <br /> </h6>
                </div>
                <img src="/images/1d21.jpg" class="card-img-bottom" alt="!!!"><br />
                <div class="alert alert-info" role="alert">
                    Tabriklayman projectimiz ishga tushdi localda
                </div>
            </div>

</div>
<!-- content tugadi -->

    </div>
</div>