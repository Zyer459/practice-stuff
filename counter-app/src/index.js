import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
import Counter from './components/counter';
import { useState } from 'react';

function FavouriteColor () {
  const [color, setColor] = useState("red");

  return (
    <>
    <h1>My favourite color is {color}!</h1>
    <button
    type="button"
    onClick={() => setColor("blue")}>Blue
    </button>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<FavouriteColor />);