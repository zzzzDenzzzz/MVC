<?php if (!empty($data['search_cities'])): ?>
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Population</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['search_cities'] as $city): ?>
                <tr id="city-<?= $city->id ?>">
                    <th scope="row" class="text-white"><?= $city->id ?></th>
                    <td class="name text-white"><?= $city->name ?></td>
                    <td class="population text-white"><?= $city->population ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Cities not found...</p>
<?php endif; ?>