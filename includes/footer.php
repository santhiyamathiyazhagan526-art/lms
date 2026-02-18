<footer class="main-footer">

    <div class="footer-container">

        <!-- College Info -->
        <div class="footer-section">
            <h3>P.K.R. ARTS COLLEGE FOR WOMEN</h3>
            <p>Gobichettipalayam - 638 476</p>
            <p>Tamil Nadu, India</p>
            <p>Email: info@pkrcollege.edu</p>
            <p>Phone: +91 98765 43210</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section">
            <h4>Quick Links</h4>
            <a href="index.php">Home</a>
            <a href="courses.php">Courses</a>
            <a href="about.php">About Us</a>
            <a href="auth.php">Login</a>
        </div>
	
        <div class="footer-section">
            <h4>Student Serivce Support</h4>
             <p>Internship</p>
            <p>Training</p>
       </div>

        <!-- Social Media -->
        <div class="footer-section">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2026 P.K.R. Arts College for Women | LMS Portal | Developed by Santhiya
    </div>

</footer>

<style>

/* ================= FOOTER ================= */

.main-footer{
    background:#1e2a78;   /* Same as header */
    color:white;
    padding:50px 6% 20px 6%;
}

.footer-container{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:40px;
}

.footer-section h3{
    font-family:'Playfair Display', serif;
    margin-bottom:15px;
}

.footer-section h4{
    margin-bottom:15px;
}

.footer-section p{
    margin-bottom:8px;
    font-size:14px;
}

.footer-section a{
    display:block;
    margin-bottom:8px;
    text-decoration:none;
    color:white;
    font-size:14px;
    transition:0.3s;
}

.footer-section a:hover{
    color:#00e0ff;
}

.social-icons a{
    margin-right:12px;
    font-size:18px;
    color:white;
    transition:0.3s;
}

.social-icons a:hover{
    color:#00e0ff;
}

.footer-bottom{
    text-align:center;
    margin-top:30px;
    border-top:1px solid rgba(255,255,255,0.2);
    padding-top:15px;
    font-size:13px;
}

/* RESPONSIVE */

@media(max-width:768px){
    .footer-container{
        flex-direction:column;
        text-align:center;
    }

    .social-icons{
        margin-top:10px;
    }
}

</style>

</body>
</html>