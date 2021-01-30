<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="page-section form-section">
    <form class="form-centered" name="ConnectUser" action="/admin" method="post">
        <div class="form-container form-container-small">
            <div class="form-field-name">
                Pseudonym :
            </div>
            <input class="form-input" name="Pseudonym" type="text"/>
            <div class="form-field-name">
                Password :
            </div>
            <input class="form-input" name="Password" type="password"/>
            <div class="form-extended form-centered">
                <button class="form-button form-button-large connect-button" type="submit">
                </button>
            </div>
        </div>
    </form>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
