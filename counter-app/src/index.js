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

/**(3)TRACKING STATE CHANGES
 * the useRef hook can be used to keep track of previous state values
 * this is because we are able to persist(keep) useRef values between renders
*/
// use useRef to keep track of previous state values

function App () {
  const [input, setInput] = useState("");
  const previousInput = useRef("");

  useEffect (() => {
    previousInput.current = input;
  }, [input]);

  return (
    <>
    <input
    type="text"
    value={input}
    onChange={(x) => setInput(x.target.value)}
    />
    <h1>Current value: {input}</h1>
    <h2>Previous value: {previousInput.current}</h2>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<App />)

/**in above code 
 * input & setInput is tracked & updated by useState
 * previousInput value is tracked by useRef & updated + rendered by useEffect hook
 * used a combination of useState, useEffect & useRef to keep track of previous state
 * In the useEffect, we are updating the useRef current value each time the inputValue is updated by entering text into the input field.
*/

//there may be some mistakes I made here, I'm new to this.