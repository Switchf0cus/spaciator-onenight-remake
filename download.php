<?php

if ($_SESSION) {
    include 'nav_auth.php';
} else {
    include 'nav_non_auth.php';
}

?>

<div class="download-page">
    <div class="download-title-container">
        <h1 class="download-title">
            Download the game now for Windows and Mac
        </h1>
    </div>
    <div class="download-box-container">
        <div class="download-icons-container">
            <i class="fab fa-windows"></i>
            <i class="fab fa-apple"></i>
        </div>
    </div>
</div>
</div>


<?php

include 'footer.php';

?>