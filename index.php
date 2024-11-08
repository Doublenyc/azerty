<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOm LASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tca EPQogQeKaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-1g navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fas fa-user-secret"></i> Coding City</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupported Content" aria-controls="navbarSupported Content"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar Supported Content">
                    <ul class="navbar-nav me-auto mb-2 mb-1g-0"></ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        | <a class="nav-link" href="#">Commandes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Utilisateurs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-sm mb-5 mx-auto">
                <h1 class="fs-4 text-center lead text-primary">
                    Application de CRUD avec Bootstrap 5 P00 PHP MySQL
                    AJAX et Datatables
                </h1>
            </div>
        </div>
        <div class="dropdown-divider border-warning"></div>

        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="fw-bold mb-0">Liste des factures</h5>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#formModal">
                        <i class="fas fa-folder-plus"></i> Nouveau
                    </button>
                    <a href="/controller.php?action=export" class="btn btn-success btn-sm" id="export"><i
                            class="fas fa-table"></i> Exporter</a>
                </div>
            </div>
        </div>
        <div class="dropdown-divider border-warning mb-3"></div>
        <div class="row">
            <div class="table-responsive" id="orderTable">
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Nouvelle facture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="formOrder">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="customer" name="customer">
                                <label for="customer">Nom du client</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="cashier" name="cashier">
                                <label for="cashier">Nom du caissier</label>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="amount" name="amount">
                                        <label for="amount">Montant</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="receive" name="receive">
                                        <label for="receive">Montant perçu</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="state" aria-label="state" name="state">
                                            <option value="Factuée">Factuée</option>
                                            <option value="Payée">Payée</option>
                                            <option value="Annulée">Annulée</option>
                                        </select>
                                        <label for="state">Etat</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success" name="insert" id="insert">Ajouter <i
                                class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            I
        </div>
        <!-- Update modal form-->
        <div class="modal fade" id="formUpdateModal" tabindex="-1" aria-labelledby="formUpdateModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formUpdateModalLabel">Nouvelle facture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="formUpdateOrder">
                            <input type="hidden" name="id" id="id">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="customerUpdate" name="customer">
                                <label for="customerUpdate">Nom du client</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="cashierUpdate" name="cashier">
                                <label for="cashierUpdate">Nom du caissier</label>
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="amountUpdate" name="amount">
                                        <label for="amountUpdate">Montant</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="receiveUpdate" name="receive">
                                        <label for="receiveUpdate">Montant perçu</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <select class="form-select" id="stateUpdate" aria-label="state" name="state">
                                            <option value="Factuée">Facturée</option>
                                            <option value="Payée">Payée</option>
                                            <option value="Annulée">Annulée</option>
                                        </select>
                                        <label for="stateUpdate">Etat</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success" name="update" id="update">Mettre à jour <i class="fas
                        fa-sync"></i></button>
                    </div>
                </div> I
            </div>
        </div>
    
    </div>
    <script referrerpolicy="no-referrer"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-MrcW6ZMFY1ZCLA8N1+NtUVFØSA7MsXsP1UyJoMp4YLEUNSfAP+JcXn/tWtIaxVXM"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="process.js"></script>

</body>

</html>