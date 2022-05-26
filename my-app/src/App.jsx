import { useState } from "react";
import "./App.css";

function App() {
  {
    /* Sukurti aplikaciją, kuri turi mygtuką change ir atvaizduoja apskritimą. Paspaudus mygtuką change apskritimas turi pavirsti į kvadratą, o paspaudus dar kartą vėl pavirsti apskritimu.
     */
  }
  const [kvadratas, setKvadratas] = useState("kvadratas");
  function change() {
    setKvadratas(kvadratas === "apskritimas" ? "kvadratas" : "apskritimas");
  }

  {
    /* Sukurti aplikaciją, kuri turi mygtukus change ir random bei atvaizduoja apskritimą su random skaičiumi viduje. Paspaudus change mygtuką apskritimas keičiasi į stačiakampį kaip pirmame uždavinyje, o paspaudus random mygtuką, skaičius pasikeičia į rand 5 - 25
     */
  }

  const [kvadratas2, setKvadratas2] = useState("kvadratas");
  function change2() {
    setKvadratas2(kvadratas2 === "apskritimas" ? "kvadratas" : "apskritimas");
  }
  const [sk, setSk] = useState(Math.floor(Math.random() * (25 - 5 + 1)) + 5);
  function skaicius() {
    setSk(Math.floor(Math.random() * (25 - 5 + 1)) + 5);
  }

  {
    /* Sukurti aplikaciją, kuri turi mygtukus plus ir minus, bei atvaizduoja skaičių 0. Paspaudus plus mygtuką, skaičius padidėja 1, o paspaudus minus- sumažėja 3
     */
  }

  const [nulis, setNulis] = useState(0);
  function plius() {
    setNulis(nulis + 1);
  }
  function minus() {
    setNulis(nulis - 3);
  }

  {
    /* Sukurti aplikaciją, kuri turi mygtukus add red, add blue ir reset. Paspaudus add red, prisideda raudonas kvadratas, paspaudus add blue - mėlynas ir t.t. Spaudinėjant prisideda vis daygiau kvadratų. Paspaudus reset viskas išsitrina */
  }

  const addRed = () => setRed(kvM => [...kvM, '']);
    const [red, setRed] = useState([]);

    const addBlue = () => setBlue(kvM => [...kvM, '']);
    const [blue, setBlue] = useState([]);

  return (
    <div className="App">
      <header className="App-header">
        <div className={kvadratas}></div>
        <button onClick={change}>CHANGE</button>

        <div className={kvadratas2}>{sk}</div>
        <div>
          <button className="btn" onClick={change2}>
            FORMA
          </button>
          <button className="btn" onClick={skaicius}>
            SKAICIUS
          </button>
        </div>
        <br></br>
        <br></br>

        <div>
          <button className="btn" onClick={minus}>
            -
          </button>
          <span className="nulis">{nulis}</span>
          <button className="btn" onClick={plius}>
            +
          </button>
        </div>
        <br></br>
        <br></br>
        <div>
          <div className="kvadratai">
          {
           red.map((i) => <div key={i} className="kv">{i}</div>)
       }
       {
           blue.map((i) => <div key={i} className="kv" style={{background: "blue"}}>{i}</div>)
       }
          </div>
          <button className="btn" onClick={addRed}>
            ADD RED
          </button>
          <button className="btn" onClick={plius}>
            RESET
          </button>
          <button className="btn" onClick={addBlue}>
            ADD BLUE
          </button>
        </div>
      </header>
    </div>
  );
}

export default App;
