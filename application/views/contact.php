

<div class="content-section-b" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="secion-heading">Contact us</h2>

                    <?php
                        $attributes = array("class" => "form-horizontal", "name" => "contactform");
                        $this->load->helper('form');
                        echo form_open(base_url() . "contact_Controller/index", $attributes); 
                    ?>

                     <div class="form-group" >
                        <label for="name">Name</label>
                        <!--<input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name" value='<?php echo htmlentities($inputName)?>'>-->
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value='<?php echo set_value('name'); ?>'>
                        <span class='text-danger'> <?php echo form_error('name') ?> </span>
                                 
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"value='<?php echo set_value('email'); ?>' >
                        <span class='text-danger'> <?php echo form_error('email') ?> </span>
                    </div>

                    <div class="form-group">
                        <label for="inputMessage">Your message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter message" name="message"  value='<?php echo set_value('message'); ?>'></textarea>
                       <span class='text-danger'> <?php echo form_error('message') ?> </span>
                    </div>
                        
                    <button type="submit" id="submit" value="submit" name="submitted" class="btn btn-danger" style="width:30%; height:5%;">Send</button>
                    
                    <?php echo form_close(); ?>
                    

                </div>
                    


                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <?php echo $map['js']; ?>
                    <?php echo $map['html'];?>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>