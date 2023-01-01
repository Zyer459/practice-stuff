import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import 'bootstrap/dist/css/bootstrap.css';
import Counter from './components/counter';
import { useState } from 'react';

function FavouriteColor () {
  const [car, setColor] = useState({
    brand: "Ford",
    model: "Mustang",
    year: 1964,
    color: "color ?"
  });

  const UpdateColor = (a) => {
    setColor((previousState) => {
      return {...previousState, color: a.target.innerHTML}
    });
  }

  return (
    <>
    <h1>My favourite is a {car.color} {car.brand}, {car.model} </h1>
    <button
    type="button"
    onClick={(a) => UpdateColor(a)}
    class="btn btn-outline-primary">
    Blue
    </button>

    <button
    type="button"
    onClick={(a) => UpdateColor(a)}
    class="btn btn-outline-success">
      Green
    </button>

    <button
    type="button"
    onClick={(a) => UpdateColor(a)}
    class="btn btn-outline-danger">
      Red
    </button>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<FavouriteColor />);