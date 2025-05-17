
# MobiusRift Theme – Pro Onboarding Edition
Welcome to your futureproof, pro-onboarding WordPress theme kit!

## What is this?
A developer-friendly, modular, and documented child theme for WordPress (Bricks Builder).

## Who should use this?
Anyone building, customizing, or maintaining the Quiet Forge site. Entry-level devs: this is for YOU.

## How do I install?
1. Upload this folder (zipped) to wp-content/themes.
2. Activate in WordPress admin.
3. Read this README and check `/overrides` for your custom hooks.

## What can I safely edit?
| File/Token                | Purpose               | Safe to Edit? | Gotchas/Dependencies         |
|--------------------------|-----------------------|---------------|------------------------------|
| style.css                | WP theme header/meta  | Yes           | Needs correct theme name     |
| functions.php            | Theme functions/setup | Yes           | Use child theme hooks only   |
| theme.json               | Block style settings  | With care     | JSON strict; backup before edits |
| overrides/custom-overrides.css | Custom CSS overrides   | Yes           | Review CSS specificity       |
| overrides/custom-overrides.js  | Custom JS overrides    | Yes           | Run in footer; no jQuery by default |


## FAQ
- **Where do I change colors?** Edit `/overrides/custom-overrides.css` or use token files in `/assets`.
- **How do I override scripts?** See `/overrides/custom-overrides.js`.
- **How do I make new templates?** Copy from `/template-parts`.
- **Who do I ask for help?** Check this README or `KNOWN_ISSUES.md` first!

---
*Last updated: 2025-05-17*
