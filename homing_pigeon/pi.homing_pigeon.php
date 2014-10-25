<?php

require_once('config.php');

class Plugin_homing_pigeon extends Plugin
{
  public function index() {
    $langs        = $this->fetchConfig('langs',        NULL, NULL, FALSE, FALSE);
    $lang_default = $this->fetchConfig('lang_default', 'en', NULL, FALSE, FALSE);

    // Get 2 char lang code
    $lang_accept = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Set default language if a '$lang_accept' version of site is not available
    !isset($langs[$lang_accept]) ? $lang_accept = $lang_default : FALSE;

    // Finally redirect to desired location
    URL::redirect($langs[$lang_accept]);
  }
}
