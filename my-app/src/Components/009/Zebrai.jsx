{/* Sukurti komponentą rodantį tekstą h1 tage- “Zebrai ir Bebrai”, kuris gauna vieną props, kuris lygus 1 arba 2. Jeigu props lygus 1 tekstas nudažomas mėlynai, o jeigu 2 - raudonai. */}

function Zebrai({skaicius}) {
   if (skaicius === 1) {
      return (
        <h1 style={{color: 'red'}}>Zebrai ir Bebrai</h1>) 
   }
   if (skaicius === 2) {
    return (
      <h1 style={{color: 'blue'}}>Zebrai ir Bebrai</h1>) 
 }
    

}

export default Zebrai;

