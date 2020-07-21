<html lang="es">
    <?php include 'head.php' ?>
    <body>  
        <?php include 'header.php' ?>
        <div class="cuerpo"> 
            <h2>Contacto</h2>
            <form method="post"   action="{{url('contacto/enviar')}}">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-6 col-sm-3">
                            <input class="form-control black" name="name" type="text" placeholder="Nombre" required>
                        </div>
                        <div class="col-6 col-sm-3">
                            <input class="form-control black" name="phone" type="number" placeholder="Teléfono" required>
                        </div>
                    </div>
                    <div class="row justify-content-md-center espaciado"><br></div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-3 col-md-6">   
                            <input type="email" name="email" class="form-control black" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row justify-content-md-center espaciado"><br></div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-3 col-md-6">
                            <textarea class="form-control black" name="message" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-md-center"><br></div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-3 col-md-6">
                            <button type="submit" name="enviar" value="enviar" class="btn btn-lg btn-block boton">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php include 'footer.php' ?>
    </body>


</html>