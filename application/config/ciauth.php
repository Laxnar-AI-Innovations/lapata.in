<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// JWT secret consumed by CIAuth (fallback if not set in main config)
$config['jwt_key'] = getenv('JWT_KEY') ?: 'change_me_jwt';

// Minimal CIAuth configuration to avoid missing config errors
$config['ciauth'] = array(
    'site_name' => 'Khoji',
    'autologin_cookie_name' => 'autologin',
    'email_activation' => FALSE,
    'email_send_type' => 'phpmail',
    'email_account' => '',
    'email_from' => 'no-reply@localhost'
);


