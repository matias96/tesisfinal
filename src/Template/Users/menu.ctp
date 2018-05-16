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
            <h4 class="text-center">Title</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!
            </p>
            <a class="btn btn-default btn-sm" href="#" role="button">View Page »</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="glyphicon glyphicon-tasks"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center">Title</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!
            </p>
            <a class="btn btn-default btn-sm" href="#" role="button">View Page »</a>
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
            <h4 class="text-center">Title</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!
            </p>
            <a class="btn btn-default btn-sm" href="#" role="button">View Page »</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="iconbox">
          <div class="iconbox-icon">
            <span class="glyphicon glyphicon-user"></span>
          </div>
          <div class="featureinfo">
            <h4 class="text-center">Title</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem sequi dolorem architecto perferendis quas aperiam debitis dolor soluta!
            </p>
          <?= $this->html->link("Vinos",["controller"=>"vinos","action"=>"solover",],["class" =>"btn btn-default btn-sm"]) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>