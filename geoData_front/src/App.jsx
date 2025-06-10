import React, { useEffect, useState } from 'react';

function CountriesList() {
  const [countries, setCountries] = useState([]);

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/countries')
      .then(response => response.json())
      .then(data => setCountries(data))
      .catch(error => console.error('Error fetching countries:', error));
  }, []);

  return (
    <div>
      <h1>Valsts saraksts</h1>
      {countries.map(country => (
        <div key={country.id} >
          <h2>{country.name}</h2>
          <p><strong>Lielums:</strong> {country.area_km2} km</p>
          <p><strong>Populācija:</strong> {country.population}</p>
        </div>
      ))}
    </div>
  );
}

export default CountriesList;
