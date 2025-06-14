import { useState, useEffect } from 'react';
import CountryItem from './CountryItem.jsx';

function App() {
  const [countries, setCountries] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchList = async () => {
      const response = await fetch('http://127.0.0.1:8000/api/countries');
      const data = await response.json();
      setCountries(data);
      setLoading(false);
    };

    fetchList();
  }, []);

  return (
    <>
      <h1>Valsts saraksts</h1>
      {loading ? (
        <p>Lādējas...</p>
      ) : (
        countries.map(country => (
          <CountryItem key={country.id} country={country} />
        ))
      )}
    </>
  );
}

export default App;
