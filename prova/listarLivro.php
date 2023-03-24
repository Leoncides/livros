<?php require_once 'cabecalho.php'; ?>

<?php
require_once 'model/Livro.php';

$consulta=listarLivro();
if (!$consulta) {//voltou falce
	echo "<h2>Nenhum curso cadastrado!</h2>";
}else{//tem curso
	echo "<table>";
	echo "<tr>";
	echo "<th>Código</th>";
	echo "<th>Titulo</th>";
	echo "<th>Autor</th>";
	echo "<th>Editora</th>";
	echo "<th>Lançamento</th>";
	echo "<th>n&ordm; de Paginas</th>";
	echo "<th>Valor R$</th>";
	echo "</tr>";

	while ($linha=$consulta->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$linha['cod_liv']."</td>";
		echo "<td>".$linha['titulo_liv']."</td>";
		echo "<td>".$linha['autor_liv']."</td>";
		echo "<td>".$linha['editora_liv']."</td>";
		echo "<td>".$linha['lancamento_liv']."</td>";
		echo "<td>".$linha['paginas_liv']."</td>";
		echo "<td>".$linha['valor_liv']."</td>";
		echo "</tr>";
	}
}
?>
</body>
</html>