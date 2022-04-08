<?php
header("Content-Type: text/html; charset=UTF-8", true);
$json = json_decode(file_get_contents('php://input', true));
$con = new mysqli("localhost", "root", "", "formulario_brazuka");
$reponse = array();
if ($con) {
    $sql = 'SELECT * FROM `dados_solicitante`';
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Content-Type: JSON');
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['nome'] = $row['nome'];
            $response[$i]['cpf'] = $row['cpf'];
            $response[$i]['email'] = $row['email'];
            $response[$i]['data_nasc'] = $row['data_nasc'];
            $response[$i]['local_nasc'] = $row['local_nasc'];
            $response[$i]['profissao'] = $row['profissao'];
            $response[$i]['rg'] = $row['rg'];
            $response[$i]['cargo'] = $row['cargo'];
            $response[$i]['registro_profissional'] = $row['registro_profissional'];
            $response[$i]['formacao_academica'] = $row['formacao_academica'];
            $response[$i]['cep'] = $row['cep'];
            $response[$i]['endereco_residencial'] = $row['endereco_residencial'];
            $response[$i]['numero'] = $row['numero'];
            $response[$i]['bairro'] = $row['bairro'];
            $response[$i]['cidade'] = $row['cidade'];
            $response[$i]['estado'] = $row['estado'];
            $response[$i]['telefone'] = $row['telefone'];
            $response[$i]['celular'] = $row['celular'];
            $response[$i]['funcao'] = $row['funcao'];
            $response[$i]['website'] = $row['website'];
            $i++;
        }
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    }
} else {
    echo "Database Connection Failed.";
}
