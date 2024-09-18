<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard UI</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <?php include 'header.php' ?>

            <!-- dashboard -->

            <section class="dashboard-cards">
                <div class="card">
                    <div class="card-content">
                        <div class="card-info">
                            <p>Total Volunteer's Working Currently</p>
                            <h2 id="TVWC"></h2>
                        </div>
                        <div class="card-icon">
                            <img src="https://via.placeholder.com/50" alt="Money">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-info">
                            <p>Total Dog's Adopted Successfuly</p>
                            <h2 id="TDA"></h2>
                        </div>
                        <div class="card-icon">
                            <img src="https://via.placeholder.com/50" alt="Users">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-info">
                            <p>New Volunteer's Request (Unchecked)</p>
                            <h2 id="NVR"></h2>
                        </div>
                        <div class="card-icon">
                            <img src="https://via.placeholder.com/50" alt="Clients">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-info">
                            <p>New Adoption's Request (Unchecked)</p>
                            <h2 id="NAR"></h2>
                        </div>
                        <div class="card-icon">
                            <img src="https://via.placeholder.com/50" alt="Sales">
                        </div>
                    </div>
                </div>
            </section>

           <script type="text/javascript">
$(document).ready(function () {

// Function to fetch the count and update the UI
function loadTable() {

    $.ajax({
        url: 'http://localhost/bhoorifoundation/admin/apis/api-count.php?table=existing_volunteer',
        type: "GET",
        dataType: "json", // Expecting JSON response
        success: function (data) {
            let html = "";

            // Log the entire response to inspect its structure
            

            // Check if 'count' is returned and is a number
            if (typeof data.count !== "undefined" && !isNaN(data.count)) {
                html += data.count;  // Set the count number
            } else {
                console.error("Invalid data structure or missing 'count' in the response.");
            }

            // Inject the count into the element with id 'TVWC'
            $("#TVWC").html(html);
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });

    $.ajax({
        url: 'http://localhost/bhoorifoundation/admin/apis/api-count.php?table=adopted_dog',
        type: "GET",
        dataType: "json", // Expecting JSON response
        success: function (data) {
            let html = "";

            // Log the entire response to inspect its structure
            

            // Check if 'count' is returned and is a number
            if (typeof data.count !== "undefined" && !isNaN(data.count)) {
                html += data.count;  // Set the count number
            } else {
                console.error("Invalid data structure or missing 'count' in the response.");
            }

            // Inject the count into the element with id 'TVWC'
            $("#TDA").html(html);
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });


    $.ajax({
        url: 'http://localhost/bhoorifoundation/admin/apis/api-count.php?table=volunteers',
        type: "GET",
        dataType: "json", // Expecting JSON response
        success: function (data) {
            let html = "";

            // Log the entire response to inspect its structure
            

            // Check if 'count' is returned and is a number
            if (typeof data.count !== "undefined" && !isNaN(data.count)) {
                html += data.count;  // Set the count number
            } else {
                console.error("Invalid data structure or missing 'count' in the response.");
            }

            // Inject the count into the element with id 'TVWC'
            $("#NVR").html(html);
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });


    $.ajax({
        url: 'http://localhost/bhoorifoundation/admin/apis/api-count.php?table=adoptions',
        type: "GET",
        dataType: "json", // Expecting JSON response
        success: function (data) {
            let html = "";

            // Log the entire response to inspect its structure
            

            // Check if 'count' is returned and is a number
            if (typeof data.count !== "undefined" && !isNaN(data.count)) {
                html += data.count;  // Set the count number
            } else {
                console.error("Invalid data structure or missing 'count' in the response.");
            }

            // Inject the count into the element with id 'TVWC'
            $("#NAR").html(html);
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error: ", status, error);
        }
    });
}

// Call the function when the document is ready
loadTable();

$("#refreshBtn").on("click",function(e){
    loadTable();
});


});



</script>


            <!-- Footer -->
            <?php include 'footer.php' ?>
        </div>
    </div>
</body>

</html>