# TODO

## Completed

- Created parent landing page for `navjeevanvidhalya.in`
- Moved Junior College source into `juniorCollege/`
- Created Bajaj Degree College source folder at `bajajdegreecollege/`
- Added main-domain links to both college subdomains
- Added Bajaj Degree College courses:
  - BA Psychology
  - Data Science
  - BCom
  - BSc Chemistry
  - BSc Information Technology (IT)
- Removed Bajaj Degree College placeholder Career Development course card
- Removed Bajaj Degree College homepage Student Support feature card
- Kept Junior College and Bajaj Degree College courses separate
- Created custom PHP mail admissions form for Bajaj Degree College

## High Priority

- Finalize SSL/HTTPS on main domain and both subdomains
- Finalize cPanel document roots for:
  - `navjeevanvidhalya.in`
  - `navjeevanjuniorcollege.navjeevanvidhalya.in`
  - `bajajdegreecollege.navjeevanvidhalya.in`
- Add `robots.txt`
- Add `sitemap.xml`
- Add `.htaccess` to each live document root
- Verify HTTPS redirects
- Remove old WordPress files completely from hosting
- Follow `DEPLOYMENT.md` during cPanel upload and verification

## Bajaj Degree College

- Confirm final course names/spelling with college office
- Confirm whether Bajaj needs separate contact email/phone/address
- Confirm production admissions recipient email in `process-admission.php`
- Test PHP `mail()` delivery on shared hosting

## UI Improvements

- Typography refinement
- Gallery polish
- Footer refinement
- Hero section balancing
- Check mobile layout on all three sites

## SEO

- Finalize meta descriptions
- Add Open Graph tags
- Add structured data
- Generate sitemap after final URLs are confirmed

## Security

- Keep architecture database-free unless absolutely needed
- Avoid WordPress/plugins/uploads/authentication
- Disable directory listing
- Verify HTTPS redirects
