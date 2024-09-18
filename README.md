# Bhoori Foundation 


Introduction
I've built a website for a Dog NGO called Bhoori Foundation, aimed at facilitating pet adoptions and volunteer sign-ups. The platform includes both a user-friendly interface and an admin panel to efficiently manage the data.

Frontend (Interactive UI)
For the frontend, I used HTML, CSS, and JavaScript, along with GSAP to create an engaging and interactive UI. Smooth transitions and animations were added using GSAP to enhance the user experience.

Event listeners were implemented to trigger animations at appropriate moments, such as scrolling or button clicks.

Adoption and Volunteering Requests
To handle adoption and volunteering requests, I built a form using HTML. Once submitted, the data is processed using PHP’s POST superglobal and stored in an SQL database. This ensures secure and efficient handling of user input.

Admin Authentication
For admin authentication, I implemented AJAX for asynchronous login and used SHA-256 for password hashing, ensuring a secure login process. The admin credentials are verified against the SQL database to control access.

Admin Panel Features
Dashboard
The admin panel includes a dashboard that shows real-time data on:

Number of volunteers
Adopted dogs
Total requests for both adoption and volunteering
I created a REST API to fetch the data, and AJAX updates the dashboard dynamically without requiring a page reload.

Managing Volunteers and Adoptions
Admins can:

View all volunteers and adopted dog details in a tabular form.
Use a search bar to quickly find records by name.
Use a delete button to remove volunteers when necessary.
This entire functionality is managed using a REST API, AJAX, and the SQL database.

Handling Requests
The admin can view all adoption and volunteering requests in another table. They can approve requests directly using an approval button. A search feature helps locate specific requests easily.

Data Backup
For data security, there's a backup feature that allows the admin to download all data from the database in JSON format and save it as a local file.

User Request Status Page
I've also provided a status page where users can check the status of their adoption or volunteering requests, whether they’ve been approved or not.

Conclusion
This project combines an intuitive user interface with a powerful admin panel, ensuring ease of use for both users and administrators while maintaining data security and efficient management.

