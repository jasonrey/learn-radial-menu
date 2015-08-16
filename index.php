<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<title>Radial Menu</title>
</head>
<body>
<div class="container">
	<div class="element"></div>
	<h1>Radial Menu</h1>

	<hr />

	<div class="section">
		<h2>Type 1 - Slide</h2>

		<div class="menu menu-1 not-active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-1 menu-1-reverse active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-1 menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-1 menu-1-reverse menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>

	<div class="section">
		<h2>Type 1 - Fade</h2>

		<div class="menu menu-1 menu-1-fade not-active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-1 menu-1-reverse menu-1-fade active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-1 menu-1-fade menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-1 menu-1-reverse menu-1-fade menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>

	<div class="section">
		<h2>Type 1 - Scale</h2>

		<div class="menu menu-1 menu-1-scale not-active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-1 menu-1-reverse menu-1-scale active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-1 menu-1-scale menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-1 menu-1-reverse menu-1-scale menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>

	<div class="section">
		<h2>Type 2 - Slide</h2>

		<div class="menu menu-2 not-active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-2 menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>

	<div class="section">
		<h2>Type 2 - Fade  (with scaling radial)</h2>

		<div class="menu menu-2 menu-2-fade not-active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-2-fade active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-2 menu-2-fade menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-2-fade menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>

	<div class="section">
		<h2>Type 2 - Fade (with fading radial)</h2>

		<div class="menu menu-2 menu-2-fade menu-2-fade menu-2-fade-alternative">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-2-fade menu-2-fade-alternative active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-2 menu-2-fade menu-2-fade-alternative menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-2-fade menu-2-fade-alternative menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>

	<div class="section">
		<h2>Type 2 - Scale</h2>

		<div class="menu menu-2 menu-2-scale not-active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-2-scale active">
			<?php include('menu.php'); ?>
			<div class="description">Forward - Reverse</div>
		</div>

		<div class="menu menu-2 menu-2-scale menu-corner not-active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Forward</div>
		</div>

		<div class="menu menu-2 menu-2-reverse menu-2-scale menu-corner active">
			<div class="box-frame">
				<?php include('menu-corner.php'); ?>
			</div>
			<div class="description">Forward - Reverse</div>
		</div>
	</div>
</div>
</body>
</html>
