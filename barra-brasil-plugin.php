<?php

/**
  Plugin Name: Barra Brasil WordPress Plugin
  Description: Seleciona entre as versões IDG-1 e IDG2 da barra do governo brasileiro nas configurações do wordpress.
  Version: 2.0
  Plugin URI: https://github.com/hexemeister/wp-barra-brasil.git
  Author: Renato Moraes
  License: MIT
*/

if( ! defined( 'ABSPATH' ) ) exit;  // Exit if accessed directly

class BarraBrasilPlugin {
  function __construct() {
    add_action('admin_menu', array($this, 'adminPage'));
    add_action('admin_init', array($this, 'settings'));
    $this->initBar();
  }

function initBar() {
  $result = get_option('bb_model')=='1'
      ? require_once 'wp-barra-brasil-IDG1\wp-barra-brasil.php' 
      : require_once 'wp-barra-brasil-IDG2\wp-barra-brasil.php';
  $barra = new WpBarraBrasil\WpBarraBrasil();
}

  function settings() {
    add_settings_section('wcp_first_section', null, null, 'barra-brasil-settings-page');
    add_settings_field('bb_model', 'Modelo de Barra Brasil', array($this, 'locationHTML'), 'barra-brasil-settings-page', 'wcp_first_section');
    register_setting('barrabrasilplugin', 'bb_model', array('sanitize_callback' => array($this, 'sanitizeBar'), 'default' => '2'));
  }

function sanitizeBar($input) {
  if ($input != '1' AND $input != '2') {
    add_settings_error('bb_model', 'wcp_location_error', 'O modelo escolhido de Barra Brasil deve ser IDG 1 ou IDG 2!');
    return get_option('bb_model');
  }
  return $input;
}

function locationHTML() { ?>
  <select name="bb_model">
    <option value="2" <?php selected(get_option('bb_model'), '2') ?>>IDG 2</option>
    <option value="1" <?php selected(get_option('bb_model'), '1') ?>>IDG 1</option>
  </select>
<?php }

  function adminPage() {
    add_options_page('Barra Brasil Configuração', 'Barra Brasil Config', 'manage_options', 'barra-brasil-settings-page', array($this, 'ourHTML'));
  }
  
  function ourHTML() { ?>
    <div class="wrap">
      <h1>Word Count Settings</h1>
      <form action="options.php" method="POST">
        <?php
          settings_fields('barrabrasilplugin');
          do_settings_sections('barra-brasil-settings-page');
          submit_button();
        ?>
      </form>
      <p style="font-style: italic;">criado por <a href="https://github.com/hexemeister/wp-barra-brasil" target="_blank">Renato Moraes</a></p>
    </div>
  <?php }
}

$barraBrasilPlugin = new BarraBrasilPlugin();
