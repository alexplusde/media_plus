<?php
$addon = rex_addon::get('media_manager_responsive');

$table_name = 'rex_media_manager_type_group';

\rex_extension::register(
    'YFORM_MANAGER_DATA_PAGE_HEADER',
    function (\rex_extension_point $ep) {
        if ($ep->getParam('yform')->table->getTableName() === $ep->getParam('table_name')) {
            return '';
        }
    },
    \rex_extension::EARLY,
    ['table_name'=>$table_name]
);

$yform = $addon->getProperty('yform', []);
$yform = $yform[\rex_be_controller::getCurrentPage()] ?? [];

$_REQUEST['table_name'] = $table_name;

include \rex_path::plugin('yform', 'manager', 'pages/data_edit.php');
