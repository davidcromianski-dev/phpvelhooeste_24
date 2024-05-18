<?php
// PHP Velho Oeste 2024
// Palestra 9: Do CGI ao Swoole e FrankenPHP: uma breve história do tempo
// Palestrante: Vinícius Dias
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do CGI ao Swoole e FrankenPHP: uma breve história do tempo</title>
</head>
<body>
    <h1>Do CGI ao Swoole e FrankenPHP: uma breve história do tempo</h1>
    <h2>Palestrante: Vinícius Dias</h2>
    <p>CGI: Common Gateway Interface</p>
    <p>CGI é uma interface padrão para servidores web externos a executarem programas ou scripts em um servidor.</p>
    <p>PHP era um conjunto de ferramentas para C</p>
    <p>A era Apache: Apache era majoritariamente usado nos servidores Web</p>
    <p>PHP e Apache passaram a trabalhar muito bem juntos</p>
    <p>PHP-FPM: FastCGI Process Manager</p>
    <p>PHP-FPM é um gerenciador de processos FastCGI para PHP</p>
    <p>FastCGI é uma alternativa ao CGI que fornece um desempenho muito melhor</p>
    <p>Multiplexing I/O - é uma técnica que permite que múltiplas entradas e saídas sejam processadas de forma assíncrona</p>
    <p>FPM Pool - é um conjunto de processos PHP-FPM que são responsáveis por processar as solicitações PHP</p>
    <p>Balanceamento de carga - é uma técnica que distribui o tráfego de entrada entre vários servidores</p>
    <p>Arquitetura shared-nothing - é uma arquitetura de software em que cada nó é independente e não compartilha estados com outros nós</p>
    <p>Vantagens: stateless, facilita o desenvolvimento, i/o síncrono</p>
    <p>Desvantagens: recriação de recursos, código de inicialização e framework executado a cada requisição, I/O síncrono</p>
    <p>ReactPHP - é uma biblioteca PHP que permite que você escreva código PHP assíncrono</p>
    <p>1. Stream select - permite que você monitore vários streams de entrada e saída</p>
    <p>2. Event loop - é um loop que monitora eventos e chama os manipuladores de eventos apropriados</p>
    <p>3. Promise - é um objeto que representa o resultado de uma operação assíncrona</p>
    <p>Servidores auto-contidos - É um servidor web exposto pela própria aplicação, ou seja, seu próprio código PHP recebe diretamente as requisições HTTP</p>
    <p>Comunicação em tempo real</p>
    <p>Muitas requisições simultâneas</p>
    <p>Event loop e programação concorrente - é um loop que monitora eventos e chama os manipuladores de eventos apropriados</p>
    <p>Padrao Reactor - é um padrão de projeto de software que permite que um objeto monitorado notifique um ou mais observadores</p>
    <p>Swoole e FrankenPHP</p>
    <p>Swoole é uma extensão PHP que fornece uma API para programação de rede assíncrona</p>
    <p>FrankenPHP é um projeto que visa trazer funcionalidades do Swoole para o PHP</p>
    <p>* PDO É BLOQUEANTE, ou seja, bloqueia a execução do código até que a consulta seja concluída</p>
    <p>* Swoole fornece outra forma de executar PDO usando monkey patching, permitindo que o PDO seja executado de forma assíncrona</p>
    <pre>
    use function React\Async\await;

    $factory = new Factory();
    $db = $factory->openLazy(':memory:');

    $app = new Frameworkx\App();

    $app->get('/', fn () => Response::plaintext('Hello, World!'));
    $app ->get('/users', function () use ($db) {
        $users = await($db->query('SELECT * FROM users'));
        return Response::json($users);
    });

    $app->run();
    </pre>
    <p>Swoole consegue processar muitas requisições a mais que o PHP-FPM</p>
    <p>FrankenPHP processa um pouco menos que o Swoole</p>
    <p>FrankenPHP usa Cattie, uma biblioteca PHP que fornece uma API para programação de rede assíncrona</p>
    <p>Utilize um pool de conexões</p>
</body>
</html>
