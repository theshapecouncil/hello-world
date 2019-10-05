import React from "react";
import { Link } from "gatsby";
import Header from "../components/header";
export default () => (
  <div style={{ color: `purple` }}>
    <Header />
    <Link to="/">Home</Link>
    <h1>Hello Gatsby!</h1>
    <p>What a world we live in.</p>
    <img src="https://source.unsplash.com/random/400x200" alt="" />
  </div>
);
