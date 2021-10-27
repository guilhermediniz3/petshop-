<html>
<head>

  <link href="assets/plugins/bootstrap/5.1.1/css/bootstrap.css"rel="stylesheet" />
 <link href="assets/plugins/css.css"rel="stylesheet" />
</head>



<body>
  
<div class="container-fluid ">
  <div class="row menu">
    <div class="col-md-3 logotipo">
     <img class="imagemlogo" src="/assets/images/logo2.png">
    </div>
  
    </div>
   
  </div>
 
</div>

<nav id="menu">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Missão</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
</nav>

<div class="container-fluid corpocor">
  
  <div class="row">
    
   <div class="col-md-12 ">
   <img class="bannerdireita" src="/assets/images/banner4.jpg">
</div>


</div>

 
<div class="container-fluid ">
<div class="row alinhaproduct">
<?php 
            foreach ($data as $key=>$value) { ?>
  <div class="col-md-2 divproduct">
 <img class="imgproduct"src="/assets/images/<?php echo  $value['imagem']; ?>.jpg">
 <p>   <?php echo  $value['product']; ?> <br> R$ <?php echo  $value['preco']; ?>     <p>
</div>
<?php } ?>

</div>

</div>

</div>
              
  
</body>


</html>