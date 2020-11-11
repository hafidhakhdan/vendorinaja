<!-- !! KALO MAU UBAH BILANG2 DULU KALO GA GUA GOROK !! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->renderSection('title'); ?>
    <link rel="stylesheet" href="/assets/navbar.css">
    <link rel="stylesheet" href="/assets/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- add your own css dude -->
    <?= $this->renderSection('custom_css'); ?>

    <!-- also if you need js things -->
    <?= $this->renderSection('custom_headScript'); ?>

</head>
<body class="main">

    <!-- navbar cok -->
    <?= $this->include('Layout/navbar'); ?>

    <!-- place your page content here -->
    <?= $this->renderSection('content'); ?>

    <footer class="footer">
        <div class="footer-left">
            <h2>Your Own Product.</h2>
            <p>Your Own Design.</p>
            <div class="line"></div>
            <div class="socials">
                <a href="" ><i class="fa fa-twitter"></i></a>
                <a href="" ><i class="fa fa-instagram"></i></a>
                <a href="" ><i class="fa fa-facebook"></i></a>
                <a href="" ><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h3>Product</h3>
                <ul class="box">
                    <li><a href="#">T-shirt</a></li>
                    <li><a href="#">Kemeja</a></li>
                    <li><a href="#">PDH</a></li>
                </ul>
            </li>
            <li class="Company">
                <h3>Company</h3>
                <ul class="box">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Newsroom</a></li>
                </ul>
            </li>
            <li class="features">
                <h3>Resources</h3>
                <ul class="box">
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Safety</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Verification</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="#">StreamKit</a></li>
                    <li><a href="#">Open Source</a></li>
                    <li><a href="#">Security</a></li>
                </ul>
            </li>
            <li class="features">
                <h3>Policies</h3>
                <ul class="box">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Guidlines</a></li>
                    <li><a href="#">Acknowledgement</a></li>
                    <li><a href="#">Licenses</a></li>
                </ul>
            </li>                     
        </ul>
        <div class="lineBottom"></div>
        <div class="footer-bottom">
            <h2>Vendorin.aja</h2>
            <a href=""><button class="signup">Sign up</button></a>
        </div>
    </footer>

    <script>
        const menutoggle = document.querySelector('.menu-toggle input');
        const nav = document.querySelector('nav ul');
        const main = document.querySelector('.main')

        menutoggle.addEventListener('click', function(){
            nav.classList.toggle('slide');

        })

        main.addEventListener('click', function(){
        	nav.classList.remove('slide');
        })
    </script>
    <?= $this->renderSection('custom_bodyScript'); ?>
</body>
</html>