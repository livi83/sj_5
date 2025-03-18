<?php
    
    function get_menu(array $pages){
        $menuItems = ''; 
        foreach($pages as $page_name => $page_url){
            // Pre každú stránku pridá odkaz do navigačného menu
            $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
            //<li><a href="index.html">Domov</a><li>
        }
        // Vráti vygenerovaný HTML kód pre navigačné menu
        return $menuItems;
    }

    function add_scripts(){
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        echo '<script src="js/menu.js"></script>';
        switch($page_name){
            case 'index':
                echo('<script src="js/slider.js"></script>');
                break;
            case 'qna':
                echo('<script src="js/accordion.js"></script>');
                break;  
            }
    }
    
?>