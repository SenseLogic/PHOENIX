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
            'mail.spark.com',
            25,
            'contact@spark.com',
            'xyz',
            'contact@spark.com',
            $email,
            'spark.com',
            "Hi,\n\nThanks for your interest in Spark :)\n\nBest regards,\n\nThe Spark team\n"
            );

        SendEmail(
            'mail.spark.com',
            25,
            'contact@spark.com',
            'xyz',
            'contact@spark.com',
            'contact@spark.com',
            'Contact request from ' . $email . ' about Spark',
            'Name : ' . $name . '\nEmail : ' . $email . '\nMessage : ' . $message . '\n'
            );
    }
}

// -- STATEMENTS

 $add_contact_controller = new ADD_CONTACT_CONTROLLER(  $name,  $email,  $message,  $captcha );
