<?php 

session_start ();
echo $_SESSION ['name'];
echo $_SESSION ['email'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
  <meta charset="utf-8">
  <title></title>

</head>

<body style="background-image: url('naushniki_knigi_obrazovanie_121501_1920x1080.jpg')">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Spotify 2.0</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="about.php">Про нас</a>
      <a class="p-2 text-dark" href="index.php">Основна сторінка</a>
      <a class="p-2 text-dark" href="">Каталог композицій</a>
      <a class="p-2 text-dark" href="txt.php">Служба підтримки</a>
      <a class="p-2 text-dark" href="Log.php">Особистий кабінет</a>
      <a class="p-2 text-dark" href="register.php">Регестрація</a>
    </nav>

  </div>
  <!-- GTranslate: https://gtranslate.io/ -->
  <a href="#" onclick="doGTranslate('uk|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a><a href="#" onclick="doGTranslate('uk|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="French" /></a><a href="#" onclick="doGTranslate('uk|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="German" /></a><a href="#" onclick="doGTranslate('uk|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Italian" /></a><a href="#" onclick="doGTranslate('uk|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Portuguese" /></a><a href="#" onclick="doGTranslate('uk|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Russian" /></a><a href="#" onclick="doGTranslate('uk|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" /></a>

  <style type="text/css">
    <!--
    a.gflag {
      vertical-align: middle;
      font-size: 16px;
      padding: 1px 0;
      background-repeat: no-repeat;
      background-image: url(//gtranslate.net/flags/16.png);
    }

    a.gflag img {
      border: 0;
    }

    a.gflag:hover {
      background-image: url(//gtranslate.net/flags/16a.png);
    }

    #goog-gt-tt {
      display: none !important;
    }

    .goog-te-banner-frame {
      display: none !important;
    }

    .goog-te-menu-value:hover {
      text-decoration: none !important;
    }

    body {
      top: 0 !important;
    }

    #google_translate_element2 {
      display: none !important;
    }
    -->
  </style>

  <br /><select onchange="doGTranslate(this);">
    <option value="">Select Language</option>
    <option value="uk|af">Afrikaans</option>
    <option value="uk|sq">Albanian</option>
    <option value="uk|ar">Arabic</option>
    <option value="uk|hy">Armenian</option>
    <option value="uk|az">Azerbaijani</option>
    <option value="uk|eu">Basque</option>
    <option value="uk|be">Belarusian</option>
    <option value="uk|bg">Bulgarian</option>
    <option value="uk|ca">Catalan</option>
    <option value="uk|zh-CN">Chinese (Simplified)</option>
    <option value="uk|zh-TW">Chinese (Traditional)</option>
    <option value="uk|hr">Croatian</option>
    <option value="uk|cs">Czech</option>
    <option value="uk|da">Danish</option>
    <option value="uk|nl">Dutch</option>
    <option value="uk|en">English</option>
    <option value="uk|et">Estonian</option>
    <option value="uk|tl">Filipino</option>
    <option value="uk|fi">Finnish</option>
    <option value="uk|fr">French</option>
    <option value="uk|gl">Galician</option>
    <option value="uk|ka">Georgian</option>
    <option value="uk|de">German</option>
    <option value="uk|el">Greek</option>
    <option value="uk|ht">Haitian Creole</option>
    <option value="uk|iw">Hebrew</option>
    <option value="uk|hi">Hindi</option>
    <option value="uk|hu">Hungarian</option>
    <option value="uk|is">Icelandic</option>
    <option value="uk|id">Indonesian</option>
    <option value="uk|ga">Irish</option>
    <option value="uk|it">Italian</option>
    <option value="uk|ja">Japanese</option>
    <option value="uk|ko">Korean</option>
    <option value="uk|lv">Latvian</option>
    <option value="uk|lt">Lithuanian</option>
    <option value="uk|mk">Macedonian</option>
    <option value="uk|ms">Malay</option>
    <option value="uk|mt">Maltese</option>
    <option value="uk|no">Norwegian</option>
    <option value="uk|fa">Persian</option>
    <option value="uk|pl">Polish</option>
    <option value="uk|pt">Portuguese</option>
    <option value="uk|ro">Romanian</option>
    <option value="uk|ru">Russian</option>
    <option value="uk|sr">Serbian</option>
    <option value="uk|sk">Slovak</option>
    <option value="uk|sl">Slovenian</option>
    <option value="uk|es">Spanish</option>
    <option value="uk|sw">Swahili</option>
    <option value="uk|sv">Swedish</option>
    <option value="uk|th">Thai</option>
    <option value="uk|tr">Turkish</option>
    <option value="uk|uk">Ukrainian</option>
    <option value="uk|ur">Urdu</option>
    <option value="uk|vi">Vietnamese</option>
    <option value="uk|cy">Welsh</option>
    <option value="uk|yi">Yiddish</option>
  </select>
  <div id="google_translate_element2"></div>
  <script type="text/javascript">
    function googleTranslateElementInit2() {
      new google.translate.TranslateElement({
        pageLanguage: 'uk',
        autoDisplay: false
      }, 'google_translate_element2');
    }
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


  <script type="text/javascript">
    /* <![CDATA[ */
    eval(function(p, a, c, k, e, r) {
      e = function(c) {
        return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
      };
      if (!''.replace(/^/, String)) {
        while (c--) r[e(c)] = k[c] || e(c);
        k = [function(e) {
          return r[e]
        }];
        e = function() {
          return '\\w+'
        };
        c = 1
      };
      while (c--)
        if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
      return p
    }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
    /* ]]> */
  </script>

  <center>
    <div class="mt-3">
      <img width="600" height="211" src="Spotify_Logo_RGB_Green.png" alt="">
    </div>
  </center>
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h1 class="card-title pricing-card-title">free <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>вам буде доступно композиції з рекламаю</li>

        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Придбати</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">

      <div class="card-body">
        <h1 class="card-title pricing-card-title">80 грн <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Особиста підписка</li>

        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Придбати</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">

      <div class="card-body">
        <h1 class="card-title pricing-card-title">200 грн <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Сімейна підписка</li>

        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Придбати</button>
      </div>
    </div>
  </div>

  <table class="table table-light">
    <tbody>
      <tr>
        <td>song</td>
        <td>time</td>
        <td>author</td>
        <td>style</td>
        <td>country</td>
      </tr>
      <?php
      $mysql = new mysqli('127.0.0.1', 'mysql', 'mysql', 'spotify');
      if (!$mysql) {
        echo 'eroor';
      }
      $song = mysqli_query($mysql, "SELECT * FROM media");
      $song = mysqli_fetch_all($song);
      foreach ($song as $song) {
      ?>

        <tr>
          <td><?= $song[1] ?></td>
          <td><?= $song[2] ?></td>
          <td><?= $song[3] ?></td>
          <td><?= $song[4] ?></td>
          <td><?= $song[5] ?></td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>