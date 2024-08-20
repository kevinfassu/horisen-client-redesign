document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Collect form data
        const formData = new FormData(event.target);

        // Send form data using Fetch API
        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Display success/failure message
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to send email. Please try again later.');
        });
    });
});
