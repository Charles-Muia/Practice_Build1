<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ResWeb.css">
    <title> Our Offering Page </title>
</head>
<body>
<header>
    <!--<hr>-->
    <a href="ResWeb.php" class="header-brand"> techware  <span> scope </span> solutions</a>
    <nav>
        <ul>
            <li><a href="#">About Me</a></li>
            <li><a href="ResWeb.php">Home</a></li>
            <li><a href="FAQ's.php">FAQ</a></li>
            <li><a href="#">Services</a></li>
        </ul>
        <a href="#" class="header-cases">Log In</a>
        <a href="#" class="header-cases">Sign Up</a>
    </nav>
</header>
<!--<hr>-->
<main>
    <section class="offering-page">
        <h2> Our Offering </h2>
        <a href="H_S.php">
        <div class="offering-page">
            <p> Hardware & Software </p>
        </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
        <a href="#">
            <div class="offering-page">
                <p>Offering 1</p>
            </div>
        </a>
    </section>
</main>
    <footer>
        <ul class="footer-1-links">
            <li class="list-heading"> Quick Links </li>
            <li><a href="ResWeb.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="#">Find Us</a></li>
            <br>
        </ul>
        <ul class="footer-2-links">
            <li class="list-heading"> Read More </li>
            <li><a href="#">Printing Solutions - <span> Available Models </span></a></li>
            <li><a href="#">Office Stationery - <span> Make Your Orders </span></a></li>
            <li><a href="#">Techware Scope Solutions - <span> YouTube Channel </span></a></li>
            <li><a href="#">Our Journey - <span> Where we started </span></a></li>
            <br><br>
            <!--        <p class="footer-p"> Copyright &copy; <Span id="year"></Span> All Rights Reserved </p>-->
            <p class="footer-p"> Copyright &copy; <Span id="year"></Span> All Rights Reserved. Techware <span> Scope </span> Solutions. </p>
            <script>
                const year = document.getElementById("year");
                const d = new Date();
                year.innerHTML = d.getFullYear();
            </script>
        </ul>
        </div>

        </div>

        <div class="footer-social">
            <a href="#"><img src="Gallery/fb.jpg" alt="facebook logo"></a>
            <a href="#"><img src="Gallery/Tw.jpg" alt="twitter logo"></a>
            <a href="#"><img src="Gallery/Yb.jpg" alt="YouTube logo"></a>
        </div>
</footer>
</div>
</body>
</html>

