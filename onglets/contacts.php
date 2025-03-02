<!-- onglets/contact.php -->
<div class="content">
    <div class="card">
        <h4 class="text-center">📇 Contacts</h4>
        <div class="table-responsive">
            <table class="table table-hover text-center" id="contactTable">
                <thead>
                    <tr>
                        <th>Facturation</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Fonction</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="contactsBody"></tbody>
            </table>
        </div>
    </div>

    <!-- Section RIB -->
    <div class="grid-container">
        <div class="card p-4 rounded-3 border-1" id="ribFormCard">
            <h4 class="text-center mb-4 ">💳 Relevé d'identité bancaire</h4>
            <form id="ribForm">
                <div class="row gy-3">
                    <div class="col-12 d-flex align-items-center">
                        <label for="banque" class="form-label" style="width: 220px;">Banque</label>
                        <input type="text" class="form-control" id="banque" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="domiciliation" class="form-label" style="width: 220px;">Domiciliation</label>
                        <input type="text" class="form-control" id="domiciliation" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="codeEts" class="form-label" style="width: 220px;">Code établissement</label>
                        <input type="text" class="form-control" id="codeEts" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="codeGuichet" class="form-label" style="width: 220px;">Code guichet</label>
                        <input type="text" class="form-control" id="codeGuichet" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="numCompte" class="form-label" style="width: 220px;">N° de compte</label>
                        <input type="text" class="form-control" id="numCompte" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="cle" class="form-label" style="width: 220px;">Clé</label>
                        <input type="text" class="form-control" id="cle" required>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="bic" class="form-label" style="width: 220px;">BIC</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="bic" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex align-items-center">
                        <label for="iban" class="form-label" style="width: 220px;">IBAN</label>
                        <input type="text" class="form-control" id="iban" required>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Vérifier</button>
                </div>
            </form>
        </div>

        <!-- Section Comptes Tiers -->
        <div class="card">
            <h4 class="text-center">🏦 Comptes Tiers</h4>
            <div class="table-responsive">
                <table class="table table-hover text-center" id="accountTable">
                    <thead>
                        <tr>
                            <th>Code Tiers</th>
                            <th>Centre</th>
                            <th>Société</th>
                        </tr>
                    </thead>
                    <tbody id="accountsBody"></tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="button-container d-flex justify-content-center">
        <button type="button" class="btn btn-primary" style="margin-right: 10px;">Annuler</button>
        <button type="submit" class="btn btn-secondary">OK</button>
    </div>
</div>