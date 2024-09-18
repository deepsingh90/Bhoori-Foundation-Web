# Bhoori Foundation 

Introduction:
"I've built a website for a Dog NGO called Bhoori Foundation, aimed at facilitating pet adoptions and volunteer sign-ups, with both a user-friendly interface and an admin panel to manage the data efficiently."

Frontend (Interactive UI):
"For the frontend, I used HTML, CSS, and JavaScript along with GSAP to create an engaging and interactive UI. I added smooth transitions and animations using GSAP to enhance the user experience. Event listeners were implemented with GSAP to trigger animations at appropriate moments, such as scrolling or button clicks."
Adoption and Volunteering Requests:
"To handle adoption and volunteering requests, I built a form using HTML, and once submitted, the data is processed using PHP's POST superglobal and stored in an SQL database. This ensures secure and efficient handling of user input."
Admin Authentication:
"For admin authentication, I implemented AJAX for asynchronous login and used SHA-256 for password hashing, making the login process secure. The admin credentials are verified against the SQL database to control access."
Admin Panel Features:
Dashboard:

"The admin panel has a dashboard that shows real-time data on the number of volunteers, adopted dogs, and total requests for both adoption and volunteering. I created a REST API to fetch the data, and AJAX updates the dashboard dynamically without requiring a page reload."
Managing Volunteers and Adoptions:

"Admins can view all volunteers and adopted dog details in a tabular form. I added a search bar to quickly find records by name, and a delete button allows admins to remove volunteers when necessary. This entire functionality is managed using REST API, AJAX, and the SQL database."
Handling Requests:

"The admin can also view all adoption and volunteering requests in another table, where they can approve the requests directly using an approval button. The search feature here helps locate specific requests easily."
Data Backup:

"For data security, there's a backup feature that allows the admin to download all data from the database in JSON format and save it as a local file."
User Request Status Page:
"Lastly, I've provided a page where users can check the status of their adoption or volunteering requests, whether they’ve been approved or not."
Conclusion:
"This project combines an intuitive user interface with a powerful admin panel, ensuring ease of use for both users and administrators while maintaining data security and efficient management."
