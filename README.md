# BrandDevelopers WordPress Theme

Custom WordPress theme built from the BrandDevelopers Figma mockup.

## Design Tokens (from Figma)
- **Heading font:** Anta (Regular 400)
- **Body font:** DM Sans (300/400/500)
- **Primary blue:** #003399
- **Background cream:** #F5F3EF
- **Dark background:** #161616
- **White:** #F9FAFB
- **Grey text:** #666666

## Theme Files
```
branddevelopers-theme/
├── style.css              ← Theme stylesheet + design tokens
├── functions.php          ← Theme setup, CPTs, Elementor support
├── header.php             ← Site header + navigation
├── footer.php             ← Site footer + newsletter + CTA
├── index.php              ← Fallback template
├── front-page.php         ← Homepage
├── page-about.php         ← About page (assign template in WP admin)
├── page-services.php      ← Services page (assign template in WP admin)
├── archive-case_study.php ← Case Studies archive
├── js/
│   └── main.js            ← Theme JS: nav, animations, newsletter
└── css/                   ← (optional extra CSS files)
```

## Installation

1. **Upload the theme:**
   - Go to WordPress Admin → Appearance → Themes → Add New → Upload Theme
   - Upload `branddevelopers-theme.zip`
   - Click Activate

2. **Install required fonts:**
   - Anta and DM Sans are loaded from Google Fonts automatically

3. **Install Elementor Free** (already installed per your setup)

4. **Set up pages:**
   - Create pages: Home, About, Services
   - For **Home:** Settings → Reading → set as static homepage → select `front-page.php`
   - For **About:** Edit page → Page Attributes → Template → "About Page"
   - For **Services:** Edit page → Page Attributes → Template → "Services Page"
   - Case Studies archive is auto-generated at `/case-studies/`

5. **Set up navigation:**
   - Appearance → Menus → Create "Primary Navigation" menu
   - Add: Home, About, Services, Case Studies, Blog, Contact
   - Assign to "Primary Navigation" location

6. **Add content:**
   - **Case Studies:** Admin → Case Studies → Add New
     - Add title, featured image, content, and fill in: Client, Service Type, Year
   - **Team Members:** Admin → Team → Add New
     - Add name (title), photo (featured image), and Role
   - **Testimonials:** Admin → Testimonials → Add New
     - Add quote (content), Author Name, Company, Role

7. **Elementor pages:**
   - For any page you want to build with Elementor, open it and click "Edit with Elementor"
   - The theme CSS variables are available for custom styling
   - Set Elementor container width to 1280px to match theme layout

## Custom Post Types
- `case_study` — Portfolio/case study projects
- `team_member` — Team member profiles  
- `testimonial` — Client testimonials

## Theme Customizer Options
Go to Appearance → Customize to set:
- `bd_hero_image` — Homepage hero background image
- `bd_about_image` — About page portrait photo
- `bd_services_hero_image` — Services hero background
- `bd_services_web_image` — Web design section image
- `bd_services_brand_image` — Brand strategy section image

## Elementor Integration Tips
- Use Elementor for content-heavy flexible sections (blog, contact forms)
- Use the custom theme templates for structural pages (Home, About, Services)
- Theme CSS variables work inside Elementor Custom CSS fields

## Contact Form
Install **WPForms Lite** or **Contact Form 7** and embed on your Contact page.

## Newsletter
The newsletter form submits via AJAX to `bd_newsletter` action.
Hook into your email provider (Mailchimp, ConvertKit, etc.) in `functions.php` under the newsletter handler section.

---
© 2025 BrandDevelopers. Toronto, Ontario, Canada.
