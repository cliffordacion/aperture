import React from 'react';
import ReactRoutes from './ReactRoutes';
import { render } from 'react-dom';

function renderReactRoutes() {
    const target = document.createElement('div');
    target.className = "react-routes";
    document.body.appendChild(target);
    render(<ReactRoutes />, target);
};

renderReactRoutes();