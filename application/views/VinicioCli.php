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
	<h1 style="margin:5px 0 0 0" class="textcolor1"> <?php echo $this->session->userdata('nombreusuario');?> </h1>

	<div class="width50 letf">	
	<div>
		
		<h2 class="textcolor1">Saldo: </h2>
		<h3 class="textcolor1"><p style="display:inline-block">$</p> <?php echo number_format($datos['saldo']);?> </h3>
	</div>
	<div>
		<h3 class="textcolor1"><a href="<?php echo '#';?>" class="textcolor1"> Detalles del prestamo </a></h3>
	</div>

		
		
	</div>
	

	<div class="width50 right">
		<div>
			<h2 class="textcolor1">Proximo pago</h2>
			<table>
				<tr>
					<th><h3 class="textcolor1">Fecha</h3></th>
					<th><h3 class="textcolor1">Valor</h3></th>
				</tr>
				<tr>
					<td class="space-right textcolor1"><?php echo $datos['fechaproximo'];?></td>
					<td class="space-right textcolor1"><?php echo number_format($datos['valorproximo']);?></td>
				</tr>
			</table>
		</div>
		<div>
			<h2 class="textcolor1">Ultimos pagos</h2>
			<table>
				<tr>
					<td class="space-right textcolor1"><h3>Fecha</h3></td>
					<td class="space-right textcolor1"><h3>Valor</h3></td>
				</tr>
				<tr>
					<td class="space-right textcolor1"><?php echo $datos['fechapago'];?></td>
					<td class="space-right textcolor1"><?php echo number_format($datos['valorpago']);?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="boton">
		<a herf="prestamo.php" >Solicitar prestamo</a>
	</div>

</div>