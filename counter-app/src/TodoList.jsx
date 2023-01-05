//new file for practice
//could use a .js instead of .jsx, but using jsx is a bit better
import React from "react";

function TodoList () {
    return (
        <>
        <h1>Todo List</h1>
        <input type="text"/>
        <button>Add todos</button>
        <button>Clear todos</button>
        <div>0 left todos</div>
        </>
    )
}

export default TodoList;