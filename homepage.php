<?php

session_start();

if(!isset($_SESSION['email'])){
  header('Location: index.php?acessoinval=1&');
}

$acessoinvalcli = isset($_GET['acessoinval']) ? $_GET['acessoinval'] : 0;

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>WORKON! | Página Inicial</title>
  <link rel="icon" href="imagens/favicon.png">

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo.css?ver=15" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    var acessoinvalcli = '<?= $acessoinvalcli ?>';
    if(acessoinvalcli === 1){
      $('#modalErroHome .modal-body p').append("- Esse email já está em uso<br>");
      $('#modalErroHome').modal('show');
    }
  </script>
  <!-- IE 9 ou menor -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="inside">

    <?php
      include('templates/sidebar.php');
    ?>

    <!-- Page Content Holder -->
    <div id="content">
     <?php
     include('templates/navbarinterna.php');
     ?>

     <div id="modalErroHome" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="margin: 0 auto;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Erro</h4>
          </div>
          <div class="modal-body">
            <p></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--DIV PERFIL-->
    <div class="row section" id="div-perfil">
      <h1 id="homepage-title">Seu perfil</h1>
      <div class="col-md-4" id="img-perfil">

      </div>
      <div class="col-md-8 info-perfil" id="perfil-data">
      </div>
    </div>

    <div class="section">
     <div class="row">
      <div class="col-md-12">
       <h1 id="homepage-title">PROJETOS RECENTES</h1>
     </div>       
   </div>

   <div class="row formatarow" id="ficha-projeto">

   </div>

 </div>


</div> <!-- FIM CONTENT -- >

<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content, #btnMenu').toggleClass('active2');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
</script>
<script src="js/script1.js?ver=8"></script>
</body>
</html>