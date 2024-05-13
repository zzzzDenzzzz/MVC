<?php if (!empty($data['cities'])): ?>
    <?= $data['pagination'] ?>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Population</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['cities'] as $city): ?>
                <tr id="city-<?= $city->id ?>">
                    <th scope="row"><?= $city->id ?></th>
                    <td class="name"><?= $city->name ?></td>
                    <td class="population"><?= $city->population ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $data['pagination'] ?>
<?php else: ?>
    <p>Cities not found...</p>
<?php endif; ?>