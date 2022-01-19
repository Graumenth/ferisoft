<!doctype html>
<html lang="en">
<?php $this->load->view('inc/head'); ?>
<body>
<?php $this->load->view('inc/header'); ?>
<div class="container">
	<h1>Contact</h1>
	<form method="post" action="<?php base_url('contact/add')?>">
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php $this->load->view('inc/footer'); ?>
<?php $this->load->view('inc/scripts'); ?>
</body>
</html>
