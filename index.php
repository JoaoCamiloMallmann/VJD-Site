<?php
require('header.php');
?>

<main class="home">

  <section class="secao-sobre-nos secao-hide">

    <article class="textoSobreNos">

      <h3>A <span> Quebrando Padrões</span> é uma empresa de prestação de serviços do ramo de design que busca melhorar a cada dia o atendimento personalizado ao cliente.
      </h3>

      <p>Aqui você encontrará soluções criativas e inovadoras para todas as suas necessidades de design. Seja para criação de logotipos, identidade visual, layouts para mídias sociais, criação e design para sites ou qualquer outro projeto. Nosso time acredita que o design é mais do que apenas estética, é uma ferramenta poderosa para comunicar sua marca e se conectar com seu público-alvo.
      </p>
      
      <img class="sobreNosSeta" src="<?php echo DIR_WS_SISTEMA . 'inc/img/Seta.png' ?>" alt="Seta">

    </article>

  </section>

  <section class="secao-logo">

    <img class="LogoPrincipal" src="<?php echo( DIR_WS_SISTEMA_INC . 'img/logoEmpresa.png' ) ?>" alt="Logo">
    
    <div class="textoHome">
      <p>Transformando</p>
      <p>ideias em</p>
      <p> realidade...</p>
    </div>

  </section>

  <section class="secao-dados">
    <img src="<?php echo (DIR_WS_SISTEMA_INC . 'img/HomeFotoPC.png')  ?>" alt="ImgPC">

    <div class="BotoesDaHome">
      <button id="homeBotao" data-aos="zoom-in" data-aos-duration="3000">PORTFÓLIO</button>
      <button id="homeBotao" data-aos="zoom-in" data-aos-duration="3000">E-BOOK</button>
    </div>

  </section>


  <section class="secao-seta" data-aos="fade-left">

    <img class="homeBotaoSeta" src="<?php echo DIR_WS_SISTEMA . 'inc/img/Seta.png' ?>" alt="Seta">

  </section>

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