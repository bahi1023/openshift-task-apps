# 🚀 Simple API Project – OpenShift Multi-Deployment Strategies

A hands-on DevOps project demonstrating how to deploy the **same simple API** using **multiple OpenShift deployment strategies** across **three different technologies**.

This project focuses on **platform usage, deployment patterns, and container workflows** rather than application complexity.

---

## 🧭 Project Overview

The objective of this project is to explore and apply different **OpenShift deployment mechanisms** by deploying a minimal API implemented in:

* 🐍 **Python** (Flask)
* 🟢 **Node.js** (Express)
* 🐘 **PHP** (Apache)

Each application exposes the same endpoints and is deployed using **multiple OpenShift approaches** to highlight differences and use cases.

OpenShift was used to **build, deploy, and validate** the workloads, while this GitHub repository contains the **source code and manifests** representing those deployments.

---

## 🔌 API Endpoints

Each application exposes the following endpoints:

| Endpoint | Description |
| :--- | :--- |
| `/health` | Health check endpoint |
| `/message` | Returns a static message |
| `/date` | Returns current date and time |

---

## 🏗️ Architecture Overview

* ☸️ **OpenShift Sandbox** – Application platform
* 📦 **Containers** – Application runtime
* 🔄 **ImageStreams** – Image lifecycle management
* 📄 **YAML Manifests** – Raw Kubernetes/OpenShift deployments
* 📋 **OpenShift Templates** – Reusable deployment templates
* 🐳 **Dockerfile** – Manual image build workflow
* 🚢 **RedHat Quay** – External container registry
* 🐙 **GitHub** – Source code & manifest repository

---

## 🔐 Security & Runtime Notes

* Applications run as **non-root users**
* Root user is **not responsible for running the containers**
* Security Context Constraints (SCC) are enforced by OpenShift
* Platform-managed networking and routing is used

---

## 🚀 Deployment Strategies Implemented

The same API was deployed using **four different OpenShift strategies**:

### 1️⃣ Source-to-Image (S2I)
* OpenShift builds the image directly from source code
* Deployed using `oc new-app`

### 2️⃣ Deployment Using YAML
* Manual Kubernetes/OpenShift manifests
* **Includes:**
  * Deployment
  * Service
  * Route
* Liveness & readiness probes configured

### 3️⃣ OpenShift Templates
* Reusable templates bundling multiple resources
* Simplifies repeated deployments

### 4️⃣ ImageStream + oc new-app
* Images managed via OpenShift ImageStreams
* Deployments created from ImageStreams using `oc new-app`

---

## 🐳 Docker & RedHat Quay Integration

* A **Dockerfile** was written manually
* OpenShift Docker strategy build was used
* Images were built by OpenShift
* Images were **pushed to RedHat Quay**
* Authentication handled using a **Quay Robot Account**

This demonstrates:
* OpenShift-managed builds
* Manual Dockerfile workflows
* External registry integration

* 🟢 **Node.js**
