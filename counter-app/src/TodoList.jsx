//new file for practice
//could use a .js instead of .jsx, but using jsx is a bit better
import React from "react";

function Todo ({todo}) {
    return (
        <h3>{todo.Name}</h3>
    )
};

function TodoList ({ todoList }) {
    return (
        todoList.map ((todo) => {
           return <Todo key={todo.id} todo={todo}/>
        })
    )
};

export default TodoList;