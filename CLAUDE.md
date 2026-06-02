# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

WordPress site for Elvira Richards — talent management, casting, and news platform. Local dev install with all WordPress core, plugins, and the custom theme tracked in git.

## No Build System

No root-level build toolchain. Assets in the custom theme (`wp-content/themes/elvira theme/`) are pre-compiled static files (Bootstrap 4.1.1, jQuery, Slick carousel). Edit CSS/JS directly — no transpile/bundle step needed.

The `wp-content/themes/twentynineteen/` theme has its own `package.json` but is not the active theme.

## Local Dev Setup

- **DB:** MySQL, name `elvirari_wp`, host `localhost`, user `root` / pass `toor`
- **Debug:** `WP_DEBUG`, `WP_DEBUG_LOG`, `WP_DEBUG_DISPLAY` all `true` in `wp-config.php`
- SQL dumps in repo root (`wp-elvira.sql` and dated variants) can restore the database.

## Custom Theme: "Elvira Theme"

Path: `wp-content/themes/elvira theme/`

Key files:
- `functions.php` — all custom post types, taxonomies, and menu registrations (308 lines)
- `header.php` / `footer.php` — Bootstrap navbar, social embeds
- `page-*.php` / `single-*.php` — page and CPT templates
- `css/style.css` — primary custom stylesheet
- `js/scripts.js` — primary custom JavaScript

**Custom Post Types** (all registered in `functions.php`):
| Post Type | Slug | Purpose |
|---|---|---|
| Management detail | `management_detail` | Talent/actors with `management` taxonomy |
| Services | `servicios_detalle` | Services offered |
| Social networks | `socialred_detalle` | Social link entries |
| Trailers | `trailer_elvira` | Video trailers |
| Workshops | `taller_info` | Workshop listings |
| News | `noticia_detalle` | News articles |

**Custom Taxonomy:** `management` (hierarchical) — categorizes `management_detail` entries.

**Menus:** `header_root` (main nav), `social` (social links).

## Plugins

Active plugins under `wp-content/plugins/`:
- `advanced-custom-fields` — custom fields
- `carbon-fields` — alternative custom field framework (has `composer.json` + `package.json`)
- `contact-form-7` + `flamingo` — forms and message archival
- `navz-photo-gallery` — ACF photo gallery field extension
- `classic-editor`, `gutenberg`, `akismet`

## Asset Stack

- Bootstrap 4.1.1
- jQuery 1.11.0 (legacy) + 3.3.1
- Slick carousel 1.1
- FontAwesome 5.1.1 (CDN)
- Google Fonts: Raleway
