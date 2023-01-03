import ReactDOM from 'react-dom/client';
import './index.css';
//import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
//import Counter from './components/counter';
import { useState, useEffect, useRef } from 'react';
import {useReducer} from 'react';

/**the useReducer hook is similar to the useState hook
 * allows for custom state logic
 * if its required to keep track of multiple pieces of state that require complex logic,
 * useReducer hook may be helpful
 * useReducer hook accepts 2 arguments > (reducer), (initialState).
 * Syntax: useReducer (<reducer>, <initialState>).
 * the <reducer> function contains custom state logic &
 * <initialState> will be a simple value but generelly contain an {object}
 * the useReducer hook returns the currrent [State] & a [Dispatch] method.
 */

const initialTodos = [
  {
    id: 1,
    title: "Todo 1",
    complete: false,
  },
  {
    id: 2,
    title: "Todo 2",
    complete: false,
  },
];

const reducer = (state, action) => {
  switch (action.type) {
    case "COMPLETE":
      return state.map((todo) => {
        if (todo.id === action.id) {
          return { ...todo, complete: !todo.complete };
        } else {
          return todo;
        }
      });
    default:
      return state;
  }
};

function Todos() {
  const [todos, dispatch] = useReducer(reducer, initialTodos);

  const handleComplete = (todo) => {
    dispatch({ type: "COMPLETE", id: todo.id });
  };

  return (
    <>
      {todos.map((todo) => (
        <div key={todo.id}>
          <label>
            <input
              type="checkbox"
              checked={todo.complete}
              onChange={() => handleComplete(todo)}
            />
            {todo.title}
          </label>
        </div>
      ))}
    </>
  );
}

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render (<Todos />)

/**this is just a logic to keep track of todo complete status
 * all of the logic to add, delete, and complete a todo could be contained within a single useReducer hook
 * by adding more actions
*/

//there may be some mistakes I made here, I'm new to this.
//the code is small but complicated :(