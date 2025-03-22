import { render } from '@wordpress/element';

/**
 * Frontend App Component
 */
const FrontendApp = () => {
    return (
        <div className="wp-script-tailwind-app">
            <h2>WP Script Tailwind Frontend Demo</h2>

            <div className="info-section">
                <p className="text-lg mb-4">
                    This is a demonstration of using TailwindCSS with WordPress scripts on the frontend.
                </p>
                <p className="text-gray-600">
                    The styling is powered by TailwindCSS and the component is built with React.
                </p>
            </div>

            <div className="card">
                <h3 className="text-xl font-semibold mb-3">Example Card</h3>
                <p className="mb-4">
                    This card is styled using TailwindCSS utility classes through the custom
                    classes defined in our frontend.css file.
                </p>

                <div className="flex space-x-4">
                    <button className="button">
                        Primary Action
                    </button>
                    <button className="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded">
                        Secondary Action
                    </button>
                </div>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <div className="card">
                    <h3 className="text-xl font-semibold mb-3">Feature One</h3>
                    <p>Responsive design with Tailwind's utility classes</p>
                </div>
                <div className="card">
                    <h3 className="text-xl font-semibold mb-3">Feature Two</h3>
                    <p>Optimized build process with wp-scripts</p>
                </div>
            </div>
        </div>
    );
};

// Render the app
const appContainer = document.getElementById('wp-script-tailwind-app');
if (appContainer) {
    render(<FrontendApp />, appContainer);
}