<div class="vh-100 d-flex align-items-center flex-column">

<h1>Modification de véhicule</h1>
<div class="d-flex justify-content-center w-75">
    <form class="w-100 d-flex align-items-center flex-column" method="post" action="?route=home/edited">
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Modèle</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="modele" name="modele" value="<?php echo $data[0][0]->getModele() ?>">
        </div>

        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Couleur</span>
            </div>
            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"id="couleur" name="couleur" value="<?php echo $data[0][0]->getCouleur() ?>" >
        </div>

        <div class="form-group col-md-4">
            <label for="list">Marque</label>
            <select id="list" name="marque" class="form-control">
                <option selected> Choisir...</option>
                <?php foreach ($data[0][1] as $Marque){ ?>
                    <option value="<?php echo $Marque->getId() ?>" <?php if ($Marque->getId() == $data[0][0]->getMarque()) { echo "selected"; } ?> > <?php echo $Marque->getNom() ?></option>
                <?php } ?>
            </select>
        </div>
        <input type="text" class="form-control" name="id" id='id' value="<?php echo $data[0][0]->getId() ?>" hidden required/>
        <button type="submit" class="btn btn-outline-success m-2">Modifier</button>
    </form>

</div>
</div>
