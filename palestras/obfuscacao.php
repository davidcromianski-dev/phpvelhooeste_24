<?php

// PHP Velho Oeste 2024
// Palestra 3 - Táticas de obfuscação de código em projetos PHP: Reforçando a defesa em profundidade de projetos críticos
// Palestrante: Murilo de Araujo Chianfa
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Táticas de obfuscação de código em projetos PHP: Reforçando a defesa em profundidade de projetos críticos</title>
</head>
<body>
    <h1>Táticas de obfuscação de código em projetos PHP: Reforçando a defesa em profundidade de projetos críticos</h1>
    <h2>Palestrante: Murilo de Araujo Chianfa</h2>
    <p>Obfuscação: Técnica de tornar o código fonte de um programa difícil de ser compreendido por humanos, mas que continua sendo executável pela máquina.</p>
    <p>Quando precisa?</p>
    <p>- Quando o código está em um ambiente hostil (compartilhado, terceiros, usuários finais...).</p>
    <p>- Revendedoras</p>
    <p>- Códigos maliciosos</p>
    <p>Compiladas vs Interpretadas</p>
    <p>php -d vld - Extrai o bytecode do PHP</p>
    <p>Métodos de Obfuscação</p>
    <p>- Embaralhar variáveis de escopo</p>
    <p>- Propagar constantes</p>
    <p>- Inserção de código lixo</p>
    <p>- Confusão no fluxo de execução</p>
    <p>- Variação polimórfica</p>
    <p>- Criptografia de strings</p>
    <p>- Criptografia de código fonte</p>
    <p>- inline functions</p>
    <p>- Codificação simples</p>
    <p>- Criar ou mofigicar OpCodes (swoole-compilar)</p>
    <p>- Remoção de comentários</p>
    <p>- Algoritmos metamórficos</p>
    <p>- Limitar versões de execução</p>
    <p>- Limitar extensões permitidas</p>
    <p>anti-disassembly, ani-debugging e anti-tamper</p>
    <p>Ioncube (ver)</p>
    <p>Como utilizar?</p>
    <p>No CI, antes dos testes finais.</p>
</body>
</html>
