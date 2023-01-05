//new file for practice
//could use a .js instead of .jsx, but using jsx is a bit better
import React from "react";

function TodoList ({todoList}) {
    return (
        <>
        <h1>{todoList.length}</h1>
        </>
    )
}

export default TodoList;