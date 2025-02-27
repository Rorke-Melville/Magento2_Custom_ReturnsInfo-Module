// Function to show the popup
function showPopup(popupId) {
    document.getElementById(popupId).style.display = 'block';
    document.querySelector('.popup-overlay').style.display = 'block';
}

// Function to hide the popup
function hidePopup() {
    document.querySelectorAll('.popup').forEach(popup => {
        popup.style.display = 'none';
    });
    document.querySelector('.popup-overlay').style.display = 'none';
}

// Close the popup when clicking outside of it
document.querySelector('.popup-overlay').addEventListener('click', hidePopup);

// Add the bouncing animation after the initial slide-in animation completes
window.addEventListener('load', () => {
    const truck = document.querySelector('.truck');

    // Listen for the 'animationend' event to detect when the slide-in animation finishes
    truck.addEventListener('animationend', (event) => {
        if (event.animationName === 'truckSlideIn') {
            truck.classList.add('bounce'); // Add the 'bounce' class after the slide-in animation ends
        }
    });
});
