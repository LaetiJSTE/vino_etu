<img src="https:<?php echo $data['image'] ?>">
<form>
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?php echo $data['nom'] ?>">
    <label for="pays">Pays</label>
    <input type="text" name="pays" id="pays" value="<?php echo $data['pays'] ?>">
    <!-- select 'vin-blanc ou vin rouge ou vin rosé -->
    <label for="type">Type</label>
    <input type="text" name="type" id="type" value="<?php echo $data['type_vin'] ?>">
    <button type="submit">Modifier</button>
</form>