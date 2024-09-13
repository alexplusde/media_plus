<?php
$addon = rex_addon::get('media_manager_responsive');
?>
<div class="row">
	<div class="col-lg-8">

	</div>
	<div class="col-lg-4">
		<?php

$anchor = '<a target="_blank" href="https://donate.alexplus.de/?addon=media_manager_responsive"><img src="' . rex_url::addonAssets('media_manager_responsive', 'jetzt-beauftragen.svg') . '" style="width: 100% max-width: 400px;"></a>';

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $addon->i18n('media_manager_responsive_donate'), false);
$fragment->setVar('body', '<p>' . $addon->i18n('media_manager_responsive_info_donate') . '</p>' . $anchor, false);
echo rex_config::get('alexplusde', 'donated', 0) === 1 ? $fragment->parse('core/page/section.php') : '';
?>
	</div>
</div>
