import React from 'react';import {
  BrowserRouter,
  Routes,
  Route
} from "react-router-dom";

import ExamplePage from "./components/Example";



export default function ReactRoutes() {
  
  const TextCliff = () => <h1>Cliff</h1>;

  return (
    <BrowserRouter>
    <Routes>
      <Route path="/app/example" element={<TextCliff/>}>
      </Route>
    </Routes>
    </BrowserRouter>
  );
}
