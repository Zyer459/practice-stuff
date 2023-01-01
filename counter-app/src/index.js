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
    color: "red"
  });

  const UpdateColor = () => {
    setColor(previousState => {
      return {...previousState, color: "blue" }
    });
  }

  return (
    <>
    <h1>My favourite is a {car.color} {car.brand}, {car.model} </h1>
    <button
    type="button"
    onClick={UpdateColor}
    class="btn btn-outline-primary">
    Blue
    </button>
    </>
  )
}

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<FavouriteColor />);