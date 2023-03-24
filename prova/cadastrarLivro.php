<?php require_once 'cabecalho.php'; ?>
<form action="cadastrarLivro.php" method="POST">  
	<h1>Cadastrar Livro</h1>
	<span> &#10024; </span>
	
	<p>Titulo do livro:<input type="text" name="titulo" size="40" maxlength="40" required></p>
	<p>Autor do livro: <input type="text" name="autor" size="40" maxlength="40" required></p>
	<p>Editora: <input type="text" name="editora" size="40" maxlength="40" required></p>
	<p>Lançamento: <input type='date' name='lancamento' max='23/03/12' required></p>
	<p>N&ordm; de Paginas: <input type="number" name="paginas" min="1" max="1000" required></p>
	<p>Valor:<input type="text" name="valor" pattern="[0-9]{1,8}\.[[0-9]{2}" placeholder="999.99" title="Somente números, centavos obrigatorio,ponto e não virgula EX:999.99" required></p>
	<br/><br/>
	<h3><input type="submit" onclick='mostra()' class="enviar" value="Cadastrar"></h3>
</form>
<span id='mensagem'></span>
<?php
if (isset($_POST['titulo'])) {
	/*$cod_liv=$_POST['cod_liv'];*/
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$editora=$_POST['editora'];
	$lancamento=$_POST['lancamento'];
	$paginas=$_POST['paginas'];
	$valor=$_POST['valor'];
	require_once 'model/Livro.php';
	$codigo=retornUltimoCodigo();
	if (!$codigo) {
		echo "<h2>Não á livro cadastrado</h2>";
	}else{
		$codigo++;
		$resposta=cadastrarLivro($codigo,$titulo,$autor,$editora,$lancamento,$paginas,$valor);
		if (!$resposta) {
			echo "<h2>Falha na tentaviva de cadastrado</h2>";
		}else{
			echo "<h2>Cadastrado com sucesso";
		}
	}
}

?>
<script src="js/mensagem.js"></script>
</body>
</html>