function CountryItem({ country }) {
  return (
    <div>
      <h2>{country.name}</h2>
      <p><strong>Lielums:</strong> {country.area_km2} km²</p>
      <p><strong>Populācija:</strong> {country.population}</p>
    </div>
  );
}

export default CountryItem;
