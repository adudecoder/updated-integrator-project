<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/07277f6fe9.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/img/veterinario.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/prestador.css">
    <title>Moto Rápido</title>
</head>

<body class="bg-light" data-bs-spy="scroll" data-bs-target="#menu">
    <div class="container">

        <div class="d-flex justify-content-end">
            <span class="fs-5 pe-4">Bem-Vindo <?= $_SESSION["prestadorName"] ?> </span>
        </div>

        <!-- Nav -->
        <header class="sticky-top bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4 fw-bold"><i class="fa-solid fa-motorcycle"></i> Moto Rápido</span>
            </a>

            <ul id="menu" class="nav nav-pills px-3">
                <span class="input-group-prepend px-1 pt-1">Score:</span>
                <span class="input-group-text">1000 <i class="bi bi-currency-exchange ps-1 text-warning"></i>
                </span>
            </ul>

            <ul id="menu" class="nav nav-pills px-1">
                <li class="nav-item"><a href="logoff.php" class="nav-link active">Oficinas</a></li>
            </ul>
            <ul id="menu" class="nav nav-pills px-3">
                <li class="nav-item"><a href="logoff.php" class="nav-link active">Lojas</a></li>
            </ul>
            <ul id="menu" class="nav nav-pills">
                <li class="nav-item"><a href="logoff.php" class="nav-link active">Sair</a></li>
            </ul>
        </header>

        <section id="home" class="mb-5">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mt-3">

                    <h1 class="display-2 fw-bold">Prestador de Serviços</h1>

                </div>

                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json" background="transparent" speed="1" style="max-width: 90%" loop autoplay></lottie-player>
                </div>
            </div>
        </section>

        <div class="card mb-3 bg-dark text-white">
            <div class="card-body">
                <div class="row pt-1 mb-3">
                    <div class="col-12">
                        <h2 class="display-5 fw-bold">Está à procura de uma alternativa para gerar mais renda como entregador?</h2>
                    </div>
                </div>
                <p class="cmln__paragraph">Em vez de oportunidades tradicionais de entrega em horários pouco flexíveis, seja seu próprio chefe com o Moto Rápido Flash e Moto Rápido Direct. Use o app de mobilidade mais baixado e receba para fazer entregas quando&nbsp;quiser.</p>
                <p class="cmln__paragraph">Você também poderá optar por fazer viagens de Moto Rápido Moto, caso tenha EAR em sua Carteira Nacional de Habilitação e o produto esteja disponível em sua cidade. O Moto Rápido Moto é a modalidade disponível no app da Moto Rápido que permite aos usuários solicitarem viagens por&nbsp;motocicletas.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
            <img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_943,h_943/v1644358688/assets/a8/88da85-bbfc-4391-886e-7e0c4b9235de/original/Delivery-header-mobile.png" class="card-img-top" alt="Moto Taxi">
        </div>


        <section id="servicos" class="text-center py-5 my-5">
            <div class="row pt-5 mt-3">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Ganhe para fazer entregas</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-5">
                    <!-- <img class="shadow border p-4" src="./assets/img/entrega-rapida.png" alt="delivery"> -->
                    <img src="https://www.uber-assets.com/image/upload/q_auto:eco,c_fill,w_48,h_48/v1587183059/assets/4c/7ee3de-7622-487c-bc36-aeefc31b0808/original/keys_car_filled.svg" alt="key" role="presentation" aria-hidden="true" class="css-kGIRRZ">
                    <h2 class="fw-normal mt-3">Seu veículo, seus horários</h2>
                    <p>Pegue sua moto ou bicicleta e seja um entregador parceiro sempre que quiser: por uma hora, um fim de semana ou durante toda a semana. Conheça abaixo os requisitos para cada maneira de se locomover.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 mt-5">
                    <!-- <img class="shadow border p-4" src="./assets/img/moto.png" alt="moto-taxi"> -->
                    <img src="https://www.uber-assets.com/image/upload/q_auto:eco,c_fill,w_48,h_48/v1587182001/assets/b0/b94e62-cab7-4fae-bbf0-88220ebf5383/original/hand_tip_filled.svg" alt="earnings " role="presentation" aria-hidden="true" class="css-kGIRRZ">
                    <h2 class="fw-normal mt-3">Recebimentos semanais</h2>
                    <p>Os seus ganhos com as entregas com a Moto Rápido são transferidos automaticamente para a sua conta bancária semanalmente. Além disso, você pode optar por receber os ganhos <a class="cmln__link" href="#">antecipadamente</a> ou receber logo após cada entrega com a <a class="cmln__link" href="#">Moto Rápido&nbsp;Conta</a>.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 mt-5">
                    <!-- <img class="shadow border p-4" src="./assets/img/take-away.png" alt="entregas"> -->
                    <img src="https://www.uber-assets.com/image/upload/q_auto:eco,c_fill,w_48,h_48/v1587412413/assets/fc/e12188-122c-4d23-af12-1a422c0f42e8/original/delivery_bag_filled.svg" alt="delivery " role="presentation" aria-hidden="true" class="css-kGIRRZ">
                    <h2 class="fw-normal mt-3">Aumente seus ganhos</h2>
                    <p>Os usuários têm a opção de dar um valor extra pelo app e 100% dos valores extras são seus.</p>
                </div><!-- /.col-lg-4 -->
            </div>
        </section>

        <section class="box">
            <div class="row pt-5 mt-3">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">O que acontece após o cadastro e a aprovação dos documentos:</h2>
                </div>
            </div>
            <ul class="pt-4">
                <li class="fw-bold mt-3">Fazer login</li>
                <div class="linha-vertical ps-2">
                    <p class="float-start">Acesse o app de parceiro da Moto Rápido e fique online para começar a aceitar solicitações de entrega.</p>
                </div>
                <li class="fw-bold mt-3">Entregue pedidos</li>
                <div class="linha-vertical ps-2">
                    <p class="float-start">O app oferece a navegação e as informações de que você precisa para fazer entregas com mais tranquilidade.</p>
                </div>
                <li class="fw-bold mt-3">Ganhe dinheiro</li>
                <div class="linha-vertical ps-2">
                    <p class="float-start">Acompanhe seus ganhos e receba os repasses todos os dias ou semanalmente. Se você solicitar uma Moto Rápido Conta, os ganhos serão repassados para ela após cada entrega finalizada.</p>
                </div>
            </ul>
        </section>

        <section class="box">
            <div class="row pt-5 mt-3">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Veja o que você precisa para se tornar um entregador parceiro Uber</h2>
                </div>
                <p>Informação importante sobre o envio de documentos:</p>
            </div>
            <ul class="pt-4">
                <li style="list-style-type: disc">Não serão aceitos fotocópias ou documentos digitalizados, apenas fotografias de documentos originais.</li>
                <li style="list-style-type: disc">Garanta que os 4 cantos de todos os documentos estão visíveis.</li>
                <li style="list-style-type: disc">Se a fotografia não estiver nítida, tenha sombras ou objetos que cubram parte da imagem, o documento não será aceito.</li>
                <li style="list-style-type: disc">Ser maior de 18 anos para fazer entregas com uma moto ou a pé</li>
            </ul>
        </section>

        <section id="faq" class="py-5 mt-2">
            <div class="row mt-3 mb-5">
                <div class="col-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Carteira de Identidade (RG)
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <ul>
                                        <li style="list-style-type: disc">São aceitos CNH (incluindo Permissão), RG, RNE e RNM.</li>
                                        <li style="list-style-type: disc">A foto deve estar clara e não ser muito antiga (de criança).</li>
                                        <li style="list-style-type: disc">Não são aceitos Carteira de Trabalho ou certificado de reservista.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    CPF
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <ul>
                                        <li style="list-style-type: disc">São aceitos: CNH (incluindo Permissão e CNH digital), RG, Cartão do CPF e Comprovante de situação cadastral</li>
                                        <li style="list-style-type: disc">Não são aceitos Carteira de Trabalho ou certificado de reservista.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Características de uma boa foto de perfil
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <ul>
                                        <li style="list-style-type: disc">Boa iluminação;</li>
                                        <li style="list-style-type: disc">Tirada de frente, não de lado;</li>
                                        <li style="list-style-type: disc">O rosto deve ser visível;</li>
                                        <li style="list-style-type: disc">Certifique-se de que a foto reflita sua aparência atual, não fotos antigas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div data-baseweb="block" id="animation-wrapper" class="css-PKJb">
            <section data-baseweb="block" id="" class="css-dDHHCg">
                <div data-baseweb="block" class="css-hazmlH">
                    <div data-baseweb="block" class="css-gDdGhK"></div>
                    <div data-baseweb="block" class="css-fBTLdZ">
                        <div data-baseweb="block" class="container-inner css-bPNWqZ">
                            <div data-baseweb="block" class="css-bVFrLX">
                                <div data-baseweb="block" class="css-emoSzE">
                                    <div class="css-dkcVmX">
                                        <div data-baseweb="block" id="animation-wrapper" class="css-PKJb">
                                            <div class="row pt-1 mb-3">
                                                <div class="col-12">
                                                    <h2 class="display-5 fw-bold">O app de parceiro</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-baseweb="block" id="animation-wrapper" class="css-PKJb">
                                            <div class="css-fFTFHu">
                                                <div class="css-kqHVrb">
                                                    <p class="cmln__paragraph">Para fazer entregas, baixe o app de parceiro. Ele é fácil de usar e oferece informações que podem ajudar você a tomar decisões enquanto recebe para fazer&nbsp;entregas.</p>
                                                    <p class="cmln__paragraph"><a class="cmln__link" href="#">Baixar para Android</a><br><a class="cmln__link" href="#">Baixar para&nbsp;iOS</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-baseweb="block" id="animation-wrapper" class="css-PKJb">
                                            <div class="css-WiLSj">
                                                <div class="css-bpZUjh"><a data-tracking-name="deliver_cbf6d7bc-7b2c-4059-bb7f-72106e7c3873_ctaOne.ctaDetails_cta1" href="https://www.uber.com/br/pt-br/drive/driver-app/" target="_self" aria-label="Veja como funciona o app de parceiro" class="css-mOjhT">
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-baseweb="block" class="bg-dark sm">
                                    <div data-baseweb="block" id="animation-wrapper" class="css-PKJb">
                                        <div data-baseweb="aspect-ratio-box" class="css-chMsaN">
                                            <div class="css-iUrvYQ">
                                                <div data-baseweb="aspect-ratio-box-body" class="css-eleJdh">
                                                    <div style="height: 100%; width: 100%;"><img src="https://www.uber-assets.com/image/upload/f_auto,q_auto:eco,c_fill,w_943,h_629/v1536339504/assets/6a/a56168-90eb-42d0-9c15-c0420cd538eb/original/D_Driver_Campaign-Carbon-arabic2x.png" alt="Driver App - Built for drivers, with drivers" role="presentation" aria-hidden="true" class="css-kGIRRZ"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="py-3 mt-5">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#servicos" class="nav-link px-2 text-muted">Serviços</a></li>
                <li class="nav-item"><a href="#precos" class="nav-link px-2 text-muted">Preços</a></li>
                <li class="nav-item"><a href="#faq" class="nav-link px-2 text-muted">FAQ</a></li>
                <li class="nav-item"><a href="#contatos" class="nav-link px-2 text-muted">Contatos</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 <i class="fa-solid fa-motorcycle"></i> Moto Rápido — App de Viagens, Inc</p>
        </footer>


        <!-- <section>
            <form action="controller/prestador_controller.php" enctype="multipart/form-data" method="POST">
                <input name="arquivo" type="file">
                <input type="submit" value="Enviar">
            </form>

            <table class="table table-bordered border-dark table-striped" cellpadding="10">
                <thead>
                    <th>Id</th>
                    <th>Preview</th>
                    <th>Arquivo</th>
                    <th>Data de Envio</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($listaImagem as $img) :
                    ?>
                        <tr>
                            <td><?php echo $img['id']; ?></td>
                            <td><img height="50" src="<?= $img['path']; ?>" alt="imagem"></td>
                            <td><a target="_blank" href="<?= $img['path']; ?>"><?= $img['nome']; ?></a></td>
                            <td><?= date("d/m/Y H:i", strtotime($img['data_upload'])); ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </section> -->


    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="/assets/js/switch.js"></script>
</body>

</html>