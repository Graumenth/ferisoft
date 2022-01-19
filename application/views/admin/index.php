<!doctype html>
<html lang="en">
<?php $this->load->view('inc/head'); ?>
<body>
<?php $this->load->view('inc/header'); ?>
<div class="container">
	<h1>Admin</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Message</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach ($items as $item){?>
				<tr>
					<td><?php echo $item->name; ?></td>
					<td><?php echo $item->message; ?></td>
				</tr>
			<?php}
			?>
		</tbody>
	</table>
</div>
<?php $this->load->view('inc/footer'); ?>
<?php $this->load->view('inc/scripts'); ?>
</body>
</html>
