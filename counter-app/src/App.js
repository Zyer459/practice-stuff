import React from 'react';
import { ReactDOM } from 'react';
import { useState } from 'react';
import TodoList from './TodoList';

function App() {
  const [todos, setTodos] = useState([]);
  return (
    <>
    <TodoList />
    <input type="text"/>
    <button>Add todos</button>
    <button>Clear todos</button>
    <div>0 left todos</div>
    </>
  );
}

export default App;