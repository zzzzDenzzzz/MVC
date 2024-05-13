<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>/assets/css/tooplate-kool-form-pack.css" rel="stylesheet">
    <style>
        #loader {
            background: rgba(255, 255, 255, 0.7);
            text-align: center;
            position: absolute;
            top: 150px;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            display: none;
        }

        #loader img {
            width: 100px;
        }

        #clear-search {
            cursor: pointer;
        }
    </style>
    <title>Admin Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center h2 my-3"><a href="<?= ROOT ?>/userPage">To User Page</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addCity">Add
                            city</button>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" id="search" class="form-control" placeholder="Search...">
                            <span class="input-group-text bg-transparent text-white" id="clear-search">
                                <a href="<?= ROOT ?>/adminPage">&times;</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loader">
                <img src="<?= ROOT ?>/assets/images/ripple.svg" alt="">
            </div>
            <div class="table-responsive my-3">
                <?php require_once "adminPage-content.view.php" ?>
            </div>
        </div>
        <!-- Modal Add -->
        <div class="modal fade" id="addCity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add city</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="addCityForm">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="addName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="addName"
                                        placeholder="City name">
                                </div>
                                <div class="mb-3">
                                    <label for="addPopulation" class="form-label">Population</label>
                                    <input type="number" name="population" class="form-control" id="addPopulation"
                                        placeholder="City population">
                                    <input type="hidden" name="addCity">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="btn-add-submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit -->
        <div class="modal fade" id="editCity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit city</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="editCityForm">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="editName" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="editName"
                                        placeholder="City name">
                                </div>
                                <div class="mb-3">
                                    <label for="editPopulation" class="form-label">Population</label>
                                    <input type="number" name="population" class="form-control" id="editPopulation"
                                        placeholder="City population">
                                    <input type="hidden" name="editCity">
                                    <input type="hidden" name="id" id="id">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="btn-edit-submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= ROOT ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= ROOT ?>/assets/js/admin.js"></script>
    <script src="<?= ROOT ?>/assets/js/mark.min.js"></script>
</body>

</html>