<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            Blog
        </title>
        <link type="text/css" rel="stylesheet" href="/static/style/materialize.min.css"/>
        <style>
            .full-width
            {
                width: 100%;
            }
        </style>
    </head>
    <body class="container">
        <script type="text/javascript" src="/static/script/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="/static/script/materialize.min.js"></script>
        <div class="row">
            <nav class="col m12">
                <ul>
                    <?php foreach ( $this->SectionArray as  $section ) { ?>
                        <li>
                            <a href="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/section/<?php echo htmlspecialchars( $section->Id ); ?>">
                                <?php echo htmlspecialchars( $section->Name ); ?>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( $this->Session->UserIsConnected ) { ?>
                        <li>
                            <a href="/<?php echo htmlspecialchars( $this->LanguageCode ); ?>/subscribers">
                                Subscribers
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col m9">
                <h1>
                    Blog
                </h1>
