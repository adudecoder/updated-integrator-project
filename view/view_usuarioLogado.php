<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Icons -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/07277f6fe9.js" crossorigin="anonymous"></script>
    <title>Moto Rápido</title>
</head>

<body class="bg-light" data-bs-spy="scroll" data-bs-target="#menu">
    <div class="container">

        <!-- Nav -->
        <header class="sticky-top bg-light d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4 fw-bold"><i class="fa-solid fa-motorcycle"></i> Moto Rápido</span>
            </a>

            <ul id="menu" class="nav nav-pills">
                <span class="fs-5 pe-4">Bem-Vindo <?= $_SESSION["usuarioName"] ?> </span>
                <li class="nav-item"><a href="controller/usuario_controller.php/?sair=true" class="nav-link active">Sair</a></li>
            </ul>
        </header>

        <section id="home" class="mb-5">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mt-3">

                    <h1 class="display-2 fw-bold">Usuário Logado</h1>

                </div>

                <div class="col-md-6">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player class="m-0 m-auto float-none float-md-end" src="https://assets9.lottiefiles.com/packages/lf20_5hztxbn1.json" background="transparent" speed="1" style="max-width: 90%" loop autoplay></lottie-player>
                </div>
            </div>
        </section>

        <!-- Tabela -->
        <section>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Foto de Perfil</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Número</th>
                    <th>Modelo da Moto</th>
                    <th>Cor da Moto</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($listaPrestador as $list) :
                    ?>
                        <tr>
                            <td><?= $list['id']; ?></td>
                            <td><a target="_blank" href="<?= $list['path']; ?>"><img src="<?= $list['path']; ?>" alt="perfil"></a></td>
                            <td><a target="_blank" href="<?= $list['path']; ?>"><?= $list['nome']; ?></a></td>
                            <td><?= $list['email']; ?></td>
                            <td><?= $list['idade']; ?></td>
                            <td><a href="https://wa.me/5581<?= $list['telefone']; ?>" target="_blank"><?= $list['telefone']; ?></a></td>
                            <td><?= $list['modelo']; ?></td>
                            <td><?= $list['cor']; ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>

            <nav class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="http://localhost/motorapido/?pagina=1&page=<?= $_GET['page'] - 1; ?>">Anterior</a></li>
                    <?php for ($i = 1; $i <= $pages; $i++) : ?>
                        <li class="page-item"><a class="page-link" href="http://localhost/motorapido/?pagina=1&page=<?= $i; ?>"><?= $i; ?></a></li>
                    <?php endfor; ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/motorapido/?pagina=1&page=<?= $_GET['page'] + 1; ?>">Próximo</a></li>
                </ul>
            </nav>
        </section>


        <div class="container col-xxl-8 px-5 bg-warning">
            <div class="row pt-5 mt-3">
                <div class="col-12">
                    <h2 class="display-5 fw-bold">Dicas para você ter uma ótima experiência na sua viagem:</h2>
                </div>
            </div>
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <!-- <div class="col-10 col-sm-8 col-lg-6">
                    <img src="//d9hhrg4mnvzow.cloudfront.net/99app.com/99-moto/369a9eab-header-drv_10nf0i70fr0hs04o00f028.png" alt="Bootstrap Themes" loading="lazy" width="400" height="500">
                </div> -->
                <div class="col-10 col-sm-8 col-lg-6" style="width: 25rem;">
                    <img src="//d9hhrg4mnvzow.cloudfront.net/99app.com/99-moto/369a9eab-header-drv_10nf0i70fr0hs04o00f028.png" class="card-img-top" alt="...">
                </div>
                <div class="col-lg-6 bg-white rounded-3">
                    <!-- <h1 class="display-5 fw-bold lh-1 mb-3">Chegou Moto Rápido.</h1> -->
                    <p class="lead"> <i class="bi bi-arrow-right-circle-fill"></i> Antes da corrida iniciar, apresente-se ao motociclista parceiro;</p>
                    <p class="lead"> <i class="bi bi-arrow-right-circle-fill"></i> Respeite o motociclista parceiro, seja pontual;</p>
                    <p class="lead"> <i class="bi bi-arrow-right-circle-fill"></i> Pergunte para o motociclista parceiro onde você deve se apoiar;</p>
                    <p class="lead"> <i class="bi bi-arrow-right-circle-fill"></i> Em curvas, incline o corpo junto com o do motociclista parceiro;</p>
                    <p class="lead"> <i class="bi bi-arrow-right-circle-fill"></i> Mantenha as pernas e joelhos alinhados com o quadril e pernas do motociclista parceiro;</p>
                    <p class="lead"> <i class="bi bi-arrow-right-circle-fill"></i> Firme bem os pés nas pedaleiras e busque ficar com a coluna ereta.</p>
                    <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
          </div> -->
                </div>
            </div>
        </div>



    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="/assets/js/switch.js"></script>
</body>

</html>