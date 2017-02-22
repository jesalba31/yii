<?php
/* @var $this ContactoController */

$this->breadcrumbs=array(
	'Contacto',
);
?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>-->

<!-- Contact
    ================================================== -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <header>
                        <h1>Contactanos</h1>
                        <div class="spacer"></div>
                        <p>Puede contactarnos por los siguientes medios: </p>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                            <div class="contact-info">
                                <i class="fa fa fa-envelope"></i>
                                <span>admin@lagunanueva.com</span>
                            </div>
                            <hr>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                            <div class="contact-info">
                                <i class="fa fa fa-phone"></i>
                                <span>(800) 123-4567</span>
                            </div>
                            <hr>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 text-center">
                            <div class="contact-info">
                                <i class="fa fa-twitter"></i>
                                <span>@_lagunaNueva</span>
                            </div>
							<hr>
                        </div>
                    </div>
                </div>
            </div>

			<br>
            <form class="contact-form">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
                 <h3 style="color: #fff">Formulario de Contacto</h3><br>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" name="name" value="" required="true" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-4 col-xs-12">
                                    <input type="email" class="form-control" name="email" value="" required="true" placeholder="Correo">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-4 col-xs-12">
                                    <input type="text" class="form-control" name="subject" value="" required="true" placeholder="Asunto">
                                </div>
                            </div>
                        
                    
		                    <div class="form-group">
		                        <div class="col-md-12 col-sm-4 col-xs-12">

		                            <textarea class="form-control" name="message" cols="40" rows="5" placeholder="Mensaje"></textarea>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <div class="col-md-12 col-sm-12 col-xs-12 text-left">
		                            <input type="submit" value="Enviar" class="btn btn-large btn-success">
		                        </div>
		                    </div>
                    	</div>
                    </div>
                </div>
            </form>
        </div>
    </section>