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
  
  


<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CNPJ</th>
      <th scope="col">NOME</th>
      <th scope="col">TELEFONE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
            foreach ($data as $key=>$value) { ?>
      <th scope="row"><?php echo  $value['id']; ?> </th>
    
      <td >  <?php echo  $value['cnpj']; ?>  </td> 
      <td >  <?php echo  $value['nome']; ?>  </td> 
      <td >  <?php echo  $value['telefone']; ?>  </td> 
      
      </tr>
      
      
      
      
      <?php } ?>
      
      
    
  
  </tbody>
</table>
 
</div>          

</body>

<button type="button" class="btn btn-primary btn-lg">Novo Funcionário</button>
</html>