import React from 'react';
import { ReactDOM } from 'react';
import { useState } from 'react';
import TodoList from './TodoList';

function App() {
  const [todos, setTodos] = useState([{
    id: 1,
    Name: "Todo 1",
    complete: false
  }])

  return (
    <>
    <TodoList todoList={todos}/>
    <input type="text"/>
    <button>Add todos</button>
    <button>Clear todos</button>
    <div>0 left todos</div>
    </>
  );
}

export default App;