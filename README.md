# Gestion de Tâches - Symfony Application

## Description

L'application de gestion de tâches est une application web simple développée avec Symfony et Bootstrap 5. Elle permet de gérer des tâches à travers un CRUD complet (Création, Lecture, Mise à jour, Suppression). Chaque tâche a un statut prédéfini et est associée à des dates de création et de mise à jour automatiques.

## Fonctionnalités

- Création, modification, et suppression de tâches.
- Statuts prédéfinis pour les tâches : Init, En attente, En cours, En test, Blocage, Terminer / recette client.
- Gestion automatique des dates de création et de mise à jour.
- Interface utilisateur claire et moderne avec Bootstrap 5.

## Prérequis

Avant de lancer l'application, assurez-vous d'avoir les éléments suivants installés :

- PHP 8.1 ou supérieur
- Composer
- MySQL
- Symfony CLI (facultatif mais recommandé)

## Installation

1. Clonez le dépôt Git :
   ```bash
   git clone https://github.com/username/task-manager.git
   cd task-manager
2. Installez les dépendances via Composer :
   composer install
3. Créez la base de données :
   php bin/console doctrine:database:create
4. Exécutez les migrations pour créer les tables :
   php bin/console doctrine:migrations:migrate
5. Démarrez le serveur Symfony :
   symfony server:start

🎉️
6. Accédez à l'application dans votre navigateur à l'adresse suivante :
   http://localhost:8000

