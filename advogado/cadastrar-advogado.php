<h1>Cadastrar Advogado</h1>
<form action="index.php?page=sal-advogado" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_advogado" class="form-control">
	</div>
	<div class="form-group">
		<label>OAB</label>
		<input type="text" name="oab_advogado" class="form-control">
	</div>
	<div class="form-group">
		<label>Especialidade</label>
		<input type="text" name="especialidade_advogado" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>