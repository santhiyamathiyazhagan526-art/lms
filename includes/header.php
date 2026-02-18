<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Real-Time LMS</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<style>

/* ================= HEADER ================= */

body{
    margin:0;
    font-family:'Poppins', sans-serif;
}

.main-header{
    background:#1e2a78;
    color:white;
    padding:20px 6%;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

/* LEFT SIDE */

.header-left{
    display:flex;
    align-items:center;
    gap:18px;
}

/* LOGO WITHOUT SHAPE */

.college-logo img{
    width:95px;      /* Adjust size here */
    height:auto;
    display:block;
}

/* COLLEGE NAME */

.college-info h2{
    font-family:'Playfair Display', serif;
    font-size:30px;
    font-weight:700;
    letter-spacing:1px;
    margin:0;
}

/* RIGHT SIDE NAVIGATION */

.header-right a{
    color:white;
    text-decoration:none;
    margin-left:28px;
    font-weight:500;
    font-size:17px;
    transition:0.3s;
}

.header-right a:hover{
    color:#00e0ff;
}

.login-btn{
    background:#00e0ff;
    padding:9px 20px;
    border-radius:6px;
    color:black !important;
    font-weight:600;
}

/* RESPONSIVE */

@media(max-width:768px){
    .main-header{
        flex-direction:column;
        gap:12px;
        text-align:center;
    }

    .college-info h2{
        font-size:22px;
    }

    .college-logo img{
        width:75px;
    }
}

</style>
</head>

<body>

<header class="main-header">

    <!-- LEFT SIDE -->
    <div class="header-left">
        
        <div class="college-logo">
            <img src="assets/images/college-logo.png" alt="College Logo">
        </div>

        <div class="college-info">
            <h2>AKSHYAM360</h2>
        </div>

    </div>

    <!-- RIGHT SIDE NAVIGATION -->
    <div class="header-right">
        <a href="index.php">Home</a>
        <a href="courses.php">Courses</a>
        <a href="about.php">About Us</a>
        <a href="auth.php" class="login-btn">Login / Sign Up</a>
    </div>

</header>