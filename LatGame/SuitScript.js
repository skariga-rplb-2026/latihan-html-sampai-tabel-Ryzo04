let skor_user = 0;
let skor_komputer = 0;

function main(pilihan_user) {


    const komputer = ["batu", "gunting", "kertas"];
    const randomIndex = Math.floor(Math.random() * komputer.length);
    let pilihan_komputer = komputer[randomIndex];
    document.getElementById('com').innerHTML = pilihan_komputer;
    document.getElementById('pil_com').src = "image/" + pilihan_komputer + ".png";
    document.getElementById('pil_user').src = "image/" + pilihan_user + ".png";

    if (pilihan_user == pilihan_komputer) {
        document.getElementById('hasil').innerHTML = "Seri!";
    } else if (
        (pilihan_user == "batu" && pilihan_komputer == "gunting") ||
        (pilihan_user == "gunting" && pilihan_komputer == "kertas") ||
        (pilihan_user == "kertas" && pilihan_komputer == "batu")
    ) {
        document.getElementById('hasil').innerHTML = "Kamu Menang!";
        skor_user++;
    } else {
        document.getElementById('hasil').innerHTML = "Kamu Kalah!";
        skor_komputer++;
    }

    document.getElementById('skor_user').innerHTML = skor_user;
    document.getElementById('skor_komputer').innerHTML = skor_komputer;
}

function resetSkor() {
    skor_user = 0;
    skor_komputer = 0;
    document.getElementById('skor_user').innerHTML = skor_user;
    document.getElementById('skor_komputer').innerHTML = skor_komputer;
    document.getElementById('hasil').innerHTML = "HASIL"; 
}