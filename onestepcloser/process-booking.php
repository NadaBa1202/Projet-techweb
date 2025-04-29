// Add this to your existing JavaScript
document.addEventListener("DOMContentLoaded", function () {
    // Get the form and validate button
    const bookingForm = document.querySelector('.booking-form');
    const validateButton = document.querySelector('.validate-button');
    
    validateButton.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Get form data
        const telephone = document.getElementById('telephone').value;
        const email = document.getElementById('email').value;
        const firstname = document.getElementById('firstname').value;
        const familyname = document.getElementById('familyname').value;
        const cardcode = document.getElementById('cardcode').value;
        
        // Get hotel information from the page
        const hotelName = document.querySelector('.hotel-section .hotel-name').textContent;
        const price = document.querySelector('.hotel-section .price-amount').textContent;
        
        // Validate required fields
        if (!telephone || !email || !firstname || !familyname) {
            alert('Please fill all required fields');
            return;
        }
        
        // Create form data object
        const formData = new FormData();
        formData.append('telephone', telephone);
        formData.append('email', email);
        formData.append('firstname', firstname);
        formData.append('familyname', familyname);
        formData.append('cardcode', cardcode);
        formData.append('hotel_name', hotelName);
        formData.append('price', price);
        
        // Send AJAX request
        fetch('process_booking.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                validateButton.classList.add('validated');
                
                // Create success message element
                const successMessage = document.createElement('div');
                successMessage.className = 'success-message';
                successMessage.textContent = data.message;
                
                // Add success message to the form section
                const formSection = document.querySelector('.form-section');
                formSection.appendChild(successMessage);
                
                // Clear form
                bookingForm.reset();
                
                // Redirect after 3 seconds (optional)
                setTimeout(() => {
                    window.location.href = 'booking-confirmation.php';
                }, 3000);
            } else {
                // Show error message
                alert(data.message || 'An error occurred. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });
});