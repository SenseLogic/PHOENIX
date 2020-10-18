<?php require __DIR__ . '/' . 'BLOCK/page_header_block.php' ?>
<div class="">
    <div class="page-section form-section">
        <div class="form-container table-container section-table">
            <div class="form-column-name">
                Number
            </div>
            <div class="form-column-name">
                Name
            </div>
            <div class="form-column-name">
                Text
            </div>
            <div class="form-column-name">
                Image
            </div>
            <div class="form-column-name">
                Action
            </div>
            <?php foreach ( $this->SectionArray as  $section ) { ?>
                <div>
                    <?php echo htmlspecialchars( $section->Number ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $section->Name ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $section->Text ); ?>
                </div>
                <div>
                    <?php echo htmlspecialchars( $section->Image ); ?>
                </div>
                <div class="form-centered">
                    <a class="form-button view-button" href="/admin/section/view/<?php echo htmlspecialchars( $section->Id ); ?>">
                    </a>
                    <a class="form-button edit-button" href="/admin/section/edit/<?php echo htmlspecialchars( $section->Id ); ?>">
                    </a>
                    <a class="form-button remove-button" href="/admin/section/remove/<?php echo htmlspecialchars( $section->Id ); ?>">
                    </a>
                </div>
            <?php } ?>
            <div class="form-extended form-centered">
                <a class="form-button form-button-large add-button" href="/admin/section/add">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require __DIR__ . '/' . 'BLOCK/page_footer_block.php' ?>
