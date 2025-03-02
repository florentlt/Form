<!-- onglets/signaletique.php -->
<div class="content">
    <div class="row">
        <!-- Première colonne -->
        <div class="col-md-6">
            <div class="p-3">
                <!-- Carte Personne Physique / Morale -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Personne Physique / Morale</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="personnePhysique">
                            <label class="form-check-label" for="personnePhysique">Personne Physique</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="personneMorale">
                            <label class="form-check-label" for="personneMorale">Personne Morale</label>
                        </div>
                    </div>
                </div>

                <!-- Carte Situation du contractant -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Situation du contractant</h5>
                    </div>
                    <div class="card-body">
                        <div class="checkbox-group row">
                            <div class="checkbox-column col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="stagiaire">
                                    <label class="form-check-label" for="stagiaire">Accueil stagiaire</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fournisseur">
                                    <label class="form-check-label" for="fournisseur">Fournisseur</label>
                                </div>
                            </div>
                            <div class="checkbox-column col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="parrain">
                                    <label class="form-check-label" for="parrain">Parrain</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="financeur">
                                    <label class="form-check-label" for="financeur">Financeur</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="exclure_relances">
                                    <label class="form-check-label" for="exclure_relances">Exclure des relances</label>
                                </div>
                            </div>
                            <div class="checkbox-column col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="opca">
                                    <label class="form-check-label" for="opca">OPCA</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="financeur_executif">
                                    <label class="form-check-label" for="financeur_executif">Financeur Exécutif</label>
                                </div>
                            </div>
                            <div class="checkbox-column col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="secteur_public">
                                    <label class="form-check-label" for="secteur_public">Secteur public</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="verse_taxe">
                                    <label class="form-check-label" for="verse_taxe">Verse la taxe d'apprentissage</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="bon_commande">
                                    <label class="form-check-label" for="bon_commande">Bon de commande obligatoire</label>
                                </div>
                            </div>
                            <div class="checkbox-column col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="archive">
                                    <label class="form-check-label" for="archive">Archivé</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte Contact Principal -->
                <div class="row">
                    <div class="col-md-6 mb-2 d-flex">
                        <div class="card w-100">
                            <div class="card-header">
                                <h5 class="card-title">Contact Principal</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group-inline">
                                    <label class="form-label">Nom / RS</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Téléphone</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Fonction</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Catégorie</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carte Plateforme de dépôt de pièces numériques -->
                    <div class="col-md-6 mb-2 d-flex">
                        <div class="card w-100">
                            <div class="card-header">
                                <h5 class="card-title">Plateforme de dépôt de pièces numériques</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="plateforme_opco">
                                    <label class="form-check-label" for="plateforme_opco">Plateforme OPCO</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="plateforme_chorus">
                                    <label class="form-check-label" for="plateforme_chorus">Plateforme Chorus</label>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="commentaire" class="form-label">Commentaire</label>
                                    <textarea class="form-control" id="commentaire" rows="6"></textarea>
                                </div>
                                <div class="mb-2 mt-2">
                                    <label class="form-label">URL Plateforme</label>
                                    <input type="text" class="form-control" placeholder="http://exemple.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-md-6">
            <div class="p-3">
                <div class="row">
                    <!-- Carte Signalétique Contractant -->
                    <div class="col-md-6 d-flex">
                        <div class="card w-100">
                            <div class="card-header">
                                <h5 class="card-title">Signalétique Contractant</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group-inline">
                                    <label class="form-label">Nom / RS</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Adresse</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Adresse 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Ville</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Pays</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Téléphone</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Fax</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Centre</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Tel Portable</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Web</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carte Informations Complémentaires -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Informations Complémentaires</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group-inline">
                                    <label class="form-label">Statut</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Depuis le</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Code APE</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Siret</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Salariés</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Complément RS</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Ville Enr.</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">No IDCC</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Groupe</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Conv Collective</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">Code Tiers</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group-inline">
                                    <label class="form-label">NAF</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte Site internet -->
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 100%; max-width: 1000px;">
            <div class="card-header">
                <h5 class="card-title">Site internet</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row align-items-center">
                        <div class="col d-flex align-items-center">
                            <button type="submit" class="btn btn-primary mt-4">Attribuer</button>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group-inline">
                                <label for="login" class="form-label mb-0">Login</label>
                                <input type="text" id="login" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group-inline mb-0">
                                <label for="password" class="form-label mb-0">Mot de passe</label>
                                <input type="password" id="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Boutons de soumission -->
    <div class="button-container d-flex justify-content-center">
        <button type="button" class="btn btn-primary" style="margin-right: 10px;">Annuler</button>
        <button type="submit" class="btn btn-secondary">OK</button>
    </div>
</div>