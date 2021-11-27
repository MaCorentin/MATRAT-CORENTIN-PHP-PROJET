<div class="vh-100" style="background-color: cornflowerblue">
    <h1>Liste des vehicules</h1>
    <div class="d-flex align-items-center flex-column  ">
        <div class="d-flex justify-content-center">
            <table class="table m-5" style="background-color: #4563b9;border-radius: 14px;">
                <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Modèle</th>
                    <th class="text-center" scope="col">Couleur</th>
                    <th class="text-center" scope="col">Marque</th>
                    <th class="text-center" scope="col">Modifier</th>
                    <th class="text-center" scope="col">Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data[0][0] as $item) { ?>
                    <tr>
                        <th scope="row"></th>
                        <td class="text-center"> <?php echo $item->getModele(); ?> </td>
                        <td class="text-center"> <?php echo $item->getCouleur(); ?> </td>
                        <?php foreach ($data[0][1] as $item2) {
                        if ($item->getMarque() == $item2->getId()) { ?>
                        <td class="text-center"> <?php echo $item2->getNom(); ?> </td>
                        <?php } ?>
                        <?php } ?>
                        <td class="text-center">
                            <a type="button" class="btn btn-outline-warning m-2" href="?route=home/edit&id=<?php echo $item->getId(); ?>">Modifier</a></td>
                        <td class="text-center">
                            <a type="button" class="btn btn-outline-danger m-2" href="?route=delete&id=<?php echo $item->getId(); ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- CREATION -->

        <h1>Création de véhicule</h1>
        <div class="d-flex justify-content-center w-75">
            <form class="w-100 d-flex align-items-center flex-column" method="post" action="?route=home/added">
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Modèle</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="modele" name="modele">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Couleur</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"id="couleur" name="couleur">
                </div>
                <div class="form-group col-md-4">
                    <label for="list">Marque</label>
                    <select id="list" name="marque" class="form-control">
                        <option selected> Choisir...</option>
                        <?php foreach ($data[0][1] as $item2) { ?>
                            <option value="<?php echo $item2->getId() ?>"> <?php echo $item2->getNom() ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-success m-2">Ajouter</button>
            </form>
        </div>
    </div>
</div>