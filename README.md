[![logo](https://cvline.alexis-briet.fr/wp-content/themes/cvline/asset/img/cvline_blue.svg)]()
# CVLine
[![forthebadge](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/BrietGame/cvline)
[![forthebadge](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/fr/docs/Web/HTML)
[![forthebadge](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/fr/docs/Web/CSS)
[![forthebadge](https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white)](https://sass-lang.com)
[![forthebadge](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/fr/docs/Web/JavaScript)
[![forthebadge](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](php.net)
[![forthebadge](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/fr/)

[![forthebadge](https://i.ibb.co/S0wNCnd/nfs.png)](https://www.needfor-school.com)
Projet collaboratif entre 3 personnes au sein de la Formation 1BCIA chez [Need For School](https://www.needfor-school.com).


## Pour commencer
Avoir installé [GIT](https://git-scm.com), [Composer](https://getcomposer.org) ainsi que de créer et d'ouvrir un nouveau dossier avec votre IDE favori !

### Pré-requis

Ce qu'il est requis pour commencer avec votre projet...

- Installer [GIT](https://git-scm.com)
- Installer [Composer](https://getcomposer.org)
- Initier un nouveau projet [WordPress](https://fr.wordpress.org/download/)


### Installation

1 - Ouvrir votre dossier WordPress dans votre explorateur de fichiers.

2 - Allez à wp-content/themes.

3 - Ouvrir votre termine à cet endroit.

4 - Exécuter cette commande après avoir créer un nouveau dossier et après l'avoir ouvert dans votre IDE : ``git init``

5 - Exécuter cette commande : ``git clone https://github.com/BrietGame/cvline.git ``

6 - Veuillez installer HTML2PDF grâce à Composer : ``composer require spipu/html2pdf"``
> [Documentation pour HTML2PDF](https://github.com/spipu/html2pdf/blob/master/doc/README.md)

Ensuite, vous obtiendrez tout le projet réalisé en *localhost*.


## Démarrage

*Attention, nous utilisons la technologie Sass pour compiler notre CSS. Afin de l'utiliser convenablement, il faut exécuter la commande suivante dans un nouveau terminal distinct dans **asset/sass/style.scss** de vos commandes GIT* : ``sass style.scss ../../style.css --watch``

# Important
Vous devez créer les pages suivantes dans votre WordPress :
- **NOM DE LA PAGE** (/slug) NomDuModele
- **Accueil** (/) HomePage | **A définir en tant que page d'accueil dans** *Réglages > Lecture*
- **Mentions légales** (/legals) Legals
- **CV1** (/template-cv1) cv1
- **Déconnexion** (/logout) Logout
- **Espace Candidat** (/espace-candidat) EspaceCandidat
- **Espace Recruteur** (/espace-recruteur) EspaceRecruteur
- **FAQ** (/faq) FAQ
- **Générer un CV** (/generer-cv) GenerationCv
- **CVCreate** (/cv-create) CreateCV
- **Mon Espace** (/mon-espace) editProfil


## Fabriqué avec


_Outils utilisés :_
* [GitHub](https://github.com/) - Héberge le répertoire du projet
* [Animista](https://animista.net) - Librairie d'animations CSS

## Versions

**Dernière version stable :** 1.0

**Dernière version :** 1.0

## Auteurs
* **Jody PINTO** _alias_ [@PintoJody](https://github.com/PintoJody)
* **Alexis BRIET** _alias_ [@BΓΙΣΤGΛΠΣ](https://github.com/BrietGame)
* **Anais CRENIER** _alias_ [@AnaisCrenier](https://github.com/anaiscrenier)
* **Luc DORMAND** _alias_ [@𝑻𝒘_𝒀𝒂𝑩](https://github.com/lucdormand)
