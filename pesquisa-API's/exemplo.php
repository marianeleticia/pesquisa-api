<?php
// Endereço a ser geocodificado
$endereco = "1600 Amphitheatre Parkway, Mountain View, CA";

// URL da API do Google Maps
$url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($endereco);

// Faz a solicitação à API
$response = file_get_contents($url);

// Decodifica a resposta JSON
$data = json_decode($response);

// Exibe as coordenadas geográficas
if ($data->status === "OK") {
    $latitude = $data->results[0]->geometry->location->lat;
    $longitude = $data->results[0]->geometry->location->lng;
    echo "Latitude: $latitude<br>";
    echo "Longitude: $longitude<br>";
} else {
    echo "Erro ao obter coordenadas.";
}
?>
