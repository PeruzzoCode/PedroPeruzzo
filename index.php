<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <!-- <br><br><a href="projetos/idade.php">Verificador de idade</a><br><br>
    <a href="projetos/notas.php">Verificador de notas</a><br><br>
    <a href="projetos/notas-desafio.php">Verificador de notas (desafio)</a><br><br>
    <a href="projetos/login-basico.php">Login básico</a><br><br>
    <a href="projetos/jogos.php">Tabela de jogos</a><br><br> -->

    <header>
            <nav class="navbar">

                <h2 class="logo">Meu Portifólio</h2>

                <ul class="menu">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#habilidades">Habilidades</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
    </header>

    <main>
        <section id="inicio" class="inicio">
            <div class="inicio-conteudo">
                <p class="saudacao">Olá! Eu sou</p>
                <h1>Pedro Peruzzo</h1>
                <h2>Desenvolvedor em formação</h2>
                <p>Sou estudante de desenvolvimento de sistemas,
                    em busca de oportunidades para aplicar 
                    meu conhecimentos em projetos reais.
                </p>
                <a href="#projetos" class="botao">Ver meus projetos</a>
            </div>
        </section>

        <section id="sobre" class="secao">

        <h2 class="titulo-secao">Sobre mim</h2>
        <div class="sobre-conteudo">
            <div class="foto">
                    JS
            </div>
            <div class="sobre-texto">
                <h3>Quem sou eu?</h3>
                <p>
                    Meu nome é Pedro e sou estudante
                    de desenvolvimento de sistemas.
                </p>
                <p>
                    Atualmente estou entudando desenvolvimento de sistemas web, programação 
                    e criação de sistmas. Este portifólio reúne alguns dos projetos desenvolvidos por mim.
                </p>
                <p>
                        Meu objetivo é continuar evoluindo como
                        desenvolvedor e aprender novas tecnologias.
                </p>
            </div>
        </div>
        </section>

        <section id="habilidades" class="secao secao-destaque">
            <h2 class="titulo-secao">Minhas habilidades</h2>
            <p class="subtitulo-secao">
                Algumas tecnologias que estou estudando
            </p>

            <div class="lista-habilidades">
                <div class="habilidade">HTML</div>
                <div class="habilidade">CSS</div>
                <div class="habilidade">PHP</div>
            </div>

        </section>

        <section id="projetos" class="secao">
            <h2 class="titulo-secao">Meus projetos</h2>
            <p class="subtitulo-secao">
                Alguns projetos desenvolvidos durante aulas.
            </p>
            <div class="projetos-container">
                
                <div class="projeto-card">
                    <div class="projeto-numero">01</div>
                    <h3>Verificação de idade</h3>
                    <p>Sistema desenvolvido para praticar 
                        formulários e manipulação de dados.
                    </p>
                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="projetos/idade.php" class="link-projeto">
                        Ver projeto ➡
                    </a>
                </div>

                <div class="projeto-card">
                    <div class="projeto-numero">02</div>
                    <h3>Verificador de notas</h3>
                    <p>Aplicação simples, criada para praticar manipulação de formulários, cálculos 
                        e validação de dados.
                    </p>
                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="projetos/notas.php" class="link-projeto">
                        Ver projeto ➡
                    </a>
                </div>

                <div class="projeto-card">
                    <div class="projeto-numero">03</div>
                    <h3>Login básico</h3>
                    <p>Sistema desenvolvido para praticar 
                        formulários e manipulação de dados.
                    </p>
                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="projetos/login-basico.php" class="link-projeto">
                        Ver projeto ➡
                    </a>
                </div>

                <div class="projeto-card">
                    <div class="projeto-numero">04</div>
                    <h3>Cadastro de jogos</h3>
                    <p>Conexão com banco de dados e criação de
                        tabelas com sql.
                    </p>
                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>
                    <a href="projetos/jogos.php" class="link-projeto">
                        Ver projeto ➡
                    </a>
                </div>

                <div class="projeto-card">
                    <div class="projeto-numero">05</div>
                    <h3>Chamado empresa TI</h3>
                    <p>Sistema desenvolvido para criar e resolver chamados,
                        simulando como é em uma empresa.
                    </p>
                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                        <span>JSON</span>
                    </div>
                    <a href="helpdesk.php" class="link-projeto">
                        Ver projeto ➡
                    </a>
                </div>

            </div>
        </section>

        <section id="contato" class="secao secao-destaque"> 
            <h2 class="titulo-secao">Contato</h2>
            <p class="subtitulo-secao">Quer entrar em contato comigo?</p>

            <div class="contato-container">
                <div class="contato-item">
                    <h3>Whatsaap</h3>
                    <p>+55 41 99770-2805</p>
                </div>
                <div class="contato-item">
                    <h3>Github</h3>
                    <p><a href="https://github.com/PeruzzoCode">github.com/PeruzzoCode</a></p>
                </div>
                <div class="contato-item">
                    <h3>Gmail</h3>
                    <p>pedro.peruzzo@gmail.com</p>
                </div>
            </div>

        </section>
    </main>

    <footer>

        <p>
            Desenvolvido por <a href="https://pedro315.devlook.xyz">Pedro Peruzzo</a> - 2026
        </p>

    </footer>
</body>
</html>