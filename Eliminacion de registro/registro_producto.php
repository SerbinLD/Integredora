<?php

include_once "menu.php";



?>
<title class="titulos">Registro producto</title>

    <section></section>
    
        <section style ="padding: 22px; class ="container">
        <div class ="container p-5 s" >
            <form style ="background: burlywood;color:black; width:700px; padding:30px; margin :auto ; margin-top:100px" action ="recibir.php" method ="POST" enctype="multipart/form-data">
            <form action="recibir.php" method="POST">
                <h2 style="text-align: center;">FORMULARIO DE REGISTRO</h2>
                <div class="form-goup">
                    <label>Codigo</label> 
                    <input type="text" name ="codigo">
                  </div>
                    <div class="form-goup">
                      <label>Nombre de producto</label> 
                      <input type="text" name ="nombre_p">
                    </div>
                    <div class="form-goup">
                        <label>Precio de producto</label> 
                        <input type="text" name ="precio">
                    </div>
                    <div class="form-goup">
                        <label>Cantidad de producto</label> 
                        <input type="text" name ="cantidad">
                    </div>
                    <div class="form-goup">
                        <label>Imagen</label> 
                        <input type="file" name ="img">
                    </div>
                      
                    <button type="sbmit">Registrar</button>
                    <br>
                    
                   
            </form> 
            <hr>
            
</div>
        </section>
        
            
        
  
  </body>
</html>