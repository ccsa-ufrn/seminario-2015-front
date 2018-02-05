<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Tutorial - Como se inscrever no Seminário</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $url_base; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Awesome Font -->
        <link href="<?php echo $url_base; ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Normalize -->
        <link href="<?php echo $url_base; ?>/assets/css/normalize.css" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="<?php echo $url_base; ?>/assets/css/page.css" rel="stylesheet">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-5 col-md-5">
                    <nav class="main text-center">
                        <a href="<?php echo $url_base; ?>" >Voltar à página principal</a>
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/workshops">Oficinas</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/conferences">Conferências</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/minicourses">Minicursos</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/roundtables">Mesas Redondas</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/schedule">Programação</a> -->
                    </nav>
                </div>
                
                <div class="col-lg-4 col-md-4 col-lg-offset-3 col-md-offset-3">
                    <nav class="secondary text-center">
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/contact"><i class="fa fa-envelope-o"></i> Contato</a> -->
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/register"><i class="fa fa-pencil"></i> Inscrever-se</a> -->
                        <a href="#" data-toggle="modal" data-target="#inscriptionModal"><i class="fa fa-pencil"></i> Inscrições abertas</a>
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/dashboard"><i class="fa fa-sign-in"></i> Entrar</a> -->
                    </nav>
                </div>

            </div>            <!-- SOBRE -->
            <div class="row">
            
                <div class="col-lg-12">
                    <section class="about">
                        <h2>Como se inscrever no 23º CCSA</h2>
                        <p>A partir de sua 23º edição, o Seminário de Pesquisa do CCSA utilizará o Sigeva (Sistema de Gestão de Eventos Acadêmicos), 
                        plataforma desenvolvida pelo CCSA para suportar eventos acadêmicos (como o Seminário). Os seguintes passos detalharão o processo 
                        para criação de conta no Sigeva e inscrição no Evento "23º Seminário de Pesquisa do CCSA":</p>
                        <p>
                            <strong>Criando uma conta no Sigeva</strong><br>
                            Acesse o endereço da página web da plataforma Sigeva <a href="http://sigeva.ccsa.ufrn.br" target="_blank">http://sigeva.ccsa.ufrn.br</a>, irá aparecer uma página como esta:<br>
                            <center><img src="<?php echo $url_base; ?>/assets/img/how-to-sigeva/pagina-inicial-sigeva.png"></img></center><br>
                        </p><p>   
                            Clique em "Criar conta" e preencha todos os dados solicitados, por fim clique no botão azul "Criar conta" e aguarde a mensagem de confirmação<br>
                            <center><img src="<?php echo $url_base; ?>/assets/img/how-to-sigeva/criar-conta.png"></img></center>
                        </p><p>
                            Volte à página inicial e faça o login com os dados informados anteriormente e clicando em "Entrar".<br>
                            <center><img src="<?php echo $url_base; ?>/assets/img/how-to-sigeva/login.png"></img></center>
                        </p><p>
                            Na aba "Eventos ativos" localize o 23º Seminário de Pesquisa do CCSA e clique em "Acessar".
                            <center><img src="<?php echo $url_base; ?>/assets/img/how-to-sigeva/eventos-ativos.png"></img></center>
                        </p><p>
                            No lado direito da página do evento "23º Seminário de Pesquisa do CCSA" aparecerá a aba "Inscrição". Para se inscrever no evento
                            você deverá informar o tipo de inscrição (Discente, Docente, Sem Vínculo, Etc.) Selecione e clique em "Efetuar inscrição".
                            <center><img src="<?php echo $url_base; ?>/assets/img/how-to-sigeva/inscricao.png"></img></center>
                        </p><p>
                            Pronto. Você estará devidamente inscrito 23º Seminário de Pesquisa do CCSA. É importante resaltar que o Sigeva está em sua versão Beta, e 
                            em constante processo de desenvolvimento, isso indica que possíveis problemas durante a interação com a plataforma podem ocorrer. Se por ventura
                            você enfretar problemas com a plataforma, ou possuir dificuldade com algum processo de interação com Sigeva por favor entre em contato com a equipe
                            responsável pelo sistema através do e-mail: assessoriatecnica@ccsa.ufrn.br.
                        </p>
                    </section>
                </div>
            </div>

        <!-- begin INSCRIPTION MODAL -->
        <div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Como se inscrever no 23º SPCCSA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>O Seminário de Pesquisa do CCSA a partir de sua 23º edição passará a utilizar o Sigeva (Sistema de Gestão de Eventos Acadêmicos) como ferramenta 
de gestão. Portanto, as inscrições devem ser feitas através da plataforma no endereço <a href="http://sigeva.ccsa.ufrn.br" target="_blank">http://sigeva.ccsa.ufrn.br</a>
                    </p>
                    <center>
                        <button type="button" class="btn btn-primary">Acessar o Sigeva</button>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- end INSCRIPTION MODAL -->
        
        <!-- Enquire.js -->
        <script src="https://seminario2015.ccsa.ufrn.br/assets/js/enquire.js"></script>
        
        <!-- jQuery -->
        <script src="https://seminario2015.ccsa.ufrn.br/assets/js/jquery.js"></script>

        <!-- Bootstrap -->
        <script src="https://seminario2015.ccsa.ufrn.br/assets/js/bootstrap.min.js"></script>

        <!-- Jquery Masked Input -->
        <script src="https://seminario2015.ccsa.ufrn.br/assets/js/jquery.maskedinput.min.js"></script>
        
        <!-- Custom.js -->
        <script src="https://seminario2015.ccsa.ufrn.br/assets/js/home.js"></script>
        
    </body>
</html>
