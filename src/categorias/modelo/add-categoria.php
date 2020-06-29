<?php
include('../../banco/conexao.php');

$dados = array(
    "tipo" => '',
    "mensagem" => ''
);

if($conexao){
    $requestData = $_REQUEST;

if(!impty($requestData['nome']) && !impty($requestData['ativo'])){

    $sqlComando = 'INSERT INTO CATEGORIAS() VALUES()';
    $resultado = mysqli_query($conexao, $sqlComando);

    if($resultado){
        $dados['tiopo'] = TIPO_MENSAGEM_SUCESSO;
        $dados['mensagem'] = 'Categoria salva com sucesso...';
    } else {
        $dados['tiopo'] = TIPO_MENSAGEM_ERRO;
        $dados['mensagem'] = 'Erro ao cadastrar a categoria...';
    }
}
else{
    $dados['tiopo'] = 'info';
    $dados['mensagem'] = 'Existem campos obrigatorios...';
}

    mysqli_close($conexao);
} else {
    $dados['tiopo'] = 'info';
    $dados['mensagem'] = 'Não foi possivel realizar a conexão...';
}
echo json_encode($dados);