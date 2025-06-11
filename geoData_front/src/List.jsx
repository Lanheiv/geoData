import React, { useState, useEffect } from 'react';

function List() {
  const [countries, setCountries] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/countries')
      .then(response => response.json())
      .then(data => setCountries(data))
      .catch(error => console.error('Error fetching countries:', error));

      setLoading(false);
  }, []);

  return (
    <>
      <h1>Valsts saraksts</h1>
      {loading ? (
        <p>Lādējas...</p>
      ) : ( 
        countries.map(country => (
          <div key={country.id}>
            <h2>{country.name}</h2>
            <p><strong>Lielums:</strong> {country.area_km2} km</p>
            <p><strong>Populācija:</strong> {country.population}</p>
          </div>
        )
      ))}
    </>
  );
}

export default List;
