function sendWhatsAppMessage(event) {
    event.preventDefault();

    const nama = document.getElementById("floating_nama").value;
    const namaInstansi = document.getElementById(
        "floating_nama_instansi"
    ).value;
    const status = document.getElementById("status").value;
    const deskripsi = document.getElementById("deskripsi").value;

    const pesan = `Halo, perkenalkan nama saya ${nama}, saya ${status} dari instansi ${namaInstansi}, saya memiliki task, berikut adalah tasknya:\n\n${deskripsi}\n\nUntuk pengerjaan dengan deskripsi task tersebut berapa hari dan berapa harganya?\n\nTerima kasih.`;

    const whatsappURL = `https://wa.me/6281389963530?text=${encodeURIComponent(
        pesan
    )}`;

    window.open(whatsappURL, "_blank");
}
