<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="img/logo.png" />

    <title>Sangue Bom</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>

</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" style="background-color: pink;">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: pink;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <img src="img/logo.png" width="50%" height="50%">
                </div>
                <div class="sidebar-brand-text mx-3" style="text-align: left;"><b>SANGUE BOM</b> </div>
            </a>
            <br>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables -->
            <br>
            <li class="nav-item" style="padding-left: 10%;">
                <a class="nav-link" href="inicio.php">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                      </svg>
                    <span>Inicio</span></a>
            </li>
            <li class="nav-item" style="padding-left: 10%;">
                <a class="nav-link" href="perfil.php">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                      </svg>
                    <span>Perfil</span></a>
            </li>
            <li class="nav-item" style="padding-left: 10%;">
                <a class="nav-link" href="agenda.php">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      </svg>
                    <span>Agenda</span></a>
            </li>
            <li class="nav-item" style="padding-left: 10%;">
                <a class="nav-link" href="doacao.php">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-droplet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                      </svg>
                    <span> Doação</span></a>
            </li>
            <li class="nav-item" style="padding-left: 10%;">
                <a class="nav-link" href="hospitais.php">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                      </svg>
                    <span>Hospitais</span></a>
            </li>
            <li class="nav-item" style="padding-left: 10%;">
                <a class="nav-link" href="ranking.php">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                      </svg>
                    <span>Ranking</span></a>
            </li>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </nav>
                <!-- Topbar -->
                <!-- Conteudo -->
                <!-- Dica de saude -->
                <div class="row" style="padding: 3%; width: 100%;">
                    <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Doação</h1>
                        <p class="mb-4">Existem muitas suposições que contradizem oque a doação de sangue é de fato, aqui temos informações concretas que quebram esses paradigmas falsos. </p>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h2>Etapas</h2>
                                        <p>Saiba quais são as etapas da doação de Sangue</p>
                                        <button class="button2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Saiba mais </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Etapas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                                </div>
                                <div class="modal-body">
                                    <ol style="text-align: justify; padding: 4%;">
                                        <li><b>Cadastro do Doador</b></li>
                                        O processo de doação se inicia na recepção é realizado o cadastro do doador mediante a apresentação de documento oficial com foto.
                                        <br>
                                        <li><b>Triagem Hematológica</b></li>
                                        Nesta etapa é realizado teste de hemoglobina para identificar a anemia, também são verificados os sinais vitais do doador
                                        <br>
                                        <li><b>Triagem Clínica</b></li>
                                        O doador passa por uma entrevista com um profissional capacitado para avaliar seus hábitos comportamentais e suas condições de saúde. Este é um momento muito importante para que a doação seja segura.
                                        <br>
                                        <li><b>Coleta de Sangue-Doação propriamente dita</b></li>
                                        Depois de constatar que o voluntário está apto a doar, é realizada uma coleta de sangue. O doador é posicionado em uma cadeira semi-sentado, uma veia de um dos braços é puncionada e a coleta é realizada numa bolsa plástica que contém uma solução anticoagulante
                                        <br>
                                        <li><b>Lanche</b></li>
                                        O lanche é servido após a doação para repor as necessidades nutricionais imediatas do doador, o mais importante é a reposição líquida. Nesse momento, é necessário permanecer no mínimo 15 minutos .
                                    </ol>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h2>Requisitos</h2>
                                        <p>Saiba quais são os requisitos para a doação </p>
                                        <button class="button2" data-toggle="modal" data-target="#exampleModa2" data-whatever="@mdo"> Saiba mais </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Requisitos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                                </div>
                                <div class="modal-body">
                                    <ol style="text-align: justify; padding: 4%;">
                                        <li><b>Saúde</b></li>
                                        Estar em boas condições de saúde.

                                        <li><b>Triagem Hematológica</b></li>
                                        Ter entre 16 e 69 anos, desde que a primeira doação tenha sido feita até 60 anos (menores de 18 anos, clique para ver documentos necessários e formulário de autorização).

                                        <li><b>Triagem Clínica</b></li>
                                        Pesar no mínimo 50kg.

                                        <li><b>Coleta de Sangue-Doação propriamente dita</b></li>
                                        Estar descansado (ter dormido pelo menos 6 horas nas últimas 24 horas).

                                        <li><b>Lanche</b></li>
                                        Estar alimentado (evitar alimentação gordurosa nas 4 horas que antecedem a doação).

                                        <li><b>Lanche</b></li>
                                        Apresentar documento original com foto recente, que permita a identificação do candidato, emitido po
                                        por órgão oficial (Carteira de Identidade, Cartão de Identidade de Profissional Liberal, Carteira de Trabalho e Previdência Social, Carteira Nacional de Habilitação e RNE-Registro Nacional de Estrangeiro*).
                                        
                                    </ol>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h2>Mitos</h2>
                                        <p>Saiba quais são os mitos da doação de Sangue</p>
                                        <button class="button2" data-toggle="modal" data-target="#exampleModa3" data-whatever="@mdo"> Saiba mais </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Mitos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                                </div>
                                <div class="modal-body">
                                    <ul style="text-align: justify; padding: 4%;">
                                        <li><b>Doar pode prejudicar a saúde do doador </b></li>
                                        Após uma doação, o sangue tende a voltar ao normal rapidamente e, portanto, não há fraqueza.
                                        
                                        <li><b> Só podem doar sangue maiores de idade </b></li>
                                        Adolescentes de 16 e 17 anos podem doar sangue. Fisicamente eles já estão aptos para doar sangue, desde que cumpram todos os requisitos básicos para doação, mas por serem menores de 18 anos, precisam de autorização dos pais ou responsável.
                                        
                                        <li><b> Pessoas com menos de 50 kg não podem doar</b></li>
                                        O peso do voluntário deve ser a partir de 50 quilos.

                                        <li><b> Idosos não podem doar sangue</b></li>
                                        Em 2013, houve aumento na idade máxima dos doadores de sangue pelo Ministério da Saúde. Atualmente, pessoas entre 16 e 69 anos podem realizar o ato de doação.
                                        
                                        <li><b>Doar engorda </b></li>
                                        Não engorda nem emagrece. O volume de liquido é reposto em 24 horas.

                                        <li><b>O doador não tem risco de contagio de doenças </b></li>
                                        Verdade, pois todo o material utilizado é descartável, não há contato com sangue de outra pessoa. 

                                        <li><b>Não posso doar sangue após ter sido vacinado  </b></li>
                                        É recomendado levar a carteira de vacinação no dia da doação. Vacinas para hepatite B, impedem a doação por 48 horas.

                                        <li><b> Quem teve dengue nunca mais pode doar sangue</b></li>
                                        Mentira. O organismo cria anticorpos contra as infecções virais e com isso o virus é neutralizado. 

                                        <li><b> O doador não vai sentir falta desse sangue no seu corpo</b></li>
                                        A reposição do volume de plasma ocorre em 24 horas e a dos glóbulos vermelhos em 4 semanas. Entretanto, para o organismo atingir o mesmo nível de estoque de ferro que apresentava antes da doação, são necessárias 8 semanas para os homens e 12 semanas para as mulheres.

                                        <li><b>Quem tem piercing e tatuagem não pode doar </b></li>
                                        Apenas pessoas com piercing na boca não podem doar sangue pois a boca está mais receptiva a infecções. Elas só estão aptas a doar 12 meses após a retirada.
                                        
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <h2>Vantagens</h2>
                                        <p>Saiba quais são os requisitos para a doação </p>
                                        <button class="button2" data-toggle="modal" data-target="#exampleModa4" data-whatever="@mdo"> Saiba mais </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Vantagens</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                                <ol style="text-align: justify; padding: 4%;">
                                    <li>Uma doação de sangue pode salvar até 4 vidas</li>
                                    <li>O doador tem direito a um dia de folga no trabalho</li>
                                    <li>Não há risco de contrair doenças na doação de sangue</li>
                                    <li>Seu organismo repõe rapidamente o sangue doado</li>
                                    <li>A doação de sangue não faz ninguém engordar ou emagrecer</li>
                                    <li>Ajudar outras pessoas faz bem para você também</li>
                                </ol>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>









            </div>



            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <script>
                $('#exampleModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                })
            </script>
</body>

</html>