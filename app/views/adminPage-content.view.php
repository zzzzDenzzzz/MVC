<?php if (!empty($data['cities'])): ?>
    <?= $data['pagination'] ?>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Population</th>
                <?php if (isset($_SESSION["USER"]) && $_SESSION["USER"]->email === ADMIN): ?>
                    <th scope="col">Actions</th>
                <?php endif; ?>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['cities'] as $city): ?>
                <tr id="city-<?= $city->id ?>">
                    <th scope="row"><?= $city->id ?></th>
                    <td class="name"><?= $city->name ?></td>
                    <td class="population"><?= $city->population ?></td>
                    <?php if (isset($_SESSION["USER"]) && $_SESSION["USER"]->email === ADMIN): ?>
                        <td>
                            <button class="btn btn-info btn-edit" data-id="<?= $city->id ?>" data-bs-toggle="modal"
                                data-bs-target="#editCity">Edit</button>
                            <button class="btn btn-danger btn-delete" data-id="<?= $city->id ?>">Delete</button>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $data['pagination'] ?>
<?php else: ?>
    <p>Cities not found...</p>
<?php endif; ?>