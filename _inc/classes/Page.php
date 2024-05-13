
<?php

    class Page{
        private $page_name;

        public function set_page_name($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheet() {
            //<!-- favicon -->
    echo '<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">';
    //google font
    echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">';
    echo '<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">';
    //fontawesome
    echo '<link rel="stylesheet" href="../assets/css/all.min.css">';
    //bootstrap
    echo '<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">';
    //owl carousel
    echo '<link rel="stylesheet" href="../assets/css/owl.carousel.css">';
    //magnific popup
    echo '<link rel="stylesheet" href="../assets/css/magnific-popup.css">';
    //animate css
    echo '<link rel="stylesheet" href="../assets/css/animate.css">';
    //mean menu css
    echo '<link rel="stylesheet" href="../assets/css/meanmenu.min.css">';
    //main style
    echo '<link rel="stylesheet" href="../assets/css/main.css">';
    //responsive
    echo '<link rel="stylesheet" href="../assets/css/responsive.css">';		
        }

        function add_scripts(){
            //jquery
        echo('<script src="../assets/js/jquery-1.11.3.min.js"></script>');
        //bootstrap
        echo('<script src="../assets/bootstrap/js/bootstrap.min.js"></script>');
        //count down
        echo('<script src="../assets/js/jquery.countdown.js"></script>');
        //isotope
        echo('<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>');
        //waypoints
        echo('<script src="../assets/js/waypoints.js"></script>');
        //owl carousel
        echo('<script src="../assets/js/owl.carousel.min.js"></script>');
        //magnific popup
        echo('<script src="../assets/js/jquery.magnific-popup.min.js"></script>');
        //mean menu
        echo('<script src="../assets/js/jquery.meanmenu.min.js"></script>');
        //sticker js
        echo('<script src="../assets/js/sticker.js"></script>');
        //main js
        echo('<script src="../assets/js/main.js"></script>');
        }
        function redirect_homepage(){
            header("Location: templates/home.php");
            die("Nepodarilo sa nájsť Domovskú stránku");
        }
    }

?>