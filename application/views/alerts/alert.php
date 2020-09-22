<?php $alerta=validation_errors();?>
<?php if($alerta!="" || !$this->session->flashdata('er')){?>
               <!--<div class="error" style="line-height:3px;" role="alert">
                  <strong><?php //echo $alerta ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>-->
                <?php
                  }else{
                    if($this->session->flashdata('er')){
                ?>
                      <div class="error" role="alert">
                        <strong><?php echo $this->session->flashdata('er'); ?></strong>
                        <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                          
                      </div>
                <?php
                    }
                  }
                ?> 