<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
  <meta charset="UTF-8">
  <link href="css/bootstrap.css" rel="stylesheet">
  <title></title>
</head>
<script>
var num_let = 4;


  function leerArchivo(e) {
    var archivo = e.target.files[0];
    if (!archivo) {
      return;
    }
    var lector = new FileReader();
    lector.onload = function (e) {
      var contenido = e.target.result;
      contenido = contenido.replace(/[:,.?¿¡!;'/)()0-9"]/gi, "");
      contenido = contenido.replace(/(\r\n|\n|\r)/gm," ");
      contenido = contenido.toLowerCase();
      var contar = contenido.split(" ");
     
      mostrarContenido(contenido, contar);
    };
    lector.readAsText(archivo);
  }
  
  function mostrarContenido(contenido, contar) {
    //$('#num_let').on('change', function () {
      
      
    $('#num_let').on('change', function () {
      var contar = contenido.split(" ");
      

     num_let = $(this).val(); 

     $("#cont").html(contar);
    contar = contar.filter(contar =>  contar.length >= num_let);
    contar = contar.filter((valor, indiceActual, arreglo) =>  arreglo.indexOf(valor) === indiceActual);
       

    for (let i = 0; i < contar.length; i++) {
      contar[i] = contar[i].charAt(0).toUpperCase() + contar[i].slice(1);
    }
  
    
    contar = contar.join("<br>");

    var elem = document.getElementById('descargar');
    elem.download = "archivo.txt";
    
    

    var elemento = document.getElementById('contenido-archivo');
    var cuenta = document.getElementById('cuenta-archivo');
    var repetida = document.getElementById('repetida-archivo');
    var imp = contar.replace(/(<br>)/gm,"\r\n\n\r");
    elem.href = "data:application/octet-stream," + encodeURIComponent(imp);

    
    
    elemento.innerHTML = contenido;
    cuenta.innerHTML = contar;
    
   
   

  });

  


  }

  document.getElementById('file-input').addEventListener('change', leerArchivo, false);
  
</script>
<div class="registro">

  <body>
    <h4 style="color: black; text-shadow: 5px 5px 5px white;">A continuación, agregue el texto en formato .txt para poder extraer las palabras</h4>
    <input type="file" id="file-input" />
    <h3>Contenido del archivo:</h3>
    <pre id="contenido-archivo" style="            
            padding : 4px;
            width : 470px;
            height : 50px;
            overflow : auto; "></pre>

    <h4 style="color: black; text-shadow: 5px 5px 5px white;">Seleccione el número de letras minimo para las palabras</h4>
    <select id="num_let" class="btn btn-default">
      <option value="">Eliga una opción</option>
      <option value="4">4 letras</option>
      <option value="5">5 letras</option>
      <option value="6">6 letras</option>
      <option value="7">7 letras</option>
      <option value="8">8 letras</option>
      <option value="9" >9 letras</option>
      <option value="10">10 letras</option>
      <option value="11">11 letras</option>
      <option value="12">12 letras</option>
      <option value="13">13 letras</option>
      <option value="14">14 letras</option>
      <option value="15">15 letras</option>
      <option value="16">16 letras</option>
      <option value="17">17 letras</option>
      <option value="18">18 letras</option>
      <option value="19">19 letras</option>
      <option value="20">20 letras</option>
    </select>
   
    <h3>Palabras del texto:</h3>
    <pre id="cuenta-archivo" style="            
            padding : 4px;
            width : 470px;
            height : 200px;
            overflow : auto; "></pre>
    <a id="descargar" class="btn btn-default">descarga</a>
    <a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
      Inicio</a>
      <br><br><br><br><br><br><br><br>
</div>
</div>
</div>
</body>
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/cod.js"></script>

</html>