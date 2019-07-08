<?php
if (!empty($categories)){
    foreach ($categories as $category) {
        echo $category["name"];
    }

}
else{
    echo "Aucune catégorie n'a été trouvé";
}
    
