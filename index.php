<?php
require('header.php');
?>

<main class="home">
  <h1>
    EM BREVE
  </h1>
</main>


<script>
  $(".homeBotaoSeta").click(function() {
    $('.secao-sobre-nos').removeClass('secao-hide')
    void $('secao-sobre-nos').offsetWidth;

    $('.secao-sobre-nos').addClass('secao-show')


  });

  AOS.init({
    once: true
  });
</script>