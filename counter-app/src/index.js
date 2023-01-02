import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef } from 'react';

/**the useRef allows us to persist(keep/prolong/continue to exist) values between renders
 * it can be used to store mutable (changeable) value that does not cause render when updated
 * can be used to access a DOM element directly
*/

/**(2)ACCESSING DOM ELEMENTS
 * generally let React handle all DOM manipulations
 * but there are some places/instances where we can use 'useRef' without any issues.
 * In React, we can add a 'ref' attribute to an element to access it directly in the DOM.
*/
// use useRef to focus the input

function App () {
  const input = useRef();
  const focusInput = () => {
    input.current.focus();
  };

  return (
    <>
    <input type="text" ref={input}/>
    <button onClick={focusInput}>Focus input</button>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<App />)

/**note: the useRef() returns only 1 item an object with its object.current property
 * in above code to focus the input we usually click on it, but
 * with useRef & using 'ref' attribute to call the hook on the element we want to focus, and
 * adding a button element which render the focus
 * finally we can select/access(focus) the input element by clicking on the button as well as on the input field
 * and it works directly in the DOM
*/

//there may be some mistakes I made here, I'm new to this.