<?php

setcookie('user', "", time() - 1);

echo '
    <script>
    window.location="http://localhost/Catatan_perjalanan";
    </script>
';
