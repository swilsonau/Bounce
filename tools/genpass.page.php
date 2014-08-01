
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Gen Pass</h2>
        <p style="text-align: center;">
          <?php
            echo password_hash($_GET['pass'], PASSWORD_DEFAULT);
          ?>
        </p>

    </div>

</div>
