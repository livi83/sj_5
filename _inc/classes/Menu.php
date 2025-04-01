<?php

class Menu{
    private $menuItems;
    
    public function __construct($menuItems = [])
    {
        // Ak sú položky menu prázdne, nastavíme predvolené položky
        if (empty($menuItems)) {
            $menuItems = [
                ['label' => 'Domov', 'link' => 'index.php'],
                ['label' => 'Portfólio', 'link' => 'portfolio.php'],
                ['label' => 'Q&A', 'link' => 'qna.php'],
                ['label' => 'Kontakt', 'link' => 'kontakt.php']
            ];
        }
        
        // Uloženie položiek menu
        $this->menuItems = $menuItems;
        
    }

    public function index()
    {
        return $this->menuItems;
    }
}

?>