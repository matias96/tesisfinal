<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?= $this -> Html -> css("menu")?>

<div class="container">
  <div class="iconcontainer">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="glyphicon glyphicon-book"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center">Lista de Vinos</h4>
            <p>
              En el siguiente apartado podemos encontrar la diferente variedad de vinos a granel que tenemos en nuestro sitio web para ofrecer a nuestros usuarios
            </p>
            <?= $this->html->link("Adminstrar Vinos",["controller"=>"vinos","action"=>"Index",],["class" =>"btn btn-default btn-sm"]) ?>
            <?= $this->html->link("Lista de Vinos",["controller"=>"vinos","action"=>"solover",],["class" =>"btn btn-default btn-sm"]) ?>
          
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="glyphicon glyphicon-tasks"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center">Nuevo Vino</h4>
            <p>
              Comparti tus vinos con los demas usuarios y danos a conocer la calidad de tus productos
            </p>
            <?= $this->html->link("Crear Nuevo",["controller"=>"vinos","action"=>"add",],["class" =>"btn btn-default btn-sm"]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="glyphicon glyphicon-comment"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center">Conoce mas sobre Nosotros</h4>
            <p>
              Te brindamos ayuda las 24 horas del dia, para que te sientas siempre acompañado y seguro a la hora de tomar tus deciciones. En este sitio podras encontrar informacion sobre quienes somos y diferentes formas de localizarnos 
            </p>
             <?= $this->html->link("Nuestra Empresa",["controller"=>"users","action"=>"transferswines",],["class" =>"btn btn-default btn-sm"]) ?>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="glyphicon glyphicon-user"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center">Usuarios</h4>
            <p>
              Te brindamos informacion sobre los demas usuarios para que te puedas contactar de manera directa y sin interrupciones
            </p>
          <?= $this->html->link("Administrar Usuarios",["controller"=>"users","action"=>"index",],["class" =>"btn btn-default btn-sm"]) ?>
         <?= $this->html->link("Usuarios",["controller"=>"users","action"=>"solover",],["class" =>"btn btn-default btn-sm"]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>