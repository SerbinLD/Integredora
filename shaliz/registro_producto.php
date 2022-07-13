<?php 
Include("Menu.php");
?>
<title>Registro producto</title>

    <section>
        <!--
        <div id="galeria1" class="carousel-slide" data-bs-ride="carousel"> 
            
             <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.dzoom.org.es/wp-content/uploads/2008/12/panoramica-5-734x223.jpg" alt="Los Angeles" class="d-block w-100" >
                </div>
                <div class="carousel-item">
                  <img src="https://www.dzoom.org.es/wp-content/uploads/2008/12/panoramica-5-734x223.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="Imagenes 2/16.jpg" alt="New York" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="Imagenes 2/20.jpg" alt="New York" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="Imagenes 2/18.jpg" alt="New York" class="d-block" style="width:100%">
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
      
        </div>
    -->
                
    </section>
        <section style ="padding: 22px; class ="container">
            <form style ="background: burlywood;color:black; width:700px; padding:30px; margin :auto ; margin-top:100px">
                <h2 style="text-align: center;">FORMULARIO DE REGISTRO</h2>
                <div class="form-goup">
                    <label>Codigo</label> 
                    <input type="text" id="nombre_producto">
                  </div>
                    <div class="form-goup">
                      <label>Nombre de producto</label> 
                      <input type="text" id="nombre_producto">
                    </div>
                    <div class="form-goup">
                        <label>Precio de producto</label> 
                        <input type="text" id="nombre_producto">
                      </div>
                      
                      <button type="button">Registrar</button>
                    <br>
                    
                   
            </form> 
            <hr>
            <table class ="table" style="background:rgb(69, 176, 208);">
                <thead>
                    <th scope ="col">ID</th>
                    <th scope ="col">Nombre producto</th>
                    <th scope ="col">Cantidad</th>
                    <th scope ="col">Precio</th>
                    <th scope ="col"></th>
                    <th scope ="col"></th>
                </thead>
                <tbody>
                    <tr>
                        <th scope ="row">1</th>
                        <td>Sabritas</td>
                        <td>10</td>
                        <td>19</td>
                        <td>
                            <button>
                                Modificar
                            </button>
                        </td>
                        <td>
                            <button>
                                Eliminar
                            </button>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope ="row">1</th>
                        <td>Sabritas</td>
                        <td>10</td>
                        <td>19</td>
                        <td>
                            <button>
                                Modificar
                            </button>
                        </td>
                        <td>
                            <button>
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope ="row">1</th>
                        <td>Sabritas</td>
                        <td>10</td>
                        <td>19</td>
                        <td>
                            <button>
                                Modificar
                            </button>
                        </td>
                        <td>
                            <button>
                                Eliminar
                            </button>
                        </td>
                    </tr>
                   
                </tbody>
            </table>  
    
        </section> 
  
  </body>
</html>