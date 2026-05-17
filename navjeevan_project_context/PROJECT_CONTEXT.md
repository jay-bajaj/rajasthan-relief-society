# Navjeevan Website Project Context

## Project Overview

This project is a lightweight, responsive educational website system for the Rajasthan Relief Society / Navjeevan education group.

It currently covers:

1. Main domain institutional landing page
2. Navjeevan Junior College subdomain site
3. Bajaj Degree College subdomain site

The project originally started as a static HTML/CSS website and later evolved into a reusable PHP-templated architecture using PHP includes.

The old WordPress website was compromised with spam injections and SEO spam content. The new architecture intentionally avoids WordPress, plugins, databases, uploads, authentication, and heavy CMS systems.

---

## Architecture

### Current Stack

- PHP includes
- HTML5
- CSS3
- Vanilla JavaScript
- Responsive design
- Google Forms integration for Junior College admissions
- Linux cPanel hosting

No database is currently used.

---

## Current Local Folder Structure

Workspace root:

```text
E:/Navjeevan/StaticWebsite
|-- index.php
|-- css/
|   `-- style.css
|-- images/
|   |-- favicon.png
|   |-- Logo.jpg
|   `-- navjeevanMainBuilding.jpeg
|-- juniorCollege/
|   |-- index.php
|   |-- about.php
|   |-- courses.php
|   |-- admissions.php
|   |-- contact.php
|   |-- privacy-policy.php
|   |-- terms-and-conditions.php
|   |-- refund-policy.php
|   |-- includes/
|   |-- css/
|   |-- js/
|   `-- images/
|-- bajajdegreecollege/
|   |-- index.php
|   |-- about.php
|   |-- courses.php
|   |-- admissions.php
|   |-- contact.php
|   |-- privacy-policy.php
|   |-- terms-and-conditions.php
|   |-- refund-policy.php
|   |-- includes/
|   |-- css/
|   |-- js/
|   `-- images/
`-- navjeevan_project_context/
    |-- PROJECT_CONTEXT.md
    |-- README.md
    `-- TODO.md
```

The `juniorCollege/` folder is local source code for the live subdomain `navjeevanjuniorcollege.navjeevanvidhalya.in`.

The `bajajdegreecollege/` folder is local source code for the live subdomain `bajajdegreecollege.navjeevanvidhalya.in`.

On cPanel, each subdomain may have its own document root. Do not assume the live Junior College site is available at `navjeevanvidhalya.in/juniorCollege/`.

---

## Domains Architecture

Main domain:

- `navjeevanvidhalya.in`
- Purpose: Rajasthan Relief Society / institutional landing page
- Current root files: `index.php`, `css/style.css`, `images/`
- Links out to the real subdomain URLs

Subdomains:

- `navjeevanjuniorcollege.navjeevanvidhalya.in`
- `bajajdegreecollege.navjeevanvidhalya.in`

Current main-domain links should use absolute subdomain URLs:

- `https://navjeevanjuniorcollege.navjeevanvidhalya.in/index.php`
- `https://navjeevanjuniorcollege.navjeevanvidhalya.in/contact.php`
- `https://bajajdegreecollege.navjeevanvidhalya.in/index.php`
- `https://bajajdegreecollege.navjeevanvidhalya.in/contact.php`

---

## Includes Architecture

Each college subsite uses PHP includes.

### head.php

Contains:

- meta charset
- viewport
- favicon
- stylesheet link
- dynamic page title support

Example:

```php
<title>
  <?php echo $pageTitle; ?>
</title>
```

### header.php

Contains:

- navbar
- logo
- responsive menu button
- navigation links

Should not contain:

- `<!DOCTYPE html>`
- `<html>`
- `<head>`
- `<body>`

### footer.php

Contains:

- footer content
- legal links
- quick links
- copyright

Should not contain opening HTML tags.

---

## Dynamic Page Titles

Pages define titles before including `head.php`.

Example:

```php
<?php
$pageTitle = "About Us - Navjeevan Junior College";
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
```

---

## Responsive Navbar

HTML IDs:

- Button: `menuToggle`
- Navbar: `mainNav`

JavaScript:

