<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <link rel="stylesheet" href="adoption.css">
</head>
<body>
<nav>
        <a href="../index.html"><h1>BhooriFoundation.</h1></a>
        
        <a href="https://www.instagram.com/direct/t/116303073150804" target="_blank"><button>Let's Talk <img src="https://logowik.com/content/uploads/images/free-vector-peeking-dog6477.logowik.com.webp"></button></a>
        <div id="nav-bottom">

        </div>
    </nav>

<div id="page6">
        
<div class="containerform">
        <h1>Adoption Application Form</h1>
        <p>Please fill out the form below to apply for pet adoption.</p>

        <form action="submit_adoption.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="name">Enter the dog ID (Hover on image):</label>
                <input type="number" id="dogid" name="dogid" required>
            </div>

            <div class="form-group">
                <label for="pet_type">Which type of pet are you interested in adopting?</label>
                <select id="pet_type" name="pet_type" required>
                    <option value="">Select an option</option>
                    <option value="dog">Small breeds</option>
                    <option value="cat">Large breeds</option>
                    <option value="other">Toy breeds</option>
                    <option value="other">Others</option>
                </select>
            </div>

            <div class="form-group">
                <label for="experience">Do you have any previous experience with pets?</label>
                <textarea id="experience" name="experience" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="reason">Why do you want to adopt a pet?</label>
                <textarea id="reason" name="reason" rows="3" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
    </div>
            <div id="page6-right">

                <div id="gallery">
                    <figure class="card">
                    <img src="../Dogs_for_adoption/1.jpg" alt="image1">
                    <figcaption>ID: 8452<br>
                    Gender: Male</figcaption>
                    </figure>
    
                    <figure class="card">
                    <img src="../Dogs_for_adoption/9.jpg" alt="image2" >
                    <figcaption>ID: 2963<br>
                        Gender: Female</figcaption>
                    </figure>
    
                    <figure class="card">
                    <img src="../Dogs_for_adoption/3.jpg" alt="image3" >
                    <figcaption>ID: 1487<br>
                        Gender: Male</figcaption>
                    </figure>
    
                    <figure class="card">
                    <img src="../Dogs_for_adoption/4.jpg" alt="image4" >
                    <figcaption>ID: 9325<br>
                    Gender: Female</figcaption>
                    </figure>
                
                    <figure class="card">
                    <img src="../Dogs_for_adoption/5.jpg" alt="image5" >
                    <figcaption>ID: 7749<br>
                        Gender: Male</figcaption>
                    </figure>
    
                    <figure class="card">
                    <img src="../Dogs_for_adoption/6.jpg" alt="image6" >
                    <figcaption>ID: 3652<br>
                    Gender: Female</figcaption>
                    </figure>
    
                    

                </div>
               

            </div>
        
        </div>
    </div>
    <div id="last">
        <img src="../images/DogHead.webp">
</div>
    
</body>
</html>
