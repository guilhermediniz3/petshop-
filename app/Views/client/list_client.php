<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <li><a href="#">Fornecedor</a></li>
        <li><a href="#">Cliente</a></li>
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
      <th scope="col">CPF/CNPJ</th>
      <th scope="col">NOME</th>
      <th scope="col">TELEFONE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
            foreach ($data as $key=>$value) { ?>
      <th scope="row"><?php echo  $value['id']; ?> </th>

      <td  >  <?php echo  $value['cnpj']; ?>  </td>
      <td >  <?php echo  $value['nome']; ?>  </td>
      <td >  <?php echo  $value['telefone']; ?> </td>
      <td>  <a href="client/editclient"><span <i class="fa fa-pencil-square-o editar-color  "> </i>  </span> </a> <i class="fa fa-trash-o lixeira-color " ></i> </td>
      </tr>




      <?php } ?>

<i
<i class="bi bi-trash-fill"></i>

  </tbody>
</table>

</div>

</body>
<i class="bi bi-trash-fill"></i>
</html>
