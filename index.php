<?php
session_start();

if ( isset( $_SESSION["username"] ) ) {
  $username = $_SESSION["username"];
  session_write_close();

} else {
    session_unset();
    session_write_close();
    $url = "./login.php";
    header("Location: $url");
}
?>
<!DOCTYPE html>
<html lang="PT_br">

<head>
    <title>Início | G7</title>

    <!--Search Engines-->
    <meta name="description" content="Conheça o G7">
    <!--Qual o nome da empresa?-->
    <link rel="nomeEmpresa" href="https://www.g7edu.com.br/">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Início | G7">
    <meta property="og:description" content="Conheça o G7">
    <meta property="og:url" content="https://www.g7edu.com.br/">
    <meta property="og:site_name" content="G7">
    <!-- Incluir a data de atualização
    <meta property="og:updated_time" content="2021-09-05T16:53:40-03:00">
    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--View Port-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="assets/styles/global.css">
    <link rel="stylesheet" href="assets/styles/home.css">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!--ICON-->
    <link rel="icon" href="assets/images/icon.svg">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" />

</head>

<body>
    <div class="content" id="outset">
        <header>
            <img src="assets/images/light-logo.svg" alt="G7 LOGO" class="logo">
            <nav role="navigation" class="nav" data-nav>
                <button aria-label="Abrir menu" class="btn-mobile" data-btn-mobile aria-haspopup="true"
                    aria-controls="menu" aria-expanded="false">Menu <span class="burger"></span></button>
                <ul role="menu" id="menu">
                    <li><a href="#outset" data-menu-item class="current">INÍCIO</a></li>
                    <li><a href="#about" data-menu-item>QUEM SOMOS</a></li>
                    <li><a href="#network" data-menu-item>REDE</a></li>
                    <li><a href="#team" data-menu-item>EQUIPE</a></li>
                    <li><a href="#actions" data-menu-item>AÇÕES</a></li>
                    <li><a href="./gallery.php" data-menu-item>GALERIA</a></li>
                    <li><a href="" data-menu-item>CONTATO</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="anchor">
                    <a href="#" id="top-of-page" class="button" data-anchor></a>
                </div>
                <div class="outset">
                    <div class="description">
                        <H1>Uma rede de cooperação que impacta a vida de mais de 70K alunos</H1>
                        <a href="#map" class="button">SAIBA MAIS</a>
                    </div>
                </div>
                <div class="space"></div>
                <div class="left about" id="about">
                    <div class="description">
                        <h2>Quem somos</h2>
                        <p>A Rede 7, faz parte da <span>Rede de Cooperação</span> entre Instituições de Ensino Superior
                            denominada G7, pertencente ao <span>Sindicato das Entidades Mantenedoras</span> de
                            Estabelecimentos de Ensino Superior no Estado de São Paulo, SEMESP.</p>
                        <p><span>CONFIANÇA, COMPROMETIMENTO E COOPERAÇÃO</span> são as palavras que sustentam o Rede
                            G7. Compartilhamos semanalmente ideias, projetos e ações para que juntos possamos ter
                            estratégias positivas para nossas instituições.</p>
                    </div>
                </div>
                <div class="right about">
                    <img src="assets/images/group-people-working.jpg" alt="Grupo de executivos discutindo">
                </div>
                <div class="space"></div>
                <div class="map title" id="map">
                    <h2>Juntar para espalhar</h2>
                </div>
                <div class="map left">
                    <div class="text-box">
                        <p>Nosso propósito <span>é atingir melhores resultados acadêmicos e financeiros</span>
                            ativados pela sinergia entre as IES. Juntos, <span>somamos</span> aproximadamente:</p>
                        <p>70K Alunos</p>
                        <p>2.5K Docentes</p>
                        <p>1.8K Colaboradores</p>
                    </div>
                </div>
                <div class="map right">
                    <img src="assets/images/cooperation-network-map.svg" alt="Mapa da rede de cooperação">
                </div>
                <div class="space"></div>
                <div class="box" id="network">
                    <div class="title">
                        <h2>Saiba quais são as <br />universidades da rede G7</h2>
                    </div>
                    <div class="container-slide active">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/eniac-logo.svg" alt="ENIAC LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>Inovação, tecnologia, sustentabilidade e mão na massa são a <span>essência do
                                            Centro Universitário Eniac há 35 anos.</span> O Eniac forma líderes e
                                        empreendedores que, desde alunos, desenvolvem as habilidades e <span>práticas
                                            profissionais</span> necessárias para se destacarem no <span>mercado de
                                            trabalho.</span> Todo esse investimento em infraestrutura e <span>padrões
                                            internacionais de qualidade</span>, tornam o Eniac a <span>melhor
                                            instituição de ensino superior de Guarulhos</span>, segundo o ranking do
                                        MEC.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/faesa-logo.svg" alt="FAESA LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>Somos o <span>melhor Centro Universitário do Sudeste</span> e o terceiro melhor
                                        do Brasil (MEC). Trabalhamos <span>determinados no sucesso dos nossos
                                            alunos</span> e no fomento do <span>empreendedorismo e da inovação.</span>
                                        Com professores e equipe administrativa altamente qualificados, a FAESA tem se
                                        <span>destacado</span> no cenário nacional por suas <span>práticas acadêmicas
                                            inovadoras</span> e por sua forte conexão com o setor produtivo e a
                                        sociedade.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/fateb-logo.svg" alt="FATEB LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>A FATEB é uma <span>instituição particular de Ensino Superior</span>, que iniciou
                                        suas atividades acadêmicas em fevereiro de 2001 e possui como missão,
                                        <span>expandir o ensino de qualidade para a formação humana e
                                            profissional</span>, atendendo o mercado em sintonia com as tendências
                                        educacionais.
                                    </p>
                                    <p>A IES tem o objetivo de <span>formar profissionais e empreendedores</span>
                                        capacitados para atuar em diferentes áreas do conhecimento.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/fecaf-logo.svg" alt="FECAF LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>A FECAF sempre alicerçada no tripé: <span>Ensino, Pesquisa e Extensão</span>, tem
                                        consciência que para o desenvolvimento de um país é <span>fundamental o
                                            desenvolvimento educacional de sua população</span>, por isso realiza ações
                                        perenes que visam levar <span>Educação de Qualidade à todos os cidadãos da
                                            região a qual está inserida</span>, no intuito de tornar-se o maior polo
                                        Educacional de Taboão da Serra e região.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/toledo-prudente-logo.svg" alt="TOLEDO PRUDENTE LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>Em 2014 e 2015, a instituição foi apontada como o melhor centro universitário do
                                        Brasil. O <span>Centro Universitário Toledo Prudente</span> contabiliza mais de
                                        15 mil profissionais formados. Dentre os seus diversos <span>diferenciais</span>
                                        estão, certificação <span>black belt, escritório de aplicação jurídica,
                                            recomendação da OAB e internacionalização.</span></p>
                                    <p>Além de contar com um corpo docente completamente inclinado à busca constante de
                                        inovação e 100% mais próximo dos alunos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/undb-logo.svg" alt="UNDB LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>A UNDB é avaliada como o <span>10º melhor Centro Universitário do país</span> e
                                        lidera o ranking de instituições particulares de São Luís, capital onde está
                                        localizada. <span>A performance de excelência</span> é resultado de um
                                        consistente
                                        trabalho de desenvolvimento de competências dos alunos e formação de
                                        professores,
                                        que tem em <span>seu DNA a inovação acadêmica.</span> O uso de metodologias
                                        ativas e
                                        o rigor avaliativo aliados à conexão com a comunidade e o mercado de trabalho,
                                        <span>proporcionam ao aluno experiências de aprendizagem voltadas aos problemas
                                            do
                                            mundo real.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/uniopet-logo.svg" alt="UNIOPET LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>O Grupo Educacional Opet foi fundado em 25 de janeiro de 1973. Nestas mais de
                                        quatro décadas, não parou de crescer e hoje é <span>responsável por uma completa
                                            estrutura organizacional que inclui Pós-Graduação, Graduação, Colégio,
                                            Opetwork Escola de Profissão, Editora – Sistema de Ensino e Instituto de
                                            Educação e Cidadania.</span> Desde a sua fundação, já formou mais de 100 mil
                                        alunos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/unis-logo.svg" alt="UNIS LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>O Unis é uma Instituição de Ensino que constantemente <span>investe em técnicas,
                                            métodos, metodologias e estruturas mais modernas</span> para oferecer o que
                                        há
                                        de melhor, tendo como diferencial o <span>processo de internacionalização</span>
                                        em
                                        parceria com diversas empresas internacionais. No Unis, o <span>aluno</span> é o
                                        <span>centro do processo de educação</span>. Ele tem acesso ao que há de mais
                                        moderno em metodologias de ensino e tecnologias que <span>permitem aprimorar
                                            seus
                                            conhecimentos.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-slide">
                        <div class="slide">
                            <div class="left" data-image-slide>
                                <img src="assets/images/unisuam-logo.svg" alt="UNISUAM LOGO">
                            </div>
                            <div class="right">
                                <div class="text-box">
                                    <p>Iniciamos com uma escola preparatória para o Colégio Naval. Passamos a formar
                                        normalistas e chegamos ao Ensino Superior como SUAM. <span>Fomos o primeiro
                                            Centro Universitário do Brasil.</span> Em todos esses anos, a prioridade foi
                                        uma só: os alunos em primeiro lugar. Já são <span>mais de 50 anos</span>
                                        realizando sonhos e contribuindo para o desenvolvimento local e a
                                        <span>construção de um futuro melhor.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="prev" data-prev aria-label="Previous"></div>
                    <div id="next" data-next aria-label="Next"></div>
                    <div aria-label="Slides" class="indicator">
                        <span class="btn active" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                        <span class="btn" data-btn></span>
                    </div>
                </div>
                <div class="space"></div>
                <div class="team title" id="team">
                    <h2 data-team-title>Conheça o time<br />de Alta Liderança</h2>
                </div>
                <div class="left team">
                    <img src="assets/images/rebeca-murad.png" alt="Rebeca Murad">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Rebeca Murad</h3>
                        <p>Diretora Geral de Gestão do Grupo Dom Bosco no Estado do Maranhão.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/zelly-toledo.png" alt="Zelly Toledo">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Zelly Toledo</h3>
                        <p>Reitora do Centro Universitário Toledo Pudente no Estado de São Paulo.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/arapuan-netto.png" alt="Arapuan Netto">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Arapuan Netto</h3>
                        <p>Reitor do Centro Universitário Unisuam no Estado do Rio de Janeiro.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/ruy-guerios.png" alt="Ruy Guérios">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Ruy Guérios</h3>
                        <p>Reitor do Centro Universitário Eniac no Estado de São Paulo.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/pedro-guerios.png" alt="Pedro Guérios">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Pedro Guérios</h3>
                        <p>Vice-Reitor do Centro Universitário Eniac no Estado de São Paulo.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/alexandre-nunes.png" alt="Alexandre Nunes">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Alexandre Nunes</h3>
                        <p>Reitor do Centro Universitário Faesa no Estado do Espírito Santo.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/marcel-gama.png" alt="Marcel Gama">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Marcel Gama</h3>
                        <p>Diretor Administrativo e Financeiro da Faculdade FECAF no Estado de São Paulo.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/adriana-karam.png" alt="Adriana Karam">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Adriana Karam</h3>
                        <p>Superintendente Educacional no Grupo Opet no Estado do Paraná.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/felipe-flausino.png" alt="Felipe Flausino">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Felipe Flausino</h3>
                        <p>Superintendente de Ensino e Mercado no Grupo Unis no Estado de Minas Gerais.</p>
                    </div>
                </div>
                <div class="left team">
                    <img src="assets/images/paula-pontara.png" alt="Paula Pontara">
                </div>
                <div class="right team text-box">
                    <div class="description">
                        <h3>Paula Pontara</h3>
                        <p>Reitora da Instituição de Ensino FATEB no Estado do Paraná.</p>
                    </div>
                </div>
                <div class="space"></div>
                <div class="events title" id="events">
                    <h2>Próximos eventos e reuniões</h2>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>29</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Novembro 2021</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: Captação</p>
                        </div>
                        <div class="local">
                            <p>Presencial | UNISUAM</p>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>31</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Janeiro 2022</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: A definir</p>
                        </div>
                        <div class="local">
                            <p>Online</p>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>28</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Março 2022</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: Relacionamento</p>
                            <p>com o Mercado</p>
                        </div>
                        <div class="local">
                            <p>Presencial | FAESA</p>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>30</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Maio 2022</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: A definir</p>
                        </div>
                        <div class="local">
                            <p>Online</p>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>25</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Julho 2022</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: A definir</p>
                        </div>
                        <div class="local">
                            <p>Presencial | UNDB</p>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>26</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Setembro 2022</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: A definir</p>
                        </div>
                        <div class="local">
                            <p>Online</p>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="day">
                        <h3>28</h3>
                    </div>
                    <div class="details">
                        <div class="date">
                            <h3>Novembro 2022</h3>
                        </div>
                        <div class="theme">
                            <p>Tema: A definir</p>
                        </div>
                        <div class="local">
                            <p>Presencial | ENIAC</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="first-line">
                <div class="address">
                    <img src="assets/images/light-logo.svg" alt="G7 Logo">
                </div>
                <div class="social-media">
                    <a href="https://www.instagram.com/cegru.lab/" target="_blank" class="social-item"
                        id="instagram"></a>
                    <a href="https://www.linkedin.com/company/g7-rede-de-coopera%C3%A7%C3%A3o/" target="_blank" class="social-item"
                        id="linkedin"></a>
                    <a href="https://wa.me/5511945956773" target="_blank" class="social-item" id="whatsapp"></a>
                </div>
            </div>
            <div class="second-line">
                <p>Copyright © 2021 Design by <a>Luisa Camerini</a> Development by <a
                        href="https://github.com/natasha-m-oliveira">Natasha M Oliveira</a></p>
            </div>
        </footer>
    </div>
    <script src="assets/scripts/global.js"></script>
    <script src="assets/scripts/slides.js"></script>
</body>

</html>