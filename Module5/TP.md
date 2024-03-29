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

1. Création de la Table dans MySQL
2. Fichiers dans le Dossier "functions"
   a. functions/controller.php : Dirige le flux de contrôle vers la route appropriée définie dans la fonction controller().
   b. functions/model.php : Gestion de la persistance des données, interactions avec la base de données.    
   c. functions/security.php : Gère la partie sécurité en définissant toutes les fonctions pour la sécurité de l'application.
   d. functions/service.php : Gère le traitement des données envoyées en requêtes.
   e. templates : Partie front (vues) de votre projet.

3. Sécurité :

Mise en œuvre de mesures de sécurité contre les attaques :
XSS (Cross-Site Scripting): Utilisation de htmlspecialchars lors de l'affichage des données utilisateur pour prévenir les attaques XSS.
CSRF (Cross-Site Request Forgery): Génération et utilisation de tokens CSRF pour toutes les actions sensibles afin de prévenir les attaques CSRF.
Injection SQL: Utilisation de Try Catch et de requêtes préparées ou de fonctions d'échappement pour empêcher les attaques par injection SQL.
Prepared Statement: Utilisation de requêtes préparées pour plus de sécurité, aide à prévenir les attaques par injection SQL en séparant les données des instructions SQL.
Regex: Manipulation de chaînes de caractères en utilisant un motif défini.
Hashage: Hashage des mots de passes, le Salt "salage" serait un plus non négligeable.
Tests de sécurité: Faire des tests de sécurité avec PHPUnit et les documenter.

4. Normes de Codage :

Respect des normes de nommage PHP et MySQL (par exemple, camelCase pour les variables en PHP, snake_case pour les noms de table en MySQL).
Commentaires appropriés pour assurer une compréhension claire du fonctionnement du système.
Respecter le principe de Single Responsibility en gardant une cohérence dans les couches/layers de votre application.
Versioning : a. Mise en place d'un repository GitHub : Établissement d'un système de versioning en créant un repository GitHub pour le projet. Des commits réguliers seront effectués pour garantir un suivi continu du développement, et un fichier README.md fera office de documentation du projet.
