$(document).ready(function() {
    // Add button click event
    $(document).on('click', '#btn-add', function(e) {
        e.preventDefault();

        // Get form data
        var name = $('#name').val();
        var unit = $('#unit').val();
        var price = $('#price').val();
        var expiry = $('#expiry').val();
        var inventory = $('#inventory').val();
        var cost = $('#cost').val();
        var image = $('#image').val();

        // Validate data (you should perform more thorough validation)
        if (name === '' || unit === '', price === '' || expiry === '', inventory === '', cost === '', image === '') {
            alert('Please fill in all fields.');
            return;
        }

        // Send data to the server via AJAX
        $.ajax({
            type: 'POST',
            url: 'save.php', // Replace with your server-side script URL
            data: {
                name: name,
                unit: unit,
                price: price,
                inventory: inventory,
                cost: cost,
                image: image,
                action: 'insert' // You can use this to differentiate actions on the server
            },
            success: function(response) {
                // Handle the server response
                if (response === 'success') {
                    // Clear the form
                    $('#name').val('');
                    $('#unit').val('');
                    $('#price').val('');
                    $('#expiry').val('');
                    $('#inventory').val('');
                    $('#cost').val('');
                    $('#image').val('');

                    // Optionally, load the updated data or show a success message
                    $('#result').html('Product added successfully.');
                } else {
                    $('#result').html('Error: ' + response);
                }
            }
        });
    });
});
