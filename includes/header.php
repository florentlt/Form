<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts, RIB & Tiers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/styles.css" rel="stylesheet"> <!-- Chemin relatif corrigé -->
</head>
<body class="light-mode">
    <div class="sidebar">
        <!-- Bouton de bascule du mode sombre/clair en haut -->
        <a href="#" id="toggleDarkMode" class="btn btn-outline-light"><span>🌙</span> Mode Sombre</a>

        <!-- Liens de la barre latérale -->
        <a href="#" id="signaletiqueLink" data-tab="signaletique"><span>📋</span> Signalétique</a>
        <a href="#" id="contactsLink" data-tab="contacts" class="active"><span>📇</span> Contacts, RIB & Tiers</a>
        <a href="#" id="accrochageLink" data-tab="accrochage"><span>📌</span> Accrochage</a>
        <a href="#" id="parametresLink" data-tab="parametres"><span>⚙️</span> Paramètres</a>
        <a href="#" id="aideLink" data-tab="aide"><span>❓</span> Aide</a>
    </div>


</body>
</html>