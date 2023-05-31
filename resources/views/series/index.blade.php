
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
        />
    <link rel="stylesheet" href="../../../css/style.css"/>
    <title>Document</title>
</head>
<body>

<aside class="sidebar">
    <header class="sidebar-header">
        <img class="logo-img" src="https://sujeitoprogramador.com/steve.png" alt="foto do usuario">
    </header>

    <nav>
        <button>
            <span>
                <i class="material-symbols-outlined">login</i>
                <span>login</span>
            </span>
            <button onclick="window.location.href = 'https://www.axalta.com/br/pt_BR/repintura-automotiva.html';">
                 <span>
                     <i class="material-symbols-outlined">Check_Circle</i>
                         <span>Axalta</span>
                 </span>
            </button>
            <button onclick="window.location.href = 'https://www.chatbase.co/chatbot/MtqWO-UNaHcmuIph0nHbk';">
                 <span>
                     <i class="material-symbols-outlined">person</i>
                         <span>Théo</span>
                 </span>
            </button>
        <button>
            <span>
                <i class="material-symbols-outlined">Data_Check</i>
                <span>Tabelas</span>
            </span>
        </button>
    </nav>
</aside>
        <main class="main">
            <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Inserir Nova Análise</a>
        </main>
</body>
</html>










