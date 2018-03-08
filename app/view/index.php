<!DOCTYPE html>
<html>
	<head>
		<title> Tacio's Framework v.1.0 </title>

		<link rel="stylesheet" type="text/css" href="<?php echo $this->url( 'assets/css/style.css' ); ?>">

	</head>

	<body>
		<div style="text-align: center">

			<h1><?php echo $hello; ?></h1>
			<p><?php echo $message; ?></p>

			<br><br><br>
			<button id="env">Enviar</button>

		</div>

		<script src="<?php echo $this->url('assets/js/jquery.min.js'); ?>"></script>

		<script>
			$('#env').click(function(event) {
					$.ajax({
						url: 'http://localhost/app_personal/backend/service/postStudent',
						type: 'POST',
						dataType: 'json',
						data: {
							id_student: 15,
							username: '05002556108',
							password: '211540',
							loginType: 'personal',
							name: 'Eduardo Lima Sauro',
							student_password: '211540',
							birth_date: '13/10/1985',
							Email: 'email.ss@mail.com',
							CPF: '06062285195',
							cel: '(61)2222-3365',
							CEP: '72545-500',
							neighborhood: 'QR 315 H',
							address: 'QUADRA DE SANTA MARIA',
						},
						success: function(d) {
							console.log(d);
							console.log("success");
						},
					});
				});
		</script>
	</body>

</html>