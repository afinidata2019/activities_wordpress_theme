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
              <p>Sentimos las molestias, verifica tu conexión a internet e inténtalo nuevamente en unos minutos..</p>
          </div>
      </div>
  </div>
<?php } ?>
<?php get_footer(); ?>