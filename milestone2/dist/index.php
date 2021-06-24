<?php

require __DIR__ . '/templates/db.php';
require __DIR__ . '/templates/head.php';

?>
<div id="app">

    <!-- template da php -->
    <?php
    require __DIR__ . '/templates/header.php';
    require __DIR__ . '/templates/albums.php'; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/app.js"></script>
</body>

</html>