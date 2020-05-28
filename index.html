<?php 
    include "global/config.php";
    include "global/conexion.php";
    include "carrito.php";
    include "templates/cabecera.php";
?>
        <br>
        <?php  if ($mensaje != ""): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensaje; ?>
            <a href="mostrarCarrito.php" class="badge badge-success">Ver Carrito</a>    
        </div>
        <?php endif; ?>
        <div class="row">
            <?php 
                $statement = $pdo->prepare("SELECT * FROM tblproductos");
                $statement->execute();
                $listaProductos = $statement->fetchAll(PDO::FETCH_ASSOC);
                // print_r($listaProductos);
            ?>
            <?php foreach($listaProductos as $producto): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                    <img 
                        alt="<?= $producto['nombre'] ?>"
                        class="card-img-top" 
                        data-content="<?= $producto['descripcion'] ?>"
                        data-toggle="popover"
                        data-trigger="hover"
                        height="317"
                        src="<?= $producto['imagen']; ?>" 
                        title="<?= $producto['nombre'] ?>" 
                        >
                        <div class="card-body">
                            <span><?= $producto['nombre'] ?></span>
                            <h5 class="card-title">R$<?= $producto['precio'] ?></h5>
                            <p class="card-text">Description</p>
                            <form action="" method="POST">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
                                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
                                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                                <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar el carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <script>
        $(function(){
            $('[data-toggle="popover"]').popover();
        })
    </script>
<?php include "templates/pie.php"; ?>