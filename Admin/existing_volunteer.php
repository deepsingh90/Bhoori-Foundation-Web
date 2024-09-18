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

            <!-- showing table -->
            <table id="main">
                <tr>
                    <td id="header">
                        <h1>Existing Volunteer's in our Org.</h1>

                        <div id="search-bar">
                            <label>Search :</label>
                            <input type="text" id="search" autocomplete="off">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table>
                            <tr>
                                <th width="20%">Name</th>
                                <th width="25%">Email</th>
                                <th width="20%">Phone_No.</th>
                                <th width="20%">Joining_Date</th>
                                <th width="15%">Delete</th>
                            </tr>
                            <tbody id="resultTable"></tbody>
                        </table>
                    </td>
                </tr>
            </table>

            <script type="text/javascript">
                $(document).ready(function () {

                    //fetching all records
                    function loadTable() {
                        $.ajax({
                            url: 'http://localhost/bhoorifoundation/admin/apis/api-fetch-all.php?table=existing_volunteer',
                            type: "GET",
                            success: function (data) {


                                if (data.length > 0) {
                                    let html = "";
                                    // Loop through the data to create table rows
                                    $.each(data, function (index, item) {

                                        html += "<tr>";
                                        html += "<td>" + item.name + "</td>";
                                        html += "<td>" + item.email + "</td>";
                                        html += "<td>" + item.phone + "</td>";
                                        html += "<td>" + item.join_date + "</td>";
                                        html += "<td><button class='delete-btn' data-id='" + item.id + "'>Delete</button></td>";
                                        html += "</tr>";
                                    });
                                    // Inject the rows into the table body
                                    $("#resultTable").html(html);

                                } else {
                                    $("#resultTable").html("<tr>< td colspan = '5' > No data found</td ></tr > ");
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error("AJAX Error: ", status, error);
                            }


                        });
                    }
                    loadTable();
                    $(document).on("click", ".delete-btn", function () {
                        if (confirm("Do you really want to delete this record?")) {
                            var studentId = $(this).data("id");
                            var tableName = "existing_volunteer"; // Set the correct table name here
                            var row = $(this).closest("tr"); // Store the current row element

                            $.ajax({
                                url: 'http://localhost/bhoorifoundation/admin/apis/api-delete.php',
                                type: "POST",
                                contentType: 'application/json',
                                data: JSON.stringify({ table: tableName, id: studentId }), // Send table name and student ID in the request body
                                success: function (data) {
                                    confirm(data.message);
                                },
                                error: function (xhr, status, error) {
                                    console.log("Error:", error);
                                }
                            });
                        }
                    });

                    $("#search").on("keyup", function () {
                        var search_term = $(this).val().trim(); // Trim the search term to avoid sending unnecessary spaces

                        // Check if search term is empty
                        if (search_term === "") {
                            loadTable();
                        }

                        $.ajax({
                            url: 'http://localhost/bhoorifoundation/admin/apis/api-search.php?table=existing_volunteer&search=' + search_term,
                            type: "GET",
                            success: function (data) {
                                // Check if 'data' is an array or an object
                                if (Array.isArray(data) && data.length > 0) {
                                    let html = "";
                                    // Loop through the data to create table rows
                                    $.each(data, function (index, item) {
                                        html += "<tr>";
                                        html += "<td>" + item.name + "</td>";
                                        html += "<td>" + item.email + "</td>";
                                        html += "<td>" + item.phone + "</td>";
                                        html += "<td>" + item.join_date + "</td>";
                                        html += "<td><button class='delete-btn' data-id='" + item.id + "'>Delete</button></td>";
                                        html += "</tr>";
                                    });
                                    // Inject the rows into the table body
                                    $("#resultTable").html(html);
                                } else {
                                    // Handle case where data is an object (no results found)
                                    $("#resultTable").html("<tr><td colspan='5'>No data found</td></tr>");
                                }
                            },
                            error: function (xhr, status, error) {
                                console.log("Error:", error);
                                $("#resultTable").html("<tr><td colspan='5'>Error occurred while fetching data</td></tr>");
                            }
                        });
                    });




                    $("#refreshBtn").on("click", function (e) {
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