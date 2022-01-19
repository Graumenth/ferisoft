<!doctype html>
<html lang="en">
<?php $this->load->view('inc/head'); ?>
<body>
<?php $this->load->view('inc/header'); ?>
<div class="container">
	<h1>Contact</h1>
	<form method="post" action="<?php base_url('contact/add')?>">
		<div class="form-group">
			<label for="user_name">Name</label>
			<input type="text" class="form-control" name="name" id="user_name" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="message_area">Message</label>
			<textarea class="form-control" name="message" id="message_area" placeholder="Please write your message"cols="30" rows="10"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php $this->load->view('inc/footer'); ?>
<?php $this->load->view('inc/scripts'); ?>
</body>
</html>
