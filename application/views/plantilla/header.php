    <!-- ------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Here Start Header and menu Bar -->
    <ul>
        <li><a href="<?php echo base_url();?>" class="logoa"><img src="<?php echo base_url();?>Style/images/Icons/EasyBlogo.jpg" class="logo" alt="Easybank-logo"></a></li>

        <li><a href="<?php echo base_url(); ?>" class="active">Inicio</a></li>
        <?php 
        /////////////////////////
        $resultado=$this->session->userdata('resultado');
        

        for ($i=0; $i <count($resultado) ; $i++) { 
        ?>
            <li><a href="#"><?php echo $resultado[$i];?></a></li>
        <?php
         }
         ?>
        <li style="float:right"><a href='<?php echo site_url("Ccliente/cerrarsesion"); ?>'> Exit </a></li>
    </ul>
<div></div>
