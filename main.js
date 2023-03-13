console.log('hi');

const form = document.getElementById('form');
console.log(form);

form.addEventListener('submit', async function(e) {
    e.preventDefault();
    console.log('rehi');
    const city = document.getElementById('city').value;
    // const get = document.getElementsByName('get_weather').value;
    const data = JSON.stringify({"city": city});
    console.log(data);
    console.log(city);

    const response = await callApi(data, 'POST');
    console.log(response);

    buildHtml(response);
    
})

async function callApi(data, method) {
    try{
        const response = await fetch('server.php', {
            headers: {
                'Content-Type': 'application/json'
              },
            method: method,
            body: data
        });
        console.log(response);
        // console.log(JSON.parse(response));
        return response.json();
    } catch(err) {
        console.log(err);
    }
}

function buildHtml(data) {
    const main = document.getElementById('main');

    main.innerHTML = `<div>
        <br>
        <div style="font-weight: bold">City: ${data.city.name}, Country: ${data.city.country}</div>
        <br>
        Temp: ${data.list[0].main.temp}° <br>
        Humidity: ${data.list[0].main.humidity}<br>
        Clouds: ${data.list[0].weather[0].description}<br>
        Wind speed: ${data.list[0].wind.speed}
    </div>`;
}
