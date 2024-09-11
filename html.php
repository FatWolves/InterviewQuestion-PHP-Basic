<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        /* Button Styling */
        .submit-btn {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        /* General Styling */
        .message {
            margin-top: 10px;
            font-size: 16px;
        }
        .verified {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="verify_ajax.js"></script> <!-- Include the JS file -->
</head>
<body>

    <form id="usernameForm">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username">
        <button type="button" class="submit-btn" onclick="submitForm()">Submit</button>
    </form>

    <div class="message" id="message"></div>

</body>
</html>