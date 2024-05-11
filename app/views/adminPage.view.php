<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center h2 my-3">CRUD</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addCity">Add
                    city</button>
            </div>
            <div class="table-responsive my-3">
                <?php require_once "adminPage-content.view.php"?>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="addCity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add city</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="editCity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit city</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= ROOT ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ROOT ?>/assets/js/admin.js"></script>
</body>

</html>