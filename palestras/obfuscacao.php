<?php

// PHP Velho Oeste 2024
// Palestra - Táticas de obfuscação de código em projetos PHP: Reforçando a defesa em profundidade de projetos críticos
// Palestrante: Murilo de Araujo Chianfa

// Obfuscação: Técnica de tornar o código fonte de um programa difícil de ser compreendido por humanos, mas que continua sendo executável pela máquina.

// Quando precisa?
// - Quando o código está em um ambiente hostil (compartilhado, terceiros, usuários finais...).
// - Revendedoras
// - Códigos maliciosos

// Compiladas vs Interpretadas
// php -d vld - Extrai o bytecode do PHP

// Métodos de Obfuscação
// - Embaralhar variáveis de escopo
// - Propagar constantes
// - Inserção de código lixo
// - Confusão no fluxo de execução
// - Variação polimórfica
// - Criptografia de strings
// - Criptografia de código fonte
// - inline functions
// - Codificação simples
// - Criar ou mofigicar OpCodes (swoole-compilar)
// - Remoção de comentários
// - Algoritmos metamórficos
// - Limitar versões de execução
// - Limitar extensões permitidas

// anti-disassembly, ani-debugging e anti-tamper

// Ioncube (ver)

// Como utilizar?
// No CI, antes dos testes finais.