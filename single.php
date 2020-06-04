<?php

get_header();

    $shared = null;
    $license = null;
    $shared = $_GET['shared'];
    $license = $_GET['license'];
    $lang = substr(explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0], 0, 2);
    #languages:
    # Armenian = hy_AM
    # Azerbaijan = az_AZ
    # Belarusian = be_BE
    # Bosnian = bs_BA
    # Bulgarian = bg_BG
    # Croatian = hr_HR
    # Georgian = ka_GE
    # Kazakh = kk_KZ
    # Kyrgyz = ky_XX
    # Macedonian = mk_MK
    # Moldova = ro_MD
    # Montenegro = sr_ME
    # Romanian  = ro_RO
    # Serbian  = sr_RS
    # Tajik = tg_TJ
    # Turkish = tr_TR
    # Turkmen = tk_TM
    # Ukrainian = uk_UA
    # Uzbek = uz_UZ
?>
    <?php if(!$license) { ?>
        <div class="header-banner">
            <a href="https://m.me/afinidata?ref=shared_banner">
	            <?php if($lang == 'es') { ?>
                  Suscríbete para recibir +500 actividades específicas para tu peque. Click aquí.
	            <?php  } elseif($lang == 'hy') { ?>
                  Բաժանորդագրվեք ՝ ձեր փոքրիկի համար ստանալու համար +500 հատուկ գործողություններ: Սեղմեք այստեղ.
	            <?php  } elseif($lang == 'az') { ?>
                  Kiçik biriniz üçün +500 xüsusi fəaliyyət almaq üçün abunə olun. buraya basın
	            <?php  } elseif($lang == 'be') { ?>
                  Падпішыцеся, каб атрымаць +500 канкрэтных мерапрыемстваў для вашага маленькага. Клікніце тут.
	            <?php  } elseif($lang == 'bs') { ?>
                  Pretplatite se na primanje +500 određenih aktivnosti za vašu malu. Kliknite ovdje.
	            <?php  } elseif($lang == 'bg') { ?>
                  Абонирайте се да получавате +500 специфични дейности за вашето бебе. Кликнете тук.
	            <?php  } elseif($lang == 'hr') { ?>
                  Pretplatite se na primanje +500 specifičnih aktivnosti za vašu malu. Kliknite ovdje.
	            <?php  } elseif($lang == 'ka') { ?>
                  გამოიწერეთ, რომ მიიღოთ +500 სპეციფიკური ღონისძიებები თქვენი პატარისათვის. Დააკლიკე აქ.
	            <?php  } elseif($lang == 'kk') { ?>
                  Кішкентайыңыз үшін +500 нақты іс-шараларға жазылу үшін жазылыңыз. Мында басыңыз.
	            <?php  } elseif($lang == 'ky') { ?>
                  Кичинекейиңиз үчүн +500 конкреттүү иш-аракеттерди алуу үчүн жазылыңыз. Бул жерди бас.
	            <?php  } elseif($lang == 'mk') { ?>
                  Зачленете се за да добиете +500 специфични активности за вашето малечко. Кликни тука.
	            <?php  } elseif($lang == 'ro') { ?>
                  Aboneaza-te pentru a primi +500 de activitati specifice pentru cel mic. Click aici.
	            <?php  } elseif($lang == 'sr') { ?>
                  Pretplatite se da primate +500 specifične aktivnosti za vašu malu. Kliknite ovde.
	            <?php  } elseif($lang == 'tg') { ?>
                  Барои гирифтани +500 фаъолиятҳои мушаххас барои кӯдаки худ обуна шавед. Ин ҷоро ангушт зан.
	            <?php  } elseif($lang == 'tr') { ?>
                  Ufaklığınız için +500 özel etkinlik almak için abone olun. Buraya tıklayın.
	            <?php  } elseif($lang == 'tk') { ?>
                  Kiçijikiňiz üçin +500 aýratyn çäreleri almak üçin ýazylyň. Şu ýere basyň.
	            <?php  } elseif($lang == 'uk') { ?>
                  Підпишіться на отримання +500 конкретних заходів для вашого малюка. Натисніть тут.
	            <?php  } elseif($lang == 'uz') { ?>
                  Kichkintoyingiz uchun +500 maxsus tadbirlarni olish uchun obuna bo'ling. Bu yerni bosing.
	            <?php } else { ?>
                  Subscribe to access to +500 personalized activities for your child. Click Here.
	            <?php } ?>
            </a>
        </div>
    <?php } ?>
	<section class="single-content">
        <div class="post-thumbnail-content">
	        <?php the_post_thumbnail('faq-size'); ?>
        </div>
        <div class="share-buttons right">
            <div class="container">
	            <?php if($lang == 'en') { ?>
                  <a target="popup"
                     class="facebook-button"
                     href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                     onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                  >Share on Facebook</a>
	            <?php } elseif ($lang == 'ar') { ?>
                  <a target="popup"
                     class="facebook-button"
                     href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                     onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                  >حصة على الفيسبوك</a>
	            <?php } else { ?>
                  <a target="popup"
                     class="facebook-button"
                     href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                     onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                  >Comparte en Facebook</a>
	            <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="single-box">
                <?php
                if(have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }?>
                <div class="limitator"></div>
            </div>
        </div>
        <div class="container">
            <div class="share-buttons">
                <?php if($lang == 'en') { ?>
                    <a target="popup"
                       class="facebook-button"
                       href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                       onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                    >Share on Facebook</a>
                <?php } else if ($lang == 'ar') { ?>
                    <a target="popup"
                       class="facebook-button"
                       href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                       onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                    >حصة على الفيسبوك</a>
                <?php } else { ?>
                    <a target="popup"
                       class="facebook-button"
                       href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola"
                       onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>?shared=true&t=hola','popup','width=600,height=600')";
                    >Comparte en Facebook</a>
                <?php } ?>
            </div>
        </div>
	</section>

<?php if(!$license) { ?>
    <div class="disclaimer">
        <div class="disclaimer-content">
            <button class="disclaimer-close">
                <img src="<?php bloginfo('template_url');?>/assets/images/button.png" class="close" alt="">
            </button>
            <img src="<?php bloginfo('template_url');?>/assets/images/shared.jpg" alt="">
            <div class="text-disclaimer">
	            <?php if($lang == 'es') { ?>
                    <h1>+500 actividades</h1>
                    <h2>específicas para tu peque</h2>
                    <span>Comienza ahora totalmente </span><strong>GRATIS</strong><br>
                    <a href="https://m.me/afinidata?ref=shared_activity">Click Aquí</a>
	            <?php  } elseif($lang == 'hy') { ?>
                    <h1> +500 գործողություններ </h1>
                    <h2> հատուկ ձեր փոքրիկի համար </h2>
                    <span> Սկսեք այժմ ամբողջությամբ </span> <strong> ԱՆՎԱՐ </ strong> <br> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Սեղմեք այստեղ </a>
	            <?php  } elseif($lang == 'az') { ?>
                    <h1>+500 fəaliyyət</h1>
                    <h2>kiçik bir xüsusi</h2>
                    <span>İndi tam başlayın</span><strong>PULSUZ</strong><br>
                    <a href="https://m.me/afinidata?ref=shared_activity">Bura basın</a>
	            <?php  } elseif($lang == 'be') { ?>
                    <h1> +500 мерапрыемстваў </h1>
                    <h2> канкрэтна для вашага маленькага </h2>
                    <span> Пачніце цалкам </span> <strong> БЯСПЛАТНА </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Націсніце тут </a>
	            <?php  } elseif($lang == 'bs') { ?>
                    <h1> +500 aktivnosti </h1>
                    <h2> specifično za vašeg mališana </h2>
                    <span> Počnite sada u potpunosti </span> <strong> BESPLATNO </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Kliknite ovde </a>
	            <?php  } elseif($lang == 'bg') { ?>
                    <h1> +500 дейности </h1>
                    <h2> специфичен за вашия малък </h2>
                    <span> Започнете сега напълно </span> <strong> БЕЗПЛАТНО </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Кликнете тук </a>
	            <?php  } elseif($lang == 'hr') { ?>
                    <h1> +500 aktivnosti </h1>
                    <h2> specifično za vašeg mališana </h2>
                    <span> Počnite sada u potpunosti </span> <strong> BESPLATNO </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Kliknite ovdje </a>
	            <?php  } elseif($lang == 'ka') { ?>
                    <h1> +500 აქტივობები </h1>
                    <h2> სპეციფიკური თქვენი პატარა </h2>
                    <span> დაიწყეთ ახლა სრულად </span> <strong> უფასო </ strong> <br> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> დააჭირეთ აქ </a>
	            <?php  } elseif($lang == 'kk') { ?>
                    <h1> +500 іс-шаралар </h1>
                    <h2> сіздің кішкентайыңызға арналған </h2>
                    <span> Қазір толығымен бастаңыз </span> <strong> ТЕГІН </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Мұнда басыңыз </a>
	            <?php  } elseif($lang == 'ky') { ?>
                    <h1> +500 иш-аракеттер </h1>
                    <h2> кичинекейиңизге мүнөздүү </h2>
                    <span> Азыр толугу менен баштаңыз </span> <strong> АКЫСЫЗ </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Бул жерди басыңыз </a>
	            <?php  } elseif($lang == 'mk') { ?>
                    <h1> +500 активности </h1>
                    <h2> специфично за вашето малечко </h2>
                    <span> Започнете сега целосно </span> <strong> БЕСПЛАТНО </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Кликнете овде </a>
	            <?php  } elseif($lang == 'ro') { ?>
                    <h1> +500 de activități </h1>
                    <h2> specific pentru micuțul tău </h2>
                    <span> Începeți acum complet </span> <strong> GRATUIT </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Faceți clic aici </a>
	            <?php  } elseif($lang == 'sr') { ?>
                    <х1> +500 активности </х1>
                    <х2> специфично за вашег малишана </х2>
                    <спан> Почните одмах у потпуности </спан> <стронг> БЕСПЛАТНО </стронг> <бр>
                    <а хреф="хттпс://м.ме/афинидата?реф=схаред_ацтивити"> Кликните овде </а>
	            <?php  } elseif($lang == 'tg') { ?>
                    <h1> +500 фаъолият </h1>
                    <h2> барои мушаххаси кӯдаки шумо </h2>
                    <span> Ҳоло пурра оғоз кунед </span> <strong> РОЙГОН </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Инҷоро пахш кунед </a>
	            <?php  } elseif($lang == 'tr') { ?>
                    <h1> +500 etkinlik </h1>
                    <h2> küçük çocuğunuza özgü </h2>
                    <span> Şimdi tamamen başlayın </span> <strong> ÜCRETSİZ </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Buraya Tıklayın </a>
	            <?php  } elseif($lang == 'tk') { ?>
                    <h1> +500 çäreler </h1>
                    kiçiňiz üçin <h2> mahsus </h2>
                    <span> Indi doly başlaň </span> <strong> MUGT </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Şu ýere basyň </a>
	            <?php  } elseif($lang == 'uk') { ?>
                    <h1> +500 заходів </h1>
                    <h2> специфічно для вашого маленького </h2>
                    <span> Почніть зараз повністю </span> <strong> БЕЗКОШТОВНО </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Натисніть тут </a>
	            <?php  } elseif($lang == 'uz') { ?>
                    <h1> +500 ta faoliyat </h1>
                    <h2> kichkinangizga xos </h2>
                    <span> Endi to'liq boshlang </span> <strong> BEPUL </strong> <br>
                    <a href="https://m.me/afinidata?ref=shared_activity"> Bu yerni bosing </a>
	            <?php } else { ?>
                    <h1>+500 activities</h1>
                    <h2>especified for your child</h2>
                    <span>Get started now </span><strong>FREE</strong><br>
                    <a href="https://m.me/afinidata?ref=shared_activity">Click Here</a>
	            <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if(!$license) { ?>
    <?php if(true) { ?>
		<?php if($lang == 'es') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Suscríbete para recibir actividades para tu bebé.</h2>
                    <p>Si ya estas recibiendo nuestras actividades en Facebook Messenger puedes omitir este paso. ¡Sigue disfrutando tus actividades!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Nombre: </label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Apellido: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Correo electrónico: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">¿Tu peque ya nació?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>No</option>
                                <option value="yes">Si</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Nombre o sobrenombre de tu bebé: </label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Fecha de nacimiento: </label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Suscribirme">
                    </form>
                    <div class="form-alert">
                        <p>Se te estará redirigiendo al chat para que empieces a recibir actividades personalizadas. Gracias por suscribirte!</p>
                        <p>Si no te abre el chat automáticamente presiona <a class="redirect_link" href="#">aquí</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>¡Oh no! Ha ocurrido un error.</p>
                        <p>Sentimos las molestias, verifica tu conexión a internet e inténtalo nuevamente en unos minutos.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'hy') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Բաժանորդագրվեք ձեր երեխայի համար գործողություններ ստանալու համար:</h2>
                    <p>Եթե ​​դուք արդեն ստանում եք մեր գործունեությունը Facebook Messenger- ում, կարող եք բաց թողնել այս քայլը: Շարունակեք վայելել ձեր գործունեությունը:</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Անուն: </label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Ազգանուն </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Էլ. Փոստ.</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Ձեր փոքրիկն արդեն ծնվել է:</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Ոչ</option>
                                <option value="yes">Այո</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Ձեր երեխայի անունը կամ մականունը.</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Ծննդյան օր: </label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Բաժանորդագրվել">
                    </form>
                    <div class="form-alert">
                        <p>Ձեզ կուղղորդվի դեպի զրուցարան, որպեսզի կարողանաք սկսել անհատականացված գործողություններ: Շնորհակալություն բաժանորդագրվելու համար:</p>
                        <p>Եթե ​​զրույցը չի բացվում ինքնաբերաբար, սեղմեք <a class="redirect_link" href="#">այստեղ</a>:</p>
                    </div>
                    <div class="form-error">
                        <p>Օ ոչ! Սխալ է տեղի ունեցել.</p>
                        <p>Մենք ցավում ենք անհարմարության համար, ստուգեք ձեր ինտերնետային կապը և փորձեք մի քանի րոպեից կրկին փորձել:</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'az') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Körpəniz üçün tədbirlər almaq üçün abunə olun.</h2>
                    <p>Facebook Messenger-də fəaliyyətlərimizi onsuz da alırsınızsa, bu addımı ata bilərsiniz. Fəaliyyətlərinizdən zövq almağa davam edin!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Adı:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Soyadı:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Elektron poçt:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Kiçik biriniz artıq doğulub?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Yox</option>
                                <option value="yes">Bəli</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Körpənizin adı və ya ləqəb:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Doğum tarixi:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Abunə olun">
                    </form>
                    <div class="form-alert">
                        <p>Şəxsi fəaliyyətlər almağa başlaya biləcəyiniz üçün söhbətə yönləndiriləcəksiniz. Abunə üçün təşəkkür edirik!</p>
                        <p>Çat avtomatik açılmırsa, <a class="redirect_link" href="#">vurun</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Ah yox! Bir səhv baş verdi.</p>
                        <p>Narahatçılığa görə üzr istəyirik, internet bağlantınızı yoxlayın və bir neçə dəqiqədən sonra yenidən cəhd edin.</p>
                    </div>
                </div>
            </div>
		<?php  } elseif($lang == 'be') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Падпішыцеся на атрыманне мерапрыемстваў для вашага дзіцяці.</h2>
                    <p>Калі вы ўжо атрымліваеце нашу дзейнасць у Facebook Messenger, вы можаце прапусціць гэты крок. Працягвайце атрымліваць асалоду ад сваёй дзейнасцю!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Імя: </label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Прозвішча:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Адрас электроннай пошты:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Ваш маленькі ўжо нарадзіўся?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Не</option>
                                <option value="yes">Так</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Імя або псеўданім вашага дзіцяці:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Дата нараджэння: </label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Падпісацца">
                    </form>
                    <div class="form-alert">
                        <p>Вы будзеце перанакіраваны ў чат, каб вы маглі пачаць атрымліваць індывідуальныя дзеянні. Дзякуй за падпіску!</p>
                        <p>Калі чат не адкрыецца аўтаматычна, націсніце<a class="redirect_link" href="#">тут</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>О не! Адбылася памылка.</p>
                        <p>Прыносім прабачэнні за нязручнасці, праверце падключэнне да Інтэрнэту і паспрабуйце зноў праз некалькі хвілін.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'bs') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Pretplatite se na primanje aktivnosti za svoju bebu.</h2>
                    <p>Ako već primate naše aktivnosti na Facebook Messengeru, možete preskočiti ovaj korak. Nastavite uživati ​​u svojim aktivnostima!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ime: </label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Prezime: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Email:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Je li se već rodio vaš mali?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Ne</option>
                                <option value="yes">Da</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Ime ili nadimak vaše bebe:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Datum rođenja:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Pretplatite se">
                    </form>
                    <div class="form-alert">
                        <p>Bićete preusmjereni na chat kako biste mogli početi primati personalizirane aktivnosti. Hvala na pretplati!</p>
                        <p>Ako se chat ne otvori automatski, <a class="redirect_link" href="#">kliknite ovdje</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>O ne! Došlo je do pogreške.</p>
                        <p>Žao nam je zbog neugodnosti, provjerite internetsku vezu i pokušajte ponovo za nekoliko minuta.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'bg') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Абонирайте се, за да получавате дейности за вашето бебе.</h2>
                    <p>Ако вече получавате нашите дейности във Facebook Messenger, можете да пропуснете тази стъпка. Продължавайте да се наслаждавате на дейностите си!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Име: </label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Фамилия: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Електронна поща: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Вашето малко вече ли се е родило?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Не</option>
                                <option value="yes">да</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Име или псевдоним на вашето бебе:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Рождена дата:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Абонирай се">
                    </form>
                    <div class="form-alert">
                        <p>Ще бъдете пренасочени към чат, за да можете да започнете да получавате персонализирани дейности. Благодаря за абонамента!</p>
                        <p>Ако чатът не се отвори автоматично, натиснете <a class="redirect_link" href="#">тук</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>О, не! Възникна грешка.</p>
                        <p>Съжаляваме за неудобството, проверете вашата интернет връзка и опитайте отново след няколко минути.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'hr') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Pretplatite se za primanje aktivnosti za vaše dijete.</h2>
                    <p>Ako već primate naše aktivnosti na Facebook Messengeru, možete preskočiti ovaj korak. Nastavite uživati ​​u svojim aktivnostima!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ime:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Prezime:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">E-mail: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Je li se vaše dijete već rodilo?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Ne</option>
                                <option value="yes">Da</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Ime ili nadimak vaše bebe:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Datum rođenja:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="pretplatiti">
                    </form>
                    <div class="form-alert">
                        <p>Bit ćete preusmjereni na chat tako da možete početi primati personalizirane aktivnosti. Hvala što ste se pretplatili!</p>
                        <p>Ako se chat ne otvori automatski, <a class="redirect_link" href="#">kliknite ovdje</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>O ne! Došlo je do pogreške.</p>
                        <p> Žao nam je zbog neugodnosti, provjerite internetsku vezu i pokušajte ponovo za nekoliko minuta. </p>                </div>
                </div>
            </div>

		<?php  } elseif($lang == 'ka') { ?>

            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>გამოიწერეთ თქვენი ბავშვისთვის საქმიანობის მიღება.</h2>
                    <p>თუ თქვენ უკვე იღებთ ჩვენს აქტივობებს Facebook Messenger- ზე, შეგიძლიათ გამოტოვოთ ეს ნაბიჯი. განაგრძეთ სიამოვნება თქვენი საქმიანობით!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">სახელი:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">გვარი:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">ელ.ფოსტა:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">შენი პატარა უკვე დაიბადა?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>არა</option>
                                <option value="yes">დიახ</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">თქვენი ბავშვის სახელი ან მეტსახელი:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Დაბადების თარიღი:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="გამოწერა">
                    </form>
                    <div class="form-alert">
                        <p>თქვენ გადაკეთდება ჩატში, რათა დაიწყოთ პერსონალური საქმიანობის მიღება. მადლობა გამოწერისთვის!</p>
                        <p>თუ ჩატი ავტომატურად არ გაიხსნება, დააჭირეთ ღილაკს <a class="redirect_link" href="#">აქ</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Ო არა! მოხდა შეცდომა.</p>
                        <p>ჩვენ ვწუხვართ უხერხულობის გამო, შეამოწმეთ თქვენი ინტერნეტი და რამდენიმე წუთში ისევ სცადეთ.</p>
                    </div>
                </div>
            </div>


		<?php  } elseif($lang == 'kk') { ?>

            <div class="container small-container">
                <div class="single-box form-box">
                    <h2> балаңызға арналған іс-шараларға тіркелу. </h2>
                    <p> Егер сіз Facebook Messenger-те біздің іс-әрекеттеріміз туралы білетін болсаңыз, бұл қадамды өткізіп жіберуге болады. Әрекеттеріңізден рақаттана беріңіз! </p>                <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                                                                                                                                                                                                           data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Аты: </label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Тегі: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Электрондық пошта:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Сіздің кішкентайыңыз әлдеқашан туылған ба?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Жоқ</option>
                                <option value="yes">Иә</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Сіздің балаңыздың аты немесе лақап аты:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Туған кезі:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Жазылу">
                    </form>
                    <div class="form-alert">
                        <p> Сізді жеке әрекеттерді қабылдауды бастау үшін сіз чатқа жібересіз. Жазылғаныңыз үшін рахмет! </p>
                        <p>чат автоматты түрде ашылмаса, <a class="redirect_link" href="#">осы жерді басыңыз</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>О жоқ! Қате пайда болды.</p>
                        <p>Қолайсыздық үшін кешірім сұраймыз, интернет қосылымыңызды тексеріп, бірнеше минуттан кейін әрекетті қайталаңыз.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'ky') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Ымыркайыңыздын иш-аракеттерин кабыл алуу үчүн жазылыңыз.</h2>
                    <p>Эгер сиз Facebook Messenger боюнча иш-аракеттерибизди мурунтан эле кабыл алып жатсаңыз, анда бул кадамды өткөрүп жиберсеңиз болот. Аракетиңизден ырахат алыңыз!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Аты, атасынын аты:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">жөнү:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Email: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Кичинекейиңиз төрөлдү беле?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Жок</option>
                                <option value="yes">Ооба</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Ымыркайыңыздын аты же ылакап аты: </label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Туулган датасы:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="жазылуу">
                    </form>
                    <div class="form-alert">
                        <p>Жекечелештирилген иш-аракеттерди баштоо үчүн сиз баарлашууга багытталасыз. Жазылуу үчүн рахмат!</p>
                        <p>Эгер чат ачылбаса, бул жерди<a class="redirect_link" href="#"> чыкылдатыңыз</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Ой жок! Ката кетти.</p>
                        <p>Ыңгайсыздык үчүн кечирим сурайбыз, интернет туташууңузду текшерип, бир нече мүнөттөн кийин дагы аракет кылып көрүңүз.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'mk') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Зачленете се за да добиете активности за вашето бебе.</h2>
                    <p>Ако веќе ги добивате нашите активности на Facebook Messenger, можете да го прескокнете овој чекор. Продолжете да уживате во вашите активности!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Име:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Презиме: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Е-пошта:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Дали вашето малечко е веќе родено?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Не</option>
                                <option value="yes">Да</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Име или прекар на вашето бебе:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Датум на раѓање: </label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Претплатете се">
                    </form>
                    <div class="form-alert">
                        <p>Beе бидете пренасочени на разговор за да можете да започнете да примате лични активности. Ви благодариме за претплатата!</p>
                        <p>Ако разговорот не се отвори автоматски, <a class="redirect_link" href="#">кликнете овде</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>О, не! Се појави грешка.</p>
                        <p>Areал ни е за непријатностите, проверете ја вашата интернет-врска и обидете се повторно за неколку минути.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'ro') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Abonează-te pentru a primi activități pentru copilul tău.</h2>
                    <p>Dacă primiți deja activitățile noastre pe Facebook Messenger, puteți sări peste acest pas. Continuă să te bucuri de activitățile tale!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Nume:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Nume de familie:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">E-mail:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">S-a născut deja micuțul tău?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Nu</option>
                                <option value="yes">da</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Numele sau porecla copilului tău:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Data nasterii:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Abonati-va">
                    </form>
                    <div class="form-alert">
                        <p>Vei fi redirecționat către chat, astfel încât să poți începe să primești activități personalizate. Mulțumim pentru abonament!</p>
                        <p>Dacă chat-ul nu se deschide automat, faceți <a class="redirect_link" href="#">clic aici</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Oh nu! A avut loc o eroare.</p>
                        <p>Ne pare rău pentru inconveniente, verificați conexiunea la internet și încercați din nou în câteva minute.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'sr') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Претплатите се за примање активности за своју бебу.</h2>
                    <p>Ако већ примате наше активности на Фацебоок Мессенгеру, овај корак можете прескочити. Наставите да уживате у својим активностима!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Име:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Презиме:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Емаил:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Да ли се ваше дете већ родило?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Не</option>
                                <option value="yes">да</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Име или надимак ваше бебе:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Датум рођења: </label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="претплатити се">
                    </form>
                    <div class="form-alert">
                        <p>Бићете преусмерени на чет, тако да можете почети да примате персонализоване активности. Хвала што сте се претплатили!</p>
                        <p>Ако се ћаскање не отвори аутоматски, кликните <a class="redirect_link" href="#">овде</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>О, не! Дошло је до грешке.</p>
                        <p>Жао нам је због непријатности, проверите интернет везу и покушајте поново за неколико минута.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'tg') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Барои гирифтани фаъолиятҳо барои кӯдаки шумо обуна шавед.</h2>
                    <p>Агар шумо аллакай дар Фейсбук Messenger фаъолиятҳои моро қабул карда бошед, шумо метавонед ин қадамро гузаред. Аз фаъолиятҳои худ лаззат баред!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ном:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Фамилия:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Имейл:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Оё кӯдаки шумо аллакай таваллуд шудааст?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Не</option>
                                <option value="yes">Бале</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Номи ё лақаби кӯдаки шумо:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Санаи таваллуд:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Обуна шавед">
                    </form>
                    <div class="form-alert">
                        <p> Шумо ба сӯҳбат равона карда мешавед, то шумо тавонед ба фаъолиятҳои фардӣ шурӯъ кунед. Ташаккур барои обуна! </p>
                        <p>Агар Чат худкор кушода нашавад ин ҷо зер <a class="redirect_link" href="#">кунед</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Оҳ не! Хатогӣ рух додааст.</p>
                        <p>Узр барои ташвишоварем, пайвасти интернети худро санҷед ва пас аз чанд дақиқа дубора талош кунед.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'tr') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Bebeğiniz için aktivite almak üzere abone olun.</h2>
                    <p>Faaliyetlerimizi Facebook Messenger'da zaten alıyorsanız bu adımı atlayabilirsiniz. Faaliyetlerinizin tadını çıkarmaya devam edin!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ad:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Soyadı:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Email:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Küçük çocuğunuz zaten doğdu mu?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Hayır</option>
                                <option value="yes">Evet</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Bebeğinizin adı veya takma adı:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Doğum günü:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Abone ol">
                    </form>
                    <div class="form-alert">
                        <p> Kişiselleştirilmiş etkinlikler almaya başlayabilmeniz için sohbete yönlendirileceksiniz. Abone olduğunuz için teşekkürler! </p>
                        <p>Sohbet otomatik olarak açılmazsa, <a class="redirect_link" href="#">buraya tıklayın</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Oh hayır! Bir hata oluştu.</p>
                        <p>Rahatsızlık için özür dileriz, internet bağlantınızı kontrol edin ve birkaç dakika içinde tekrar deneyin.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'tk') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Çagaňyz üçin çäreleri almak üçin ýazylyň.</h2>
                    <p>“Facebook Messenger” -däki işlerimizi eýýäm alýan bolsaňyz, bu ädimden geçip bilersiňiz. Işleriňizden lezzet alyň!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ady:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Familiýasy: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">E-poçta:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Kiçijikiňiz eýýäm doguldymy?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>.Ok</option>
                                <option value="yes">Hawa</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Çagaňyzyň ady ýa-da lakamy:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Doglan gün:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Abuna ýazylyň">
                    </form>
                    <div class="form-alert">
                        <p>Şahsylaşdyrylan çäreleri alyp başlamak üçin söhbetdeşlik üçin ugrukdyrylarsyňyz. Abuna ýazylanyňyz üçin sag boluň!</p>
                        <p>Söhbet awtomatiki açylmasa  <a class="redirect_link" href="#">şu ýere basyň</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Ay Ýok! Erroralňyşlyk ýüze çykdy</p>
                        <p>Amatsyzlyk üçin gynanýarys, internet birikmäňizi barlaň we birnäçe minutdan gaýtadan synanyşyň.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'uk') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Підпишіться на отримання заходів для вашої дитини.</h2>
                    <p>Якщо ви вже отримуєте нашу діяльність у Facebook Messenger, ви можете пропустити цей крок. Продовжуйте насолоджуватися своєю діяльністю!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ім'я:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Прізвище:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Електронна пошта: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Ваш маленький вже народився?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Ні</option>
                                <option value="yes">Так</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Ім'я або псевдонім Вашої дитини:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">День народження:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Підписатися">
                    </form>
                    <div class="form-alert">
                        <p>Ви будете перенаправлені на чат, щоб ви могли почати отримувати персоналізовані дії. Дякуємо, що підписалися!</p>
                        <p>Якщо чат не відкривається автоматично, натисніть <a class="redirect_link" href="#">тут</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>О ні! Сталася помилка.</p>
                        <p>Просимо вибачення за незручності, перевірте підключення до Інтернету та спробуйте ще раз через кілька хвилин.</p>
                    </div>
                </div>
            </div>

		<?php  } elseif($lang == 'uz') { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Kichkintoyingiz uchun tadbirlar olish uchun obuna bo'ling.</h2>
                    <p>Agar siz Facebook Messenger-da bizning harakatlarimiz haqida allaqachon xabar olgan bo'lsangiz, ushbu bosqichni o'tkazib yuborishingiz mumkin. Faoliyatingizdan zavqlaning!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Ism:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Familiya:</label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Elektron pochta:</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Kichkintoyingiz allaqachon tug'ilganmi?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>Yo'q</option>
                                <option value="yes">Ha</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Kichkintoyingizning ismi yoki taxallusi:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Tug'ilgan sana:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Obuna bo'ling">
                    </form>
                    <div class="form-alert">
                        <p>Shaxsiylashtirilgan tadbirlarni qabul qilishni boshlashingiz uchun siz suhbatga yo'naltirilasiz. Obuna bo'lganingiz uchun tashakkur!</p>
                        <p>Agar chat ochilmasa, avtomatik ravishda <a class="redirect_link" href="#">shu yerni bosing</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Oh yo'q! Xato yuz berdi.</p>
                        <p>Noqulayliklar uchun uzr so'raymiz, Internetga ulanishni tekshiring va bir necha daqiqadan so'ng qayta urinib ko'ring.</p>
                    </div>
                </div>
            </div>

		<?php } else { ?>
            <div class="container small-container">
                <div class="single-box form-box">
                    <h2>Subscribe to receive activities for your baby.</h2>
                    <p>If you are already receiving our activities on Facebook Messenger you can skip this step. Keep enjoying your activities!</p>
                    <form action="." method="post" data-default-uri="<?php echo get_theme_mod("core_url"); ?>" id="suscribe-form"
                          data-language="<?php echo $lang; ?>">
                        <div class="form-control"><label for="">Name:</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="form-control"><label for="">Last Name: </label>
                            <input type="text" name="last_name" required>
                        </div>

                        <div class="form-control"><label for="">Email: </label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-control">
                            <label for="">Is your baby already born?</label>
                            <select name="has_child" id="" required>
                                <option value="no" selected>No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                        <div class="child-details">
                            <div class="form-control"><label for="">Your baby's name or nickname:</label>
                                <input type="text" name="child_name">
                            </div>
                            <div class="form-control"><label for="">Birthday:</label>
                                <input type="text" class="datepicker-input" name="birthday">
                            </div>
                        </div>
                        <input type="submit" value="Suscribe">
                    </form>
                    <div class="form-alert">
                        <p>You will be being redirected to chat so you can start receiving personalized activities. Thanks for subscribing!</p>
                        <p>If the chat does not open automatically click <a class="redirect_link" href="#">here</a>.</p>
                    </div>
                    <div class="form-error">
                        <p>Oh no! An error has occurred.</p>
                        <p>We are sorry for the inconvenience, check your internet connection and try again in a few minutes.</p>
                    </div>
                </div>
            </div>
		<?php } ?>
    <?php } ?>
<?php } ?>
<?php get_footer(); ?>