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

function Component1 () {
  const [user, setUser] = useState("John Doe");

  return (
    <>
    <h1>Hello {user}</h1>
    <Component2 user={user} />
    </>
  );
}

function Component2 ({ user }) {
  return (
    <>
    <h2>Component 2</h2>
    <Component3 user={user} />
    </>
  );
}

function Component3 ({ user }) {
  return (
    <>
    <h3>Component 3</h3>
    <Component4 user={user}/>
    </>
  );
}

function Component4 ({ user }) {
  return (
  <>
  <h4>Component 4</h4>
  <Component5 user={user}/>
  </>
  );
}

function Component5 ({ user }) {
  return (
  <>
  <h1>Component 5</h1>
  <h5>Hello {user} again!</h5>
  </>
  );
}

/** in the above example problem the last component (Component5) requires access to the state {user}.
But Components 2-4  does not require access to state {user}.
But still has to pass the state from one component to the next until it reaches last component,
so that Component5 can use the state. */

/** this is a tedious task to the next Component with the state as prop & attribute until it reaches its destination.
 * What if there were 50 or 500 components!? Will you write the same code again & again? 
 * This greatly increases the probability for error.
 */

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<Component1 />)

//there may be some mistakes I made here, I'm new to this.