
import { useState } from 'react';
import './App.css';
import randColor from './Function/randColor';

const cats = ['Pilkis', 'Rainis', 'Murkis'];

function App() {

    const [spalva, setSpalva] = useState('green');

    const stebuklas = (a) => {
        console.log('stebuklas stebukle ' + a);
        
    }

    const stebuklas2 = () => {
        console.log('stebuklas stebukle');

        //const newColor = spalva === 'red' ? 'green' : 'red';


        setSpalva((oldColor) => oldColor === 'crimson' ? 'skyblue' : 'crimson');
        console.log(spalva);
    }
    // prideti skaiciu
    const [plus, setPlus] = useState(1);
    const prideti = () => {
        setPlus(n => n + 1)
    }
    // prideti kvadrata
    const addKv = () => setKv(kvM => [...kvM, randColor()]);
    const [kv, setKv] = useState([]);
// istrinti kvadrata
    const remKv = () => setKv(kvM => kvM.slice(2))
  return (
    <div className="App">
      <header className="App-header">
       <h1 style={{color: spalva}}>State</h1>

       <h1>{plus}</h1>
       {
           cats.map((cat, i) => <div key={i}>{cat}</div>)
       }

       <div className="kvc">
       {
           kv.map((c, i) => <div key={i} className="kv" style={{background: c}}>{i}</div>)
       }
       </div>
        

        <button onClick={() => stebuklas('abra kadabra')}>Click SU PARAMETRU</button>
        <button onClick={stebuklas2}>Click BE PARAMETRO</button>
        <button onClick={prideti}>Prideti 1</button>
        <button onClick={addKv}>ADD kvadrata 1</button>
        <button onClick={remKv}>REMOVE kvadrata 1</button>

      </header>
    </div>
  );
}

export default App;
