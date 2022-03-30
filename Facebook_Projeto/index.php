<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Facebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="center">
			<div class="logo">
				<h1>facebook</h1>
			</div><!--Logo-->
			
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou Telefone:</p>
					<input type="email" name="">
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password" name="">
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar">
				</div><!--form-element-->
			</form><!--Form-login-->
			<div class="clear"></div>
		</div><!--Center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="img1.png">
			</div><!--img-pessoas-->

			<div class="abrir-conta">
				<h2>Abra uma conta</h2>
				<h3>É gratuito e sempre será.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text" name="">
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" name="">
					</div><!--w50-->

					<div class="w100">
						<input placeholder="Seu E-mail" type="email" name="">
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Nova Senha" type="password" name="">
					</div><!--w100-->

					<div class="w100">
						<h2>Data de nascimento:</h2>
						<select name="nascimento-dia" class="nascimento">
							<?php
							for($i = 1; $i <= 31; $i++){
							
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="0">Agosto</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<?php
							for($i = 1960; $i <= 2022; $i++){
							
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div>
						</div><!--w100-->

							<div class="w100">
								<div class="input-radio">
									<input type="radio" name="sexo" value="masculino">
									<h2>Masculino</h2>
								</div><!--Radio-->
							<div class="input-radio">
									<input type="radio" name="sexo" value="feminino">
									<h2>Feminino</h2>
								</div><!--Radio-->
								<div class="clear"></div>

							</div><!--w100-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar">
					</div><!--w100-->
					<div class="clear"></div>

				</form><!--criar-conta-->

			</div><!--abrir-conta-->

			<div class="clear"></div>

		</div><!--Center-->
		
	</section><!--Main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a href="#">Inglês</a>
			<a href="#">Francês</a>
			<a href="#">Chinês</a>
			<a href="#">Espanhol</a>
			<a href="#">Árabe</a>
			<a href="#">Hindi</a>
			<a href="#">Italiano</a>
		</div><!--center-->
	</section><!--linguas-->

</body>
</html>