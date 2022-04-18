<?php include("db.php") ?>

<?php include("includes/header.php") ?>

    <div class="col-lg-12" style="padding-top:20px">
        <div class="card">
            <div class="card-header" style="color:red"; style="fon:red";>
               <strong> PDVSA POZOS PETROLEROS <br><br></strong>
                <button class="btn btn-primary"     onclick="CargarDatosGraficoLine()"  >Pozo 1</button>
                    <button class="btn btn-primary" onclick="CargarDatosGraficoLine2()" >Pozo 2</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">

                    <canvas id="Pozo_VS" width="400" height="400"></canvas>
                    <canvas id="Pozo_1" width="400" height="400"></canvas>
                    <canvas id="Pozo_2" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>
