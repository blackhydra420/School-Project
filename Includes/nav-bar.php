<head>
    <link rel="stylesheet" href="../assets/css/nav-bar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<div class="headNav">
    <a href="tel:07673-232839"><i class="fas fa-phone-square fa-rotate-90"></i>&nbsp07673-232839</a>
    <a href="mailto:saraswati7673@gmail.com"><i class="fas fa-envelope-square"></i>&nbspsaraswati7673@gmail.com</a>
    <a href=""><address><i class="fas fa-map-marker-alt"></i>&nbspMadhavpuram, Nagod Satna, M.P. (485001)</address></a>
</div>

<div id="Header">
    <a href="../index.php"><img src="../assets/Images/SchollLogoFull.png" alt="School-Logo" height="80px" class="sLogo displayLogo2"></a>
    <a href="../index.php"><img src="../assets/Images/SaraswatiLogo.png" alt="School-Logo" height="80px" class="sLogo displayLogo1"></a>
    <nav>
        <ul id="navList">
            <li class="navItem"><a class="navLink active" href="../index.php">Home</a></li>
            <li class="navItem"><div class="dropdown"><a href="../activity.php" class="navLink drpLink">Activity</a>
            <div class="dropdown-content">
                <a href="../academics.php">Academics</a>
            </div>    
            </div></li>
            <li class="navItem"><a class="navLink" href="../contact.php">Contact</a></li>
            <li class="navItem"><div class="dropdown"><a href="../about.php" class="navLink drpLink">About</a>
            <div class="dropdown-content">
                <a href="../staff.php">Staff</a>
            </div>    
            </div></li>
            <?php
    if (isset($_SESSION["u_login"])) {
        echo '<li class="navItem"><a class="navLink" href="Includes/logout_inc.php">Logout</a></li>';
    }
    ?>
        </ul>
    </nav>
    <div class="toggle">
    <i class="fa fa-bars menu" aria-hidden="true"></i>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
        $('.toggle').click(function(){
            $('nav').toggleClass('active')
        })
    })
    // $(document).ready(function(){
    //     $('a').click(function(){
    //         $('a').removeClass('active');
    //         $(this).addClass('active');
    //     });
    // });
</script>