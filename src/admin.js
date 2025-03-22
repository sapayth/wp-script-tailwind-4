import {createRoot} from '@wordpress/element';
import './admin.css';

/**
 * Admin App Component
 */
const AdminApp = () => {
    return (
        <div className="wp-script-tailwind-admin container mx-auto p-4">
            <h2>WP Script Tailwind Admin Dashboard</h2>

            <div className="card">
                <h3 className="text-xl font-semibold mb-3">Welcome to the Admin Dashboard</h3>
                <p className="mb-4">This is an example of using TailwindCSS with WordPress scripts in the admin area.</p>

                <div className="info-box">
                    <p>TailwindCSS is working! This box is styled using Tailwind utility classes.</p>
                </div>

                <a href="#" class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-870/30">
                    Example Button <span aria-hidden="true">→</span>
                </a>
            </div>

            <div className="card">
                <h3 className="text-xl font-semibold mb-3">Features</h3>
                <ul className="list-disc pl-5 space-y-2">
                    <li>WordPress Admin Integration</li>
                    <li>TailwindCSS Styling</li>
                    <li>React Components</li>
                    <li>WP Scripts Build Process</li>
                    <li>WP Scripts Build Process</li>
                </ul>
            </div>
        </div>
    );
};

// Render the app
const appContainer = document.getElementById('wp-script-tailwind-admin-app');
if (appContainer) {
    createRoot(appContainer).render(<AdminApp />);
}