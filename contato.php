<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/contato-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<!-- Navbar -->

	<?php include 'inc/navbar.php';?>

	<div class="corpo">
		<div class="contact-form">
			<div class="container">
				<form action="action_page.php">

					<label for="fname">Seu nome</label>
					<input type="text" id="fname" name="firstname" placeholder="Digite aqui seu nome..">

					<label for="lname">Email</label>
					<input type="text" id="lname" name="lastname" placeholder="Digite aqui seu email..">

					<label for="country">Como nos conheceu?</label>
					<select id="country" name="country">
						<option value="australia">Facebook</option>
						<option value="canada">Instagran</option>
						<option value="usa">Google</option>
						<option value="usa">TV</option>
						<option value="usa">Radio</option>
					</select>

					<label for="subject">Texto</label>
					<textarea id="subject" name="subject" placeholder="Escreva algo.." style="height:200px"></textarea>

					<input type="submit" value="Enviar">

				</form>
			</div>
		</div>

		<div class="dados">
			<h1>Contate-nos!</h1>
			<br>
			<i class="fa fa-phone"></i> Telefone: 1234-5678
			<p><i class="fa fa-envelope-open"></i> Email: email@gmail.com</p>
			
		</div>

		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.411248738478!2d-34.90542276424049!3d-8.059465822894154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18ded1bc6309%3A0xaf428d791ebffe71!2sEscola+Polit%C3%A9cnica+de+Pernambuco!5e0!3m2!1spt-BR!2sbr!4v1532732280153" width="500" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

	<!-- footer -->

	<?php include 'inc/footer.php';?>

</body>
</html>