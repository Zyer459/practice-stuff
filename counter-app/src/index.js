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

/*useState & useEffect are functions*/

/* the code below uses only 1 dependency
if there are multiple dependencies they should be included in the useEffect dependency array*/

function Counter () {
  const [count, setCount] = useState(0);// <-- set value of count variable to 0 && setCount updates count value everytime it is called
  const [calculation, setCalculation] = useState(0);// <-- set value of calculation variable to 0 && setCalculation updates calculation value

  useEffect (() => {
    setCalculation (() => count * 2);
  }, [count]) //<-- add count variable here as dependency parameter(2nd parameter) of useEffect hook && renders when count value changes

  return (
    <>
    <h1>Count: {count}</h1>
    <h1>Calculation: {calculation}</h1>
    <button
    type="button"
    onClick={() => setCount((c) => c + 1)}
    class="btn btn-dark">
    +
    </button>
    </>
  )
}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Counter />);

/* in the above code onClick att. calls an arrow function which calls the setCount which then updates the count variable 
and that triggers the setCalculation to render variables*/

//there may be some mistakes I made here, I'm new to this.