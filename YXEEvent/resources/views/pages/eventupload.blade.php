<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Event</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/upload.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="index.html" class="brand-title">YXE<span class="green">EVENTS</span></a>
        <a href="manageevents.html" class="logout-btn">Manage Events</a>
        <a href="{{ route('home') }}" class="logout-btn">Logout</a>
    </nav>

    <!-- Event Form -->
    <div class="form-container">
        <h2>Upload Event</h2>
        <form method="POST" class="event-form" id="event-form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="event_name">Event Name:</label>
                <input type="text" name="event_name" id="event_name" placeholder="Enter event name" required>
            </div>

            <div class="form-group flex-group">
                <div class="form-group-half">
                    <label for="event_location">Location:</label>
                    <input type="text" name="event_location" id="event_location" placeholder="Enter location" required>
                </div>

                <div class="form-group-half">
                    <label for="event_time">Time:</label>
                    <input type="time" name="event_time" id="event_time" required>
                </div>
            </div>

            <div class="form-group flex-group">
                <div class="form-group-half">
                    <label for="event_price">Event Price:</label>
                    <input type="text" name="event_price" id="event_price" placeholder="Enter event price" required>
                </div>

                <div class="form-group-half">
                    <label for="event_date">Date:</label>
                    <input type="date" name="event_date" id="event_date" required>
                </div>
            </div>

            <div class="form-group">
                <label for="event_flyer">Upload Event Flyer:</label>
                <input type="file" name="event_flyer" id="event_flyer" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="event_description">Event Description:</label>
                <textarea name="event_description" id="event_description" placeholder="Enter event description" rows="4" required></textarea>
            </div>

            <div class="form-group form-button">
                <input type="submit" name="upload_event" id="upload_event" class="form-submit" value="Upload Event">
            </div>
        </form>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
