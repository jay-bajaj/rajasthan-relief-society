# Navjeevan Website Project Context

## Purpose

This project is a lightweight website system for Rajasthan Relief Society / Navjeevan educational institutions.

It supports:

- `navjeevanvidhalya.in` as the main institutional landing page
- `navjeevanjuniorcollege.navjeevanvidhalya.in` as the Junior College site
- `bajajdegreecollege.navjeevanvidhalya.in` as the Bajaj Degree College site

The architecture replaces a previously compromised WordPress site with a small, maintainable, low-attack-surface PHP/static setup.

---

## High-Level Decisions

- Use PHP includes, HTML, CSS, and vanilla JavaScript only.
- Do not use WordPress, plugins, databases, uploads, authentication, or a CMS.
- Keep each public site deployable as a standalone cPanel document root.
- Keep the main domain as a parent landing page that links to real subdomains.
- Keep Junior College and Bajaj Degree College content separate.
- Use external form links or lightweight PHP mail handlers for admissions.
- Do not use a database for admissions.
- Prefer simple, readable code over abstractions that do not reduce real maintenance work.

---

## Structure

Root-level files support the main domain:

```text
index.php
css/
images/
README.md
TODO.md
DEPLOYMENT.md
PROJECT_CONTEXT.md
```

College source folders:

```text
juniorCollege/
bajajdegreecollege/
```

Each college folder follows the same basic shape:

```text
index.php
about.php
courses.php
admissions.php
contact.php
privacy-policy.php
terms-and-conditions.php
refund-policy.php
includes/
css/
js/
images/
```

Live hosting may not mirror these folder names exactly. In cPanel, each subdomain should point to its own document root. Upload the contents of each college folder into the matching subdomain document root.

---

## Domain Conventions

Main domain:

```text
navjeevanvidhalya.in
```

Subdomains:

```text
navjeevanjuniorcollege.navjeevanvidhalya.in
bajajdegreecollege.navjeevanvidhalya.in
```

Production links from the main domain should use the real subdomain URLs. Do not assume the Junior College production site lives at `/juniorCollege/` under the main domain.

---

## Content Boundaries

Junior College and Bajaj Degree College courses must not be mixed.

Junior College course area:

- Commerce for XI/XII
- Science for XI/XII

Bajaj Degree College course area:

- BA Psychology
- Data Science
- BCom
- BSc Chemistry
- BSc Information Technology (IT)

Bajaj Degree College uses a lightweight custom PHP mail form for admissions inquiries. Keep it database-free and file-upload-free.

---

## Include Conventions

College subsites use PHP includes for shared layout.

- `includes/head.php` owns shared head metadata, stylesheet link, favicon, and dynamic title output.
- `includes/header.php` owns logo and navigation only.
- `includes/footer.php` owns footer and legal links only.
- Pages define `$pageTitle` before including `head.php`.
- Include files should not contain duplicate document wrappers such as `<!DOCTYPE html>`, `<html>`, or `<body>`.

---

## Frontend Conventions

The main domain and college subsites should feel visually related.

Preferred visual language:

- institutional
- lightweight
- clean
- responsive
- calm
- maintainable

Shared styling conventions:

- white sticky header
- logo plus institution name
- slate text palette
- primary blue `#1d4ed8`
- dark footer `#0f172a`
- light background `#f8fafc`
- rounded white cards
- pill-style buttons
- CSS grid for responsive layouts
- minimal animation

Avoid introducing frameworks or large libraries unless there is a strong reason.

---

## Security Constraints

The security posture is intentionally conservative because of the previous WordPress compromise.

Avoid:

- WordPress
- plugins
- databases
- file uploads
- authentication systems
- unnecessary server-side logic

Expected hosting hardening:

- HTTPS redirects
- directory listing disabled
- old WordPress files removed from live document roots

Operational deployment details belong in `DEPLOYMENT.md`.

---

## Documentation Boundaries

Keep this file limited to:

- high-level decisions
- structure
- constraints
- conventions

Do not add tiny implementation details, task lists, deployment steps, or one-off change logs here.

Use:

- `README.md` for project summary
- `TODO.md` for current work and pending tasks
- `DEPLOYMENT.md` for cPanel and deployment instructions
