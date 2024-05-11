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
                <?php if (!empty($data['cities'])): ?>
                    <?= $data['pagination'] ?>
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Population</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['cities'] as $city): ?>
                                <tr id="city-<?php $city->id ?>">
                                    <th scope="row"><?= $city->id ?></th>
                                    <td><?= $city->name ?></td>
                                    <td><?= $city->population ?></td>
                                    <td>
                                        <button class="btn btn-info btn-edit" data-id="<?= $city->id ?>" data-bs-toggle="modal"
                                            data-bs-target="#editCity">Edit</button>
                                        <button class="btn btn-danger btn-delete" data-id="<?php $city->id ?>">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?= $data['pagination'] ?>
                <?php else: ?>
                    <p>Cities not found...</p>
                <?php endif; ?>
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
</body>

</html>