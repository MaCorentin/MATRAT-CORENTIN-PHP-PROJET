<div class="vh-100 d-flex align-items-center flex-column">
    <h1>Modification de marque</h1>
    <div class="d-flex justify-content-center w-75">
        <form class="w-100 d-flex align-items-center flex-column" method="post" action="?route=Marque/edited">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nom</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="Nom" value="<?php echo $data->getNom()?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"id="couleur" name="Description" value="<?php echo $data->getDescription()?>">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Année création</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"id="couleur" name="AnneeCreate" value="<?php echo $data->getAnneeCreate()?>" >
            </div>
            <input type="text" class="form-control" name="id" id='id' value="<?php echo $data->getId() ?>" hidden required/>
            <button type="submit" class="btn btn-outline-success m-2">Modifier</button>
        </form>

    </div>
</div>
