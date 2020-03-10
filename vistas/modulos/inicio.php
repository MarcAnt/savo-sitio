<div class="container-fluid">
          <div class="row bg-info ">

            <div class="d-flex justify-content-end align-item-end w-100">

                <div class="col-md-7 col-lg-7 d-flex justify-content-end align-item-end">
                    
                  <img src="vistas/img/hombre.png" width="50%" class="d-sm-none d-md-block mt-5" >

                  <div class="d-flex flex-column align-self-center text-center mx-auto mb-5">
                    <h6 class="animate-text">Como, donde y cuando</h6>
                    <h2 class="animate-text">Lo necesites</h2>
                    <h5 class="animate-text">Sistema de Gestión y Control</h5>
                    <button type="button" class="btn rounded-pill bg-white text-secondary mx-auto" width="50%"> <a href="productos" class="nav-link">Más información</a> </button>
                  </div>
                  
                </div>

            </div>

          </div>

      
          <div class="row bg-sistema">

        
            <div class="col-md-6 col-lg-6 d-flex flex-column justify-content-center align-item-center text-center">
                
                
                <h6 class="w-75 mx-auto my-3 animate-text-2">Encuentre sus vehículos con un proceso más</h6>
                <h2 class="font-weight-bold my-3 animate-text-2">Rápido, práctico y eficiente</h2>
            
                <img src="vistas/img/logo-blanco.png" class="mx-auto" width="40%" alt="">

                <button type="button"  class="btn border border-white rounded-pill bg-color-savo mt-5 mx-auto text-white" width="50%"><a href="productos" class="nav-link text-white">Ver Producto</a> </button>
                
                
            </div>

            <div class="col-md-6 col-lg-6">
           
                <div class="col-12" style="position: relative; top: 25%; ">

                    <img src="vistas/img/pant-1.png" class="img-fluid pantallas" style="position: absolute; z-index: 998;" alt="">
                    
                    
                </div>
                <div class="col-12" style="position: relative; top: 35%; left: 25%; ">

                    <img src="vistas/img/pant-2.png" class="img-fluid pantallas" style="position: absolute; z-index: 999;" alt="">
                    
                </div>

            </div>
            
              
          </div>

          <div class="row bg-somos">

            <div class="d-flex justify-content-end align-item-end w-100">

                <div class="col-md-4 col-xs-12 d-flex justify-content-end align-item-end">
                    
                  <div class="col-md-12 d-flex flex-column align-self-center text-center mb-5 mr-5 mx-auto">
                    <h1 class="font-weight-bold animate-text-3">Somos</h1>
                   
                    <h6 class="mx-auto animate-text-3">Una herramienta que le brindará tranquilidad en el control y manejo en las empresas de alquiler</h6>
                
                    <button type="button" class="btn rounded-pill bg-color-savo mx-auto text-white" width="50%"> <a href="nosotros" class="nav-link text-white"> Ver Más</a> </button>
                  </div>
                  
                </div>

            </div>

          </div>

          <div class="row bg-testimonio">

            <h1 class="mx-auto text-center my-4 font-weight-bold text-white">Testimonio de los ususarios</h1>

            <div class="row">
              <div class="col-md-6 col-sm-6 mb-5">
                <div class="card  mx-3 my-4 bg-grey" >
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="vistas/img/img-nosotros-1.jpg"  class="card-img rounded-circle my-1 mx-1" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Nombre: María A.</h5>
                          <h5 class="card-title">Ocupación: CEO Empresa</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <button type="button" class="btn rounded-pill bg-color-savo mx-auto " width="50%"><a href="nosotros" class="text-white nav-link"> Ver Más </a></button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>   

              <div class="col-md-6 col-sm-6 mb-5">
                <div class="card  mx-3 my-4 bg-grey">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="vistas/img/img-nosotros-2.jpg"  class="card-img rounded-circle my-1 mx-1" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Nombre: Luis B.</h5>
                        <h5 class="card-title">Ocupación: CEO Empresa </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn rounded-pill bg-color-savo mx-auto text-white" width="50%"><a href="nosotros" class="text-white nav-link"> Ver Más </a></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row bg-contacto">

            <div class="col-6 col-md-6 col-sm-12 col-xs-12 my-auto">
              <div class="card formulario ">
                <div class="card-body"  >
                    <div class="card-title">
                        <h1 class="text-center color-savo my-4 ">Contáctanos</h1>
                    </div>
                    <form role="form" method="post" id="formulario"  onsubmit="return validarContactenos()">
                      <div class="row">
                        <div class="col-md-6 form-group">
  
                          <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required> 
                        </div>
                        <br>
                        <div class="col-md-6 form-group">
                          <input type="text" id="telefonoContactenos" name="telefonoContactenos" class="form-control" placeholder="Teléfono" required> 
  
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12 form-group">

                          <input type="email" id="emailContactenos" name="emailContactenos" class="	form-control" placeholder="Escriba su correo electrónico" required>  
                        </div>

                      </div>
      
                        <br>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>

                        </div>
                      </div>                
    
                        <br>
                        <div class="d-flex justify-content-center">
    
                          <input type="submit" value="Enviar" class="btn btn-lg bg-color-savo rounded-pill text-white mx-auto" id="enviar">         
                        </div>
      
                    </form>

                    <?php 
                        $contactenos = new ControladorPlantilla();
                        $contactenos -> ctrFormularioContactenos();
                        
                    ?>

                </div>

            </div>

            </div>
          </div>

          <div class="row bg-resumen">
            <div class="col-md-12 col-12 text-center my-auto">
              <h3 class="mt-5">INFO:</h3>
              <h6>Teléfonos:</h6>
              <p class="ml-3">+1 (561) 675 0525 / +1 (786) 295 2108 </p>
              <a href="https://api.whatsapp.com/send?phone=584243208724" target="_blank" class="text-white mt-3" style="font-size: 3em;"><i class="fab fa-whatsapp"></i></a>
            </div>

          </div>

          <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
          <?php include 'footer.php';  ?>
          
          
      </div>