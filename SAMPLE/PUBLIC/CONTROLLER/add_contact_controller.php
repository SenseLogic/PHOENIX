<?php // -- IMPORTS

require_once __DIR__ . '/' . 'controller.php';
require_once __DIR__ . '/' . '../MODEL/contact_model.php';

// -- TYPES

class ADD_CONTACT_CONTROLLER extends CONTROLLER
{
    function __construct(
        string $name,
        string $email,
        string $message,
        string $captcha
        )
    {
        parent::__construct();

        if ( IsValidCaptcha( $captcha, $this->Session->Captcha ) )
        {
            AddDatabaseContact( $name, $email, $message );
            $this->SendEmails( $name, $email, $message );

            SetStatus( 200 );
        }
        else
        {
            SetStatus( 401 );
        }
    }

    // ~~

    function SendEmails(
        string $name,
        string $email,
        string $message
        )
    {
        SendEmail(
            'mail3.webcms.lu',
            25,
            'contact@blog.com',
            '0ddd!f259@',
            'contact@blog.com',
            $email,
            'blog.com',
            "Bonjour,\n\nMerci de votre intérêt pour Blog :)\n\nÀ très bientôt,\n\nFrédéric Feltz\n"
            );

        SendEmail(
            'mail3.webcms.lu',
            25,
            'contact@blog.com',
            '0ddd!f259@',
            'contact@blog.com',
            'info@blog.com',
            'Demande de contact de ' . $email . ' pour Blog',
            'Nom : ' . $name . '\nE-mail : ' . $email . '\nMessage : ' . $message . '\n'
            );
    }
}

// -- STATEMENTS

 $add_contact_controller = new ADD_CONTACT_CONTROLLER(  $name,  $email,  $message,  $captcha );
