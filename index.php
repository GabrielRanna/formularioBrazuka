<?php
if (isset($_POST['submit'])) {
	include_once('connect.php');
	$name = $_POST['name'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$bDay = $_POST['dataNasc'];
	$bPlace = $_POST['localNasc'];
	$occupation = $_POST['occupation'];
	$rg = $_POST['rg'];
	$responsibility = $_POST['responsibility'];
	$rp = $_POST['rp'];
	$academicEducation = $_POST['academicEducation'];
	$cep = $_POST['cep'];
	$endereco = $_POST['endereco'];
	$numberAdress = $_POST['numberAdress'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$residencialphoneNumber = $_POST['residencialphoneNumber'];
	$cellphoneNumber = $_POST['cellphoneNumber'];
	$role = $_POST['role'];
	$website = $_POST['website'];
	$result = mysqli_query($conexao, "INSERT INTO dados_solicitante(nome,cpf,email,data_nasc,local_nasc,profissao,rg,cargo,registro_profissional,formacao_academica,cep,endereco_residencial,numero,bairro,cidade,estado,telefone,celular,funcao,website) VALUES('$name','$cpf','$email','$bDay','$bPlace','$occupation','$rg','$responsibility','$rp','$academicEducation','$cep','$endereco','$numberAdress','$bairro','$cidade','$uf','$residencialphoneNumber','$cellphoneNumber','$role','$website')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA Compatible" content="ie-edge" />
	<title>Formulário</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div class="d-flex justify-content-center">
		<div class="card">
			<h1 class="text-center">Inclusão de Dados do Solicitante</h1>
			<form id="form" method="POST" action="index.php" name="form">
				<div class="row align-items-end">
					<div class="mb-3">
						<label for="inputName" class="form-label">Nome do Solicitante da Credencial:</label>
						<input type="text" class="form-control" id="inputName" name="name" required />
					</div>
					<div class="mb-3">
						<label for="cpf" class="form-label">CPF:</label>
						<input type="text" class="form-control" id="cpf" name="cpf" required />
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control" id="email" name="email" />
					</div>

					<div class="mb-3 col-12 col-md-4">
						<label for="dataNasc" class="form-label">Data de Nascimento:</label>
						<input type="date" id="dataNasc" name="dataNasc" class="form-control" max="2022-12-31" required />
					</div>
					<div class="mb-3 col-12 col-md-4 ">
						<label for="localNasc" class="form-label">Local de Nascimento:</label>
						<input type="text" class="form-control" id="localNasc" name="localNasc" />
					</div>
					<div class="mb-3 col-12 col-md-4 ">
						<label for="occupation" class="form-label">Profissão:</label>
						<input type="text" class="form-control" id="occupation" name="occupation" />
					</div>
					<div class="mb-3 col-12 col-sm-6 col-md-3">
						<label for="rg" class="form-label">RG:</label>
						<input type="text" class="form-control" id="rg" name="rg" required />
					</div>
					<div class="mb-3 col-12 col-sm-6 col-md-3">
						<label for="responsibility" class="form-label">Cargo:</label>
						<input type="text" class="form-control" id="responsibility" name="responsibility" />
					</div>
					<div class="mb-3 col-12 col-sm-6 col-md-3">
						<label for="rp" class="form-label">Registro Profissional:</label>
						<input type="text" class="form-control" id="rp" name="rp" maxlength="6" />
					</div>
					<div class="mb-3 col-12 col-sm-6 col-md-3">
						<label for="academicEducation" class="form-label">Formação Acadêmica:</label>
						<input type="text" class="form-control" id="academicEducation" name="academicEducation" />
					</div>
					<div class="mb-3 col-12 col-lg-2">
						<label for="cep" class="form-label">CEP:</label>
						<input type="text" class="form-control" id="cep" name="cep" maxlength="9" />
					</div>
					<div class="mb-3 col-12 col-lg-8">
						<label for="endereco" class="form-label">Endereço Residencial:</label>
						<input type="text" class="form-control" id="endereco" name="endereco" />
					</div>
					<div class="mb-3 col-6 col-lg-2">
						<label for="numberAdress" class="form-label">Número:</label>
						<input type="text" class="form-control" id="numberAdress" name="numberAdress" />
					</div>
					<div class="mb-3 col-6 col-lg-4">
						<label for="bairro" class="form-label">Bairro:</label>
						<input type="text" class="form-control" id="bairro" name="bairro" />
					</div>
					<div class="mb-3 col-6 col-lg-4">
						<label for="cidade" class="form-label">Cidade:</label>
						<input type="text" class="form-control" id="cidade" name="cidade" />
					</div>
					<div class="mb-3 col-6 col-lg-4">
						<label for="uf" class="form-label">Estado:</label>
						<input type="text" class="form-control" id="uf" name="uf" />
					</div>
					<div class="mb-3 col-6 col-lg-3">
						<label for="residencialphoneNumber" class="form-label">Telefone:</label>
						<input type="text" class="form-control" id="residencialphoneNumber" name="residencialphoneNumber" />
					</div>
					<div class="mb-3 col-6 col-lg-3">
						<label for="cellphoneNumber" class="form-label">Celular:</label>
						<input type="text" class="form-control" id="cellphoneNumber" name="cellphoneNumber" />
					</div>
					<div class="mb-3 col-12 col-lg-3">
						<label for="role" class="form-label">Função:</label>
						<input type="text" class="form-control" id="role" name="role" />
					</div>
					<div class="mb-3 col-12 col-lg-3">
						<label for="website" class="form-label">Website:</label>
						<input type="text" class="form-control" id="website" name="website" />
					</div>
				</div>
				<script>
					originalOnload = window.onload;
					window.onload = function() {
						if (originalOnload) {
							originalOnload();
						}
						$(document).ready(function() {
							var $seuCampoCpf = $('#cpf');
							$seuCampoCpf.mask('000.000.000-00', {
								reverse: true
							});
							var $seuCampoCep = $("#cep");
							$seuCampoCep.mask('99999-999', {});
							var $seuCampoRg = $("#rg");
							jQuery("#rg").mask('99.999.999');
							jQuery("#residencialphoneNumber").mask('(99) 9999-9999');
							jQuery("#cellphoneNumber").mask('(99) 99999-9999');
						});
					};
				</script>
				<div class="form-group mt-3">
					<button type="submit" id="formButton" class="btn" name="submit">Submeter</button>
				</div>

			</form>
		</div>
	</div>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
</body>

</html>