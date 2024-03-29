# plateform portfolio pour la gestion des utilisateurs
-----Module 04-----

1. Cas d’utilisation

![1](https://github.com/Raaline/tp2/assets/83228514/169074f0-e541-44dc-949e-5cfebd74e519)

Explications :

a. Cas d'utilisation principal : S’inscrire, S'authentifier, et gérer son profil
- Acteurs : Utilisateur
- Description : L'utilisateur a la possibilité de s’authentifier et de gérer son profil (modifier son profil, supprimer son profil).
- Scénario Principal :
        i. L'utilisateur choisit l'option de s'inscrire.
        ii. Le système affiche le formulaire d'enregistrement.
        iii. L'utilisateur entre les informations d'enregistrement.
        iv. Le système vérifie et enregistre les informations d'utilisateur.
        v. Si l'enregistrement réussit, l'utilisateur est redirigé vers la page de connexion.
        vi. L'utilisateur entre ses identifiants.
        vii. Le système vérifie les informations d'identification.
        viii. Si la connexion réussit, l'utilisateur est redirigé vers son profil.

b. Cas d'utilisation inclus : Visualiser le Profil
- Acteurs : Utilisateur
- Description : L'utilisateur visualise les informations présentées sur son profil.
- Scénario Principal :
        i. L'utilisateur est connecté.
        ii. Le système affiche les informations pertinentes sur son profil.
c. Cas d'utilisation étendu : Modifier le Profil depuis le Tableau de Bord
- Acteurs : Utilisateur
- Description : L'utilisateur a la possibilité de modifier son profil directement depuis le tableau de bord.
- Scénario Principal :
        i. L'utilisateur est connecté.
        ii. Le système affiche les informations du tableau de bord.
        iii. L'utilisateur choisit l'option de modification du profil.
- Scénario d'Extension :
        iv. Si l'utilisateur choisit de modifier son profil depuis le tableau de bord, il étend le cas d'utilisation principal "Se Connecter et Accéder au Tableau de Bord".

2. Diagramme d’activité. Le diagramme d'activité du système dans le cas d'un utilisateur déjà inscrit

![4](https://github.com/Raaline/tp2/assets/83228514/957398bb-5ac4-49a8-b09c-1e894954e8d6)

3. Diagramme de séquence. Le diagramme de séquence du système dans le cas d'un utilisateur qui souhaite s’inscrire

![5](https://github.com/Raaline/tp2/assets/83228514/23196cf7-0fb9-4e21-b3be-2c83635fce25)


4. Diagramme de flux du système

![3](https://github.com/Raaline/tp2/assets/83228514/52b14d58-dfe3-4e14-9e95-a0b7238036c7)

5. ERD

![4](https://github.com/Raaline/tp2/assets/83228514/f8a328b6-1000-4cf9-b692-b91d924ff787)
