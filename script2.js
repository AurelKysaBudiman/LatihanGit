document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', (event) => {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        let valid = true;
        let errorMessage = '';

        // Check if all fields are filled
        if (!name || !email || !message) {
            valid = false;
            errorMessage += 'All fields are required.\n';
        }

        // Check if email is valid
        if (!emailPattern.test(email)) {
            valid = false;
            errorMessage += 'Please enter a valid email address.\n';
        }

        if (!valid) {
            alert(errorMessage);
            event.preventDefault(); // Prevent form submission
        }
    });
});
