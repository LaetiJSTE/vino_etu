<section class="form">

    <h5 class="form-title">Modification d'une bouteille</h5><br>
    <form class="modifierFormulaire" data-js-form action="" enctype="multipart/form-data" method="get">
        <div class="imgForm">
            <img src="https:<?php echo $data['image'] ?>">
        </div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="<?php echo $data['nom'] ?>">
        <label for="pays">Pays</label>
        <input type="text" name="pays" id="pays" value="<?php echo $data['pays'] ?>">
        <!-- select 'vin-blanc ou vin rouge ou vin rosé -->
        <label for="type">Type</label>
        <input type="text" name="type" id="type" value="<?php echo $data['type_vin'] ?>">
        <input type="hidden" name="id" value="<?php echo $data['idBouteille'] ?>">
        <button type="submit" disabled>Modifier</button>
    </form>

</section>