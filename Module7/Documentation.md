**Module 7: Développement Web Orienté Objet et Modèle-Vue-Contrôleur (MVC) en PHP**

#### Objectif:
Le but de ce TP est de concevoir et de développer une application web de gestion d'utilisateurs avec PHP utilisant le paradigme de programmation orientée objet et le modèle-vue-contrôleur (MVC).

1. **Analyse des Besoins**:
  
   **Inscription utilisateur :**

   -L'utilisateur peut s'inscrire en fournissant son nom, prenom, adresse, adresse e-mail et un mot de passe sécurisé.

   -L'application doit valider le nom et le prenom pour s'assurer qu'elle respecte le format requis.
   
   -L'application doit valider l'adresse e-mail pour s'assurer qu'elle est unique et respecte le format requis.

   -Le mot de passe doit être suffisamment sécurisé, avec des exigences telles qu'une longueur minimale, des caractères spéciaux et des lettres majuscules et minuscules.
   
   **Connexion utilisateur :**
   
   -Une fois inscrit, l'utilisateur peut se connecter à son compte en fournissant son adresse e-mail et son mot de passe.

   -L'application vérifie les informations d'identification fournies par l'utilisateur pour authentifier l'accès.

   **Mise à jour des informations utilisateur :**
   
   -L'utilisateur peut modifier ses informations personnelles telles que son nom, prénom, adresse, etc.

   -L'application doit permettre à l'utilisateur de mettre à jour ces informations via un formulaire de modification.

   **Suppression de compte utilisateur :**
   
   -L'utilisateur a la possibilité de supprimer son compte s'il le souhaite.

   -Lorsque l'utilisateur demande la suppression de son compte, l'application doit lui demander une confirmation pour éviter les suppressions accidentelles.

   **Gestion des rôles utilisateur :**
   
   -Les administrateurs ont le pouvoir d'attribuer des rôles aux utilisateurs, tels que "administrateur", "utilisateur", etc.

   -Cette fonctionnalité permet aux administrateurs de définir les autorisations et les privilèges des utilisateurs en fonction de leur rôle.

**Scénarios utilisateur textuels :**

	a. **Scénario d'inscription :**
		-En tant qu'utilisateur, je souhaite m'inscrire sur la plateforme en fournissant mon adresse e-mail et un mot de passe sécurisé.
		-Après avoir rempli le formulaire d'inscription, je m'attends à recevoir un e-mail de confirmation pour valider mon compte.

	b. **Scénario de connexion :**
		-En tant qu'utilisateur enregistré, je souhaite me connecter à mon compte en saisissant mon adresse e-mail et mon mot de passe.
		-Après avoir saisi les informations d'identification, je m'attends à être redirigé vers la page d'accueil de mon compte.

	c. **Scénario de mise à jour des informations utilisateur :**
		-En tant qu'utilisateur connecté, je souhaite mettre à jour mes informations personnelles telles que mon nom, mon prénom ou mon adresse.
		-Je m'attends à pouvoir accéder à un formulaire de modification où je peux saisir les nouvelles informations et les enregistrer.

	d. **Scénario de suppression de compte utilisateur :**
			-En tant qu'utilisateur, je souhaite supprimer mon compte et toutes mes données de la plateforme.
			-Je m'attends à trouver une option de suppression de compte dans les paramètres de mon profil, où je peux confirmer la suppression.

	e. **Scénario de gestion des rôles utilisateur :**
			-En tant qu'administrateur, je souhaite pouvoir attribuer des rôles aux utilisateurs enregistrés, tels que "administrateur" ou "utilisateur".
			-Je m'attends à avoir accès à une interface d'administration où je peux voir la liste des utilisateurs et définir leur rôle.

2. **Conception du Diagramme UML**:
   
