<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Submit a car</title>
    </head>
    <body>
        <form method="post" action="creerVoiture.php">
            <fieldset>
                <legend>My form:</legend>
                <p>
                    <label for="marque_id">License number</label> :
                    <input type="text" placeholder="Ex : Volvo" name="marque" id="marque_id" required/>
                </p>
                <p>
                    <label for="couleur_id">License number</label> :
                    <input type="text" placeholder="Ex : Blue" name="couleur" id="couleur_id" required/>
                </p>
                <p>
                    <label for="immat_id">License number</label> :
                    <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
                </p>
                <p>
                    <input type="submit" value="Submit" />
                </p>
            </fieldset> 
        </form>
    </body>
</html>
