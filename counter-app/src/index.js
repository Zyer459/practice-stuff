import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState,useEffect } from 'react';

/* useEffect allows us to perform various side effects in components
such as fetch data, directly update DOM, timers
useEffect takes 2 arguments, 2nd on is optional
useEffect(<function>, <dependency>)*/

/*useState & useEffect are functions which manipulate values and renders everytime values are changed*/

/* the code below uses only 1 dependency
if there are multiple dependencies they should be included in the useEffect dependency array*/

/* EFFECT CLEANUP
some effects need to reduce memory leaks
timeouts, subscriptions, event listeners and other unnecessary effects should be disposed
do this (cleanup) by including a return function at the end of the useEffect hook*/

function Timer () {
  const [count, setCount] = useState(0);

  useEffect (() => {
    let timer = setTimeout (() => {
      setCount (count => count + 1)
    }, 1000);

    return () => clearTimeout (timer)
  }, [])
  return <h1>I've rendered count {count} times!</h1>
}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Timer />);

/* in the above code useEffect renders only once because of an empty array as its 2nd parameter.
And the return calls a function that clears the timer variable (which contains the setTimeout function)
NOTE to clear timer I had to name it*/

//there may be some mistakes I made here, I'm new to this.