/*const map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 10);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// Obter os valores de latitude e longitude do centro do mapa
const center = map.getCenter();
const latitude = center.lat;
const longitude = center.lng;

console.log('Latitude:', latitude);
console.log('Longitude:', longitude);*/


var map = L.map('mapid').setView([-3.691891635591662, -40.34098961976575], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-3.691891635591662, -40.34098961976575]).addTo(map)
    .bindPopup('Olá! Faça o login para fazer uma denuncia.')
    .openPopup();
