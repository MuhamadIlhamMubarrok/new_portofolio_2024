<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('./assets/images/favicon.png') }}" type="image.png">
</head>

<body class="min-h-screen w-full bg-cover bg-center bg-no-repeat object-cover"
    style="background-image: url('{{ asset('./assets/background/landingpage.png') }}');">
    <div id="preloader"></div>
    <div id="imageModal" class="modal z-[999]">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <!-- Audio Section -->
    {{-- <audio id="background-audio" src="{{ asset('./assets/audio/audi1.mp3') }}" autoplay loop hidden></audio> --}}

    @include('components.landingPage.navbar')
    @yield('content')
    @include('components.landingPage.footer')

    {{-- <div class="fixed bottom-4 left-4 z-50 md:bottom-10 md:left-10">
        <!-- Language Button -->
        <button id="language-btn">
            <img src="{{ asset('assets/images/world.png') }}" alt="Language"
                class="w-12 h-12 md:w-[90px] md:h-[90px] animate-custom-ping">
        </button>

        <!-- Flag Options -->
        <div id="flags"
            class="hidden flex flex-col items-center space-y-2 mt-2 md:space-y-0 md:flex-row md:space-x-2">
            <!-- Indonesia Flag -->
            <a href="#" class="block order-2 md:order-1">
                <img src="{{ asset('assets/images/indonesia.png') }}" alt="Indonesian Flag"
                    class="w-10 h-10 md:w-12 md:h-12">
            </a>
            <!-- UK Flag -->
            <a href="#" class="block order-1 md:order-2">
                <img src="{{ asset('assets/images/inggris.png') }}" alt="UK Flag" class="w-10 h-10 md:w-12 md:h-12">
            </a>
        </div>
    </div> --}}

    <div class="fixed bottom-4 right-4 z-50 md:bottom-10 md:right-10">
        <a href="https://wa.me/6281389963530" target="_blank" rel="noopener noreferrer">
            <img src="{{ asset('assets/images/whatsapps.png') }}" alt="WhatsApp"
                class="w-12 h-12 md:w-[90px] md:h-[90px] animate-bounce">
        </a>
    </div>

    <!-- External JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <!-- App JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function showModal(imageSrc) {
            var modal = document.getElementById("imageModal");
            var modalImage = document.getElementById("modalImage");

            modal.style.display = "block";
            modalImage.src = imageSrc;
        }

        // Function to hide the modal when the close button is clicked
        function hideModal() {
            var modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }
        var closeBtn = document.querySelector(".close");
        closeBtn.addEventListener("click", hideModal);

        // Close the modal when the user clicks outside the image
        window.onclick = function(event) {
            var modal = document.getElementById("imageModal");
            if (event.target == modal) {
                hideModal();
            }
        };
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var audio = document.getElementById('background-audio');
            audio.play();
        });
    </script>
    <script>
        document.getElementById('language-btn').addEventListener('click', function() {
            const flags = document.getElementById('flags');
            flags.classList.toggle('hidden');

            const languageBtn = document.getElementById('language-btn');
            const imgElement = languageBtn.querySelector('img');

            if (imgElement.classList.contains('animate-custom-ping')) {
                imgElement.classList.remove('animate-custom-ping');
            } else {
                imgElement.classList.add('animate-custom-ping');
            }
        });
    </script>

    <script>
        function sendWhatsAppMessage(event) {
            event.preventDefault();

            const nama = document.getElementById('floating_nama').value;
            const namaInstansi = document.getElementById('floating_nama_instansi').value;
            const status = document.getElementById('status').value;
            const deskripsi = document.getElementById('deskripsi').value;

            const pesan =
                `Halo, perkenalkan nama saya ${nama}, saya ${status} dari instansi ${namaInstansi}, saya memiliki task, berikut adalah tasknya:\n\n${deskripsi}\n\nUntuk pengerjaan dengan deskripsi task tersebut berapa hari dan berapa harganya?\n\nTerima kasih.`;

            const whatsappURL = `https://wa.me/6281389963530?text=${encodeURIComponent(pesan)}`;

            window.open(whatsappURL, '_blank');
        }
    </script>
</body>

</html>
