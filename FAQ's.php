<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ResWeb.css">
    <title> </title>
</head>
<body>
<header>
    <hr>
    <a href="index.php" class="header-brand"> techware  <span> scope </span> solutions</a>
    <nav>
        <ul>
            <li><a href="#">About Me</a></li>
            <li><a href="ResWeb.php">Home</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Services</a></li>

        </ul>
        <a href="#" class="header-cases">Log In</a>
        <a href="#" class="header-cases">Sign Up</a>
    </nav>
</header>
<main>
    <hr>
    <section class="H_S-page">
        <button class="accordion"> <i class="bi bi-arrow-right-square-fill"></i></i> What should I consider before purchasing a laptop or desktop <i class="bi bi-question-square-fill"></i></button>
        <div class="panel">
            <article>
                Ensure the Operating System installed is activated and licensed by the seller to
                facilitate smooth running of the laptop or desktop. Windows 11 is the latest version, Microsoft® recommends processors
                <br> that are 8th Generation and higher.
                Pay attention to any damages or visible breakages, that is not a good sign. A laptop should be light and easy
                to carry around in your bag. <br> Most importantly, a Corei5 or i7 vPro with the latest Intel® Generation is ideal
                for <br> personal or business purposes.
                These deliver leadership in performance with breakthrough efficiency.
                Inquire about the documentation and warranty if covered, this is key information.
                <br></article>
        </div>

        <button class="accordion"> <i class="bi bi-arrow-right-square-fill"></i></i> Windows or MacOS? <i class="bi bi-question-square-fill"></i></button>
        <div class="panel">
            <p> Windows Operating System is a product by Microsoft while MacOS is by Apple. Each is unique and offers different user experience with Windows costing less compared to MacOS.
                <br> </p>
        </div>

        <button class="accordion"> <i class="bi bi-arrow-right-square-fill"></i></i> Tech trends in 2021/22? <i class="bi bi-question-square-fill"></i></button>
        <div class="panel">
            <p>Microsoft released Windows 11 in October 2021 a free update from Windows 10 redesigned for productivity, creativity and ease. You can read more about Windows 11
                <a href="https://blogs.windows.com/windowsexperience/2021/06/24/introducing-windows-11/">here</a>. <br>Brave, a fast, private and secure web browser for PC, Mac and mobile is gaining popularity. </a></p>
        </div>
        <button class="accordion"> <i class="bi bi-arrow-right-square-fill"></i></i> What makes a desktop or laptop slow? <i class="bi bi-question-square-fill"></i></button>
        <div class="panel">
            <p> Windows delivers periodic performance and quality definition updates via the internet, it is important to always install them.
                <br>
                Always ensure that maintenance is administered by ICT professionals.</p>
        </div>
        <button class="accordion">Section 5</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Autem beatae error explicabo incidunt laudantium,
                libero minus numquam odio officia quisquam quo quod sint sunt
                tempora vel veniam vero voluptatem voluptates.</p>
        </div>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
    </section>
</main>
<footer>
    <ul class="footer-1-links">
        <li class="list-heading"> Quick Links </li>
        <li><a href="#">Home</a></li>
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

