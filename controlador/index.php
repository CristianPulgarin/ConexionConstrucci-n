<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ejercicio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="https://cdn-icons.flaticon.com/png/512/644/premium/644669.png?token=exp=1655926660~hmac=2f785f112e14f7e06e9af07612b947e8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Amaranth&display=swap');
        
        h1, h2, h5{
            font-family: 'Amaranth', sans-serif;
        }

        body{
            background: #FAFAFA;
        }
        </style>
</head>
<body>

    <div class="container pt-4">
        <div class="row ">
          <div class="col-4">
          </div>
          <div class="col-4 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/7501/7501953.png" alt="Logo GitHub" style="width: 20%;">
          </div>
          <div class="col-4">
            
          </div>
        </div>
        <div class="row text-center">
            <div class="col-4"></div>
            <div class="col-4">
                <p><h2>Taller #2</h2></p>
            </div>
            <div class="col-4"></div>
          </div>
          <div class="row text-center">
            <div class="col-3"></div>
            <div class="col-6">
                <p><b>Integrantes:</b></p>
            </div>
            <div class="col-3"></div>
          </div>


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Activad 1</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Actividad 2</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <form action="datos.php" method="post">
    <div class="row pt-4 pb-3">
      <div class="col-3"></div>
        <div class="col-6">
            <label for="exampleFormControlInput1" class="form-label">Nombre estudiante</label>
            <input type="" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el nombre del estudiante">             
            </div>
            <div class="col-3"></div>
        </div>
          <div class="row pt-4 pb-3">
          <div class="col-3"></div>
          <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Materia</label>
                <input type="" name="materia" class="form-control" id="materia" placeholder="Ingrese el nombre de la materia"> 
          </div>
            <div class="col-3">
                <label for="exampleFormControlInput1" class="form-label">Valor</label>
                <input type="numeric" class="form-control" id="valor" placeholder="Ingrese el valor">             
                </div>
                <div class="col-3"></div>
            </div>
        
          <div class="row pt-4 pb-3">
            <div class="col-3"> </div>
          <div class="col-3" >
            <button class="btn btn-outline-info" id="btn-agregar">Agregar materia</button>
          </div>
          <div class="col-3" >
          <button class="btn btn-outline-info" id="btn-calcular">Calcular</button>
        </div>
          <div class="col-3">
          </div>
          
          <div class="row pt-2">
            <div class="col-3"></div>
            <div class="col-6">
              <table class="table" id="lista">
                
                
              </table>
            </div>
            <div class="col-3"></div>

          </div>
        <div class="row pt-4 pb-3">
          <div class="col-3"> </div>
        <div class="col-2"> 
          
        </div>
        
       
        <div class="col-4"> </div>
        </div>
        <div class="modal fade" id="act2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Diagrama de flujo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="diagrama2.png" style="width: 90%;">
      </div>
      
    </div>
  </div>
</div>
        
        <div class="row pt-2 pb-4 text-center" >
          <div class="col-3">
              
          </div>
          <div class="col-6">
            <div class="alert alert-success d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <div>
                <p>El valor total de las materias es de: $<b id="total"></b></p>
                
              </div>
            </div>
          </div>
          <div class="col-3">
              
          </div>
      </div>
    </div>
  
    </form>
</div>

       
        

        
      </div>
<script src="main.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

