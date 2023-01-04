import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef } from 'react';
import Todos from "./Todos";

/** THE INFO IS SIMILAR WITH SMALL CHANGES
 * The React useMemo Hook returns a memoized value.
 * Think of memoization as caching a value so that it does not need to be recalculated.
 * The useMemo Hook only runs when one of its dependencies update.
 * This can improve performance.
 * The useMemo and useCallback Hooks are similar.
 * The main difference is that useMemo returns a memoized value and useCallback returns a memoized function.
 * 
 * The useMemo Hook can be used to keep expensive, resource intensive functions from needlessly running.
 * In this example, we have an expensive function that runs on every render.
 * When changing the count or adding a todo, you will notice a delay in execution.
 */

/** EXAMPLE
 * A poor performing function. The expensiveCalculation function runs on every render:
*/

const App = () => {
  const [count, setCount] = useState(0);
  const [todos, setTodos] = useState([]);
  const calculation = expensiveCalculation(count);

  const increment = () => {
    setCount((c) => c + 1);
  };
  const addTodo = () => {
    setTodos((t) => [...t, "New Todo"]);
  }

  return (
    <div>
      <div>
        <h2>My Todos</h2>
        {todos.map((todo,index) => {
          return <p key={index}>{todo}</p>;
        })}
        <button onClick={addTodo}>Add Todo</button>
      </div>
      <hr/>
      <div>
        Count: {count}
        <button onClick={increment}> + </button>
        <h2>Expensive Calculation</h2>
        {calculation}
      </div>
    </div>
  );
};

const expensiveCalculation = (num) => {
  console.log ("Calculating.....");
  for (let i = 0; i < 1000000000; i++) {
    num += 1;
  }
  return num;
};

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<App />)

/** open the console on browser and click on any of the 2 buttons (Add Todo/+)
 * you will see that it takes a lot of time to render the updated values in both cases
 * but this delay should only happen when (+) button is clicked and not when (Add Todo) button is clicked <-- correction: the expensive calculation takes count as parameter hence the change
 * so the resource expensive component is running needlessly when it shouldn't
*/

//there may be some mistakes I made here, I'm new to this.