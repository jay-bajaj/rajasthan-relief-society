# Deployment Guide

## Hosting

Target hosting is Linux cPanel.

The project is intentionally static/PHP-only:

- no WordPress
- no database
- no custom backend
- no uploads
- no authentication

Each site should be deployed to its own cPanel document root.

---

## Domains

### Main Domain

Domain:

```text
navjeevanvidhalya.in
```

Purpose:

- Parent institutional landing page for Rajasthan Relief Society / Navjeevan
- Links to both college subdomains

Local files to upload:

```text
index.php
css/
images/
```

Upload destination:

```text
public_html/
```

or the cPanel document root configured for `navjeevanvidhalya.in`.

---

### Navjeevan Junior College Subdomain

Domain:

```text
navjeevanjuniorcollege.navjeevanvidhalya.in
```

Local source folder:

```text
juniorCollege/
```

Upload the contents of `juniorCollege/`, not the folder itself, into the cPanel document root for the subdomain.

Expected live root after upload:

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

Important:

- The live Junior College site is on the subdomain.
- Do not rely on `navjeevanvidhalya.in/juniorCollege/index.php` for production.

---

### Bajaj Degree College Subdomain

Domain:

```text
bajajdegreecollege.navjeevanvidhalya.in
```

Local source folder:

```text
bajajdegreecollege/
```

Upload the contents of `bajajdegreecollege/`, not the folder itself, into the cPanel document root for the subdomain.

Expected live root after upload:

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

---

## cPanel Subdomain Setup

In cPanel:

1. Open Subdomains or Domains.
2. Confirm the document root for each subdomain.
3. Upload the matching local folder contents into that document root.
4. Keep each subdomain isolated in its own document root.

Recommended document roots may look like:

```text
public_html/
public_html/navjeevanjuniorcollege/
public_html/bajajdegreecollege/
```

Actual paths may differ depending on cPanel configuration. Always confirm inside cPanel before uploading.

---

## .htaccess

Add `.htaccess` to each live document root.

Recommended baseline:

```apache
Options -Indexes

RewriteEngine On

RewriteCond %{HTTPS} !=on
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

Purpose:

- disables directory listing
- redirects HTTP to HTTPS

If cPanel or AutoSSL creates conflicting rules, merge carefully instead of overwriting blindly.

---

## SSL / HTTPS

In cPanel:

1. Open SSL/TLS Status or AutoSSL.
2. Verify SSL certificates for:
   - `navjeevanvidhalya.in`
   - `www.navjeevanvidhalya.in`
   - `navjeevanjuniorcollege.navjeevanvidhalya.in`
   - `bajajdegreecollege.navjeevanvidhalya.in`
3. Run AutoSSL if certificates are missing.
4. Test both HTTP and HTTPS versions after deployment.

---

## Admissions Links

### Junior College

Junior College admissions currently use Google Forms:

```text
11th Admissions: https://forms.gle/eERF7PSLuvw29KfR7
12th Admissions: https://forms.gle/EitqA9Yo74Tb9ZMQ7
```

These should open in new tabs.

### Bajaj Degree College

Bajaj admission form URLs are not finalized yet.

Current placeholder behavior:

- First Year Degree Admission links to `contact.php`
- Transfer / Direct Admission links to `contact.php`

Replace these links when final forms are available.

---

## Pre-Deployment Checklist

- Confirm latest files are uploaded to the correct document root.
- Confirm `index.php` exists at each site root.
- Confirm `includes/`, `css/`, `js/`, and `images/` exist for both subdomains.
- Confirm main domain has root-level `css/` and `images/`.
- Confirm no old WordPress files remain in the live document roots.
- Confirm no accidental `/juniorCollege/` production links on the main site.
- Confirm main-domain links use actual subdomains.
- Confirm Bajaj Degree College does not show Junior College XI/XII courses.
- Confirm Junior College does not show Bajaj Degree College courses.

---

## Post-Deployment Checks

Open these URLs:

```text
https://navjeevanvidhalya.in/
https://navjeevanjuniorcollege.navjeevanvidhalya.in/
https://bajajdegreecollege.navjeevanvidhalya.in/
```

Check on each site:

- home page loads
- logo loads
- favicon loads
- hero image loads
- CSS styling loads
- mobile menu works
- navigation links work
- courses page is correct
- admissions page is correct
- contact page loads
- map loads
- legal links load
- HTTP redirects to HTTPS
- directory listing is disabled

---

## Cache Notes

If changes do not appear immediately:

- clear browser cache
- try an incognito window
- check cPanel cache tools if enabled
- verify the files were uploaded to the correct document root

---

## Rollback

Before a major upload:

1. Download a backup copy of the current live document root.
2. Upload the new version.
3. Test all key pages.
4. If a critical issue appears, restore the previous backup.

Because the site is PHP/static and database-free, rollback is file-based and straightforward.
