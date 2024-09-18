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
                        <h1>Adoption's Request Data</h1>

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
                                <th width="15%">Name</th>
                                <th width="20%">Address</th>
                                <th width="10%">Exp_With_Dogs</th>
                                <th width="10%">Pet_type</th>
                                <th width="10%">Dog_ID</th>
                                <th width="20%">Reason</th>
                                <th width="15%">Approval</th>
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
                            url: 'http://localhost/bhoorifoundation/admin/apis/api-fetch-all.php?table=adoptions',
                            type: "GET",
                            success: function (data) {


                                if (data.length > 0) {
                                    let html = "";
                                    // Loop through the data to create table rows
                                    $.each(data, function (index, item) {

                                        html += "<tr>";
                                        html += "<td>" + item.name + "</td>";
                                        html += "<td>" + item.address + "</td>";
                                        html += "<td>" + item.experience + "</td>";
                                        html += "<td>" + item.pet_type + "</td>";
                                        html += "<td>" + item.dogid + "</td>";
                                        html += "<td>" + item.reason + "</td>";
                                        if(item.approval==true){
                                            html += "<td><button class='approved' data-id='" + item.id + "'>Approved</button></td>";
                                        }else {
                                            html += "<td><button class='delete-btn' data-id='" + item.id + "'>Approval</button></td>";
                                        }
                                        
                                        html += "</tr>";
                                    });
                                    // Inject the rows into the table body
                                    $("#resultTable").html(html);

                                } else {
                                    $("#resultTable").html("<tr>< td colspan = '7' > No data found</td ></tr > ");
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error("AJAX Error: ", status, error);
                            }


                        });
                    }
                    loadTable();
                    $(document).on("click", ".delete-btn", function () {
                        if (confirm("Do you really want to approve this request?")) {
                            var ButtonID = $(this).data("id");
                            var tableName = "adoptions"; // Set the correct table name here
                            var row = $(this).closest("tr"); // Store the current row element

                            $.ajax({
                                url: 'http://localhost/bhoorifoundation/admin/apis/api-approval.php',
                                type: "POST",
                                contentType: 'application/json',
                                data: JSON.stringify({ table: tableName, id: ButtonID }), // Send table name and student ID in the request body
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
                            url: 'http://localhost/bhoorifoundation/admin/apis/api-search.php?table=adoptions&search=' + search_term,
                            type: "GET",
                            success: function (data) {
                                // Check if 'data' is an array or an object
                                if (Array.isArray(data) && data.length > 0) {
                                    let html = "";
                                    // Loop through the data to create table rows
                                    $.each(data, function (index, item) {
                                        html += "<tr>";
                                        html += "<td>" + item.name + "</td>";
                                        html += "<td>" + item.address + "</td>";
                                        html += "<td>" + item.experience + "</td>";
                                        html += "<td>" + item.pet_type + "</td>";
                                        html += "<td>" + item.dogid + "</td>";
                                        html += "<td>" + item.reason + "</td>";
                                        if(item.approval==true){
                                            html += "<td><button class='approved' data-id='" + item.id + "'>Approved</button></td>";
                                        }else {
                                            html += "<td><button class='delete-btn' data-id='" + item.id + "'>Approval</button></td>";
                                        }
                                    });
                                    // Inject the rows into the table body
                                    $("#resultTable").html(html);
                                } else {
                                    // Handle case where data is an object (no results found)
                                    $("#resultTable").html("<tr><td colspan='7'>No data found</td></tr>");
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