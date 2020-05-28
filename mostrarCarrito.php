<?php 
    include "global/config.php";
    include "carrito.php";
    include "templates/cabecera.php";
?>
<br>
<h3>Lista del Carrito</h3>
<?php if(!empty($_SESSION['carrito'])) { ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="40%">Descripcion</th>
				<th width="15%" class="text-center">Cantidad</th>
				<th width="20%" class="text-center">Precio</th>
				<th width="20%" class="text-center">Total</th>
				<th width="5%">--</th>
			</tr>
		</thead>
		<tbody>
			<?php $total = 0;?>
			<?php foreach($_SESSION['carrito'] as $indice => $producto): ?>
			<tr>
				<td width="40%"><?= $producto['nombre'] ?></td>
				<td width="15%" class="text-center"><?= $producto['cantidad'] ?></td>
				<td width="20%" class="text-center">R$<?= $producto['precio'] ?></td>
				<td width="20%" class="text-center">R$<?= number_format($producto['cantidad'] * $producto['precio'],2, '.','') ?></td>
				<td width="5%">
					<form action="" method="POST">
						<input type="hidden" name="id" id="id" value="<?= openssl_encrypt($producto['id'], COD, KEY) ?>">
						<button class="btn btn-danger" name="btnAccion" value="Eliminar" type="submit">Eliminar</button>
					</form>
				</td>
			</tr>
			<?php $total = $total + ($producto['cantidad'] * $producto['precio']);?>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3" align="right"><h3>Total</h3></td>
				<td align="right"><h3>R$<?php echo number_format($total,2, '.',''); ?></h3></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="5">
					
						
						
						
					
					<form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html"> 
						<div class="alert alert-success" role="alert">
							<!-- Campos obrigatórios -->  
							<input name="receiverEmail" type="hidden" value="ronaldooracle@gmail.com">  
							<input name="currency" type="hidden" value="BRL"> 
							
							
							
					<?php  
							 	if($_SESSION['carrito']){ 
										
							 foreach($_SESSION['carrito'] as $indice  => $producto){ $indice =$indice+1; ?>
							 
								 
							<!-- Itens do pagamento (ao menos um item é obrigatório) -->  
							<input name="itemId<?php echo $indice; ?>" type="hidden" value="<?= $producto['id']++; ?>">  						
							<input name="itemDescription<?php echo $indice; ?>" type="hidden" value="<?= $producto['nombre'] ?>">  
							<input name="itemAmount<?php echo $indice; ?>" type="hidden" value="<?= number_format( $producto['precio'] ,2, '.','' ) ?>"> 
							<input name="itemQuantity<?php echo $indice; ?>" type="hidden" value="<?= $producto['cantidad'] ?>">  
							<input name="itemWeight<?php echo $indice; ?>" type="hidden" value="1000"> 
							<input name="itemShippingCost<?php echo $indice; ?>" type="hidden" value="0.00"> 
							
					
							<?php } ?>
							
							
							
							<!-- Informações de frete (opcionais) -->  
							<input name="shippingType" type="hidden" value="1">  
							<input name="shippingAddressPostalCode" type="hidden" value="01452002">  
							<input name="shippingAddressStreet" type="hidden" value="Av. Brig. Faria Lima">  
							<input name="shippingAddressNumber" type="hidden" value="1384">  
							<input name="shippingAddressComplement" type="hidden" value="5o andar">  
							<input name="shippingAddressDistrict" type="hidden" value="Jardim Paulistano">  
							<input name="shippingAddressCity" type="hidden" value="Sao Paulo">  
							<input name="shippingAddressState" type="hidden" value="SP">  
							<input name="shippingAddressCountry" type="hidden" value="BRA">  
							
							<!-- Dados do comprador (opcionais) -->  
							<input name="senderName" type="hidden" value="José Comprador">  
							<input name="senderAreaCode" type="hidden" value="11">  
							<input name="senderPhone" type="hidden" value="56273440">  
							<input name="senderEmail" type="hidden" value="comprador@uol.com.br">  
							  
							
							<button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">
								pagar PagSeguro >>
							</button>
							<?php } ?>
							
						</form>
						
						
					</td>
				</tr>
			</tfoot>
		</table>
		<?php } else { ?>
		<div class="alert alert-success" role="alert">
			No hay productos en el carrito...
		</div>
	<?php } ?>
<?php include "templates/pie.php"; ?>	