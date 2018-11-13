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
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Activities</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th>Company Name</th>
											<th>Email</th>
											<th>Category</th>
											<th>Status</th>
											<th>Invitation Sent</th>
											<th>Onboarded</th>
										</tr>
									</thead>
									<tbody>
										<?php
											function chooseColor($criteria){
												if ($criteria == 'yes') {
													return 'btn-success';
												}
												if ($criteria == 'rejected' || $criteria == 'no') {
													return 'btn-danger';
												}
												if ($criteria == 'more_info') {
													return 'btn-info';
												}
												if ($criteria == 'pending') {
													return 'btn-primary';
												}
											}
											$i = 1;
										 if (empty($queries)): ?>
				                <P><h3>There are no activities for this user!</h3></P>
				            <?php else: ?>
				                <?php foreach($queries as $query): ?>
													<tr>
														<th scope="row"><?php echo $i++ ?></th>
														<td><b><?php echo $query['company_name'] ?></b><br>
															<?php echo 'Created: '.date("Y-m-d | h:i:sa", $query['created_at']) ?>
														</td>
														<td><?php echo $query['email'] ?></td>
														<td><?php echo $query['category'] ?></td>
														<td><button type="button" class="btn <?php echo chooseColor($query['status']) ?>"><?php echo ($query['status'] == 'more_info') ? 'More Info Required' : $query['status'] ?></button></td>
														<td><button type="button" class="btn <?php echo chooseColor($query['invitation_sent']) ?> "><?php echo $query['invitation_sent'] ?></button></td>
														<td><button type="button" class="btn <?php echo chooseColor($query['onboarded']) ?> "><?php echo $query['onboarded'] ?></button></td>
													</tr>
				                <?php endforeach; ?>
				            <?php endif; ?>
									</tbody>
								</table>
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
