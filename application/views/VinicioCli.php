<?php 
	if(!empty($saldo)){
		foreach ($saldo as $key) {
			$datos=array('saldo'=>$key->cta_saldo,
						'fechaproximo'=>$key->cuo_fecha,
						'valorproximo'=>$key->cuo_cantidad,
						'fechapago'=>$key->pag_fecha,
						'valorpago'=>$key->pag_cantidad);
			/*
		echo $key->cta_saldo
		echo $key->cta_saldo*/
		}
	}
	?>
<div class="cont">
	<h1 style="margin:5px 0 0 0"> <?php echo $this->session->userdata('nombreusuario'); ?> </h1>

	<div class="width50 letf">	
	<div>
		
		<h2>Saldo: </h2>
		<h3><p style="display:inline-block">$</p> <?php echo $datos['saldo']; ?> </h3>
	</div>
	<div>
		<h3><a href="<?php echo '#';?>"> Detalles del prestamo </a></h3>
	</div>

		
		
	</div>
	

	<div class="width50 right">
		<div>
			<h2>Proximo pago</h2>
			<table>
				<tr>
					<th><h3>Fecha</h3></th>
					<th><h3>Valor</h3></th>
				</tr>
				<tr>
					<td>
						
						
					</td>
					<td><?php  ?></td>
				</tr>
			</table>
		</div>
		<div>
			<h2>Ultimos pagos</h2>
			<table>
				<tr>
					<td><h3>Fecha</h3></td>
					<td><h3>Valor</h3></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="boton">
		<a herf="prestamo.php" >Solicitar prestamo</a>
	</div>

</div>