<!--creation de mon tableau pour afficher mes chaines-->
<table class="table table-success table-striped">
    <tr class="header">
        <th class="main">Categories</th>
        <th class="sub-info">Messages</th>
        <th class="sub-info">Last message</th>
    </tr>
    <?php
    while($c = $category->fetch()) {
        $subcat->execute(array($c['id'])); // lui fait passer l'id qui est en cour dans la boucle

        $sub_category = ''; //Initialisation de ma variable

        while($sc = $subcat->fetch()) {
            $sub_category .= '<a href="">'.$sc['name'].'</a> | '; // affiche mes sous catégorie
        }
        //Je renvoie ma sous chaine indiqué dans sub_categorie en lui indiquant la longueur de la chaine. Ici je je retire les trois dernier caractere de la chaine
        $sub_category = substr($sub_category, 0, -3);
        ?>
        <tr>
            <td class="main">
                <h4><a href=""><?= $c['name'] ?></a></h4>
                <p>
                    <!--echo de mes sous categories-->
                    <?= $sub_category ?>
                </p>
            </td>
            <td class="sub-info"><?php
                $usRand = rand(100000,999999);
                echo $usRand?></td>
            <td class="sub-info">DATE STATUS<br />USERNAME</td>
        </tr>
    <?php } ?>
</table>