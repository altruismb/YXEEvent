<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/upload.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
      <a href="{{ route('home') }}" class="brand-title">YXE<span class="green">EVENTS</span></a>
      <a href="eventupload.html" class="logout-btn">Upload Events</a>
      <a href="{{ route('home') }}" class="logout-btn">Logout</a>
  </nav>


    <!-- Event List Container -->
    <div class="event-list-container">
        <h2>Manage Events</h2>

        <!-- Event Cards -->
        <div class="event-cards">
            <div class="event-card">
                <img src="images/carousel3.jpg" alt="Event 1" class="event-image">
                <div class="event-details">
                    <h3>Event 1</h3>
                    <p><strong>Location:</strong> City Hall</p>
                    <p><strong>Date:</strong> 2024-12-15</p>
                    <p><strong>Time:</strong> 18:00</p>
                    <p><strong>Price:</strong> $10</p>
                    <div class="event-actions">
                        <a href="edit-event.html" class="edit-btn">Edit</a>
                        <a href="delete-event.html" class="delete-btn">Delete</a>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <img src="images/aboutcover.jpg" alt="Event 2" class="event-image">
                <div class="event-details">
                    <h3>Event 2</h3>
                    <p><strong>Location:</strong> Conference Center</p>
                    <p><strong>Date:</strong> 2024-12-20</p>
                    <p><strong>Time:</strong> 14:00</p>
                    <p><strong>Price:</strong> $15</p>
                    <div class="event-actions">
                        <a href="edit-event.html" class="edit-btn">Edit</a>
                        <a href="delete-event.html" class="delete-btn">Delete</a>
                    </div>
                </div>
            </div>

            <!-- Add more event cards as needed -->
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
