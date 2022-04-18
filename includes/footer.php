    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    
    <script>


function CargarDatosGraficoLine(){
    $.ajax({
        url:'controlador_grafico.php',
        type:'POST'
    }).done(function(resp){
        var medida   = [];
        var tiempo   = [];
        var data = JSON.parse(resp);
        for(var i=0;i<data.length;i++){
            medida.push(data[i][1]);
            tiempo.push(data[i][2]);
        }
        var ctx = document.getElementById('Pozo_VS');
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tiempo,
            datasets: [{
                label: 'Pozo #1: kPa',
                data: medida ,
                backgroundColor: 'transparent',
                borderColor: 'red',
                borderWidth: 4
            }]
        },
        options: {
            elements:{
                line:{
                    tension:0
                }
            },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
        }
    });
    })

}

    </script>
    <script>

function CargarDatosGraficoLine2(){
    $.ajax({
        url:'controlador_grafico2.php',
        type:'POST'
    }).done(function(resp){
        var medida   = [];
        var tiempo   = [];
        var data = JSON.parse(resp);
        for(var i=0;i<data.length;i++){
            medida.push(data[i][1]);
            tiempo.push(data[i][2]);
        }
        var ctx = document.getElementById('Pozo_VS');
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tiempo,
            datasets: [{
                label: 'Pozo #2: kPa',
                data: medida ,
                backgroundColor: 'transparent',
                borderColor: 'green',
                borderWidth: 4
            }]
        },
        options: {
            elements:{
                line:{
                    tension:0
                }
            },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
        }
    });
    })

}
    </script>


</body>
</html>

