<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="estilos.css">
    <title>tickets</title>
</head>
<body>
    
        <section class="espaciado">
    <div class="card border-primary mb-3" style="max-width: 14rem;">
        
        <div class="card-body ">
          <h5 class="card-title">Estudiante</h5>
          <p>Tienen un descuento</p>
          <p>80%</p>
          <h6>* presentar documentación</h6>
        </div>
      </div>
     
      <div class="card border-info mb-3" style="max-width: 14rem;">
        
        <div class="card-body">
          <h5 class="card-title">Trainee</h5>
          <p>Tienen un descuento</p>
          <p>50%</p>
          <h6>* presentar documentación</h6>
        </div>
      </div>
      
    
      <div class="card border-warning mb-3" style="max-width: 14rem;">
        
        <div class="card-body">
          <h5 class="card-title">Junior</h5>
          <p>Tienen un descuento</p>
          <p>15%</p>
          <h6>* presentar documentación</h6>
        </div>
      </div>
      
      </section>

     <section class="ventavalor">
      <h6>VENTA</h6>
      <h1>VALOR DE TICKET: $200</h1>
     </section>
      <form method="post" action="registrar.php" id="ticketForm" class="row g-3">
        <div class="col-md-6">
          <label for="firstName" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre">
        </div>
        <div class="col-md-6">
          <label for="lastName" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido">
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Correo">
        </div>
        
        <div class="col-md-6">
          <label for="quantity" class="form-label">Cantidad</label>
          <input type="number" class="form-control"  id="quantity" name="quantity" min="1" value="1" placeholder="Cantidad">
        </div>
        <div class="col-md-4">
          <label for="category" class="form-label">Categoría</label>
          <select id="category" class="form-select">
            <option value="estudiante">Estudiante</option>
            <option value="trainee">Trainee</option>
            <option value="junior">Junior</option>
          </select>
        </div>

        <input id="totalPrice" name="totalPrice" type="hidden" >
        
        <div class="alert alert-primary" role="alert" id="totalPayment" >
           Total a pagar: $
        </div>
        


        <button type="button" id="clearButton" class="btn btn-success">Borrar</button>
        <button type="submit" id="summaryButton" class="btn btn-success">Resumen</button>
      
            
      </form>


      <script src="scripts.js"></script>

      <?php
      include("registrar.php");
      ?>



</body>

</html>