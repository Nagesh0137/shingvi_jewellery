# Hero Background Image Setup Guide

## Current Setup

The hero section now includes a beautiful background image that enhances the visual appeal of your VIP numbers website.

## Background Themes Available

### 1. Default Theme (Business Professional)

```html
<div class="hero-background"></div>
```

- Features: Modern business/technology background
- Best for: Professional VIP number services

### 2. Technology Theme

```html
<div class="hero-background tech-theme"></div>
```

- Features: Abstract technology/digital background
- Best for: Tech-savvy audience

### 3. Mobile Theme (Currently Active)

```html
<div class="hero-background mobile-theme animated"></div>
```

- Features: Mobile phone and communication focused
- Best for: Mobile number services
- Includes: Animated sparkle effects

### 4. Business Theme

```html
<div class="hero-background business-theme"></div>
```

- Features: Corporate business environment
- Best for: Enterprise VIP services

## How to Change Background Theme

1. Open `application/views/user/index.php`
2. Find the line: `<div class="hero-background mobile-theme animated"></div>`
3. Replace the classes with your preferred theme:
   - `hero-background` (default)
   - `hero-background tech-theme`
   - `hero-background mobile-theme`
   - `hero-background business-theme`
   - Add `animated` class for sparkle effects

## Custom Background Image

To use your own background image:

1. Place your image in `assets/images/` directory
2. Name it `hero-bg-custom.jpg` (recommended: 1920x1080 resolution)
3. Update `assets/css/vip-homepage.css`:

```css
.hero-background {
	background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
		url("../images/hero-bg-custom.jpg");
}
```

## Current Demo Images

- **Primary**: Modern mobile technology (Unsplash)
- **Fallback**: Local placeholder in `assets/images/hero-bg-demo.jpg`

## Visual Effects Applied

- **Brightness**: 30% (darkened for text readability)
- **Saturation**: 120% (enhanced colors)
- **Overlay**: Gradient overlay in brand colors
- **Particles**: Animated sparkles (when `animated` class is used)

## Performance Tips

- Optimize images to under 500KB for faster loading
- Use WebP format when possible
- Consider lazy loading for mobile devices

## Mobile Responsiveness

The hero background automatically adapts to different screen sizes and maintains aspect ratio across all devices.
