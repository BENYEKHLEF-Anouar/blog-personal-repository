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
    max-width: 80%;
    max-height: 60vh;
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

# **Rapport Complet sur le Projet Blog Solicode : Sprint 1**

**Réalisé par :**  
BENYEKHLEF Anouar    

**Encadré par :**  
M. ESSARRAJ Fouad

---

# Introduction et Contexte Général

Le projet Blog Solicode vise à créer une plateforme numérique dédiée pour communiquer les activités parascolaires de l'organisation, notamment IT-Wave.

Les réseaux sociaux présentent des limitations en termes de référencement SEO, de structuration des contenus et d'identité propre, menant à une dispersion des informations.

La solution : Une plateforme de blog dynamique, sécurisée et scalable, alignée sur des pratiques standard pour organisations éducatives.

---

# Analyse des Besoins

- **Communication centralisée** : Canal unique pour articles, événements et actualités IT-Wave.
- **Limites des réseaux sociaux** : Manque de SEO, structuration faible, absence d'identité dédiée.
- **Objectifs stratégiques** : Améliorer visibilité, découverte de contenus, scalabilité (e.g., commentaires, newsletters).

Études montrent que les blogs dédiés boostent le trafic organique pour ~55-70% des organisations, selon des sources comme HubSpot et Databox.

---

# Méthodologies Employées

## Méthode Scrum

Structure en sprints (2 semaines) :

- **Rôles** : Product Owner, Scrum Master, Équipe.
- **Artefacts** : Backlogs, Increment.
- **Événements** : Planning, Daily, Review, Retrospective.

Permet adaptation rapide et livraison incrémentale.

![Méthode Scrum](./images/scrum.jpg)

---

# Méthodologies Employées (suite)

## Design Thinking

Processus itératif centré utilisateur :

1. **Empathie** : Comprendre besoins.
2. **Définition** : Identifier problèmes.
3. **Ideation** : Brainstorming solutions.
4. **Prototypage** : Maquettes.
5. **Tests** : Validation utilisateurs.

Combinées pour développement efficace.

![Design Thinking](./images/design-thinking.png)

---

# Détails du Sprint 1 : Portail Web Public

Focus sur front-office accessible aux visiteurs anonymes.

Fonctionnalités clés :
- **Page d’accueil** : Articles récents, catégories.
- **Navigation** : Menu intuitif.
- **Recherche** : Moteur.
- **Lecture d’articles** : Affichage détaillé.

Établit bases pour expérience engageante.

---

# Travail Réalisé

## Focus Principal : Page de Recherche d'Articles

- **Fonctionnalités** :
  - Recherche full-text.
  - Filtrage dynamique par catégories.

## Labs et Recherches
- Vite pour bundling et hot-reloading front-end.

---

# Maquettes et Tests Utilisateurs

- **Maquette clé** : Page articles avec recherche, UX moderne.
- **Outils** : Tailwind CSS (utility-first), Preline UI (composants), Lucide (icons).
- **Tests** : Avec **Ayoub Faqihi** (apprenant 1ère année). 
Retours : Intuitive, suggestions sur visibilité filtres.

![Old Mockup](./images/search-page-capture.png)


---

![New Mockup](./images/search-new-mockup.png)

---

# Fonctionnalités Détaillées

Page de recherche suit use case :
- **Acteurs** : Visiteur.
- **Flux** : Requête → Résultats → Filtrage → Lecture.
- **Bénéfices** : Réduction temps recherche, personnalisation.

![Use Case search page](./images/search-us.png)


---

# Réalisation Technique Approfondie

## Back-End et Architecture
- **Framework** : Laravel 12.
- **Architecture N-Tiers** :
  - Controller : Requêtes HTTP.
  - Service : Logique métier.
  - Model : Base de données.
- Avantages : Scalabilité, testabilité.

---

# Réalisation Technique (suite)

## Front-End
- **Blade** : Templates réutilisables (components, layouts).
- **Tailwind CSS** : Développement rapide, responsive.
- **Preline UI** : Composants intégrés.
- **Lucide** : Icones.

## Gestion de Projet
- **GitHub** : Versionning, branches.

---

# Conclusion et Recommandations

 - Sprint 1 solidifie fondations : Structure claire, architecture scalable, UX testée.

Retours positifs valident approche ; ajustements pour accessibilité.

Prochains sprints : Fonctionnalités avancées (admin, interactions).

Merci pour votre attention.  
Questions ?

