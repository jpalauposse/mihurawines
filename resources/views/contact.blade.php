<html lang="en">
    <?php include 'head.php' ?>
    <body>  
        <?php include 'headerEN.php' ?>
        <div class="cuerpo"> 
            <h2>CONTACT</h2>
            <form method="post"   action="{{url('contacto/enviar')}}">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-6 col-sm-3">
                            <input class="form-control black" name="name" type="text" placeholder="NAME" required>
                        </div>
                        <div class="col-6 col-sm-3">
                            <input class="form-control black" name="phone" type="number" placeholder="PHONE" required>
                        </div>
                    </div>
                    <div class="row justify-content-md-center espaciado"><br></div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-3 col-md-6">   
                            <input type="email" name="email" class="form-control black" placeholder="EMAIL" required>
                        </div>
                    </div>
                    <div class="row justify-content-md-center espaciado"><br></div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-3 col-md-6">
                            <textarea class="form-control black" name="message" rows="3" placeholder="MESSAGE"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-md-center"><br></div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-3 col-md-6">
                            <button type="submit" name="enviar" value="enviar" class="btn btn-lg btn-block boton">SEND</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php include 'footerEN.php' ?>
    </body>


</html>