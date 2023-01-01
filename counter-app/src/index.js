import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
import Counter from './components/counter';
import { useState,useEffect } from 'react';

/* useEffect allows us to perform various side effects in components
such as fetch data, directly update DOM, timers
useEffect takes 2 arguments, 2nd on is optional
useEffect(<function>, <dependency>)*/

function Timer () {
  const [count, setCount] = useState(0);

  useEffect(() => {
    setTimeout(() => {
      setCount(count => count+1);
    }, 1000)
  });
  return (
    <h1>I've rendered count {count} times</h1>
  )
}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Timer />);

/* but the timer keeps counting even though it should count only once
its because useEffect runs on every render
which means everytime the count changes, a render happens, which triggers another effect
to control this use the 2nd parameter <dependency>*/