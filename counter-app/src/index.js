import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef, useCallback } from 'react';
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

/**SOLUTION: 
 * to fix this use the useCallback hook to prevent the function from recreated unlesss necessary
 * use the useCallback hook to prevent the Todos component from re-rendering needlessly
*/

const App = () => {
  const [count, setCount] = useState(0);
  const [todos, setTodos] = useState([]);

  const increment = () => {
    setCount((c) => c + 1);
  };
  const addTodo = useCallback(() => {   //<-- useCallback hook
    setTodos((t) => [...t, "New Todo"]);//<-- small problem fixed here applies to the problem also
  }, [todos]);

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

/** open the console in browser & try running the increment button and the addTodo button now,
 * you'll notice that the <Todos> component renders only when you click the addTodo button and,
 * not when you click the increment button (the + button)
 * now the component <Todos> re-render only when todos prop changes
*/

//there may be some mistakes I made here, I'm new to this.