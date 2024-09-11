function submitForm() {
    let username = $("#username").val();

    // Check if username is empty
    if (username === "") {
        $("#message").html('<span class="error">Error: Username cannot be empty</span>');
        return;
    }

    // AJAX request to check the username
    $.ajax({
        url: 'info.php', // PHP file to verify username
        type: 'POST',
        data: { username: username },
        success: function(response) {
            if (response.trim() === "verified") {
                $("#message").html('<span class="verified">Verified</span>');
            } else {
                $("#message").html('<span class="error">Error</span>');
            }
        },
        error: function() {
            $("#message").html('<span class="error">Error: Could not reach the server</span>');
        }
    });
}
