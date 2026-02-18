<?php include("includes/header.php"); ?>
<title>About Us - Real-Time LMS</title>

<!-- ================= HERO ================= -->

<section class="about-hero">
    <div class="hero-overlay">
        <h1>About Our Real-Time LMS</h1>
        <p>Where Innovation Meets Education</p>
    </div>
</section>

<!-- ================= INTRO SECTION ================= -->

<section class="about-section">
    <div class="about-wrapper">

        <div class="about-text">
            <h2>Empowering Future Professionals</h2>
            <p>
                Our Real-Time Learning Management System is built to transform
                traditional classrooms into intelligent digital ecosystems.
                We combine live sessions, AI assistance, structured assessments,
                and industry-focused learning paths to prepare students for real careers.
            </p>
        </div>

        <div class="about-img">
            <img src="assets/images/slide2.jpg" alt="Learning Environment">
        </div>

    </div>
</section>

<!-- ================= STATS ================= -->

<section class="stats-section">

    <div class="stat-card">
        <h2 class="counter" data-target="50">0</h2>
        <p>Students Placed</p>
    </div>

    <div class="stat-card">
        <h2 class="counter" data-target="120">0</h2>
        <p>Live Sessions Conducted</p>
    </div>

    <div class="stat-card">
        <h2 class="counter" data-target="25">0</h2>
        <p>Expert Mentors</p>
    </div>

</section>

<!-- ================= MISSION ================= -->

<section class="mission-section">
    <h2>Our Mission</h2>
    <p>
        To bridge the gap between academic learning and industry expectations
        through practical exposure, technology integration, and personalized mentoring.
    </p>
</section>

<style>

/* HERO */

.about-hero{
    height:70vh;
    background:url('assets/images/slide1.jpg') center/cover no-repeat;
    display:flex;
    align-items:center;
    justify-content:center;
    position:relative;
}

.about-hero::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
}

.hero-overlay{
    position:relative;
    text-align:center;
    color:white;
}

.hero-overlay h1{
    font-size:48px;
    margin-bottom:15px;
}

/* INTRO */

.about-section{
    padding:100px 8%;
}

.about-wrapper{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.about-text h2{
    margin-bottom:20px;
    font-size:32px;
    color:#5a2d82;
}

.about-img img{
    width:100%;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

/* STATS */

.stats-section{
    background:#5a2d82;
    padding:80px 8%;
    display:flex;
    justify-content:space-around;
    text-align:center;
    color:white;
}

.stat-card{
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(10px);
    padding:40px;
    border-radius:20px;
    width:250px;
}

.stat-card h2{
    font-size:40px;
    margin-bottom:10px;
}

/* MISSION */

.mission-section{
    padding:100px 8%;
    text-align:center;
}

.mission-section h2{
    margin-bottom:20px;
    font-size:32px;
    color:#5a2d82;
}

/* RESPONSIVE */

@media(max-width:900px){
    .about-wrapper{
        grid-template-columns:1fr;
    }

    .stats-section{
        flex-direction:column;
        gap:30px;
        align-items:center;
    }
}

</style>

<script>

/* Animated Counter */

const counters = document.querySelectorAll('.counter');

const animateCounters = () => {
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const increment = target / 100;

        let count = 0;

        const update = () => {
            if(count < target){
                count += increment;
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(update);
            } else {
                counter.innerText = target + "+";
            }
        };

        update();
    });
};

let started = false;

window.addEventListener("scroll", function(){
    const section = document.querySelector(".stats-section");
    const sectionTop = section.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;

    if(sectionTop < screenHeight - 100 && !started){
        started = true;
        animateCounters();
    }
});

</script>

<?php include("includes/footer.php"); ?>