<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/assets/img/icon_head.png">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Onde Vacilei?</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" id="my-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"><img src="/assets/img/logo-index.png" id="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#inicio">INÍCIO</a></li>
                        <li><a href="#sobre">SOBRE</a></li>
                        <li><a href="#legislacao">LEGISLAÇÃO</a></li>
                        <li><a href="#instituicao">INSTITUIÇÃO</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid" id="conteudo">
            <div class="row home-bg" id="inicio">
                <div class="content-header">
                    <div class="col-md-12 imagem-logo">
                        <img src="assets/img/logo-inicio.png">
                    </div>
                    <div class="col-md-12 seta">
                        <form action="views/login.php">
                            <button type="submit" class="btn btn-primary btn-round-lg btn-lg">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row empresa-bg" id="sobre">
                <div class="content-header">
                    <div class="col-md-12 head-div">
                        <h1>SOBRE</h1>
                    </div>
                    <div class="col-md-4 empresa-txt">
                        <p> &nbsp;&nbsp;&nbsp;&nbsp;Auxiliar o controle das finanças em universidades
                            públicas brasileiras em prol de uma maior eficiência na alocação de seus recursos
                        </p>
                    </div>
                    <div class="col-md-4 empresa-txt">
                        <p>Uma ferramenta de controle interno das Universidades públicas para
                            não excederem os gastos, conforme o estabelecimento na legislação brasileira. 
                            servindo como fonte de informação para a sociedade ao estimular de forma simplificada sua efetiva participação.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="legislacao">
                <div class="content-header">
                    <div class="col-md-12 head-div">
                        <h1>LEGISLAÇÃO</h1>
                    </div>
                    <div class="col-md-4">
                        <h2>LEI DE RESPONSABILIDADE FISCAL</h2>
                        <p style="text-align: justify">Estabelece nacionalmente parâmetros a serem seguidos sobre os gastos públicos para cada ente federativo (estados e municípios) brasileiro. As restrições orçamentárias que ela estabelece visa preservar a situação 
                            fiscal dos entes federativos, de acordo com seus balanços anuais, com o objetivo de garantir a saúde financeira de estados e municípios,
                            a aplicação de recursos nas esferas adequadas e uma boa herança administrativa para os futuros gestores.</p>
                        <p><a class="btn btn-default" href="http://www.planalto.gov.br/ccivil_03/leis/LCP/Lcp101.htm" role="button">Ver mais detalhes &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>LEI DE ACESSO À INFORMAÇÃO</h2>
                        <p style="text-align: justify">Regula o direito constitucional de acesso à informação para as três esferas de poder seja o poder Executivo, Legislativo ou Judiciário. 
                            Contribui para o acesso a informação de forma gratuita. 
                            Ela cria procedimentos e estabelece prazos para divulgação das informações.</p>
                        <p><a class="btn btn-default" href="http://www.planalto.gov.br/ccivil_03/_ato2011-2014/2011/lei/l12527.htm" role="button">Ver mais detalhes &raquo;</a></p>
                    </div>
                    <div class="col-md-4">
                        <h2>LEI DA TRANSPARÊNCIA</h2>
                        <p style="text-align: justify">Garante ao cidadão o direito a qualquer informação, não sigilosa, fornecida pelo Estado. 
                            Ela deve ser cumprida por todos os órgãos públicos, e influência adoção de diversas 
                            medidas para sua efetivação. E influencia a publicação de dados em formato aberto na internet. </p>
                        <p><a class="btn btn-default" href="http://www.planalto.gov.br/ccivil_03/leis/lcp/lcp131.htm" role="button">Ver mais detalhes &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="row empresa-bg" id="instituicao">
                <div class="content-header">
                    <div class="col-md-12 head-div">
                        <h1>INSTITUIÇÕES</h1>
                    </div>
                    <div class="row">
                        <img src="assets/img/universidades.png" class="universidade-img">
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/eventos.js"></script>
    </body>
</html>
