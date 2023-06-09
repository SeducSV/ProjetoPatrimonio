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
while ($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)) {
    if ($row_niveis_ava['opcao'] == "Aprovados") {
        $a++;
    } else  if ($row_niveis_ava['opcao'] == "Recusados") {
        $r++;
    }
    if ($row_niveis_ava['opcao'] == "Parcialmente Aprovados") {
        $pa++;
    }
}
?>
<html>

<head>
    <style>
    </style>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <script type="text/javascript" src="pastas/javascript/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        
        google.charts.setOnLoadCallback(drawChart);


        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Aprovados', <?= $a ?>],
                ['Recusados', <?= $r ?>], //copia $y
                ['Parcialmente Aprovados', <?= $pa ?>] //copia $z
            ]);

            var options = {
                
                title: '',
                /*   is3D: true, */
                /* Deixar em 3d */
                tooltip: {
                    isHtml: true
                },
                legend: 'bottom',
                fontSize: 15,
                backgroundColor: 'transparent',

                chartArea: {
                    width: '95%',
                    height: '86%',
                    top: '3%'
                },
                
                /* Titulo */

                colors: ['#773600', '#ba6e09', '#cb8c3e']
                /*    colors: ['#36A2EB','#FFC235','#FF4069'] */
            };




            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);


            // Adiciona classe de animação após o carregamento do gráfico
        }
        /* Segundo */
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Aprovados', <?= $a ?>],
                ['Recusados', <?= $r ?>], //copia $y
                ['Parcialmente Aprovados', <?= $pa ?>] //copia $z

            ]);

            var options = {
                title: '',
                /*   is3D: true, */
                /* Deixar em 3d */
                tooltip: {
                    isHtml: true
                },
                legend: 'bottom',
                fontSize: 15,
                backgroundColor: 'transparent',

                chartArea: {
                    width: '85%',
                    height: '66%',
                    top: '3%'
                },

                pieSliceTextStyle: {
                    color: '#46220f',
                },
                /* Titulo */
                colors: ['#fea50a', '#ffe9aa', '#ffd275']
            };





            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

            chart.draw(data, options);


            /* Funçao clcik */
            function selectHandler() {
                var selectedItem = chart.getSelection()[0];
                if (selectedItem) {
                    var topping = data.getValue(selectedItem.row, 0);

                    document.querySelector(".span").style.display = 'block';
                    document.querySelector("#opcao").innerHTML = topping
                    const escola = document.querySelector("#escola-grafico")
                    const faltaM = document.querySelector("#faltaM")
                    const materialFP = document.querySelector("#materialFP")
                    const tamanhoNA = document.querySelector("#tamanhoNA")
                    const semQS = document.querySelector("#semQS")
                    const outro = document.querySelector("#outro")

                    escola.innerHTML = 'EMEF PROFESSOR CONSTANTE LUCIANO C. HOULMOUT';
                    faltaM.innerHTML = '9 por falta de Material;';
                    materialFP.innerHTML = '9 por Material fora do padrão;';
                    tamanhoNA.innerHTML = '9 por Tamanho não atendido;';
                    semQS.innerHTML = '9 por Sem quantidade solicitada;';
                    outro.innerHTML = '9 por Outro Motivo.';

                }
                return;
            }

            google.visualization.events.addListener(chart, 'select', selectHandler);
        }
        $(window).resize(function() {

            drawChart2();
            drawChart();
        });
    </script>
</head>

</html>