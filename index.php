<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>23º Seminário de Pesquisa do CCSA</title>

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
                
                <div class="col-lg-7 col-md-7">
                    <nav class="main text-center">
                        <a href="<?php echo $url_base; ?>" >Início</a>
                        <a href="https://ccsa.ufrn.br">Portal CCSA</a>
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/workshops">Oficinas</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/conferences">Conferências</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/minicourses">Minicursos</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/roundtables">Mesas Redondas</a>
                        <a href="https://seminario2015.ccsa.ufrn.br/schedule">Programação</a> -->
                    </nav>
                </div>
                
                <div class="col-lg-4 col-md-4 col-lg-offset-1 col-md-offset-1">
                    <nav class="secondary text-center">
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/contact"><i class="fa fa-envelope-o"></i> Contato</a> -->
                        <!-- <a href="https://seminario2015.ccsa.ufrn.br/register"><i class="fa fa-pencil"></i> Inscrever-se</a> -->
                        <a href="#" data-toggle="modal" data-target="#inscriptionModal"><i class="fa fa-pencil"></i> Inscrever-se</a>
                        <a href="http://sigeva.ccsa.ufrn.br/login"><i class="fa fa-sign-in"></i> Entrar</a>
                    </nav>
                </div>

            </div>            <!-- SOBRE -->
            <div class="row">
            
                <div class="col-lg-12">

                    <section class="about">

                        <!-- <div class="row">
                            <div class="col-lg-12 hidden-xs">
                                <h1>Últimas Notícias</h1>
                            </div>
                        </div> -->

                        <!-- <div class="row news">
                            
                                                        
                                                        
                                <div class="col-lg-3 col-md-4 col-sm-6 hidden-xs">
                                    <h1><a href="https://seminario2015.ccsa.ufrn.br/news#51"><i class="fa fa-external-link"></i> O ISBN DOS ANAIS DO XX SEMINÁRIO DE PESQUISA DO CCSA JÁ ESTÁ DISPONÍVEL!</a></h1>
                                    <p><a href="https://seminario2015.ccsa.ufrn.br/news#51">Acesse a página dos Anais do evento e confira!</a></p>
                                </div>
                            
                                                        
                                                        
                                <div class="col-lg-3 col-md-4 col-sm-6 hidden-xs">
                                    <h1><a href="https://seminario2015.ccsa.ufrn.br/news#50"><i class="fa fa-external-link"></i> OS CERTIFICADOS JÁ ESTÃO DISPONÍVEIS!</a></h1>
                                    <p><a href="https://seminario2015.ccsa.ufrn.br/news#50">Informamos que os certificados do XX SEMINÁRIO DE PESQUISA DO CCSA já estão prontos e encontram-se neste site. ANTES DE IMPRIMIR, favor verificar se os seus dados estão corretos. Caso o nome esteja incompleto ou com erro, fazer a alteração em “MEUS DADOS”. Vale lembrar que o participante de minicursos só terá direito ao certificado de 6 horas-aula se tiver participado de pelo menos dois&#8230;</a></p>
                                </div>
                            
                                                        
                                                        
                                <div class="col-lg-3 col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <h1><a href="https://seminario2015.ccsa.ufrn.br/news#49"><i class="fa fa-external-link"></i> Está na hora de conferir seus dados!</a></h1>
                                    <p><a href="https://seminario2015.ccsa.ufrn.br/news#49">A organização do XX Seminário de Pesquisa do CCSA informa aos inscritos que está aberto o prazo para correção dos dados pessoais através do próprio sistema de inscrições. A atualização é necessária para que os certificados de participação sejam emitidos corretamente e pode ser feita até a próxima sexta-feira (15/05). Para atualizar, o usuário deve acessar o site www.seminario.ccsa.ufrn.br,&#8230;</a></p>
                                </div>
                            
                                                        
                                                        
                                <div class="col-lg-3 visible-lg">
                                    <h1><a href="https://seminario2015.ccsa.ufrn.br/news#48"><i class="fa fa-external-link"></i> Divulgada lista de trabalhos premiados</a></h1>
                                    <p><a href="https://seminario2015.ccsa.ufrn.br/news#48">A organização do XX Seminário de Pesquisa do CCSA realizou na última sexta-feira (8), a cerimônia de premiação dos melhores trabalhos de pesquisa produzidos e apresentados durante o evento. Ao todo, 43 trabalhos foram premiados, apresentados em 37 Grupos Temáticos das diversas páreas da Ciências Sociais Aplicadas. A lista completa de trabalhos premiados pode ser consultada através do link:&#8230;</a></p>
                                </div>
                            
                                                        
                            <div class="col-xs-12 visible-xs text-center">
                                <a href="https://seminario2015.ccsa.ufrn.br/news">Veja as últimas notícias</a>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->

                        <!-- <div class="row signup-container">
                            <div class="col-lg-12 text-center">
                                <a href="https://seminario2015.ccsa.ufrn.br/shortfilms" class="signup">Mostra de Curtas</a>
                            </div>
                        </div>

                        <div class="row signup-container">
                            <div class="col-lg-12 text-center">
                                <a href="https://seminario2015.ccsa.ufrn.br/conversationcircle" class="signup">Roda de Conversas</a>
                            </div>
                        </div>

                        <div class="row signup-container">
                            <div class="col-lg-12 text-center">
                                <a href="https://seminario2015.ccsa.ufrn.br/debatescycle" class="signup">Ciclo de Debates</a>
                            </div>
                        </div> -->
                        
                        
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <image width="100%" src="./assets/img/marca_960.png" />
                                <center>
                                    <span style="color:grey;font-size:16pt;">14 a 18 de maio de 2018</span><br>
                                </center>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                <figure class="green-pattern"></figure>
                            </div>
                        </div>
                        
                        <!-- <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                                <p>O XX Seminário de Pesquisa do CCSA/UFRN – CCSA: Universidade, diversidade, cultura e educação – evidencia a preocupação do Centro de Ciências Sociais Aplicadas em consolidar um espaço para discussão e socialização do conhecimento produzido nas diferentes áreas das ciências sociais aplicadas (Direito, Economia, Administração, Serviço Social, Ciências Contábeis, Turismo e Biblioteconomia).</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <p>Tem como objetivo tornar acessível à comunidade universitária a produção científica existente no CCSA por meio da divulgação dos trabalhos apresentados; estimular a comunidade acadêmica do CCSA para a prática da pesquisa; contribuir para o desenvolvimento da pesquisa e da reflexão teórico-metodológica no campo das Ciências Sociais Aplicadas; abrir espaço para interlocução com outras áreas do conhecimento.</p>
                            </div>
                        </div> -->
                        
                        <div class="row signup-container">
                            <div class="col-lg-12 text-center">
                                <a href="#" class="signup" data-toggle="modal" data-target="#inscriptionModal">Faça sua inscrição!</a>
                            </div>
                        </div>
                        
                    </section>
                    
                </div>
                
            </div>

            

            <!-- ATIVIDADES, NORMAS E CRÉDITOS -->
            <div class="row">
            
                <div class="col-lg-12">
                    
                    <section class="info">
                        
                        <!-- ATIVIDADES -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="activities">
                                    <div class="row">
                                        <div class="first col-lg-3 col-md-3 text-center">
                                            <div class="header">
                                               <div class="circle ">
                                                    <i class="fa fa-list"></i>
                                                </div>
                                                <h1>Atividades</h1>
                                                <p>que ocorrerão durante o seminário.</p> 
                                            </div>
                                        </div>
                                        <div class="second col-lg-9 col-md-9 text-center">
                                            <div class="content">
                                                <a><i class="fa fa-check-circle"></i> Mesas Redondas</a>
                                                <a><i class="fa fa-check-circle"></i> Conferências</a>
                                                <a><i class="fa fa-check-circle"></i> Posteres</a>
                                                <a><i class="fa fa-check-circle"></i> Mostra de Filmes</a>
                                                <a><i class="fa fa-check-circle"></i> Mostra de Artes</a>
                                                <a><i class="fa fa-check-circle"></i> Exposições</a>
                                                <a><i class="fa fa-check-circle"></i> Comunicação Oral</a>
                                                <a><i class="fa fa-check-circle"></i> Mini-cursos</a>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <!-- NORMAS -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="standards">
                                    <div class="row">
                                        <div class="first col-lg-3 col-md-3  text-center">
                                            <div class="header">
                                               <div class="circle ">
                                                    <i class="fa fa-book"></i>
                                                </div>
                                                <h1>Arquivos</h1>
                                                <p>Download de normas e templates para realização de trabalhos, posteres, inscrição, etc.</p> 
                                            </div>
                                        </div>
                                        <div class="second col-lg-9 col-md-9  text-center">
                                            <div class="content">
											<a href="<?php echo $url_base; ?>/assets/normas.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Norma completa do Seminário de Pesquisa</a><br>
											<a href="<?php echo $url_base; ?>/assets/XXIII SPCCSA template.artigo.zip" target="_blank"><i class="fa fa-external-link-square"></i> Template de artigo</a><br>
											<a href="<?php echo $url_base; ?>/assets/XXIII SPCCSA template.casoensino.zip" target="_blank"><i class="fa fa-external-link-square"></i> Template de caso para ensino</a><br>
											<a href="<?php echo $url_base; ?>/assets/XXIII SPCCSA template.poster.zip" target="_blank"><i class="fa fa-external-link-square"></i> Template de pôster</a>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                        
                        <!-- CRÉDITOS -->
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="credits">
                                    <div class="row">
                                        <div class="first col-lg-3 col-md-3  text-center">
                                            <div class="header">
                                               <div class="circle ">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>
                                                <h1>Créditos</h1>
                                                <p>Saiba como contabilizar créditos para a graduação através do seminário.</p> 
                                            </div>
                                        </div>
                                        <div class="second col-lg-9 col-md-9  text-center">
                                            <div class="content">
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/administracao.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Administração</a>
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/contabeis.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Ciências Contábeis</a>
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/administracao.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Ciências Econômicas</a>
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/direito.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Direito</a>
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/turismo.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Turismo</a>
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/x.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Serviço Social</a>
                                                <a href="https://seminario2015.ccsa.ufrn.br/assets/credits/biblioteconomia.pdf" target="_blank"><i class="fa fa-external-link-square"></i> Biblioteconomia</a>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div> -->
                        
                    </section>
                    
                </div>
                
            </div> <!-- ./end row -->

            <div class="row">
                <div class="col-lg-12">

                    <section class="thematic-groups">
                            
                        <header>
                            
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                    <div class="circle"><i class="fa fa-users"></i></div>
                                    <h1>Grupos Temáticos</h1>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                    <figure class="green-pattern"></figure>
                                </div>
                            </div>

                        </header>
                        
                        <div class="content row">                                                                           
                            <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
                                <h1>Ciência da Informação</h1>
                                <ul>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-1"><i class="fa fa-check"></i> Estudos Históricos e Epistemológicos da Biblioteconomia e da Ciência da Informação</a>
                                        <div id="coll-1" class="collapse">
                                            <strong>Gabrielle Tanus, Antônia Neta, Francisco Araújo</strong>
                                            <p>Estudos Históricos e Epistemológicos da Biblioteconomia e da Ciência da Informação. Constituição do campo científico e discussões sobre o objeto de estudo da Biblioteconomia e da Ciência da Informação. Reflexões sobre disciplinaridade, interdisciplinaridade e transdisciplinaridade, assim como a construção do conhecimento na área. Estudos sobre perfil, formação, competências profissionais e mercado de trabalho. Teóricos e teorias da Biblioteconomia e da Ciência da Informação.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-2"><i class="fa fa-check"></i> Gestão da Informação e Conhecimento</a>
                                        <div id="coll-2" class="collapse">
                                            <strong>Andréa Carvalho, Luciana Moreira, Pedro Neto</strong>
                                            <p>Gestão de ambientes, sistemas, unidades, serviços e produtos de
