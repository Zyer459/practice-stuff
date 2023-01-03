import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef } from 'react';
import Todos from "./Todos";

/** the React useCallback hook returns a memoized callback function
 * think memoization as = caching a value so that it doesn't need to be recalculatd.
 * this allows us to isolate resource intensive functions so that, they wiil not automatically run on every render.
 * the useCallback only runs when one of its dependencies update.
 * this can improve performance.
 * 
 * the useCallback & useMemo hooks are similar. Main difference is their return funcions
 * useMemo returns a (memoized value) & useCallback returns a (memoized function)
 */

/**PROBLEM:
 * one reason for using useCallback hook is to prevent a component from re-rendering unless its props have changed
 */

const App = () => {
  const [count, setCount] = useState(0);
  const [todos, setTodos] = useState([]);

  const increment = () => {
    setCount((c) => c + 1);
  };
  const addTodo = () => {
    setTodos((t) => [...t], "New Todo");
  };

  return (
    <>
    <Todos todos={todos} addTodo ={addTodo} />
    <hr />
    <div>
      Count: {count}
      <button onClick={increment}> + </button>
    </div>
    </>
  );
};
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<App />)

/** try running the increment button
 * you'll notice that the <Todos> component re-renders even when the todos do not change (only the count variable value changes)
 * Why does this not work? 
 * We are using memo, so the Todos component should not re-render since...
 *  neither the todos state nor the addTodo function are changing when the count is incremented.
 * This is because of something called "referential equality".
 * Every time a component re-renders, its functions get recreated.
 * Because of this, the addTodo function has actually changed.
*/

//there may be some mistakes I made here, I'm new to this.