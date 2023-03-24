<?php require_once 'cabecalho.php'; ?>
<?php  
require_once './persistence/Banco.php';
function cadastrarLivro($cod_liv,$titulo_liv,$autor_liv,$editora_liv,$Lancamento_liv,$paginas_liv,$valor_liv)
{
	$banco=new Banco();
	$sql="insert into livro values($cod_liv,'$titulo_liv','$autor_liv','$editora_liv','$Lancamento_liv',$paginas_liv,$valor_liv)";
	$resp=$banco->executar($sql);
	if ($resp) {
		return true;
	}else{
		return false;
	}
}
	function retornUltimoCodigo(){
		$banco=new Banco();
		$sql="select max(cod_liv) from livro";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {//se false ou falso
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$ultimo=$linha['max(cod_liv)'];
			}
			return $ultimo;
		}
	}


	function listarLivro(){
		$banco=new Banco();
		$sql="select * from livro order by cod_liv";
		$consulta=$banco->consultar($sql);
		if (!$consulta) {
			return false;
		}else{
			return $consulta;
		}
	}
?>
</body>
</html>