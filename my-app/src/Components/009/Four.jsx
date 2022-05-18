{/*Sukurti komponentą, kuris gauna du props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage.*/}

function Four({tag1, tag2}) {
        return (
            <>
            <h1 style={
                {
                    backgroundColor: tag1}
                }
                >Pirmas betkoks</h1>
            <h2 style={
                {
                    color: tag2}
                }>Antras betkoks </h2>
            </>
        )
    }
    


export default Four;