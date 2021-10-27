<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="assets/plugins/bootstrap/5.1.1/css/bootstrap.css" rel="stylesheet" />
    <script>
      function blue(){
  document.getElementsByClassName("menu_site ")[0].style.backgroundColor = 'blue'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'blue'
}
function red(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'red'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'red'
}
function green(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'green'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'green'
}
function purple(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'purple'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'purple'
}
function orange(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'orange'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'orange'

}
function black(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'black'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'black'
}
function original(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = '#e616ca'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = '#e616ca'
}
function black(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'black'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'black'
}
function Yellow(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'Yellow'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'Yellow'
  var x = document.getElementById("txt");
  x.style.color = "black";
  var y = document.getElementById("txt2");
  y.style.color = "black";
  var z = document.getElementById("txt3");
  z.style.color = "black";
}
function LawnGreen(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'LawnGreen'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'LawnGreen'
}
function Cyan(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'Cyan'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'Cyan'
}
function SpringGreen(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'SpringGreen'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'SpringGreen'
}
function DarkSlateGray(){
  document.getElementsByClassName("menu_site")[0].style.backgroundColor = 'DarkSlateGray'
  document.getElementsByClassName("rodape")[0].style.backgroundColor = 'DarkSlateGray'
}
    </script>
</head>
<body>
    <script src="assets/plugins/bootstrap/5.1.1/js/bootstrap.js"></script>
    <div class="container-fluid">
        <div class="row menu_site" >
        <div id ="txt" class="col-md-3  cortextomenu  " >
        <nav id="menu">
    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/product">Produtos</a></li>
        <li><a href="#">Missão</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">Contato</a></li>
    </ul>
</nav>
       
      
        </div>
            <div id ="txt" class="col-md-6  cortextomenu  " >
          
              PET STREET - BERGEN,NORMAY  <span><img src="assets/images/carta.png" width="18">     PET SHOP@SITE.COM TEL 3333-33333</span>   
            
         
        
           
          
            </div>
           
        <div id ="txt3" class="col-md-3  lado cortextomenu " >
        
       Guilherme Diniz
      
        </div>
     
        <input type="checkbox" id="btn">
        <div class="cores">
    <label for="btn" class="btn" role="checkbox">		&#10687;</label>
    <div class="paleta">
        <h4>Cores</h4>
        <div class="box red" ><button class="botaopaleta" style="background-color: red;" onClick="red()"> </button></div>
        <div class="box blue"><button  class="botaopaleta" style="background-color: blue;" onClick="blue()"> </button></div>
        <div class="box green"><button class="botaopaleta" style="background-color: green;" onClick="green()"> </button></div>
        <div class="box purple"><button class="botaopaleta" style="background-color: purple;" onClick="purple()"> </button></div>
        <div class="box orange"><button class="botaopaleta" style="background-color: orange;" onClick="orange()"> </button></div>
        <div class="box black"><button class="botaopaleta" style="background-color: black;" onClick="black()"> </button></div>
        <div class="box original"><button class="botaopaleta" style="background-color:#e616ca;" onClick="original()"> </button></div>
        <div class="box Yellow"><button class="botaopaleta" style="background-color:Yellow;" onClick="Yellow()"> </button></div>
        <div class="box LawnGreen"><button class="botaopaleta" style="background-color:LawnGreen;" onClick="LawnGreen()"> </button></div>
        <div class="box Cyan"><button class="botaopaleta" style="background-color:Cyan;" onClick="Cyan()"> </button></div>
        <div class="box SpringGreen"><button class="botaopaleta" style="background-color:SpringGreen;" onClick="SpringGreen()"> </button></div>
        <div class="box DarkSlateGray"><button class="botaopaleta" style="background-color:DarkSlateGray;" onClick="DarkSlateGray()"> </button></div>
        
    </div>
 
 </div>

  
 <div class="container-fluid">
<div class="row rodape">
  <footer>Copyright (c) Curso Desenvolvimento Web Sandro</footer>
</div>
</div>

   </div>





</body>
</html>