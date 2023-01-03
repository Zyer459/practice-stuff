import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef } from 'react';

/** the React useCallback hook returns a memoized callback function
 * think memoization as = caching a value so that it doesn't need to be recalculatd.
 * this allows us to isolate resource intensive functions so that, they wiil not automatically run on every render.
 * the useCallback only runs when one of its dependencies update.
 * this can improve performance.
 * 
 * the useCallback & useMemo hooks are similar. Main difference is their return funcions
 * useMemo returns a (memoized value) & useCallback returns a (memoized function)
 */

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<Todos />)

/**
*/

//there may be some mistakes I made here, I'm new to this.