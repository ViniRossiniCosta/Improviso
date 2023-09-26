<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Sistema Estoque</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>

	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/home.css">
</head>

<body>
	<?php if (isset($viewData['menu'])): ?>
		<div class="header">
			<nav>
				<ul>
					<?php foreach ($viewData['menu'] as $url => $menutitle): ?>
						<li><a href="<?php echo $url; ?>">
								<?php echo $menutitle; ?>
							</a></li>
					<?php endforeach; ?>
				</ul>
			</nav>

		</div>
	<?php endif; ?>
	<div class="container">
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
	</div>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</body>

</html>