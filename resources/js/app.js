// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes React and other helpers. It's a great starting point while
//  * building robust, powerful web applications using React + Laravel.
//  */

// require('./bootstrap');

// /**
//  * Next, we will create a fresh React component instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */

// require('./components/Example');

// resources/js/app.js
import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App01.js';

// Ensure that there is an element with id="root" in your Blade template
// const container = document.getElementById('root');
// if (container) {
//     const root = ReactDOM.createRoot(container);
//     root.render(<App />);
// }


// Old code (React 17 and earlier)
// import React from 'react';
// import ReactDOM from 'react-dom';

// const App = () => {
//     return <div>Example Component</div>;
// };

// export default container;

// const container = document.getElementById('root');

// if (container) {
//     ReactDOM.render(<App />, container);
// }

// Updated for React 18
// import React from 'react';
// import ReactDOM from 'react-dom/client';

// const App = () => {
//     return <div>Example Component</div>;
// };

// export default App;

const container = document.getElementById('root');
if (container) {
    const root = ReactDOM.createRoot(container);
    root.render(<App />);
}