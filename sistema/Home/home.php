'    <?php

    include '../../sistema/login/verifica_login.php';
    include 'homeStyle.php';
    include '../../config/conexao.php';
    include '../../funcoes/funcoes.php';

    $menuRenderizar = renderizarMenu($conexao);
    $emailUsuario = $_SESSION['email'];
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cursos Online</title>
        <link rel="stylesheet" href="homeStyle.php">
    </head>

    <body>

        <header>
            <h2 class="logo">Cursos</h2>
            <nav class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Cursos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Carrinho</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Conta</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                </ul>
                <div class="hamburguer">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header>
        <div class="wrapper">
            <h1>Desenvolvimento Web</h1>
            <div class="container">
                <?php foreach ($menuRenderizar as $item):?>
                <?php $idCurso = $item['idCursos']; ?>
                <div class="box">
                    <img src="<?=$item['srcImg']; ?>">
                    <h3><?=$item['nomeCursos']; ?></h3>
                    <p><?=$item['descricao']; ?></p>
                    <button type="button" class="btn" data-id="<?=$item['idCursos'];?>" onclick="openPopup(this.dataset.id)">saiba mais</button>
                </div>
                <?php endforeach; ?>  
            </div>         
        </div>

        <div class="popup" id="popup">
            <span class="icon-close" onclick="closePopup()">
                <ion-icon name="close-outline"></ion-icon>
            </span>
            <div class="info-cursos">
                <h2 id="nomeCurso"></h2>
                <p class="info">Professor: <span id="nomeProfessor"></span></p>
                <p class="info">Data de Postagem: <span id="dataPostagem"></span></p>
                <p class="info">Carga horária: <span id="cargaHoraria"></span></p>
                <p class="info">Preço: <span id="preco"></span></p>
            </div>
            <form id="inscricaoForm" action="valorArmazenado.php" method="post">
                
                <button type="submit" class="btn-sub">Inscrever-se</button>
                <input type="hidden" name="idCursoSelecionado" id="idCursoSelecionado">
            </form>

                    
        </div>

        <div class="subscribed" id="subscribed">
            <img class="img" src="../../img/tick.png">
            <h2>Obrigado!</h2>
            <p class="msg">Sua inscrição no curso foi validada. Obrigado por se inscrever!</p>
            <button type="button" class="button" onclick="closesubPopup()">OK</button>
        </div>

        <script src='homeScript.js'></script>

        <script>
    let popup = document.getElementById("popup");
    let idCursoSelecionado;

    function openPopup(id) {
        popup.classList.add("open-popup");
        idCursoSelecionado = id;
        console.log(idCursoSelecionado);
        fetchInformacoesCurso(idCursoSelecionado);
        document.getElementById("idCursoSelecionado").value = idCursoSelecionado;
    }

    function fetchInformacoesCurso(id) {
        fetch('obter_informacoes_curso.php?id=' + id)
        .then(response => response.json())
        .then(data => {
            document.querySelector("#popup #nomeCurso").textContent = data.nomeCursos;
            document.querySelector("#popup #nomeProfessor").textContent = data.nomeProfessor;
            document.querySelector("#popup #dataPostagem").textContent = data.dataPostagem;
            document.querySelector("#popup #cargaHoraria").textContent = data.cargaHoraria;
            document.querySelector("#popup #preco").textContent = data.preco;
        })
        .catch(error => console.error(error));
    }

    function closePopup() {
        popup.classList.remove("open-popup");
    }

    let subscribed = document.getElementById("subscribed");

    function opensubPopup() {
        const idCurso = document.querySelector('[data-id-curso]').getAttribute('data-id-curso');

        console.log(idCurso);

        subscribed.classList.add("open-subpopup");
    }

    function closesubPopup() {
        popup.classList.remove("open-popup");
        subscribed.classList.remove("open-subpopup");
    }
    </script>

        <script type="module"
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

    </html> 