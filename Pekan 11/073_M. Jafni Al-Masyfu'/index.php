<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jafni Jago</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="hero">
    <div class="hero-content">
      <h1>Selamat Datang di Indomaret Selamat Berbelanja</h1>
      <p>website keren bro</p>
      <a href="#learn-more" class="btn">Wocoen Lek</a><br>
      <?php
      //ini comment satu baris

      #ini juga comment satu baris

      /* kalo ini 
      komen beberapa baris/multi line */

      $var1 = "Jafni Jago";
      echo "Perkenalkan saya " . $var1 . "!";

      $umur = 20;
      print "Saya umurnya" . $umur . "!";
              
      ?>
    </div>
  </header>

  <section id="learn-more" class="info-section">
    <h2>Wong liyo ngerti opo</h2>
    <p>Other people ngertos what</p>
    <?php
      echo "<p> Sekarang tanggal " . date("l, F jS, Y") . ".</p>";
    ?>
  </section>



<section class="image-showcase">
  <h2>SOMBONG BOLEH KALO JAGO</h2>
  <div class="scroll-container">
    <div class="img-card">
      <div class="img-inner">
        <img src="1.png" alt="Showcase 1">
        <?php
        echo "Gambar 1"
        ?>
      </div>
    </div>
    <div class="img-card">
      <div class="img-inner">
        <img src="2.png" alt="Showcase 2">
      <?php
        echo "Gambar 2"
        ?>
      </div>
    </div>
    <div class="img-card">
      <div class="img-inner">
        <img src="3.jpg" alt="Showcase 3">
      <?php
        echo "Gambar 3"
        ?>
      </div>
    </div>
    <div class="img-card">
      <div class="img-inner">
           <img src="4.png" alt="Showcase 4">
      <?php
        echo "Gambar 4"
        ?>
      </div>
    </div>
    <div class="img-card">
      <div class="img-inner">
        <img src="5.jpg" alt="Showcase 5">
      <?php
        echo "Gambar 5"
        ?>
      </div>
    </div>
  </div>
</section>

</body>
</html>
