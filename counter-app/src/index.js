import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef } from 'react';

/**the useReducer hook is similar to the useState hook
 * allows for custom state logic
 * if its required to keep track of multiple pieces of state that require complex logic,
 * useReducer hook may be helpful
 * useReducer hook accepts 2 arguments > (reducer), (initialState).
 * Syntax: useReducer (<reducer>, <initialState>).
 * the <reducer> function contains custom state logic &
 * <initialState> will be a simple value but generelly contain an {object}
 * the useReducer hook returns the currrent [State] & a [Dispatch] method.
 */

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<App />)

/**
*/

//there may be some mistakes I made here, I'm new to this.