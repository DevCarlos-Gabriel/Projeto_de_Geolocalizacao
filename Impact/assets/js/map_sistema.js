/*


var map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


map.on('click', function(e) {
    const latitude = e.latlng.lat;
    const longitude = e.latlng.lng;

    const latitudeInput = document.getElementById('latitude');
    const longitudeInput = document.getElementById('longitude');

    // Definir os valores nos elementos input
    latitudeInput.value = latitude;
    longitudeInput.value = longitude;
});
*/

/*const map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 10);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    function geocodeAndSetView(cep) {
      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
          if (!data.erro) {
            const estadoInput = document.getElementById('estado');
            const cidadeInput = document.getElementById('cidade');
            const bairroInput = document.getElementById('bairro');
            const ruaInput = document.getElementById('rua');

            estadoInput.value = data.uf;
            cidadeInput.value = data.localidade;
            bairroInput.value = data.bairro;
            ruaInput.value = data.logradouro;

            const endereco = `${data.logradouro}, ${data.bairro}, ${data.localidade}, ${data.uf}, BR`;

            // Fazer a requisição para a API do OpenStreetMap Nominatim
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(endereco)}`)
              .then(response => response.json())
              .then(data => {
                if (data.length > 0) {
                  const latitude = parseFloat(data[0].lat);
                  const longitude = parseFloat(data[0].lon);

                  // Atualizar o mapa com as coordenadas obtidas
                  map.setView([latitude, longitude], 10);
                } else {
                  console.log('Localização não encontrada');
                }
              })
              .catch(error => {
                console.error('Erro na geocodificação:', error);
              });
          } else {
            console.log('CEP não encontrado');
          }
        })
        .catch(error => {
          console.error('Erro na consulta do CEP:', error);
        });
    }

    const cepInput = document.getElementById('cep');
    cepInput.addEventListener('blur', function() {
      const cep = cepInput.value.trim();

      // Verificar se o CEP foi digitado
      if (cep.length > 0) {
        geocodeAndSetView(cep);
      }
    });*/


   /* function geocodeAndSetView(cep) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
          .then(response => response.json())
          .then(data => {
            if (!data.erro) {
              const cidade = data.localidade || '';
              const estado = data.uf || '';
              const rua = data.logradouro || '';
              //const bairro = data.bairro || '';

              console.log(cidade);
              console.log(estado);
              console.log(rua);
              
      
              // Preencher os campos de cidade, estado, rua e bairro
              document.getElementById('cidade').value = cidade;
              document.getElementById('estado').value = estado;
              document.getElementById('rua').value = rua;

              const pais = "Brazil";
              //document.getElementById('bairro').value = bairro;
      
              // Consultar as coordenadas geográficas com base no CEP usando Geocoder do Leaflet
              const geocoder = new L.Control.Geocoder.Nominatim();
              geocoder.geocode({ q: `${rua}, ${cidade}, ${estado}, ${pais}` }, results => {
                if (results.length > 0) {
                  const latitude = results[0].center.lat;
                  const longitude = results[0].center.lng;

                  console.log(latitude);
                  console.log(longitude);

                  map.setView([latitude, longitude], 10);
                } else {
                  console.log('CEP não encontrado');
                }
              });
            } else {
              console.log('CEP não encontrado response');
            }
          })
          .catch(error => {
            console.error('Erro na consulta de CEP:', error);
          });
      }
      
      const map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 10);
      
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);
      
      const cepInput = document.getElementById('cep');
      cepInput.addEventListener('blur', () => {
        const cep = cepInput.value.trim();
      
        // Verificar se o CEP foi digitado
        if (cep.length > 0) {
          // Consultar o CEP e atualizar os campos de endereço e o mapa
          geocodeAndSetView(cep);
        }
      });
      


      let marker = null;

// Função para adicionar marcador ao mapa
function addMarkerToMap(latlng) {
  // Verificar se já existe um marcador no mapa e removê-lo
  if (marker !== null) {
    map.removeLayer(marker);
  }

  // Adicionar novo marcador
  marker = L.marker(latlng).addTo(map);
}

// Capturar evento de clique no mapa
map.on('click', function(event) {
  const latlng = event.latlng;

  // Adicionar marcador ao mapa
  addMarkerToMap(latlng);
});

*/


function geocodeAndSetView(cep) {
    fetch(`https://viacep.com.br/ws/${cep}/json/`)
      .then(response => response.json())
      .then(data => {
        if (!data.erro) {
          const cidade = data.localidade || '';
          const estado = data.uf || '';
          const rua = data.logradouro || '';
          const bairro = data.bairro || '';
  
          // Preencher os campos de cidade, estado, rua e bairro
          document.getElementById('cidade').value = cidade;
          document.getElementById('estado').value = estado;
          document.getElementById('rua').value = rua;
          document.getElementById('bairro').value = bairro;
  
          // Verificar se os campos de endereço estão preenchidos
          if (cidade && estado && rua) {
            // Consultar as coordenadas geográficas com base no endereço usando o OpenStreetMap Nominatim

            const address = `${rua}, ${cidade}, ${estado}, Brazil`;
            const url = `https://nominatim.openstreetmap.org/search?format=json&limit=1&q=${encodeURIComponent(
              address
            )}`;
  
            fetch(url)
              .then(response => response.json())
              .then(results => {
                if (results.length > 0) {
                  const latitude = parseFloat(results[0].lat);
                  const longitude = parseFloat(results[0].lon);
  
                  document.getElementById('latitude').value = latitude;
                  document.getElementById('longitude').value = longitude;

                  // Atualizar as coordenadas do mapa
                  map.setView([latitude, longitude], 10);
  
                  // Remover camadas anteriores, se houver
                  if (marker) {
                    map.removeLayer(marker);
                  }
  
                  // Adicionar um marcador no mapa nas novas coordenadas
                  marker = L.marker([latitude, longitude]).addTo(map);
                } else {
                  console.log('Não foi possível obter as coordenadas para o endereço informado');
                }
              })
              .catch(error => {
                console.error('Erro na consulta de coordenadas:', error);
              });
          } else {
            console.log('Endereço incompleto');
          }
        } else {
          console.log('CEP não encontrado');
        }
      })
      .catch(error => {
        console.error('Erro na consulta de CEP:', error);
      });
  }
  
  const map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 10);
  let marker;
  
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);
  
  const cepInput = document.getElementById('cep');
  cepInput.addEventListener('blur', () => {
    const cep = cepInput.value.trim();
  
    // Verificar se o CEP foi digitado
    if (cep.length > 0) {
      // Consultar o CEP e atualizar os campos de endereço e o mapa
      geocodeAndSetView(cep);
    }
  });
  