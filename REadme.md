# 🚀 Déploiement d’une application PHP avec Ansible

## Description du projet:

Ce projet a pour objectif de maîtriser Ansible à travers un cas pratique de déploiement automatisé.

L’infrastructure déployée comprend :
- Des serveurs web exécutant une application PHP
- Un serveur base de données MariaDB
- Un load balancer
- Une gestion sécurisée des secrets avec **Ansible Vault**

L’application PHP est volontairement simple, car le but principal du projet est **l’automatisation et l’orchestration avec Ansible**, et non le développement applicatif.

## Architecture:

- **Web Servers** : hébergement de l’application PHP  
- **Database Server** : MariaDB 
- **Load Balancer** : répartition de charge  
- **Control Node** : Ansible

## Technologies utilisées:

- Ansible
- Ansible Roles
- Ansible Vault
- PHP
- MariaDB
- Linux (VMs)

##  Structure du projet

.
├── inventory

├── playbooks/

├── roles/

│   ├── app/

│   ├── database/

│   ├── php/

│   ├── nginx/

│   └── haproxy/

├── vault.yml 

├── .gitignore

└── README.md

## Exécution du projet:

   **Lancer le playbook principal** :

    ansible-playbook -i inventory playbooks/site.yml --ask-vault-pass

## Objectif:
- Comprendre la structure d’un projet Ansible

- Utiliser les roles

- Gérer les secrets avec Ansible Vault

- Déployer automatiquement une application multi-nœuds

- Appliquer les bonnes pratiques DevOps

## Résultat:

Test depuis les webservers :

   curl http://localhost

Le déploiement s’exécute avec succès

L’application PHP se connecte correctement à la base MariaDB

L’application est accessible via le load balancer
