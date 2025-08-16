# Blade Section Files

This directory contains separate Blade template files for each section of the welcome page, making the code more organized and maintainable.

## Files Structure

### 1. `hero.blade.php`
- Hero section with main heading and call-to-action
- Contains the "Hair Transplant" title and consultation button
- Includes the visual element with leaf icon

### 2. `banner.blade.php`
- Promotional banner section with special offers
- Features discount information and key benefits
- Animated icon and call-to-action button

### 3. `about.blade.php`
- About Us section with company information
- Professional image with overlay
- Feature highlights and company credentials

### 4. `services.blade.php`
- Services section showcasing FUE Transplant, PRP Therapy, and Beard & Eyebrow
- Service cards with images and descriptions
- Interactive elements and learn more buttons

### 5. `contact.blade.php`
- Contact form section
- Simple form with name, email, and message fields
- Submit button for inquiries

### 6. `footer.blade.php`
- Footer section with copyright information
- Simple and clean design

## Usage

These sections are included in the main `welcome.blade.php` file using:

```php
@include('sections.hero')
@include('sections.banner')
@include('sections.about')
@include('sections.services')
@include('sections.contact')
@include('sections.footer')
```

## Benefits

1. **Maintainability**: Each section can be edited independently
2. **Reusability**: Sections can be reused in other pages
3. **Organization**: Cleaner, more organized code structure
4. **Collaboration**: Multiple developers can work on different sections
5. **Testing**: Easier to test individual sections

## CSS Classes

All styling is maintained in `public/css/welcome.css` and applies to these section files.

