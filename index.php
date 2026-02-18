<?php include("includes/header.php"); ?>

<!-- ================= HERO SLIDER ================= -->

<section class="hero-slider">

    <div class="slides">
        <img src="assets/images/slide1.jpg" class="slide active">
        <img src="assets/images/slide2.jpg" class="slide">
        <img src="assets/images/slide3.jpg" class="slide">
    </div>

    <div class="hero-content">
        <h1>Empowering Digital Learning</h1>
        <p>"Education is the most powerful weapon which you can use to change the world."</p>
        <a href="auth.php" class="hero-btn">Get Started</a>
    </div>

</section>

<!-- ================= FEATURES SECTION ================= -->

<section class="features-section">

    <h2>Our LMS Features</h2>

    <div class="features-grid">

        <div class="feature-card">
            <h3>📡 Live Classes</h3>
            <p>Attend real-time interactive sessions with expert faculty members.</p>
        </div>

        <div class="feature-card">
            <h3>🎥 Recorded Videos</h3>
            <p>Access lecture recordings anytime for revision and clarity.</p>
        </div>

        <div class="feature-card">
            <h3>📝 Online Assessments</h3>
            <p>Participate in quizzes and assignments with instant results.</p>
        </div>

        <div class="feature-card">
            <h3>📊 Progress Tracking</h3>
            <p>Monitor academic performance and learning improvement.</p>
        </div>

        <div class="feature-card">
            <h3>🤖 AI Support</h3>
            <p>Get intelligent suggestions and personalized learning support.</p>
        </div>

        <div class="feature-card">
            <h3>🏆 Certification</h3>
            <p>Download verified digital certificates after course completion.</p>
        </div>

    </div>

</section>

<!-- ================= REVIEWS SECTION ================= -->

<section class="reviews-section">

    <h2>Student Success & Reviews</h2>

    <p class="review-subtitle">
        <span id="placement-count">1</span>+ Students Successfully Placed in Top Companies
    </p>

    <div class="reviews-grid">

        <div class="review-card">
            <div class="stars">★★★★★</div>
            <p>"This LMS helped me crack my placement interview. The real-time quizzes made learning easy."</p>
            <h4>– Priya S (Placed at TCS)</h4>
        </div>

        <div class="review-card">
            <div class="stars">★★★★★</div>
            <p>"Live classes and recorded sessions were extremely useful for my placement preparation."</p>
            <h4>– Kavya R (Placed at Infosys)</h4>
        </div>

        <div class="review-card">
            <div class="stars">★★★★★</div>
            <p>"The structured learning path boosted my confidence for technical interviews."</p>
            <h4>– Nisha M (Placed at Wipro)</h4>
        </div>

    </div>

</section>

<!-- ================= STYLES ================= -->

<style>

/* HERO */

.hero-slider{
    position:relative;
    height:85vh;
    overflow:hidden;
}

.slides{
    position:absolute;
    width:100%;
    height:100%;
}

.slide{
    position:absolute;
    width:100%;
    height:100%;
    object-fit:cover;
    opacity:0;
    transition:opacity 0.6s ease-in-out;
}

.slide.active{
    opacity:1;
}

.hero-content{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    text-align:center;
    width:80%;
}

.hero-content h1{
    font-size:48px;
    margin-bottom:20px;
    color:#000;
}

.hero-content p{
    font-size:20px;
    margin-bottom:25px;
}

.hero-btn{
    padding:12px 28px;
    background:#000;
    color:white;
    text-decoration:none;
    border-radius:4px;
    font-weight:600;
}

/* FEATURES */

.features-section{
    padding:70px 6%;
    text-align:center;
    background:#f4f7fc;
}

.features-section h2{
    margin-bottom:40px;
    color:#5a2d82;
}

.features-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:30px;
}

.feature-card{
    background:linear-gradient(135deg, #7b3fbf, #5a2d82);
    color:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(90,45,130,0.4);
    transition:0.4s;
}

.feature-card:hover{
    transform:translateY(-8px);
}

/* REVIEWS */

.reviews-section{
    padding:70px 6%;
    text-align:center;
    background:#ffffff;
}

.review-subtitle{
    font-size:20px;
    font-weight:bold;
    color:#5a2d82;
    margin-bottom:40px;
}

#placement-count{
    font-size:32px;
    color:#000;
}

.reviews-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:30px;
}

.review-card{
    background:#f8f8f8;
    padding:30px;
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
}

.stars{
    color:#f4c150;
    font-size:18px;
}

/* RESPONSIVE */

@media(max-width:992px){
    .features-grid,
    .reviews-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

@media(max-width:600px){
    .features-grid,
    .reviews-grid{
        grid-template-columns:1fr;
    }

    .hero-content h1{
        font-size:28px;
    }
}

</style>

<script>

/* Slider */
let slides = document.querySelectorAll(".slide");
let current = 0;

function changeSlide(){
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
}
setInterval(changeSlide, 3000);


/* Scroll Triggered Placement Counter */

let started = false;

function animateCounter(){
    let counter = document.getElementById("placement-count");
    let target = 50;
    let count = 1;

    let interval = setInterval(() => {
        if(count < target){
            count++;
            counter.innerText = count;
        } else {
            clearInterval(interval);
        }
    }, 40);
}

window.addEventListener("scroll", function(){
    let reviewSection = document.querySelector(".reviews-section");
    let sectionTop = reviewSection.getBoundingClientRect().top;
    let screenHeight = window.innerHeight;

    if(sectionTop < screenHeight - 100 && !started){
        started = true;
        animateCounter();
    }
});

</script>
<?php include("includes/footer.php"); ?>