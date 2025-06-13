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
window.onclick = function (event) {
    var modal = document.getElementById("imageModal");
    if (event.target == modal) {
        hideModal();
    }
};
