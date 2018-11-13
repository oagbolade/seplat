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
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Market Place</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                  <!-- </li> -->
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <div class="row">
                  <div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
                      <select class="form-control">
                        <option>Category</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                      </select>
                    </div>
                 
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <select class="form-control">
                        <option>Company</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                      </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <button type="submit" class="btn btn-success">Filter</button>
                    </div>
                    <br><br><br>
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>A</span>
                          </span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>B</span>
                          </span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>C</span>
                          </span>
                        </button>
                      </div> 
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>D</span>
                          </span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>E</span>
                          </span>
                        </button>
                      </div>
                      <span>...</span>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>X</span>
                          </span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>Y</span>
                          </span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">
                          <span class="docs-tooltip">
                            <span>Z</span>
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <br><br>
                 
                  <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="col-md-12" style="border: 1px solid #ddd; margin-bottom: 0px;">
                      <h5><em>Digital Strategist, laptop supplier</em></h5>
                      <div class="">
                        <div class="col-md-9">
                          <h5>Digital Strategy Ltd</h5>
                          <p>
                            <strong>About:</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis optio,<br>
                            <span class="fa fa-building"> Address:</span><br>
                            <span> No 2, Oluakere st, Ikeja</span><br>
                            <span class="fa fa-phone">: +234703640516</span><br>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <img src="images/user.png" class="img-responsive img-circle">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="width: 100%; padding: 5px; margin-top: 0; background-color: rgba(42, 63, 84, 0.5); color: #fff">
                      <span>4.5</span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half"></span>
                      <span class="pull-right">
                        <button type="submit" class="btn-primary"><span class="fa fa-download"></span></button>
                        <button type="submit" class="btn-success"><span class="fa fa-user"></span> View profile</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="col-md-12" style="border: 1px solid #ddd; margin-bottom: 0px;">
                      <h5><em>Digital Strategist, laptop supplier</em></h5>
                      <div class="">
                        <div class="col-md-9">
                          <h5>Digital Strategy Ltd</h5>
                          <p>
                            <strong>About:</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis optio,<br>
                            <span class="fa fa-building"> Address:</span><br>
                            <span> No 2, Oluakere st, Ikeja</span><br>
                            <span class="fa fa-phone">: +234703640516</span><br>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <img src="images/user.png" class="img-responsive img-circle">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="width: 100%; padding: 5px; margin-top: 0; background-color: rgba(42, 63, 84, 0.5); color: #fff">
                      <span>4.5</span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half"></span>
                      <span class="pull-right">
                        <button type="submit" class="btn-primary"><span class="fa fa-download"></span></button>
                        <button type="submit" class="btn-success"><span class="fa fa-user"></span> View profile</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="col-md-12" style="border: 1px solid #ddd; margin-bottom: 0px;">
                      <h5><em>Digital Strategist, laptop supplier</em></h5>
                      <div class="">
                        <div class="col-md-9">
                          <h5>Digital Strategy Ltd</h5>
                          <p>
                            <strong>About:</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis optio,<br>
                            <span class="fa fa-building"> Address:</span><br>
                            <span> No 2, Oluakere st, Ikeja</span><br>
                            <span class="fa fa-phone">: +234703640516</span><br>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <img src="images/user.png" class="img-responsive img-circle">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="width: 100%; padding: 5px; margin-top: 0; background-color: rgba(42, 63, 84, 0.5); color: #fff">
                      <span>4.5</span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half"></span>
                      <span class="pull-right">
                        <button type="submit" class="btn-primary"><span class="fa fa-download"></span></button>
                        <button type="submit" class="btn-success"><span class="fa fa-user"></span> View profile</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="col-md-12" style="border: 1px solid #ddd; margin-bottom: 0px;">
                      <h5><em>Digital Strategist, laptop supplier</em></h5>
                      <div class="">
                        <div class="col-md-9">
                          <h5>Digital Strategy Ltd</h5>
                          <p>
                            <strong>About:</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis optio,<br>
                            <span class="fa fa-building"> Address:</span><br>
                            <span> No 2, Oluakere st, Ikeja</span><br>
                            <span class="fa fa-phone">: +234703640516</span><br>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <img src="images/user.png" class="img-responsive img-circle">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="width: 100%; padding: 5px; margin-top: 0; background-color: rgba(42, 63, 84, 0.5); color: #fff">
                      <span>4.5</span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half"></span>
                      <span class="pull-right">
                        <button type="submit" class="btn-primary"><span class="fa fa-download"></span></button>
                        <button type="submit" class="btn-success"><span class="fa fa-user"></span> View profile</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="col-md-12" style="border: 1px solid #ddd; margin-bottom: 0px;">
                      <h5><em>Digital Strategist, laptop supplier</em></h5>
                      <div class="">
                        <div class="col-md-9">
                          <h5>Digital Strategy Ltd</h5>
                          <p>
                            <strong>About:</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis optio,<br>
                            <span class="fa fa-building"> Address:</span><br>
                            <span> No 2, Oluakere st, Ikeja</span><br>
                            <span class="fa fa-phone">: +234703640516</span><br>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <img src="images/user.png" class="img-responsive img-circle">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="width: 100%; padding: 5px; margin-top: 0; background-color: rgba(42, 63, 84, 0.5); color: #fff">
                      <span>4.5</span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half"></span>
                      <span class="pull-right">
                        <button type="submit" class="btn-primary"><span class="fa fa-download"></span></button>
                        <button type="submit" class="btn-success"><span class="fa fa-user"></span> View profile</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="col-md-12" style="border: 1px solid #ddd; margin-bottom: 0px;">
                      <h5><em>Digital Strategist, laptop supplier</em></h5>
                      <div class="">
                        <div class="col-md-9">
                          <h5>Digital Strategy Ltd</h5>
                          <p>
                            <strong>About:</strong><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quis optio,<br>
                            <span class="fa fa-building"> Address:</span><br>
                            <span> No 2, Oluakere st, Ikeja</span><br>
                            <span class="fa fa-phone">: +234703640516</span><br>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <img src="images/user.png" class="img-responsive img-circle">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12" style="width: 100%; padding: 5px; margin-top: 0; background-color: rgba(42, 63, 84, 0.5); color: #fff">
                      <span>4.5</span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star-half"></span>
                      <span class="pull-right">
                        <button type="submit" class="btn-primary"><span class="fa fa-download"></span></button>
                        <button type="submit" class="btn-success"><span class="fa fa-user"></span> View profile</button>
                      </span>
                    </div>
                  </div>
                  
                  
                  
                </div>
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