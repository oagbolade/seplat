<?php
	require_once 'controller.php';
	echo $head;
?>
<div class="container body">
	<div class="main_container">
		<?php echo $menu; ?>
		<?php echo $mastHead; ?>

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3><?php echo $pageName ?></h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <?php echo $response; ?>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Create Request</h2>
                <ul class="nav navbar-right panel_toolbox al_panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

								<!-- start form for validation -->
								<form method="post" action="processor.php" id="demo-form" data-parsley-validate class="col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 col-xs-12">
									<label for="company_name">Company Name * :</label>
									<input type="text" id="company_name" class="form-control" name="company_name" required />

									<label for="email">Email * :</label>
									<input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

									<label for="email">Phone * :</label>
									<input type="number" id="phone" class="form-control" name="phone" data-parsley-trigger="change" required />

									<label for="company_logo">Company Logo :</label>
									<input type="file" id="company_logo" class="form-control" name="company_logo" data-parsley-trigger="change" />

									<label for="category">Category * :</label>
										<select id="heard" name="category" class="form-control" required multiple>
												<?php echo $categoryOption ?>
										</select>
										<label for="address">Office Address * :</label>
										<input type="text" id="address" class="form-control" name="address" data-parsley-trigger="change" required />

											<label for="about">Additional Information (20 chars min, 100 max) :</label>
											<textarea id="about" required="required" class="form-control" name="about" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
												data-parsley-validation-threshold="10"></textarea>

											<br/>
											<button type="submit" name="submit" class="btn btn-primary">Submit</button>

								</form>
								<!-- end form for validations -->

                <?php
                	//$DbHandle = new DBHandler($PDO, "login", __FILE__);
									//$User = new Users($DbHandle);
								 	//var_dump($User->userDetails('alabi10@yahoo.com'))
								?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <?php echo $slogan; ?>
    <!-- /footer content -->
  </div>
</div>
<?php echo $footer; ?>
