<!doctype html>
<html lang="en">
    <head>
        <?php require __DIR__ . '/' . 'page_head_block.php' ?>
    </head>
    <body>
        <?php require __DIR__ . '/' . 'page_body_block.php' ?>
        <div class="container-extended page-container">
            <div class="page-menu">
                <div class="page-menu-content">
                    <div class="page-menu-item">
                        <a href="/admin/text">
                            <span class="form-button form-button-large text-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/section">
                            <span class="form-button form-button-large section-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/article">
                            <span class="form-button form-button-large article-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/comment">
                            <span class="form-button form-button-large comment-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/subscriber">
                            <span class="form-button form-button-large subscriber-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/contact">
                            <span class="form-button form-button-large contact-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/user">
                            <span class="form-button form-button-large user-button">
                            </span>
                        </a>
                    </div>
                    <div class="page-menu-item">
                        <a href="/admin/disconnect">
                            <span class="form-button form-button-large disconnect-button">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-title">
                <span class="page-title-content">
                    <?php echo htmlspecialchars( $this->Title ); ?>
                </span>
            </div>
            <div class="page-body">
                <div class="page-body-content">
