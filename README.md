# WP Script Tailwind

A boilerplate WordPress plugin demonstrating how to use TailwindCSS with wp-scripts.

## Features

- WordPress Admin Dashboard Integration
- Frontend Display via Shortcode
- TailwindCSS Styling
- React Components
- WP Scripts Build Process

## Installation

1. Clone this repository to your WordPress plugins directory:
   ```
   cd wp-content/plugins
   git clone [repository-url] wp-script-tailwind-4
   ```

2. Navigate to the plugin directory:
   ```
   cd wp-script-tailwind-4
   ```

3. Install dependencies:
   ```
   npm install
   ```

4. Build the assets:
   ```
   npm run build
   ```

5. Activate the plugin in the WordPress admin dashboard.

## Usage

### Admin Dashboard

After activating the plugin, you'll see a new menu item "WP Script Tailwind" in your WordPress admin dashboard. Click on it to view the admin page with TailwindCSS styling.

### Frontend Display

Use the shortcode `[wp_script_tailwind]` in any post or page to display the frontend component with TailwindCSS styling.

## Development

### Start Development Server

For development with hot reloading:

```
npm run start
```

### Build for Production

To build optimized assets for production:

```
npm run build
```

## Structure

- `wp-script-tailwind-4.php` - Main plugin file
- `src/admin.js` - Admin React application
- `src/admin.css` - Admin TailwindCSS styles
- `src/frontend.js` - Frontend React application
- `src/frontend.css` - Frontend TailwindCSS styles
- `tailwind.config.js` - TailwindCSS configuration
- `postcss.config.js` - PostCSS configuration

## How It Works

1. The plugin registers an admin page and a shortcode for frontend display
2. It enqueues separate JavaScript and CSS files for admin and frontend
3. React components are rendered in designated containers
4. TailwindCSS provides utility classes for styling
5. WP Scripts handles the build process

## License

GPL v2 or later 