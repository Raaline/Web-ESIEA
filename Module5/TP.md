Énoncé

Travaux pratiques à rendre pour le prochain cours :

- Créez un système de vérification d'utilisateur à partir d'un input HTML.
- Élaborez une fonction en PHP qui gère la vérification des utilisateurs préalablement enregistrés dans un tableau, avec une information du type métier. Si un utilisateur est trouvé, affichez ses informations personnelles. Sinon, interceptez l'erreur par mesure de sécurité et affichez un message, exemple : "UserNotFound".
- Sécurisez le formulaire contre les attaques XSS.
- Organisez vos dossiers.

----MODULE-05 TP-02----

Système de Gestion d'Utilisateurs en PHP, HTML, CSS, MySQL
Objectif : Développer un système de gestion d'utilisateurs en utilisant PHP, HTML, CSS et MySQL, excluant l'utilisation de JavaScript.
User Story/Use Case Textuel : Système de Gestion d'Utilisateurs

Champs utilisateur :
id (AI)
nom
prénom
Adresse
Rôle (Input hidden, valeur définie à 2 pour chaque nouvel inscrit)
email
mot de passe
Inscription obligatoire pour la connexion via email.
Connexion réussie redirige vers la page dashboard.
Échec de connexion redirige vers la page de login.
Vérification de l'existence de l'email lors de l'inscription. Enregistrement si non existant, sinon affichage d'un message d'erreur.
Un utilisateur peut voir ses informations sur le dashboard.
Il peut modifier son nom, prénom, email, ou le mot de passe.
Possibilité de clôturer ou supprimer son compte.  
