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
                    <p class="float-start">Acesse o app de parceiro da Uber e fique online para começar a aceitar solicitações de entrega.</p>
                </div>
                <li class="fw-bold mt-3">Entregue pedidos</li>
                <div class="linha-vertical ps-2">
                    <p class="float-start">O app oferece a navegação e as informações de que você precisa para fazer entregas com mais tranquilidade.</p>
                </div>
                <li class="fw-bold mt-3">Ganhe dinheiro</li>
                <div class="linha-vertical ps-2">
                    <p class="float-start">Acompanhe seus ganhos e receba os repasses todos os dias ou semanalmente. Se você solicitar uma Uber Conta, os ganhos serão repassados para ela após cada entrega finalizada.</p>
                </div>
            </ul>
        </section>

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