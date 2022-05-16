function prueba () {
    let cantidad = parseFloat(document.getElementById('cantidad').value);
    let categoria = parseFloat(document.getElementById('floatingSelectGrid').value);
    let precio = 200;

    let ticketTotal = (precio - precio * (categoria)) * cantidad;
    
    if(Number.isNaN(cantidad)){
        alert('ingresa la cantidad');
    }else{
        document.getElementById('total').innerHTML = 'Total a Pagar: $ '+ticketTotal;
    }
}