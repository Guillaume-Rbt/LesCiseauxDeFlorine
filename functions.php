<?php 
function nav_item (string $lien, string $titre) : string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === "/Les ciseaux de Florine/".$lien){
        $classe .= ' active';
    }
    return <<<html
    <li class="$classe"> 
        <a class="nav-link" href="$lien">$titre</a>
    </li>
html;  
}

function menu () {
    return
     nav_item('index.php', 'Accueil').
     nav_item('qui_suis_je.php','Qui suis-je ?').
     nav_item('prestations.php','Prestations').
     nav_item('contact.php', 'Contact');
}