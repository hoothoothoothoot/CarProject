<form method="post" action="index.php?action=created">
    <fieldset>
        <legend>My form:</legend>
        <p>
            <label for="marque_id">Brand</label> :
            <input type="text" placeholder="Ex : Volvo" name="marque" id="marque_id" required/>
        </p>
        <p>
            <label for="couleur_id">Color</label> :
            <input type="text" placeholder="Ex : Blue" name="couleur" id="couleur_id" required/>
        </p>
        <p>
            <label for="immat_id">License plate</label> :
            <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
        </p>
        <p>
            <input type="submit" value="Submit" />
        </p>
    </fieldset> 
</form>
   