<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div>
    <div class="page-section form-section">
        <form class="form-centered" action="/admin/subscriber/remove/<?php echo htmlspecialchars( $this->Subscriber->Id ); ?>" method="post">
            <div class="form-container">
                <div class="form-field-name">
                    Email :
                </div>
                <div>
                    <input class="form-input" name="Email" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->Email ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Ip Address :
                </div>
                <div>
                    <input class="form-input" name="IpAddress" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->IpAddress ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Browser :
                </div>
                <div>
                    <input class="form-input" name="Browser" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->Browser ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Latitude :
                </div>
                <div>
                    <input class="form-input" name="Latitude" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->Latitude ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Longitude :
                </div>
                <div>
                    <input class="form-input" name="Longitude" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->Longitude ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Country Code :
                </div>
                <div>
                    <input class="form-input" name="CountryCode" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->CountryCode ); ?>" readonly/>
                </div>
                <div class="form-field-name">
                    Date Time :
                </div>
                <div>
                    <input class="form-input" name="DateTime" type="text" value="<?php echo htmlspecialchars( $this->Subscriber->DateTime ); ?>" readonly/>
                </div>
                <a class="justify-self-start form-button form-button-large cancel-button" href="/admin/subscriber">
                </a>
                <button class="justify-self-end form-button-large form-button form-button-large remove-button" type="submit">
                </button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
