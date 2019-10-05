import React from "react";
import { Link } from "gatsby";
import Header from "../components/header";

// Import square-connect
const SquareConnect = require("square-connect");
const defaultClient = SquareConnect.ApiClient.instance;

// Configure Oauth2 access token for Authorizationconst
const oauth2 = defaultClient.authentications.oauth2;
oauth2.accessToken =
  "EAAAEBfpscq3kk7WdXuDm3D3x989KpkPTgrDO9dkwzgj7-VaD74nN_WZ4MedUUr9";

// Create a new Locations API Client
const locationsApi = new SquareConnect.LocationsApi();

console.log(new SquareConnect.LocationsApi());

console.log("hello world");

// Make an API call to the listLocations endpoint
locationsApi.listLocations().then(response => {
  console.log("API called successfully, returned data: " + response);
});

export default () => (
  <div style={{ color: `purple` }}>
    <Header />
    <Link to="/contact/">Contact</Link>
    <h1>Hello Gatsby!</h1>
    <p>What a world.</p>
    <img src="https://source.unsplash.com/random/400x200" alt="" />
  </div>
);
