
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('active');


}

function toggleNumber(event) {
    event.preventDefault(); // Prevent default link behavior
    const phoneElement = document.getElementById('phone');
    if (phoneElement.style.display === 'none') {
        phoneElement.style.display = 'inline'; // Show the phone number
        event.target.textContent = 'Hide Number'; // Change link text
    } else {
        phoneElement.style.display = 'none'; // Hide the phone number
        event.target.textContent = 'Show Number'; // Reset link text
    }
}
