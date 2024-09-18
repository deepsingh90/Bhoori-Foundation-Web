<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UI</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container">
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <?php include 'header.php' ?>

            <!-- Main content -->
            <div class="main-content">
                <!-- Welcome Section -->
                <section class="welcome-section">
                    <div class="image-container">
                        <img src="team.svg" alt="Welcome Image">
                    </div>
                    <div class="welcome-text">
                        <h1>Welcome to <span>BhooriFoundation.</span><br> Admin Panel.</h1>
                        <p>Providing a centralized interface for managing system settings, user permissions, and data insights, streamlining administrative tasks and enhancing control.</p>
                        <div class="buttons">
                            <a href="#" class="btn-primary">View All Pages <span>→</span></a>
                            <a href="#" class="btn-secondary">Documentation</a>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Footer -->
            <?php include 'footer.php' ?>
        </div>
    </div>
</body>

</html>