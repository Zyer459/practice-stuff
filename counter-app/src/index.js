import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState,createContext,useContext } from 'react'; // <-- import createContext & useContext

/* ReactContext is a way to manage state globally
it can be used with useState hook to share state between deeply nested components more easily than useState alone */

/*A problem: the state should be by highest parent component in the stack that requires access to the state.
To illustrate below are many nested components, the component at the top & bottom of the stack needs access to the state.
To do this without Context, need to pass the state as "props" through each nested component this is called "prop drilling"*/

/** the solution: 
*1) create context 
*2) use context provider property to wrap the tree of components that need the state Context
*3) to use the Context in a child component, we need to access it using the useContext hook
*4) include the useContext in the import statement 
*5) then access  the user Context in all components*/

//The solution >

const UserContext = createContext(); // <-- initialize it & assign it to a variable

function Component1 () {
  const [user, setUser] = useState("John Doe");

  // Wrap child components in the Context Provider and supply the state value >
  return (
    <UserContext.Provider value={user}>
      <h1>Hello {user}!</h1>
      <Component2 />
    </UserContext.Provider>
  );
}
// now all components in this tree will have access to user Context

function Component2 () {
  return (
    <>
    <h2>Component 2</h2>
    <Component3 />
    </>
  );
}

function Component3 () {
  return (
    <>
    <h3>Component 3</h3>
    <Component4/>
    </>
  );
}

function Component4 () {
  return (
  <>
  <h4>Component 4</h4>
  <Component5/>
  </>
  );
}

function Component5 () {
  const user = useContext(UserContext)
  return (
  <>
  <h1>Component 5</h1>
  <h5>Hello {user} again!</h5>
  </>
  );
}

/**in the solution above the { user } parameter and attribute is removed from components 2-4 
 * and in component 5 assign the useContext function with UserContext (which contains the createContext()) as parameter
 * assigned to a variable
 * then use that variable
 */

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<Component1 />)

//there may be some mistakes I made here, I'm new to this.