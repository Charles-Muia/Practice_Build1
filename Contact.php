<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ResWeb.css">
    <title> Contact US Page </title>
</head>
<body>
<header><hr>
    <a href="index.php" class="header-brand"> techware <span> scope </span> solutions </a>
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
<main>
    <hr>
    <form action="">

        <fieldset>
        <legend> <h2> Any Comments or Questions? <br> Fill In The Form Below. </h2></legend>
            <span> * </span>
        <input type="text" size="40px" name="" required placeholder="First Name">
            <span> * </span>
        <input type="text" size="40px" name="" required placeholder="Second Name"> <br><br>
            <span> * </span>
        <input type="text" size="40px" name="" required placeholder="Email Address">
            <span> * </span>
        <input type="tel" size="40px" name="" required placeholder="Mobile Number"> <br><br>
<!--            <span> * </span>-->
            <label for="">Subject: Choose Category</label>
<!--        <input type="text" size="40px" name="" placeholder="Subject">-->
            <select name="Choose Category" required id="">
                <option value="Feedback"> Feedback </option>
                <option value="Inquiry"> General Inquiry </option>
                <option value="Inquiry"> Call Back Request </option>
                <option value="Inquiry"> Log A Complaint </option>
                <option value="Inquiry"> Book An Appointment </option>
                <option value="Inquiry"> Others </option>
            </select> <span> * </span> <br>
        <br>
            <textarea rows="10" cols="80" placeholder="Type Your Comments or Questions Here"> </textarea>

        <br>
        <button type="reset">Clear</button>
        <button type="submit">Send</button>
<!--            <button type="submit" onclick="alert('Message Sent Successfully')" name="Click-Send">Send</button>-->
        </fieldset>
    </form>
<!--    <section class="page-banner">-->
<!--        <div class="banner-align">-->
<!--            <h2> — digital professionals — </h2>-->
<!--            <h1> ICT Specialists in Hardware / Software, repairs, Office stationery & Printing Solutions. </h1>-->
<!--        </div>-->
<!--    </section>-->
    <div class="wrapper">

</main>
<footer>
    <ul class="footer-1-links">
        <li class="list-heading"> Quick Links </li>
        <li><a href="#"></a>Home</li>
        <li><a href="#"></a>Portfolio</li>
        <li><a href="#"></a>Services</li>
        <li><a href="#"></a>Contact</li>
        <li><a href="#"></a>Find Us</li>
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

