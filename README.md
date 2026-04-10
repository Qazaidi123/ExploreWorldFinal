# DevOps Project: Travel Website Deployment

## 1. Project Overview
This project demonstrates end-to-end deployment of a travel website using modern DevOps tools including Git, Ansible, Docker, Jenkins, Kubernetes, and AWS (EC2 & EKS).

## 2. GitHub Repository Structure
kubernetes/
├── Ansible/
│ ├── installation.yaml
│ └── inventory.yaml
├── frontend/
│ ├── Dockerfile
│ ├── index.html
│ ├── script.js
│ └── style.css
├── backend/
│ ├── api.php
│ └── Dockerfile
├── k8s/
│ ├── backend-deployment.yaml
│ ├── backend-service.yaml
│ ├── frontend-deployment.yaml
│ └── frontend-service.yaml
└── Jenkinsfile

