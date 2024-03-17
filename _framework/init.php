<?php

/* Framework Functions */
require BX_FW_DIR . "functions.php";

/* Theme Customizer */
require bx_fw_file_path( "customizer/customizer.php" );

/* Theme Config */
require bx_theme_file_path( "config.php" );

/* Plugin Installer */
require bx_theme_file_path( "plugins.php" );

/* Basic WooCommerce Support */
require bx_fw_file_path( "woocommerce.php" );