<?php

    // Must have .htaccess file configuration ====//
    // Check the .htaccess file
    $page = basename($_SERVER['REQUEST_URI']); 
    // =================END======================//

    if ($page == '' || $page == '/' || $page == 'CodeSplitting') {

        // The CodeSplitting is a subdirectory 
        // http://localhost/CodeSplitting/
        $title = "Home";
        $content = "Views/Home.php";

    }elseif($page =='about'){

        // http://localhost/CodeSplitting/about
        $title = "About";
        $content = "Views/About.php";

    }elseif($page =='contact'){

        // http://localhost/CodeSplitting/contact
        $title = "Contact";
        $content = "Views/Contact.php";

    }else{
        // http://localhost/CodeSplitting/anything-here
        $title = "Page not found";
        $content = "Views/404.php";
    }
    
    // import the Head and Nav
    include "Views/Components/HeadComponent.php";
    include 'Views/Components/NavBarComponent.php';
?>

<body>
    <main>
        <!-- Check if true then import the views -->
        <?php
            
            if ($content) {
                include $content;
            }
        ?>

    </main>
</body>
</html>