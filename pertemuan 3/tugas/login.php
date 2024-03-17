<style>
    body {
        font-weight: 400; /* Changed to a lighter font weight for a modern look */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #C6DCBA; /* Soft background color for a fresh look */
        color: #333; /* Darker text color for better readability */
        box-shadow: 0 3px 5px rgba(255,255,255,0.5); /* Bayangan putih, tapi mungkin tidak terlihat jelas */
    }

    ::placeholder {
        font-weight: 300; /* Lighter placeholder text for a sleek look */
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px; /* Added padding for better spacing */
        text-align: center;
    }

    .form-login {
        padding: 40px; /* Increased padding for a more spacious layout */
        border: none; /* Removed border for a cleaner look */
        border-radius: 10px; /* Rounded corners for a modern, soft appearance */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        width: 100%; /* Full width on small screens */
        max-width: 400px; /* Max width to maintain readability */
    }

    .form-control {
        margin-bottom: 20px; /* Increased spacing for a cleaner layout */
        padding: 15px; /* More padding for a better touch experience */
        font-size: 14px; /* Adjusted font size for better readability */
        border-radius: 8px; /* Rounded corners for a cohesive look */
        border: 2px solid #eaeaea; /* Subtle border */
        transition: border-color 0.3s; /* Smooth transition for hover effect */
    }

    .form-control:focus {
        border-color: #C6DCBA; /* Highlight color when focused */
        outline: none; /* Remove default outline */
    }

    .btn-login {
        padding: 15px 20px; /* More generous padding for a larger click area */
        font-size: 16px; /* Larger font size for better readability */
        background-color: #337357; /* Bright primary color for the button */
        color: white;
        border: none;
        border-radius: 8px; /* Rounded corners for the button */
        cursor: pointer;
        transition: background-color 0.3s; /* Smooth background color transition */
    }

    .btn-login:hover, .btn-login:focus {
        background-color: #A5DD9B; /* Darker shade on hover/focus for feedback */
    }

    h2.text-center {
        margin-bottom: 30px; /* More spacing above the form title */
        color: #000; /* Darker color for better contrast */
        font-size: 24px; /* Larger font size for emphasis */
    }
</style>

</style>
<div class="container">
    <form action="home.php" method="post" class="form-login">
        <h2 class="text-center">Login - Student Activity</h2>
        <div>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn-login">Submit</button>
        </div>
    </form>
</div>
