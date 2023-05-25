<?php

function info_card($imagePath, $title){
    $html = '
    <div class="info-card">
                    <a href="">
                        <img class="info-card-img" src="'.$imagePath.'" alt="">
                    </a>
                    <a style="text-decoration: none;" href="">
                        <h4 style="color:white">'.$title.'</h4>
                    </a
                </div>';

    return $html;
}

?>