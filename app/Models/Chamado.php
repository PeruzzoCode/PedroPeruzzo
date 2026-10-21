<?php 

class Chamado{

public function lerChamados() {
    $arquivo = "chamados.json";

    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        return json_decode($conteudo, true) ?? [];
    }   
    return [];
} 

public function salvarChamados($chamados) {
    $arquivo = "chamados.json";
    $json = json_encode($chamados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($arquivo, $json);
}

public function cadastrarChamados($nome, $setor, $equipamento, $descricao, $prioridade) {
    if (!empty($nome) && !empty($descricao)) {
        $chamados = $this->lerChamados();

        $novoChamado = [
            "nome" => $nome,
            "setor" => $setor,
            "equipamento" => $equipamento,
            "descricao" => $descricao,
            "prioridade" => $prioridade,
            "status" => "Aberto"
        ];

        $chamados[] = $novoChamado;
        $this->salvarChamados($chamados);

        return true;
    }
    return false;
}

public function atualizarStatusChamado($posicao, $novoStatus) {
    $chamados = $this->lerChamados();

    if (isset($chamados[$posicao])) {
        $chamados[$posicao]["status"] = $novoStatus;
        $this->salvarChamados($chamados);
        return true;
    }

    return false;
}

public function excluirChamado($posicao) {
    $chamados = $this->lerChamados();

    if (isset($chamados[$posicao])) {
        unset($chamados[$posicao]);
        $chamados = array_values($chamados);

        $this->salvarChamados($chamados);
        return true;
    }

    return false;
}

public function gerarRelatorio($chamados) {
    $total = count($chamados);
    $abertos = 0;
    $emAndamento = 0;
    $resolvidos = 0;

    foreach ($chamados as $chamado) {
        if ($chamado["status"] == "Aberto") $abertos++;
        if ($chamado["status"] == "Em andamento") $emAndamento++;
        if ($chamado["status"] == "Resolvido") $resolvidos++;
    }

    return [
        "total" => $total,
        "abertos" => $abertos,
        "em_andamento" => $emAndamento,
        "resolvidos" => $resolvidos
    ];
}
}

?>