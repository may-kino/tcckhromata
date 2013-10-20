<html>
<head>
<title>Untitled</title>
<style type="text/css">
.classe
{
border: solid 2px #cc0000;
}
</style>
	
<script language="JavaScript">
<!--
function validaForm(){
d = document.assine;

//validar nome
if (d.nome.value == ""){
	document.getElementById("teste1").style.display = "block";
	document.getElementById("nome").className = "mudacor";
	d.nome.focus()
}

else {
	document.getElementById("teste1").style.display = "none";
	document.getElementById("nome").className = "campo";
}

//validar endereco
if (d.endereco.value == ""){
	document.getElementById("teste2").style.display = "block";
	document.getElementById("endereco").className = "mudacor";
	d.endereco.focus()
	return false;
}

else {
	document.getElementById("teste2").style.display = "none";
	document.getElementById("endereco").className = "campo";
}

document.getElementById('form').submit();
}
// -->
</script>
</head>

<body>
<form action="" method="POST" name="form" onSubmit="return Verifica(this);">

<table width="200" border="0" cellpadding="5" bordercolor="#999999">
	<tr>
		<td>Nome:</td>
		<td><input name="nome" type="text" size="15" class="campo" value=""></td></td>
		
	</tr>
	<tr>
		<td>Endereço:</td>
		<td><input name="endereco" type="text" size="15" class="campo" value=""></td></td>
		
	</tr>
	<tr>
		<td colspan="2">
			<table width="80%" border="0" cellpadding="5" cellspacing="0" bordercolor="#dddddd" rules="rows" align="center">
				<tr>
					<td align="center"><input name="enviar" type="submit" value="Enviar" class="botoes"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>

</body>
</html>