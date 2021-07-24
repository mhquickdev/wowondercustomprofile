<!--
=================
MHQuickDev
Mahmudul Hasan
www.mhquickdev.custom
=========================

-->
<?php
if ($wo['loggedin'] == false) {
  header("Location: " . Wo_SeoLink('index.php?link1=welcome'));
  exit();
}
$wo['description'] = $wo['config']['siteDesc'];
$wo['keywords']    = $wo['config']['siteKeywords'];
$wo['page']        = 'custom_profile';
$wo['title']       = 'Custom Profile Style';
$wo['content']     = Wo_LoadPage('setting/custom-profile-style/custom_profile');