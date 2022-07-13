<?php 
Include("Menu.php");
?>
<title>Registro empleado</title>

    <section>
        
        <div id="galeria1" class="carousel-slide" data-bs-ride="carousel"> 
            <!--Agregar indicadores-->
           
            <!--Seccion del Banner-->
             <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="" alt="" class="d-block w-100" >
                </div>
                <div class="carousel-item">
                  <img src="" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="" alt="" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="" alt="" class="d-block" style="width:100%">
                </div>
                
                

              <button class ="carousel-control-prev"  type ="button" data-bs-target="#galeria1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
                <span class="visually-hidden">Previus</span>
              </button>
              <button class ="carousel-control-next"  type ="button" data-bs-target="#galeria1" data-bs-slide="next">
                <span class="carousel-control-next-icon"  aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- finalizacion de banner -->
        </div>
        
        
                
    </section>
        <section style ="padding: 22px; class ="container">
            <form style ="background: burlywood;color:black; width:700px; padding:30px; margin :auto ; margin-top:100px">
                <h2 style="text-align: center;">FORMULARIO DE REGISTRO</h2>
                    <div class="form-goup">
                      <label>Nombre del empleado</label> 
                      <input type="text" id="nombre_producto">
                    </div>
                    <div class="form-goup">
                        <label>Apellidos</label> 
                        <input type="text" id="nombre_producto">
                      </div>
                      <div class="form-goup">
                        <label>Edad</label> 
                        <input type="text" id="nombre_producto">
                      </div>
                      <div class="form-goup">
                        <label>RFC</label> 
                        <input type="text" id="nombre_producto">
                      </div>
                      <button type="button">Registrar</button>
                    <br>
                    
                   
            </form> 
    
    
        </section> 
    
  
  </body>
  
</html>