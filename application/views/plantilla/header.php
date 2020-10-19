    <!-- ------------------------------------------------------------------------------------------------------------------------------------>
    <!-- Here Start Header and menu Bar -->


    <ul>
        <li><a href="<?php echo base_url();?>" class="logoa"><img src="<?php echo base_url();?>Style/images/Icons/EasyBlogo.jpg" class="logo" alt="Easybank-logo"></a></li>

        <li><a href="Welcome.php" class="active">Inicio</a></li>
        <?php 
        /////////////////////////
        $menus=$this->session->userdata('menu');
        //print_r($menus);
        foreach ($menus as $menu) {?>
            <li><a href="Profile.php"><?php echo $menu->men_codigo; ?></a></li>   
            <?php         
        }
        ////////////////////////
         ?>

        <li><a href="Profile.php"><?php echo $this->session->userdata('menu'); ?></a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Acerca</a></li>
        <li style="float:right"><a href='<?php echo site_url("Ccliente/cerrarsesion"); ?>'> Exit </a></li>
    </ul>

   
<div>
    <!--<p class="welcome"><?php //echo " Welcome $Username ";?></p>-->
</div>
