# Gestion Boutique-2

Application web de gestion de boutique développée en **PHP**, **MySQL**, **HTML5** et **CSS3**.

Ce projet permet de gérer les clients, les produits, les commandes ainsi que la génération de factures PDF.

---

# Fonctionnalités

##  Gestion des clients

* Ajouter un client
* Modifier un client
* Supprimer un client
* Consulter la liste des clients

## Gestion des produits

* Ajouter un produit
* Modifier un produit
* Supprimer un produit
* Consulter la liste des produits
* Gestion du stock

## Gestion des commandes

* Création de commandes
* Association d'un client à une commande
* Sélection d'un produit
* Calcul automatique du montant total
* Mise à jour automatique du stock

## Gestion des factures

* Affichage détaillé des factures
* Génération de factures PDF
* Téléchargement et impression des factures

---

# Architecture du projet

```text
gestion_boutique/

├── clients/
│   ├── index.php
│   ├── ajouter.php
│   ├── modifier.php
│   └── supprimer.php
│
├── produits/
│   ├── index.php
│   ├── ajouter.php
│   ├── modifier.php
│   └── supprimer.php
│
├── commandes/
│   ├── index.php
│   └── nouvelle_commande.php
│
├── factures/
│   ├── facture.php
│   └── generer_pdf.php
│
├── includes/
│   ├── db.php
│   ├── header.php
│   └── footer.php
│
├── css/
│   └── style.css
│
├── fpdf/
│
└── index.php
```

---

# Base de données

Nom de la base :

```sql
gestion_boutique
```

Tables utilisées :

* clients
* produits
* commandes
* ligne_commandes

---

# 🔗 Relations

```text
CLIENT
   |
   | 1,N
   |
COMMANDE
   |
   | 1,N
   |
LIGNE_COMMANDE
   |
   | N,1
   |
PRODUIT
```

---

# ⚙️ Technologies utilisées

* PHP
* MySQL
* HTML5
* CSS3
* MySQLi
* FPDF
* XAMPP
* Git
* GitHub
* Visual Studio Code

---

# Installation

## 1. Cloner le projet

```bash
git clone https://github.com/MadjiyengarAxelJoseph/gestion_boutique.git
```

## 2. Copier le projet

Placer le dossier dans :

```text
/opt/lampp/htdocs/
```

## 3. Démarrer XAMPP

```bash
sudo /opt/lampp/lampp start
```

## 4. Créer la base de données

Créer une base nommée :

```sql
gestion_boutique
```

Importer ensuite les tables du projet.

## 5. Configurer la connexion

Modifier le fichier :

```text
includes/db.php
```

Exemple :

```php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "gestion_boutique";
```

## 6. Lancer l'application

Ouvrir :

```text
http://localhost/gestion_boutique
```

---

# Aperçu des modules

### Tableau de bord

* Interface moderne
* Navigation intuitive
* Responsive design

### Clients

* Gestion complète des clients

### Produits

* Gestion du catalogue
* Gestion du stock

### Commandes

* Création rapide de commandes
* Calcul automatique du montant

### Factures

* Visualisation des factures
* Export PDF

---

# 🎯 Objectifs pédagogiques

Ce projet a été réalisé dans le cadre d'un apprentissage du développement web afin de mettre en pratique :

* La programmation PHP
* La gestion des bases de données MySQL
* Les opérations CRUD
* Les relations entre tables
* La génération de documents PDF

---

# 👨‍💻 Auteur

**MADJIYENGAR Axel Joseph**

Étudiant en Génie Informatique au CEFOD Business School

Passionné par le développement web, la cybersécurité et le hacking éthique.

GitHub : https://github.com/MadjiyengarAxelJoseph

---

# Projet proposé par

Mr KAGONBE KANABET Bruno cours web Dynamiquee
