import logo from './logo.svg';
import './App.css';
import Hello from './Components/009/Hello';
import Kurmis from './Components/009/Kurmis'
import Labas from './Components/009/Labas';
import Betkoks from './Components/009/Betkoks';
import Zebrai from './Components/009/Zebrai';
import Four from './Components/009/Four';
import Five from './Components/009/Five';



function App() {
  return (
    <div className="App">
      <header className="App-header">
       {/* <Hello spalva="orange" dydis="30" skaicius={5}></Hello>
        <Kurmis></Kurmis>
        <Hello spalva="blue" dydis="40" skaicius={5}></Hello>
        <Hello spalva="pink" dydis="25" skaicius="5"></Hello> */}
        <Labas></Labas>
        <Betkoks tekstoDydis="20"></Betkoks>
        <Zebrai skaicius={2}></Zebrai>
        <Four tag1="red" tag2="grey"></Four>
        <Five a="50" b={15} c="aquamarine"></Five>
        
      </header>
    </div>
  );
}

export default App;
