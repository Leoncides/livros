<?php require_once 'cabecalho.php';

		
?>




<div id="topo">
	<div id="logo">		
	
	<a href="principal.php"><img src="img/logo.png"></a></div>
<div id="menu">
	<ul class="nav">
		<li>Cadastrar
			<ol>
				<li><a href="cadastrarlivro.php" onclick='mostra()' target="quadro">Livro</a></li>
			</ol>
		</li>
			<li>Listar
			<ol>
				<li><a href="listarlivro.php" onclick='mostra()' target="quadro">Curso</a></li>
			</ol>
		</li>
	</ul>
</div>
</div>
<div id="principal">
	<span id='mensagem'></span>
	<iframe src="home.php" name="quadro" onload="esconde()"></iframe>
</div>
<div id="rodape">
	<div id="endereco">
		<p>Rua xX de Y,1228</p>
		<p>CEP 84053-3434</p>
		<p>Tel:(42)3232-3434</p>
		<p>Ponta Grossa-PR</p>
	</div>
	<div id="sobre">
		<p>Página desenvolvida para cadastro de livros</p>
	</div>
</div>
<script src="js/mensagem.js"></script>
</body>
</html>