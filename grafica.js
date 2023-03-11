fetch('https://data.nasdaq.com/api/v3/datasets/OPEC/ORB.json?api_key=P47nb9busDh9SgYvXkRW') //obtiene los datos 
.then(response => response.json())  //los convierte 
.then(data => { 
  const pricesMap = new Map(); // mapea los precios 
  data.dataset.data.forEach(item => { // extraer los datos 
    const date = new Date(item[0]); 
    const year = date.getFullYear(); // precios por mes y year
    const month = date.getMonth() + 1; 
    const key = `${year}-${month.toString().padStart(2, '0')}`;
    const price = item[1];
    if (!pricesMap.has(key)) {
      pricesMap.set(key, { x: date, y: price });
    }
  });
  const prices = Array.from(pricesMap.values()); // Los precios se hacen un array 
  const dates = prices.map(item => item.x); // obtiene las fechas de los precios 
  const ctx = document.getElementById('myChart').getContext('2d'); // es lo donde se va graficar
   console.log(data);
 
  const chart = new Chart(ctx, { // se cree la grafica 
    type: 'line', // tipo de grafica 
    data: { 
      labels: dates,// fechas 
      datasets: [{
        label: 'Precio del petroleo de la OPEP',
        data: prices, // precios
        fill: false, 
        borderColor: 'black',
        tension: 0.1
      }]
    },
    options: {
      scales: {
        xAxes: [{ //configura el eje X fecha
            gridLines: { // esta parte entra al las lineas del eje x 
                display: false // se predetermina como falso para que no aparezcan en pantalla 
            },
                ticks: { // entra a los dates de los labels 
                 // los predetermina como falso para que aparezcan 
                 callback: function(value,index,values){
                  var value2 = value.toString();
                  //var value2 = value.slice(0,3);
                  value2 = value2.substring(4,100);
                  value2 = value2.substring(0,12);
                  return value2;
                  
                 }
            }
        }],
        yAxes: [{ // eje Y precio 
          ticks: { 
            beginAtZero: true
          }
        }]
      }
    }
  });
});