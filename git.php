<?php

// PHP Velho Oeste - 2024
// Palestra 2 - Perdendo o medo e aproveitando o máximo do Git
// Palestrante: Vinícius Campitelli

// 1. Stash - Guarda o trabalho em andamento para aplicar depois
// 1.1. Stash pop - Aplica o último stash
// 1.2. Stash list - Lista os stashes
// 1.3. Stash apply - Aplica um stash específico
// 1.4. Stash drop - Remove um stash específico
// 1.5. Stash clear - Remove todos os stashes
// 1.6. Stash push - Guarda o trabalho em andamento com uma mensagem
// 1.7. Stash show - Mostra as mudanças do último stash
//
// 2. Commit --amend - Adiciona mudanças ao último commit
// 2.1. Commit --amend -m "Nova mensagem" - Altera a mensagem do último commit
// 2.2. Commit --amend --no-edit - Adiciona mudanças ao último commit sem alterar a mensagem
//
// 3. Cherry-pick <commit hash>- Aplica um commit específico em outra branch
// 3.1. Cherry-pick -n - Aplica um commit específico em outra branch sem fazer commit
// 3.2. Cherry-pick -x - Adiciona a referência do commit original no commit
// 3.3. Cherry-pick -e - Abre o editor para alterar a mensagem do commit
// 3.4. Cherry-pick -s - Adiciona a assinatura do autor do commit
//
// -- git log --oneline - Mostra o log de commits de forma resumida
// -- No git, o hash não é imutável, ele muda com o histórico
//
// 4. Merge - Une duas branches
// 4.1. Merge --no-ff - Cria um commit de merge mesmo que não seja necessário
// 4.2. Merge --squash - Une os commits em um só
// 4.3. Merge --abort - Cancela o merge
// 4.4. Merge --continue - Continua o merge após resolver conflitos
// 4.5. Merge --strategy - Define a estratégia de merge
// 4.6. Merge --strategy-option - Define opções para a estratégia de merge
// 4.7. Merge --ff-only - Faz o merge apenas se for fast-forward
//  -- fast-forward significa que a branch que está sendo unida está à frente da branch de destino
//
// 5. Rebase - Reescreve o histórico
// 5.1. Rebase -i - Abre o editor para reescrever o histórico
//  5.1.1 Rebase -i HEAD~3 - Abre o editor para reescrever os últimos 3 commits
//  5.1.2 Rebase -i <commit hash> - Abre o editor para reescrever os commits a partir de um commit específico
//  -- Comandos do editor
//      - pick - Mantém o commit
//      - reword - Mantém o commit e altera a mensagem
//      - edit - Pausa o rebase para alterar o commit
//      - squash - Une o commit ao anterior
//      - fixup - Une o commit ao anterior sem alterar a mensagem
//      - exec - Executa um comando
//      - drop - Remove o commit
//      - label - Adiciona um rótulo ao commit
//      - reset - Remove todos os rótulos
//      - merge - Faz merge de um commit
//      - rebase - Faz rebase de um commit
//      - break - Pausa o rebase
//      - edit-todo - Abre o editor para alterar o histórico
//      - show - Mostra o commit
//      - fold - Dobra o commit
//      - unfold - Desdobra o commit
//      - move - Move o commit
//      - stop - Para o rebase
//      - continue - Continua o rebase
//      - skip - Pula o commit
// 5.2. Rebase --onto - Reescreve o histórico a partir de um commit específico
// 5.3. Rebase --continue - Continua o rebase após resolver conflitos
// 5.4. Rebase --abort - Cancela o rebase
// 5.5. Rebase --skip - Pula um commit
// 5.6. Rebase --edit-todo - Abre o editor para alterar o histórico
// 5.7. Rebase --exec - Executa um comando em cada commit
// 5.8. Rebase --root - Reescreve o histórico a partir do primeiro commit
// 5.9. Rebase --preserve-merges - Reescreve o histórico preservando merges
// 5.10. Rebase --autosquash - Aplica commits marcados com squash! e fixup!
// 5.11. Rebase --interactive - Reescreve o histórico de forma interativa
// 5.12. Rebase --force-rebase - Força o rebase mesmo se não for necessário
// 5.13. Rebase --quiet - Não mostra mensagens de progresso
// 5.14. Rebase --verbose - Mostra mensagens de progresso
// 5.15. Rebase --stat - Mostra estatísticas do rebase
// 5.16. Rebase --committer-date-is-author-date - Usa a data do autor como data do commit
// 5.17. Rebase --ignore-date - Ignora a data do commit
// 5.18. Rebase --ignore-whitespace - Ignora espaços em branco
// 5.19. Rebase --whitespace - Define a estratégia de espaços em branco
// 5.20. Rebase --no-verify - Não executa os hooks
// 5.21. Rebase --signoff - Adiciona a assinatura do autor do commit
// 5.22. Rebase --no-signoff - Remove a assinatura do autor do commit
// 5.23. Rebase --fork-point - Usa o ponto de fork como base
// 5.26. Rebase --strategy - Define a estratégia de rebase
// 5.27. Rebase --strategy-option - Define opções para a estratégia de rebase
// 5.28. Rebase --no-fork-point - Não usa o ponto de fork como base
// 5.29. Rebase --no-autosquash - Não aplica commits marcados com squash! e fixup!
// 5.30. Rebase --no-preserve-merges - Não preserva merges
// 5.31. Rebase --no-ff - Não faz fast-forward
// 5.32. Rebase --ff - Faz fast-forward
// 5.33. Rebase --ff-only - Faz fast-forward apenas

// Resolução de conflitos
// Ocorre quando tentamos fazer merge ou rebase de duas branches com alterações na mesma linha
// <<< HEAD - Marca o início do conflito
// Alterações da branch de destino
// === - Marca o meio do conflito
// Alterações da branch de origem
// >>> - Marca o fim do conflito
// Para resolver o conflito, basta editar o arquivo e remover as marcações

// 6. Push
// 6.1. Push -u origin <branch> - Envia a branch para o repositório remoto
// 6.2. Push --force - Força o push (não recomendado)
// 6.3. Push --force-with-lease - Força o push apenas se não houver alterações no repositório remoto
// 6.4 Push --force-if-includes - Força o push apenas se a branch de destino incluir a branch de origem
// 6.5. Push --dry-run - Mostra o que seria enviado
// 6.6. Push --porcelain - Mostra o que seria enviado de forma legível

// 7. Bisect - Encontra um commit que introduziu um bug
// 7.1. Bisect start - Inicia o bisect
// 7.2. Bisect bad - Marca o commit atual como ruim
// 7.3. Bisect good - Marca o commit atual como bom
// 7.4. Bisect reset - Reinicia o bisect
// 7.5. Bisect log - Mostra o log do bisect
// 7.6. Bisect replay - Reinicia o bisect a partir de um arquivo de log
// 7.7. Bisect visualize - Mostra o log do bisect de forma gráfica
// 7.8. Bisect skip - Pula o commit atual
// 7.9. Bisect run - Executa um comando em cada commit

// 8. Reflog - Mostra o log de referências (recupera commits perdidos)
// 8.1. Reflog show - Mostra o log de referências
// 8.2. Reflog expire - Remove entradas antigas do reflog
// 8.3. Reflog delete - Remove entradas específicas do reflog

