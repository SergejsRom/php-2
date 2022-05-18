function Hello({spalva, dydis, skaicius}) {

    return (
        <h1 style={
            {
                color: spalva,
                fontSize: dydis * 1.5 + 'px',
            }
        }>Hello {skaicius + 11}</h1>
        
        )
}

export default Hello;