informação. Curadoria de conteúdos. Estudos de fluxos, processos, uso e usuários da informação como instrumentos de gestão. Gestão do conhecimento, aprendizagem organizacional e redes sociais. Marketing da informação. Monitoramento ambiental e inteligência competitiva. Gestão documental. Segurança da informação. Empreendedorismo informacional.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-3"><i class="fa fa-check"></i> Informação, Tecnologia e Mediação</a>
                                        <div id="coll-3" class="collapse">
                                            <strong>Fernando Vechiato, Andréa Carvalho, Luciana Moreira</strong>
                                            <p>Planejamento, implantação e avaliação de produtos e serviços de informação. Redes, recursos e fontes de informação. Estudo dos processos e das relações entre mediação, circulação e apropriação de informações, em diferentes contextos. Tecnologias de Informação e Comunicação. Redes sociais. Repositórios digitais. Curadoria de conteúdos. Arquitetura da informação.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-4"><i class="fa fa-check"></i> Organização e Representação do Conhecimento</a>
                                        <div id="coll-4" class="collapse">
                                            <strong>Francisco Araújo, Jacqueline Souza, Monica Marques, Nadia Vanti </strong>
                                            <p>Teorias, metodologias e práticas relacionadas à organização e representação de documentos e da informação em ambiências informacionais, tais como: arquivos, bibliotecas, museus e centros de documentação. Compreende estudos relacionados aos processos, produtos e instrumentos de representação do conhecimento bem como estudos de análise da informação.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-5"><i class="fa fa-check"></i> Informação e Sociedade</a>
                                        <div id="coll-5" class="collapse">
                                            <strong>Luciana Moreira, Gabrielle Tanus, Pedro Neto</strong>
                                            <p>Políticas de informação e suas expressões em diferentes campos. Sociedade da informação. Informação, Estado e governo. Propriedade intelectual. Acesso à informação. Economia política da informação e da comunicação; produção colaborativa. Informação, conhecimento e inovação. Inclusão informacional e inclusão digital. Ética e informação. Informação e meio ambiente.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-6"><i class="fa fa-check"></i> Produção Científica e Estudos Métricos da Informação</a>
                                        <div id="coll-6" class="collapse">
                                            <strong>Nadia Vanti, Fernando Vechiato</strong>
                                            <p>Produção, comunicação e uso da informação em Ciência, Tecnologia e Inovação. Métodos de avaliação: Bibliometria, Cientometria, Informetria, Webometria, Cibermetria, Altmetria, Arquivometria. Repositórios digitais. Movimento Open Access. Ciência aberta.</p>
                                        </div>
                                    </li>
                                </ul>
                                <h1>Ciências Administrativas</h1>
                                <ul>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-7"><i class="fa fa-check"></i> Estratégias Políticas de Gestão</a>
                                        <div id="coll-7" class="collapse">
                                            <strong>Miguel Eduardo Moreno Añez e Maxwell dos Santos Celestino</strong>
                                            <p>Aprendizagem organizacional; Dinâmica de sistemas; Pensamento sistêm co; Modelagem de negócios; Simulação empresarial; Jogos de empresas; Aspectos Teóricos e Metodológicos da Vantagem Competitiva.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-8"><i class="fa fa-check"></i> Desafios da Implementação da Administração Estratégica nas Organizações</a>
                                        <div id="coll-8" class="collapse">
                                            <strong>Vidal Sunción Infante</strong>
                                            <p>A complexidade estrutural das organizações em nível planetário envolvendo o ritmo acelerado das mudanças tanto na</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-9"><i class="fa fa-check"></i> Gestão de Sistemas e Tecnologia da Informação</a>
                                        <div id="coll-9" class="collapse">
                                            <strong>Anatália Saraiva Martins Ramos</strong>
                                            <p>Governo Eletrônico e Tecnologia da Informação em Organizações Não Governamentais;Aspectos Socioambientais de SI/TI.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-10"><i class="fa fa-check"></i> Gestão de Pessoas e Comportamento Organizacional</a>
                                        <div id="coll-10" class="collapse">
                                            <strong>Patrícia Whebber Souza de Oliveira</strong>
                                            <p>Discutir as políticas e práticas de gestão de pessoas e os processos de comportamento organizacional no âmbito individual, grupal e organizacional e suas interfaces com o desenvolvimento das organizações.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-11"><i class="fa fa-check"></i> Administração Pública, Empreendedorismo e Desenvolvimento</a>
                                        <div id="coll-11" class="collapse">
                                            <strong>Aline Virginia de Medeiros Nelson, Dalvanir Avelino da Silva</strong>
                                            <p>O GT tem como objetivo constituir-se num espaço para apresentação de trabalhos que envolvam reflexões sobre as possibilidades e limitações das políticas que tem como foco o desenvolvimento humano em suas dimensões (econômica, social, política, ambiental e cultural), bem como a análise da institucionalização de práticas e ações inovadoras e empreendedoras no campo da administração pública, bem como na articulação entre Mercado e Estado.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-12"><i class="fa fa-check"></i> Gestão Social, Reforma Agrária e Desenvolvimento Territorial</a>
                                        <div id="coll-12" class="collapse">
                                            <strong>Washington Souza, Pâmela Brandão</strong>
                                            <p>Trata-se de grupo de trabalho destinado à discussão de processos e tendências do campo da Gestão Social, incluindo o universo das organizações do Terceiro Setor (não-governamentais, cooperativas, associações, grupos de trabalho e produção informais), além de temas específicos de estágios da reforma agrária e do desenvolvimento territorial no Rio Grande do Norte e no Brasil.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-13"><i class="fa fa-check"></i> Inovação na Gestão Pública</a>
                                        <div id="coll-13" class="collapse">
                                            <strong>Hironobu Sano, Lilian Sumiya</strong>
                                            <p>Discutir trabalhos que abordem as inovações no campo da gestão pública e das políticas públicas, contribuindo para a disseminação das boas práticas e, com isso, com o fortalecimento do setor público e a melhoria nos serviços ofertados à população.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-14"><i class="fa fa-check"></i> Marketing</a>
                                        <div id="coll-14" class="collapse">
                                            <strong>Thelma Pignataro</strong>
                                            <p>Administração de Marketing. Marketing no Século XXI como ferramenta pedagógica no contexto educacional. Marketing em áreas especiais. Gerenciamento do processo de marketing, marketing virtual e inteligência competitiva.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-15"><i class="fa fa-check"></i> Condições de Trabalho e Saúde do Trabalhador</a>
                                        <div id="coll-15" class="collapse">
                                            <strong>Maria Teresa Pires Costa, Antônio Alves Filho</strong>
                                            <p>Condições de trabalho e sua relação com a saúde do trabalhador; qualidade de vida no trabalho.</p>
                                        </div>
                                    </li>
                                </ul>
                                <h1>Ciências Contábeis</h1>
                                <ul>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-16"><i class="fa fa-check"></i> Controladoria</a>
                                        <div id="coll-16" class="collapse">
                                            <strong>Adilson Tavares, Alexandro Barbosa, Maxwell dos Santos Celestino</strong>
                                            <p>Sistemas de Informação, Controles de Gestão, Custos, Custeio da Qualidade, orçamento empresarial, Avaliação de desempenho, informação de custo e qualidade do gasto público.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-17"><i class="fa fa-check"></i> Contabilidade para Usuários Externos</a>
                                        <div id="coll-17" class="collapse">
                                            <strong>Clayton Levy</strong>
                                            <p>Contabilidade Societária, IFRS, Tributação, Auditoria e Perícia Contábil, Educação Fiscal, Contabilidade Pública e Governamental.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-18"><i class="fa fa-check"></i> Educação e Pesquisa em Contabilidade</a>
                                        <div id="coll-18" class="collapse">
                                            <strong>Aneide Oliveira Araujo, Edmilson Jovino</strong>
                                            <p>Formação do Contador; Processo de ensino-aprendizagem; Estilos e Estratégias de Aprendizagem em Ciências Contábeis; Avaliação de aprendizagem; Tecnologia da Educação: Educação online; metodos de pesquisa qualitativa e quantitativa em contabilidade; Perfil e Evolução do egresso; Expectativas de mercado e do curso de Ciências Contábeis; Avaliação de programas educacionais.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" data-target="#coll-19"><i class="fa fa-check"></i> Contabilidade, Controle Interno e Auditoria aplicados ao setor público</a>
                                        <div id="coll-19" class="collapse">
                                            <strong>Victor Branco de Holanda</strong>
                                            <p></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <h1>Direito Público e Privado</h1>
                                    <ul>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-20"><i class="fa fa-check"></i> Direitos Fundamentais e interpretação constitucional</a>
                                            <div id="coll-20" class="collapse">
                                                <strong>Leonardo Martins, Fabiano André de Souza Mendonça, Fabrízia Pessoa Serafim, Jone Fagner Rafael Maciel, Pedro de Oliveira Alves, Suzana Cecília Cortês de Araújo e Silva.</strong>
                                                <p>Teoria geral dos direitos fundamentais. Eficácia e aplicabilidade dos direitos fundamentais. Direitos individuais e coletivos previstos na Constituição Federal e nas Constituições estaduais. Direitos e garantias constitucionais no Processo Penal. Direito Civil Constitucional. Direitos fundamentais previstos na Convenção Internacional sobre os Direitos das Pessoas com Deficiência. Teorias da interpretação constitucional e seus desafios. Avaliação crítica das decisões do Supremo Tribunal Federal e dos Tribunais de Justiça em matéria de direitos fundamentais. Concretização de direitos fundamentais via controle difuso de constitucionalidade. Princípio da proporcionalidade. Princípios e regras na argumentação jurídica das Cortes Constitucionais. Direito Constitucional Comparado.</p>
                                            </div>
                                        </li>
										<li>
											<a data-toggle="collapse" data-target="#coll-20a"><i class="fa fa-check"></i> Direito Administrativo, Direitos Fundamentais e Políticas Públicas</a>
											<div id="coll-20a" class="collapse">
                                                <strong>Vladimir da Rocha França</strong>
                                                <p>Trata-se de Grupo de Trabalho, vinculado ao Grupo de Pesquisa Direito Administrativo Brasileiro, que tem por objetivo viabilizar a reflexão sobre temas da Dogmática Jurídica (Ciência do Direito em sentido estrito) associados à Administração Pública e ao papel desta na concretização de direitos fundamentais ou de políticas públicas.</p>
                                            </div>
										</li>
                                    </ul>
                                <h1>Economia</h1>
                                    <ul>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-21"><i class="fa fa-check"></i> Análise Econômica Multissetorial, Estratégica e Conjuntural</a>
                                            <div id="coll-21" class="collapse">
                                                <strong>André Luís Cabral Lourenço, Denílson da Silva Araújo, Fabrício Pitombo Leite, Márcia Maria de Oliveira Bezerra e William Eufrasio Nunes Pereira</strong>
                                                <p>Estudo das relações entre as atividades econômicas, o qual é realizado por meio de modelos multissetoriais, e das consequências dessas inter-relações para a análise de um espaço econômico específico, seja um espaço nacional ou subnacional. Estimativas de matrizes insumo-produto, nacional e/ou estadual. Análise das relações econômicas intersetoriais para o espaço nacional, regional ou estadual. Análise conjuntural e estudos de análise estratégica para o Brasil tipicamente relacionada a médios e longos prazos. Modelos de consistência entre fluxos e estoques (stock-flow consistent - SFC) e modelos macroeconômicos em geral.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-22"><i class="fa fa-check"></i> Desenvolvimento Econômico</a>
                                            <div id="coll-22" class="collapse">
                                                <strong>André Luís Cabral Lourenço, Denílson da Silva Araújo, Márcia Maria de Oliveira Bezerra, William Eufrasio Nunes Pereira e Marconi Gomes da Silva</strong>
                                                <p>Discutir as contribuições teóricas e de políticas que analisem o desenvolvimento nas diversas vertentes do pensamento econômico, priorizando as questões macroeconômicas.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-23"><i class="fa fa-check"></i> Grupo Interdisciplinar de Estudos e Avaliação de Políticas Públicas (GIAPP)</a>
                                            <div id="coll-23" class="collapse">
                                                <strong>João Matos Filho e Lincoln Moraes de Souza</strong>
                                                <p>As contribuições acadêmicas sobre avaliação e análise de políticas públicas, inclusive: avaliação de produtos, efeitos e impactos das diversas políticas como saúde, educação, agricultura, assistência social etc.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-24"><i class="fa fa-check"></i> Estudos e Pesquisas em Espaço, Trabalho, Inovação e Sustentabilidade</a>
                                            <div id="coll-24" class="collapse">
                                                <strong>Denílson da Silva Araújo, Luziene Dantas de Macedo, William Eufrasio Nunes Pereira, Marconi Gomes da Silva, Maria Lussieu da Silva, Valdênia Apolinário</strong>
                                                <p>Discutir questões teóricas e políticas da economia regional e urbana, priorizando as questões do trabalho, da inovação e da sustentabilidade nesses espaços.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-25"><i class="fa fa-check"></i> Métodos Quantitativos Aplicados à Economia</a>
                                            <div id="coll-25" class="collapse">
                                                <strong>João Paulo Martins Guedes, Diego de Maria André, Igor Ezio Maciel Silva e Janaína da Silva Alves</strong>
                                                <p>Discutir as  contribuições metodológicas quantitativas aplicadas à Economia. Neste caso, pretende-se analisar temas como saúde, educação, criminalidade, crescimento econômico, integração de mercados etc., utilizando ferramentas estatísticas, matemáticas e econométricas que têm sido aplicadas na literatura nacional e internacional, a fim de trazer contribuições ao desenvolvimento regional.</p>
                                            </div>
                                        </li>
                                    </ul>
                                <h1>Serviço Social</h1>
                                    <ul>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-26"><i class="fa fa-check"></i> Questão Social, Política Social e Serviço Social</a>
                                            <div id="coll-26" class="collapse">
                                                <strong>Anna Luiza Lopes Liberato Alexandre Freire, Edla Hoffmann, Eliana Andrade da Silva, Ilena Felipe Barros, Iris Maria de Oliveira, Larisse de Oliveira Rodrigues, Roberto Marinho Alves da Silva e Rosângela Alves de Oliveira</strong>
                                                <p>Estudos e pesquisas sobre a Questão Social e suas expressões; Análise de políticas sociais – sua gênese e desenvolvimento e a inserção profissional do Serviço Social nos processos de formulação.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-27"><i class="fa fa-check"></i> Direitos Humanos, Diversidade Humana e Serviço Social</a>
                                            <div id="coll-27" class="collapse">
                                                <strong>Maria Ilidiana Diniz, Miriam de Oliveira Inácio, Rita de Lourdes de Lima, Silvana Mara de Morais dos Santos e Tibério Lima Oliveira</strong>
                                                <p>Consiste num espaço de socialização de estudos e pesquisas na área de Serviço Social e áreas afins, e tem como principal objetivo contribuir com a reflexão crítica sobre os processos de violação dos direitos humanos na sociedade capitalista, considerando a diversidade humana em suas diferentes expressões: gênero; identidade de gênero; raça-etnia; orientação sexual.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-28"><i class="fa fa-check"></i> Questão Urbana Agrária, Ambiental, Movimentos Sociais e Serviço Social</a>
                                            <div id="coll-28" class="collapse">
                                                <strong>Andréa Lima da Silva, Daniela Neves de Sousa e Ilka de Lima Souza</strong>
                                                <p>Consiste num espaço de socialização de estudos e pesquisas na área de Serviço Social e áreas afins e tem como principal objetivo a contribuição à reflexão crítica de pesquisas que estudam as seguintes temáticas: Propriedade privada da terra, trabalho e formas de produção e reprodução capitalista.</p>
                                            </div>
                                        </li>
                                    </ul>
                                <h1>Turismo</h1>
                                    <ul>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-29"><i class="fa fa-check"></i> Gestão em Turismo</a>
                                            <div id="coll-29" class="collapse">
                                                <strong>Lissa Valéria, Leilianne Barreto, Luiz Mendes e Mauro Lemuel</strong>
                                                <p>Competitividade Turística de Destinos e Organizações; Redes e Alianças Estratégicas; Marketing Turístico; Comunicação e Promoção Turística; Gestão da Qualidade dos Serviços Turísticos; Planejamento e Gestão em Turismo.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-30"><i class="fa fa-check"></i> Planejamento e Organização do Turismo</a>
                                            <div id="coll-30" class="collapse">
                                                <strong>Kerlei Sonaglio, Rosana Mazaro, Andrea Virgínia e José Eneas</strong>
                                                <p>Turismo, governança e governabilidade. Participação Popular e as Políticas Públicas de Turismo. Teoria do Planejamento Turístico. Planejamento e Organização do Turismo. Planejamento e Segmentação Turística.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a data-toggle="collapse" data-target="#coll-31"><i class="fa fa-check"></i> Hospitalidade, Lazer e Eventos</a>
                                            <div id="coll-31" class="collapse">
                                                <strong>Ricardo Lanzarini, Mayara Ferreira e Michel Vieira</strong>
                                                <p>Aspectos gerais da hospitalidade. Hospitalidade e Turismo. Hospitalidade em meios de hospedagem. Hospitalidade em equipamentos de alimentação. Estudos do lazer. Práticas de lazer em destinos turísticos. Lazer e entretenimento como atrações turísticas. O lúdico e o bem-estar social. Eventos: planejamento e organização. Impactos e importância dos eventos nos destinos turísticos. Cerimonial e protocolo. Eventos temáticos. Hospitalidade em eventos.</p>
                                            </div>
                                        </li>
                                    </ul>
									<h1>Transdisciplinar</h1>
									<ul>
										<li>
											<a data-toggle="collapse" data-target="#coll-32"><i class="fa fa-check"></i> Casos para Ensino</a>
											<div id="coll-32" class="collapse">
                                                <strong>Maria Váleria Pereira de Araújo e Pâmela de Medeiros Brandão</strong>
                                                <p>A apresentação do caso refere-se ao relato descritivo da situação e do problema a…podendo a critério do autor se subdividir. Uma boa apresentação do caso deve apresentar: uma introdução definindo o problema a ser investigado e…que requeiram análise para resolver uma questão específica.</p>
                                            </div>
					</li>
				</ul>
                                </div>
                        </div>

                    </section>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

                    <section class="realization">
                            
                        <header>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>Realização</h1>
                                </div>
                            </div>
                            
                        </header>
                        
                        <div class="content row">
                            
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                                <a href="http://www.ccsa.ufrn.br/portal" target="_blank">
                                	<img src="https://seminario2015.ccsa.ufrn.br/assets//img/logorel.png" width="100%" />
                                </a>
                            </div>

                            <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                                <a href="http://www.crarn.org.br" target="_blank">
                                    <img src="https://seminario2015.ccsa.ufrn.br/assets//img/logocra.png" width="100%" />
                                </a>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                                <a href="http://www.proex.ufrn.br" target="_blank">
                                    <img src="https://seminario2015.ccsa.ufrn.br/assets//img/logoproex.png" width="100%" />
                                </a>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                                <a href="http://www.adurn.org.br" target="_blank">
                                    <img src="https://seminario2015.ccsa.ufrn.br/assets//img/logoadurn.jpg" width="100%" />
                                </a>
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 ">
                                <a href="http://www.credsuper.com.br/site/" target="_blank">
                                    <img src="https://seminario2015.ccsa.ufrn.br/assets//img/credsuper.jpg" width="100%" />
                                </a>
                            </div> -->
                            
                        </div>

                    </section>
                    
                </div>
            </div>

            <div class="modal fade modal-standards" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-body">
                        Carregando...
                    </div>

                </div>
              </div>
            </div>

            <input id="rsss" style="display:none;" value="https://seminario2015.ccsa.ufrn.br/retrievestandard" />
    
            <input id="rtg" style="display:none;" value="https://seminario2015.ccsa.ufrn.br/retrievedetailsgt" />
            <div class="modal fade modal-thematic-groups-syllabus" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                        <div class="modal-body">
                            <img src="https://seminario2015.ccsa.ufrn.br/assets/img/loading.gif" /> Carregando...
                        </div>
                        
                    </div>
                  </div>
                </div>
        
                    <footer class="common">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ccr">
                            <span class="pull-left">ISSN 1808 6381</span>
                            <span class="pull-right hidden-xs">ASSESSORIA TÉCNICA DO CCSA</span>
                            <span class="pull-right visible-xs-inline">AT - CCSA</span>
                        </div>
                    </div>
                </div>
                
            </footer>

        </div> <!-- ./ end container -->

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
de gestão. Portanto, as inscrições devem ser feitas através da plataforma no endereço <a href="http://sigeva.ccsa.ufrn.br" target="_blank">http://sigeva.ccsa.ufrn.br</a>.
                    </p>
                    <p><a href="how-to-sigeva.php">Clique aqui</a> para acessar um tutorial detalhado sobre como efetuar inscrição no 23º Seminário de Pesquisa do CCSA utilizando
a plataforma Sigeva.</p>
                    <center>
                        <a href="http://sigeva.ccsa.ufrn.br"><button type="button" class="btn btn-primary">Acessar o Sigeva</button></a>
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
