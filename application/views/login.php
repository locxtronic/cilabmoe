<?php
	if ($this->session->logged == true) {
		redirect("dashboard");
	}
?>
<div class="container">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<br>
				<center>
					<i class="fa fa-user-circle-o fa-4x" style="color:  #428bca;" aria-hidden="true"></i>
					<h3>Welcome...</h3>
					<p>Please login to continue.</p>
				</center>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-lg-12">
							<form action="<?php	echo	base_url();	?>auth/login" method="post">
								<div class="input-group">
									<label>username :</label>
									<input type="text" class="form-control" placeholder="Your username" name="tbxUsername">
								</div>
								<br>
								<div class="input-group">
									<label>password :</label>
									<input type="password" class="form-control" placeholder="Your password" name="tbxPassword">
								</div>
								<hr>
								<input type="submit" class="btn btn-primary btn-block" value="Login">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4"></div>
	</div>

	<div id="theModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
						Login is unsuccessful.
					</h4>
				</div>
				<div class="modal-body">
					<p>
						<?php	if	(isset($error)):	?>
							<?php	echo	$error;	?>
							<script> $("#theModal").modal("show");</script>
						<?php	endif;	?>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