```js
const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');

if (menuToggle && mainNav) {
  menuToggle.addEventListener('click', () => {
    mainNav.classList.toggle('active');
  });
}
```

Mobile CSS pattern:

```css
@media (max-width: 768px) {
  .menu-toggle {
    display: inline-flex;
  }

  .site-nav {
    display: none;
    flex-direction: column;
  }

  .site-nav.active {
    display: flex;
  }
}
```

---

## Design System

The main domain and college subsites should look visually related.

Core design language:

- clean
- lightweight
- maintainable
- responsive
- scalable
- institutional

Current shared visual cues:

- white sticky header
- logo plus text lockup
- slate text palette
- primary blue `#1d4ed8`
- dark footer `#0f172a`
- light page background `#f8fafc`
- rounded white cards
- pill-style `.btn` buttons
- CSS grid layouts

Avoid:

- excessive animations
- overdesigned sections
- unnecessary frameworks
- plugin-heavy systems
- visual styles that diverge strongly from the Junior College site

---

## Button System

Reusable button architecture:

- `.btn`
- `.btn-primary`
- `.btn-secondary`

Example:

```html
<a class="btn btn-primary" href="admissions.php">
  Apply Now
</a>
```

Current button styling includes:

- `inline-flex`
- rounded pill style
- hover transform
- transition animation

---

## Course Structures

Junior College and Bajaj Degree College courses must stay separate.

### Navjeevan Junior College Courses

Commerce (XI & XII):

- S.P.
- Mathematics
- Information Technology
- Hindi
- Marathi

Science (XI & XII):

- Computer Science
- Information Technology
- Psychology
- Geography
- Economics
- Hindi
- Marathi

### Bajaj Degree College Courses

- BA Psychology
- Data Science
- BCom
- BSc Chemistry
- BSc Information Technology (IT)

Bajaj Degree College should not show Junior College XI/XII streams.

---

## Admissions

Admissions use links instead of a custom backend.

### Navjeevan Junior College

Uses Google Forms:

- 11th Admissions: `https://forms.gle/eERF7PSLuvw29KfR7`
- 12th Admissions: `https://forms.gle/EitqA9Yo74Tb9ZMQ7`

Implementation:

- button-based links
- open forms in new tabs
- no embedded forms initially

### Bajaj Degree College

As of this context update, final admission form URLs are not provided.

Current implementation:

- `First Year Degree Admission` card links to `contact.php`
- `Transfer / Direct Admission` card links to `contact.php`

Replace these with actual admission form URLs when available.

---

## Current Features Completed

- Main domain parent landing page
- Main domain links to both college subdomains
- Responsive design
- PHP includes for both college subsites
- Reusable layouts
- Dynamic titles
- Responsive navbar
- Mobile hamburger menu
- Gallery section
- Contact page
- Google Maps iframe
- Legal pages
- Junior College admissions system using Google Forms
- Bajaj Degree College placeholder admissions flow
- Favicon setup
- Reusable buttons
- CSS grid layouts
- Separate Junior College and Bajaj Degree College course pages

---

## Security Decisions

The project intentionally avoids:

- WordPress
- plugins
- databases
- uploads
- authentication systems

Reason:

Reduce attack surface after the previous WordPress compromise.

---

## Recommended .htaccess

```apache
Options -Indexes

RewriteEngine On

RewriteCond %{HTTPS} !=on
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

Use this in each live document root as appropriate.

---

## Current TODO

- Finalize SSL/HTTPS
- Finalize cPanel subdomain deployment
- Add `robots.txt`
- Add `sitemap.xml`
- SEO optimization
- Open Graph tags
- Structured data
- Final typography polish
- Gallery improvements
- Footer refinement
- Final deployment cleanup
- Replace Bajaj Degree College admission placeholder links when final form URLs are available

---

## Hosting Notes

Hosting:

- Linux cPanel hosting

Architecture chosen because it is:

- lightweight
- secure
- low maintenance
- inexpensive to host
- easy to deploy

---

## Created

Generated for project continuation and Codex/project handoff.

Last updated locally after creation of the main landing page and Bajaj Degree College subdomain source folder.
