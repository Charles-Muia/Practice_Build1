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
        <button class="accordion">Section 1</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Autem beatae error explicabo incidunt laudantium,
                libero minus numquam odio officia quisquam quo quod sint sunt
                tempora vel veniam vero voluptatem voluptates.</p>
        </div>

        <button class="accordion">Section 2</button>
        <div class="panel">
            <p>Lorem ipsum...</p>
        </div>

        <button class="accordion">Section 3</button>
        <div class="panel">
            <p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
            hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
            hghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
        </div>
        <button class="accordion">Section 4</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Autem beatae error explicabo incidunt laudantium,
                libero minus numquam odio officia quisquam quo quod sint sunt
                tempora vel veniam vero voluptatem voluptates.</p>
        </div>
        <button class="accordion">Section 5</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Autem beatae error explicabo incidunt laudantium,
                libero minus numquam odio officia quisquam quo quod sint sunt
                tempora vel veniam vero voluptatem voluptates.</p>
        </div>

    </section>
</main>
<footer>
    <ul class="footer-1-links">
        <li><a href="#"></a>Home</li>
        <li><a href="#"></a>Portfolio</li>
        <li><a href="#"></a>Services</li>
        <li><a href="#"></a>Contact</li>
        <li><a href="#"></a>Find Us</li>
    </ul>
    <ul class="footer-2-links">
        <li> Read More </li>
        <li><a href="#">Printing Solutions - <span> Available Models </span></a></li>
        <li><a href="#">Office Stationery - <span> Make Your Orders </span></a></li>
        <li><a href="#">Techware Scope Solutions - <span> YouTube Channel </span></a></li>
        <li><a href="#">Our Journey - <span> Where we started </span></a></li>
    </ul>
    <div class="footer-social">
        <a href="#"><img src="Gallery/fb.jpg" alt="facebook logo"></a>
        <a href="#"><img src="Gallery/Tw.jpg" alt="twitter logo"></a>
        <a href="#"><img src="Gallery/Yb.jpg" alt="YouTube logo"></a>
    </div>
</footer>
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
</body>
</html>

