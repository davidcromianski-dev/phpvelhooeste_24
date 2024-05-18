<?php

// PHP Velho Oeste - 2024
// Palestra 2 - Perdendo o medo e aproveitando o máximo do Git
// Palestrante: Vinícius Campitelli
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perdendo o medo e aproveitando o máximo do Git</title>
</head>
<body>
    <h1>Perdendo o medo e aproveitando o máximo do Git</h1>
    <h2>Palestrante: Vinícius Campitelli</h2>
    <p>Stash - Guarda o trabalho em andamento para aplicar depois</p>
    <p>Stash pop - Aplica o último stash</p>
    <p>Stash list - Lista os stashes</p>
    <p>Stash apply - Aplica um stash específico</p>
    <p>Stash drop - Remove um stash específico</p>
    <p>Stash clear - Remove todos os stashes</p>
    <p>Stash push - Guarda o trabalho em andamento com uma mensagem</p>
    <p>Stash show - Mostra as mudanças do último stash</p>
    <p>Commit --amend - Adiciona mudanças ao último commit</p>
    <p>Commit --amend -m "Nova mensagem" - Altera a mensagem do último commit</p>
    <p>Commit --amend --no-edit - Adiciona mudanças ao último commit sem alterar a mensagem</p>
    <p>Cherry-pick <commit hash>- Aplica um commit específico em outra branch</p>
    <p>Cherry-pick -n - Aplica um commit específico em outra branch sem fazer commit</p>
    <p>Cherry-pick -x - Adiciona a referência do commit original no commit</p>
    <p>Cherry-pick -e - Abre o editor para alterar a mensagem do commit</p>
    <p>Cherry-pick -s - Adiciona a assinatura do autor do commit</p>
    <p>git log --oneline - Mostra o log de commits de forma resumida</p>
    <p>Merge - Une duas branches</p>
    <p>Merge --no-ff - Cria um commit de merge mesmo que não seja necessário</p>
    <p>Merge --squash - Une os commits em um só</p>
    <p>Merge --abort - Cancela o merge</p>
    <p>Merge --continue - Continua o merge após resolver conflitos</p>
    <p>Merge --strategy - Define a estratégia de merge</p>
    <p>Merge --strategy-option - Define opções para a estratégia de merge</p>
    <p>Merge --ff-only - Faz o merge apenas se for fast-forward</p>
    <p>Rebase - Reescreve o histórico</p>
    <p>Rebase -i - Abre o editor para reescrever o histórico</p>
    <p>Rebase --onto - Reescreve o histórico a partir de um commit específico</p>
    <p>Rebase --continue - Continua o rebase após resolver conflitos</p>
    <p>Rebase --abort - Cancela o rebase</p>
    <p>Rebase --skip - Pula um commit</p>
    <p>Rebase --edit-todo - Abre o editor para alterar o histórico</p>
    <p>Rebase --exec - Executa um comando em cada commit</p>
    <p>Rebase --root - Reescreve o histórico a partir do primeiro commit</p>
    <p>Rebase --preserve-merges - Reescreve o histórico preservando merges</p>
    <p>Rebase --autosquash - Aplica commits marcados com squash! e fixup!</p>
    <p>Rebase --interactive - Reescreve o histórico de forma interativa</p>
    <p>Rebase --force-rebase - Força o rebase mesmo se não for necessário</p>
    <p>Rebase --quiet - Não mostra mensagens de progresso</p>
    <p>Rebase --verbose - Mostra mensagens de progresso</p>
    <p>Rebase --stat - Mostra estatísticas do rebase</p>
    <p>Rebase --committer-date-is-author-date - Usa a data do autor como data do commit</p>
    <p>Rebase --ignore-date - Ignora a data do commit</p>
    <p>Rebase --ignore-whitespace - Ignora espaços em branco</p>
    <p>Rebase --whitespace - Define a estratégia de espaços em branco</p>
    <p>Rebase --no-verify - Não executa os hooks</p>
    <p>Rebase --signoff - Adiciona a assinatura do autor do commit</p>
    <p>Rebase --no-signoff - Remove a assinatura do autor do commit</p>
    <p>Rebase --fork-point - Usa o ponto de fork como base</p>
    <p>Rebase --strategy - Define a estratégia de rebase</p>
    <p>Rebase --strategy-option - Define opções para a estratégia de rebase</p>
    <p>Rebase --no-fork-point - Não usa o ponto de fork como base</p>
    <p>Rebase --no-autosquash - Não aplica commits marcados com squash! e fixup!</p>
    <p>Rebase --no-preserve-merges - Não preserva merges</p>
    <p>Rebase --no-ff - Não faz fast-forward</p>
    <p>Rebase --ff - Faz fast-forward</p>
    <p>Rebase --ff-only - Faz fast-forward apenas</p>
    <p>Resolução de conflitos</p>
    <p>Ocorre quando tentamos fazer merge ou rebase de duas branches com alterações na mesma linha</p>
    <p>&lt;&lt;&lt; HEAD - Marca o início do conflito</p>
    <p>Alterações da branch de destino</p>
    <p>=== - Marca o meio do conflito</p>
    <p>Alterações da branch de origem</p>
    <p>&gt;&gt;&gt; - Marca o fim do conflito</p>
    <p>Para resolver o conflito, basta editar o arquivo e remover as marcações</p>
    <p>Push</p>
    <p>Push -u origin &lt;branch&gt; - Envia a branch para o repositório remoto</p>
    <p>Push --force - Força o push (não recomendado)</p>
    <p>Push --force-with-lease - Força o push apenas se não houver alterações no repositório remoto</p>
    <p>Push --force-if-includes - Força o push apenas se a branch de destino incluir a branch de origem</p>
    <p>Push --dry-run - Mostra o que seria enviado</p>
    <p>Push --porcelain - Mostra o que seria enviado de forma legível</p>
    <p>Bisect - Encontra um commit que introduziu um bug</p>
    <p>Bisect start - Inicia o bisect</p>
    <p>Bisect bad - Marca o commit atual como ruim</p>
    <p>Bisect good - Marca o commit atual como bom</p>
    <p>Bisect reset - Reinicia o bisect</p>
    <p>Bisect log - Mostra o log do bisect</p>
    <p>Bisect replay - Reinicia o bisect a partir de um arquivo de log</p>
    <p>Bisect visualize - Mostra o log do bisect de forma gráfica</p>
    <p>Bisect skip - Pula o commit atual</p>
    <p>Bisect run - Executa um comando em cada commit</p>
    <p>Reflog - Mostra o log de referências (recupera commits perdidos)</p>
    <p>Reflog show - Mostra o log de referências</p>
    <p>Reflog expire - Remove entradas antigas do reflog</p>
    <p>Reflog delete - Remove entradas específicas do reflog</p>
</body>
</html>
