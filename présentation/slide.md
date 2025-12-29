---
marp: true
theme: gaia
_class: lead
paginate: true
backgroundColor: #fff
backgroundImage: url('https://marp.app/assets/hero-background.svg')
style: |
  section {
    font-size: 22px;
    color: #333;
    line-height: 1.4;
    padding: 2em;
  }
  h1, h2 {
    color: #111;
    margin-bottom: 0.5em;
    font-weight: bold;
  }
  h1 {
    font-size: 2.5em;
  }
  h2 {
    font-size: 2em;
  }
  h3 {
    font-size: 1.5em;
    color: #222;
    margin-bottom: 0.4em;
  }
  p, li, blockquote {
    font-size: 1.1em;
    margin-bottom: 0.8em;
  }
  ul, ol {
    margin-left: 1.5em;
    margin-bottom: 1em;
  }
  img {
    max-width: 100%;
    max-height: 80vh;
    display: block;
    margin: 1em auto;
    object-fit: contain;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  blockquote {
    font-style: italic;
    color: #555;
    border-left: 4px solid #ddd;
    padding-left: 1em;
    margin: 1em 0;
  }
---

![bg left:40% 80%](https://via.placeholder.com/300x200?text=Logo+Solicode)

# **Projet Blog Solicode**
## Sprint 1: Visiteur & Découverte

**Réalisé par :**  
BENYEKHLEF Anouar    

**Encadré par :**  
M. ESSARRAJ Fouad

---

# Besoin

Solicode a besoin de communiquer sur ses activités parascolaires (IT-Wave) via un canal numérique centralisé et maîtrisé.  
Les réseaux sociaux ne suffisent plus : besoin de référencement, de structuration et d’une identité propre.

<br>
<br>

### La solution
Une plateforme de blog dynamique, sécurisée et scalable.

---

# Méthodologie

## Méthode Scrum

![Méthode Scrum](./images/scrum.jpg)

---

# Méthodologie

## Design Thinking

![Design Thinking](./images/design-thinking.png)

---

# Sprint 1 : Portail Web Public (Front-Office)

Interface visible par les visiteurs permettant :

- Page d’accueil  
- Navigation  
- Recherche 
- Lecture d’articles 

---

# Travail à faire

### Focus : Page de recherche d'articles

## Fonctionnalités à implémenter

* Recherche d’articles
* Filtrage par catégorie

## Labs et recherches

* Vite

## Maquettes et tests

* Maquette : Page des articles (page de recherche)
* Tests maquette : Apprenant 1ère année – **Ayoub Faqihi** (Visiteur)

---

# Fonctionnalités (page recherche)

![w:900 Use Case search page](./images/search-us.png)


---


# Maquettes (Mockups)

Les maquettes définissent l’interface utilisateur afin d’assurer une expérience claire, moderne et intuitive.  
Nous avons utilisé Tailwind + Preline UI pour le design initial.

### Représentation visuelle



![w:1100 New Mockup](./images/search-new-mockup.png)

---


# Réalisation technique

### Back-End & Architecture
- Framework : **Laravel 12**
- Architecture : **N-Tiers (Controller → Service → Model)**

### Front-End (Web)
- Moteur de template : **Blade (Components & Layouts)**
- CSS : **Tailwind CSS**
- UI Kit : **Preline UI**

### Gestion de projet
- GitHub

---

# Conclusion

Le Sprint 1 a permis de poser des bases solides pour la plateforme **Blog Solicode** :
- Structure claire  
- Architecture scalable  
- Expérience utilisateur bien définie  

Les prochains sprints se concentreront sur la complétion des sprints suivants.

Merci pour votre attention.  
Questions ?
