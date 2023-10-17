import App from "./App";
import { render } from '@wordpress/element';

/**
 * Import the stylesheet for the plugin.
 */
import './style/main.scss';

// Render the App component into the DOM
const wpReactJs = document.getElementById("wp-react-js")
if( wpReactJs ) {
    render(<App />, wpReactJs);
}