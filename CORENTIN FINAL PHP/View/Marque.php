<div class="vh-100" style="background-color: cornflowerblue">
    <h1>Liste des marques</h1>


    <div class="d-flex justify-content-center">


        <table class="table m-5" style="background-color: #4563b9;border-radius: 14px;">
            <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Nom</th>
                <th class="text-center" scope="col">Description</th>
                <th class="text-center" scope="col">Date de création</th>
                <th class="text-center" scope="col">Modifier</th>
                <th class="text-center" scope="col">Supprimer</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach ($data as $item) { ?>
                <tr>
                    <th scope="row"> </th>
                    <td class="text-center">
                        <?php echo $item->getNom(); ?>
                    </td>
                    <td class="text-center" >
                        <?php echo $item->getDescription() ;?>
                    </td>
                    <td class="text-center" >
                        <?php echo $item->getAnneeCreate() ;?>
                    </td>
                    <td class="text-center" >
                        <a  type="button"  class="btn btn-outline-warning m-2" href="?route=Marque/edit&id=<?php echo $item->getId(); ?>" >Modifier</a>
                    </td>
                    <td class="text-center" >
                        <a  type="button"  class="btn btn-outline-danger m-2" href="?route=deleteMarque&id=<?php echo $item->getId(); ?>" >Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- CREATION -->

    <div class="d-flex align-items-center flex-column">
        <h1>Création de marque</h1>
        <div class="d-flex justify-content-center w-75">
            <form class="w-100 d-flex align-items-center flex-column" method="post" action="?route=Marque/added">
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nom</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Nom">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"id="couleur" name="Description">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Année création</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"id="couleur" name="AnneeCreate">
                </div>
                <button type="submit" class="btn btn-outline-success m-2">Ajouter</button>
            </form>
        </div>
    </div>
</div>