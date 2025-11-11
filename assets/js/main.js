// Panorama initialiseren
var viewer = OpenSeadragon({
    id: "openseadragon-viewer",
    prefixUrl: "https://cdnjs.cloudflare.com/ajax/libs/openseadragon/4.1.0/images/",
    tileSources: {
        type: 'image',
        url: 'uploads/panorama.jpg' // jouw panoramaafbeelding
    }
});

// Colofon venster
function openColofon() {
    document.getElementById('colofon').style.display = 'block';
}
function closeColofon() {
    document.getElementById('colofon').style.display = 'none';
}
