<?= $this -> Html -> css("login")?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<?=$this->flash->render("auth")?>
                <?=$this->form->create()?>
			<fieldset>
				<h1>Please Sign In</h1>
				<hr class="colorgraph">
				<div class="form-group">
                    <?= $this -> form -> imput ("username",["class"=> "form-control imput-lg","placeholder"=> "Username", "label"=> false,"required"]) ?>
				</div>
				<div class="form-group">
                    <?= $this -> form -> imput ("password",["class"=> "form-control imput-lg","placeholder"=> "Password", "label"=> false,"required"]) ?>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <?=$this->form->button("Acceder",["class"=> "btn btn-lg btn-success btn-block"])?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
					<?= $this->html->link("Registrarse",["controller"=>"users","action"=>"add"],["class" =>"btn btn-lg btn-primary btn-block"]) ?>
                                        </div>
				</div>
			</fieldset>
		<?=$this->form->end()?>
	</div>