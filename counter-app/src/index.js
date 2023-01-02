import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState,useEffect } from 'react';

/* ReactContext is a way to manage state globally
it can be used with useState hook to share state between deeply nested components more easily than useState alone */

/*A problem: the state should be by highest parent component in the stack that requires access to the state.
To illustrate below are many nested components, the component at the top & bottom of the stack needs access to the state.
To do this without Context, need to pass the state as "props" through each nested component this is called "prop drilling"*/

//The problem >

function Compononent1 () {
  const [user, setUser] = useState("John Doe");

  return (
    <>
    <h1>Hello {user}</h1>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<Compononent1 />)

//there may be some mistakes I made here, I'm new to this.