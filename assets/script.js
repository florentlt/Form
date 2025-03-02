document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez tous les liens de la sidebar qui ont un attribut data-tab
    const sidebarLinks = document.querySelectorAll('.sidebar a[data-tab]');

    // Ajoutez un écouteur d'événement à chaque lien
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Empêche le comportement par défaut du lien

            const tab = this.getAttribute('data-tab'); // Récupère l'attribut data-tab
            loadTabContent(tab); // Charge le contenu de l'onglet
        });
    });

    // Fonction pour charger le contenu de l'onglet
    function loadTabContent(tab) {
        const dynamicContent = document.getElementById('dynamicContent');

        // Utilisez un chemin absolu pour charger le fichier PHP correspondant
        fetch(`http://localhost/Form/onglets/${tab}.php`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                dynamicContent.innerHTML = data; // Injecte le contenu dans la div dynamicContent
                
                // Gestion du clic sur les liens de la sidebar
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function (event) {
                        event.preventDefault(); // Empêcher le comportement par défaut du lien

                        // Retirer la classe 'active' de tous les liens
                        sidebarLinks.forEach(link => link.classList.remove('active'));

                        // Ajouter la classe 'active' au lien cliqué
                        this.classList.add('active');

                        // Charger le contenu de l'onglet correspondant
                        const tab = this.getAttribute('data-tab'); // Récupérer l'identifiant de l'onglet
                    });
                });

                // Si l'onglet chargé est "contacts", exécuter le code pour remplir les tableaux
                if (tab === 'contacts') {
                    // Données de test pour les contacts
                    const contacts = Array.from({ length: 50 }, (_, i) => ({
                        facturation: i % 2 === 0,
                        nom: "Nom" + (i + 1),
                        prenom: "Prénom" + (i + 1),
                        fonction: "Fonction",
                        telephone: "01234567" + ((i + 1) % 10),
                        email: "contact" + (i + 1) + "@exemple.com"
                    }));

                    // Données de test pour les comptes tiers
                    const accounts = Array.from({ length: 50 }, (_, i) => ({
                        codeTiers: "Tiers" + (i + 1),
                        centre: "Centre" + (i + 1),
                        societe: "Société" + (i + 1),
                    }));

                    // Remplir le tableau des contacts
                    const contactsBody = document.getElementById('contactsBody');
                    if (contactsBody) {
                        contacts.forEach(contact => {
                            const row = document.createElement('tr');
                            row.innerHTML =
                                `<td>
                                    <input type="checkbox" ${contact.facturation ? 'checked' : ''}>
                                 </td>
                                 <td>${contact.nom}</td>
                                 <td>${contact.prenom}</td>
                                 <td>${contact.fonction}</td>
                                 <td>${contact.telephone}</td>
                                 <td>${contact.email}</td>`;
                            contactsBody.appendChild(row);
                        });
                    }

                    // Remplir le tableau des comptes tiers
                    const accountsBody = document.getElementById('accountsBody');
                    if (accountsBody) {
                        accounts.forEach(account => {
                            const row = document.createElement('tr');
                            row.innerHTML =
                                `<td>${account.codeTiers}</td>
                                 <td>${account.centre}</td>
                                 <td>${account.societe}</td>`;
                            accountsBody.appendChild(row);
                        });
                    }
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                dynamicContent.innerHTML = '<p>Erreur lors du chargement du contenu.</p>';
            });
    }

    loadTabContent('contacts'); 

    // Basculer entre les modes sombre et clair
    const toggleDarkModeButton = document.getElementById('toggleDarkMode');
    const body = document.body;

    toggleDarkModeButton.addEventListener('click', function (event) {
        event.stopImmediatePropagation();

        if (body.classList.contains('dark-mode')) {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            toggleDarkModeButton.innerHTML = '<span>🌙</span> Mode Sombre';
        } else {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            toggleDarkModeButton.innerHTML = '<span>☀️</span> Mode Clair';
        }
    });
});