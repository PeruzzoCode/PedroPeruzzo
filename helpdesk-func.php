<?php

    function lerChamados(){
        $arquivo = "chamados.json";

        if (file_exists($arquivo)){
            $conteudo = file_get_contents($arquivo);

            return json_decode($conteudo, true) ?? [];
        }   
        return [];
    } 

    function salvarChamados($chamados){
        $arquivo = "chamados.json";

        $json = json_encode($chamados, JSON_PRETTY_PRINT);
        
        file_put_contents($arquivo, $json);
    }

    function cadastrarChamados($nome, $setor, 
    $equipamento, $descricao, $prioridade){

        if (!empty($nome) && !empty($descricao)){
            $chamados = lerChamados();

            $novoChamado = [
                "nome" => $nome,
                "setor" => $setor,
                "equipamento" => $equipamento,
                "descricao" => $descricao,
                "prioridade" => $prioridade,
                "status" => "Aberto"
            ];

            $chamados[] = $novoChamado;

            salvarChamados($chamados);

            return true;
        }
    }

    function atualizarStatusChamado($posicao, $novoStatus){
        $chamados = lerChamados();
    
        if (isset($chamados[$posicao])){
            $chamados[$posicao]["status"] = $novoStatus;

            salvarChamados($chamados);
            return true;
        }

        return false;
    }

    function excluirChamado($posicao){
        $chamados = lerChamados();
    
        if (isset($chamados[$posicao])){
            unset($chamados[$posicao]);
            $chamados = array_values($chamados);

            salvarChamados($chamados);
            return true;
        }

        return false;
    }

    function gerarRelatorio($chamados){
        $total = count($chamados);
        $abertos = 0;
        $emAndamento = 0;
        $resolvidos = 0;

        foreach ($chamados as $chamado){
            if ($chamado["status"] == "Aberto") $abertos++;
            if ($chamado["status"] == "Em andamento") $emAndamento++;
            if ($chamado["status"] == "Resolvido") $resolvidos++;
        }

        return [
            "total" => $total,
            "abertos" => $abertos,
            "resolvendo" => $emAndamento,
            "resolvidos" => $resolvidos
        ];
    }

?>