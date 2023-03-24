<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "grafico";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$a = 0;
$r = 0;
$pa = 0;

//percorre o banco
$result_niveis_ava = "SELECT * FROM dados ";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){
    if($row_niveis_ava['opcao'] == "Aprovados"){
        $a++;
    } else  if($row_niveis_ava['opcao'] == "Recusados"){
        $r++;
    } if($row_niveis_ava['opcao'] == "Parcialmente Aprovados"){
        $pa++;
    }
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Aprovados',     <?=$a?>], 
          ['Recusados',      <?=$r?>], //copia $y
          ['Parcialmente Aprovados',  <?=$pa?>] //copia $z
          
        ]);
          
        var options = {
          title: 'Porcentagem Total de Solicitações',
          legend: 'bottom',
          fontSize: 15,
          backgroundColor: 'transparent',
          'width':600,
          'height':610,
          
          
          chartArea:{width:'75%',height:'86%'},
           /* Titulo */
          titleTextStyle: {
            fontSize: 26,
            color: 'red',
            bold: true,
            textAlign: 'center'
          },

          
         /*  colors: ['green', 'red', 'goldenrod'] */ 
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

  </body>
</html>