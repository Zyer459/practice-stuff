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

/**(1)DOES NOT CAUSE RE-RENDER
 * if we try to count how many times the app renders using useState hook, 
 * we wiil be caught in an infinite loop, because this hook itself causes a re-render
 * To avoid this we can use a useRef hook
 */
// use useRef to track app renders

function App () {
  const [input, setInput] = useState(""); {/**here, value inside useState("empty string") is the value of input & setInput is a function to update(when called) the input value */}
  const count = useRef(0); {/**here, value inside useRef(0) is the .current property of the count obj */}

  useEffect (() => {
    count.current = count.current + 1;
  });

  return (
    <>
    <input
    type="text"
    value={input}
    onChange={(x) => setInput(x.target.value)}
    />
    <h1>Render count: {count.current}</h1>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<App />)

/**note: the useRef() returns only 1 item an object with its object.current property
 * when useRef is initialized & set the inital value: useRef(0),
 * it really works like this > const count = {current: 0}.
 * then access the value by using count.current.
*/

//there may be some mistakes I made here, I'm new to this.