<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fundacja Juz Pomagam</title>
    <meta
      name="description"
      content="Strona o działalności Fundacji 'Juz Pomagam' "
    />
    <meta
      name="keywords"
      content="fundacja, pomagam, juz pomagam, pomagać, dobro"
    />
    <meta name="author" content="Agnieszka Kunicka" />

    <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />

    <link rel="stylesheet" href="main.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Abril+Fatface|Bitter|Oleo+Script+Swash+Caps|Petit+Formal+Script&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="icons/css/fontello.css" />

    
  </head>
  <body>
    <header id="toppage">
      <div class="logo">
        <a href="index.html"
          ><div class="logoPhotoContainer">
            <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <img src="brandImg/logo3p.gif" />
            <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <img src="brandImg/logo4p.gif" />
            <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <img src="brandImg/logoText.gif" />
            <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <img src="brandImg/logo1p.gif" />
            <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <img src="brandImg/logo2p.gif" />
            <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
          </div>
        </a>
      </div>
      <div style="clear: both;"></div>

      <nav id="topNav">
        <ul class="menu">
          <li>
            <div class="navSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <a href="index.html"> Strona Główna</a>
          </li>
          <li>
            <div class="navSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <a href="about.html">O fundacji</a>
          </li>
          <li>
            <div class="navSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <a href="actual.html.html">Aktualności</a>
          </li>
          <li>
            <div class="navSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <a href="thanks.html">Podziękowania</a>
          </li>
          <li>
            <div class="navSmallPhoto"><img src="brandImg/heart.gif" /></div>
            <a href="contact.html">Kontakt</a>
          </li>
          <li>
            <div id="navSmallPhotoRight"><img src="brandImg/heart.gif" /></div>
          </li>
        </ul>
        <div style="clear: both;"></div>
      </nav>
      <div style="clear: both;"></div>
    </header>

    <main>
      <article>
        <section>
          <div class="categories">
            <header>
              <h1>Dziękujemy! Twoja wiadomość została wysłana</h1> 
            </header>
            </div>
        </section>
      </article>

            <?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['information'];

    $email_from = 'myemail@gmail.com';

    $email_subject = $name . " has sent you a message!";

    $email_body = "You have received a new message from " . $name . " via your website!\n".
                            "Name:\n $name\n";
                            "Email:\n $email\n";
                            "Message:\n $message\n";



  $to = "kunicka2000@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);


function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}
?>
<?php
header("Location: /formsubmitted.php"); /* Redirect browser */
exit();
?>
       

     
      <div style="clear: both;"></div>

      <div class="downstairs">
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/logo3p.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/logo4p.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/logo2p.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/logo1p.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/logo2p.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/logo3p.gif" /></div>
        <div class="logoSmallPhoto"><img src="brandImg/heart.gif" /></div>
      </div>
    </main>
    <footer>
      <div class="facebook">
        <a href="https://www.facebook.com/Ju%C5%BC-Pomagam-122551917851327/"><i class="icon-facebook-circled"></i></a>
      </div>
      <div class="adres">
        Ul. Maki 6c 80-774 Gdańsk <br />
        +48509127726<br>KRS:315682 NIP: 583-304-30-59 <br />
        Nr konta BGŻ BNP PARIBAS <br>80 2030 0045 1110 0000 0283 1550
      </div>
      <div class="mailTo">
        <a href="mailto:aptekadlaciebie@pro.onet.pl"><i class="icon-mail"></i></a>
      </div>
      <div style="clear: both;"></div>
      
    </footer>
    <div class="kontakt">
      <a href="https://kunicka.now.sh/" target="blank">Agnieszka Kunicka</a> <a href="mailto:kunicka2000@gmail.com"><i class="icon-mail"></i></a><br>&copy; Wszelkie prawa zastrzezone 
      
    </div>
  </body>
</html>



