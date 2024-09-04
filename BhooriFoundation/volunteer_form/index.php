<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="volunteer.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="../index.html"><h1>BhooriFoundation.</h1></a>
        
        <a href="https://www.instagram.com/direct/t/116303073150804" target="_blank"><button>Let's Talk <img src="https://logowik.com/content/uploads/images/free-vector-peeking-dog6477.logowik.com.webp"></button></a>
        <div id="nav-bottom">

        </div>
    </nav>

    <div class="container">
    <div id="left">
        <h1>Volunteer Application</h1>
        <p>Please make sure your application is complete. Incomplete applications will not be considered.</p>
        <p><strong>**Our shelter is located in Patna**</strong></p>
        
        <form action="submit_volunteer.php" method="post" >
            <div class="form-group">
                <label class="form-element">Are you at least 18 years old? <span class="required">*</span></label>
                <div>
                    <input type="radio" id="age_yes" name="age" value="yes" required> 
                    <label for="age_yes">Yes</label>
                    <input type="radio" id="age_no" name="age" value="no" required> 
                    <label for="age_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label >Your highest education <span class="required">*</span></label>
                <div>
                    <input type="radio" id="education_highschool" name="education" value="High School" required> 
                    <label for="education_highschool">High School</label>
                    <input type="radio" id="education_bachelor" name="education" value="Bachelors/Under Grad/Degree" required> 
                    <label for="education_bachelor">Bachelors/Under Grad/Degree</label>
                    <input type="radio" id="education_postgrad" name="education" value="Post Graduate" required> 
                    <label for="education_postgrad">Post Graduate</label>
                </div>
            </div>

            <div class="form-group">
                <label for="motivation">What motivates you to apply for this volunteer opportunity? <span class="required">*</span></label>
                <textarea id="motivation" name="motivation" required></textarea>
            </div>

            <div class="form-group">
                <label>Are you able to commit to volunteering at least 1 hour per week? <span class="required">*</span></label>
                <div>
                    <input type="radio" id="commit_no" name="commit" value="No" required> 
                    <label for="commit_no">No</label>
                    <input type="radio" id="commit_yes" name="commit" value="Yes" required> 
                    <label for="commit_yes">Yes</label>
                </div>
            </div>

            <div class="form-group">
                <label>If yes, please specify preferred days and times. <span class="required">*</span></label>
                <div>
                    <input type="checkbox" id="mon" name="days[]" value="Mon"> 
                    <label for="mon">Mon</label>
                    <input type="checkbox" id="tue" name="days[]" value="Tue"> 
                    <label for="tue">Tue</label>
                    <input type="checkbox" id="wed" name="days[]" value="Wed"> 
                    <label for="wed">Wed</label>
                    <input type="checkbox" id="thu" name="days[]" value="Thu"> 
                    <label for="thu">Thu</label>
                    <input type="checkbox" id="fri" name="days[]" value="Fri"> 
                    <label for="fri">Fri</label>
                    <input type="checkbox" id="sat" name="days[]" value="Sat"> 
                    <label for="sat">Sat</label>
                    <input type="checkbox" id="sun" name="days[]" value="Sun"> 
                    <label for="sun">Sun</label>
                </div>
            </div>

            <div class="form-group">
                <label>How long are you able to commit to volunteering with us? <span class="required">*</span></label>
                <div>
                    <input type="radio" id="duration_3weeks" name="duration" value="3 weeks (minimum)" required> 
                    <label for="duration_3weeks">3 weeks (minimum)</label>
                    <input type="radio" id="duration_1-3months" name="duration" value="1-3 months" required> 
                    <label for="duration_1-3months">1-3 months</label>
                    <input type="radio" id="duration_6months" name="duration" value="6 months" required> 
                    <label for="duration_6months">6 months</label>
                    <input type="radio" id="duration_ongoing" name="duration" value="Ongoing" required> 
                    <label for="duration_ongoing">Ongoing</label>
                    <input type="radio" id="duration_other" name="duration" value="Other" required> 
                    <label for="duration_other">Other</label>
                </div>
            </div>

           

            <div class="form-group">
                <label for="volunteer_experience">Have you previously engaged in any volunteer or work responsibilities where consistent participation was required? Please describe your role and involvement. <span class="required">*</span></label>
                <textarea id="volunteer_experience" name="volunteer_experience" required></textarea>
            </div>

            <div class="form-group">
                <label>Skilled volunteer positions <span class="required">*</span></label>
                <div>
                    <input type="checkbox" id="skill_seo_audit" name="skills[]" value="Website SEO Audit"> 
                    <label for="skill_seo_audit">Website SEO Audit</label>
                    <input type="checkbox" id="skill_google_ads" name="skills[]" value="Google Ads"> 
                    <label for="skill_google_ads">Google Ads</label>
                    <input type="checkbox" id="skill_blog_posts" name="skills[]" value="SEO Blog posts"> 
                    <label for="skill_blog_posts">SEO Blog posts</label>
                    <input type="checkbox" id="skill_uiux" name="skills[]" value="UI/UX"> 
                    <label for="skill_uiux">UI/UX</label>
                    <input type="checkbox" id="skill_animation_videos" name="skills[]" value="Animation videos"> 
                    <label for="skill_animation_videos">Animation videos</label>
                    <input type="checkbox" id="skill_proof_reading" name="skills[]" value="Proof Reading"> 
                    <label for="skill_proof_reading">Proof Reading</label>
                </div>
            </div>

            <div class="form-group">
                <label>Have you received any training or education in this field or a related area? <span class="required">*</span></label>
                <div>
                    <input type="radio" id="training_yes" name="training" value="Yes" required> 
                    <label for="training_yes">Yes</label>
                    <input type="radio" id="training_no" name="training" value="No" required> 
                    <label for="training_no">No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="goal">What do you hope to achieve or learn through your volunteering experience with us? <span class="required">*</span></label>
                <textarea id="goal" name="goal" required></textarea>
            </div>

            <div class="form-group">
                <label for="skills_gain">Are there any specific skills or experiences you wish to gain from your time volunteering? </label>
                <textarea id="skills_gain" name="skills_gain"></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="name">Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" class="small-input" required>
            </div>

            <div class="form-group">
                <label for="city">City <span class="required">*</span></label>
                <input type="text" id="city" name="city" class="small-input" required>
            </div>

            <div class="form-group">
                <p>Our Volunteer orientation days are 1st Saturday & 3rd Monday of each month in Patna only. Attendance is mandatory. You will receive the confirmation each month.</p>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

    <div id="right">
        <!-- Additional content for the right section can be added here -->
        <img src="../teamwork/teamwork1.jpg">
        <img src="../teamwork/teamwork2.png">
        <img src="../teamwork/teamwork3.jpg">
        <img src="../teamwork/teamwork4.jpg">
    </div>
</div>
<div id="last">
        <img src="../DogHead.webp">
</div>
    
</body>
</html>
