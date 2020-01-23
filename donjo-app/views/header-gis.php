
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
	echo $this->setting->admin_title
		. ' ' . ucwords($this->setting->sebutan_kabupaten)
		. (($desa['nama_kabupaten']) ? ' ' . unpenetration($desa['nama_kabupaten']) : '')
		. get_dynamic_title_page_from_path();
?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php if(is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
	<link rel="shortcut icon" href="<?php echo base_url()?><?php echo LOKASI_LOGO_DESA?>favicon.ico" />
<?php else: ?>
	<link rel="shortcut icon" href="<?php echo base_url()?>favicon.ico" />
<?php endif; ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo base_url()?>rss.xml" />
<link href="<?php echo base_url()?>assets/css/screen.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style-gis.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/noJS.css" /></noscript>
<?php if(is_file("desa/css/siteman.css")): ?>
	<link type='text/css' href="<?php echo base_url()?>desa/css/siteman.css" rel='Stylesheet' />
<?php endif; ?>


<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-layout-1.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.formtips.1.2.2.packed.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.elastic.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.flexbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/donjoscript/donjoscript2.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/donjoscript/donjo.ui.layout.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/donjoscript/donjo.ui.mainmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/donjoscript/donjo.ui.dialog.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/donjoscript/donjo.ui.attribut.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/validasi.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $this->setting->google_key; ?>"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jscolor/jscolor.js"></script>
</head>
<body>
<div class="ui-layout-north" id="header">
<div id="sid-logo"><a href="<?php echo site_url()?>first" target="_blank"><img src="<?php echo LogoDesa($desa['logo']);?>" alt=""/></a></div>
<div id="sid-judul">SimBusMe Sistem Manajemen BS Melati</div>
<div id="sid-info"><?php echo ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten'].", ".$this->setting->sebutan_kecamatan." ".unpenetration($desa['nama_kecamatan']).", ".$this->setting->sebutan_provinsi." ".unpenetration($desa['nama_provinsi']))?></div>
<div id="userbox" class="wrapper-dropdown-3" tabindex="1">
        <div class="avatar">
		<?php if($foto){?>
			<img src="<?php echo AmbilFoto($foto)?>" alt=""/>
		<?php }else{?>
			<img src="<?php echo base_url()?>assets/files/user_pict/kuser.png" alt=""/>
		<?php }?>
</div>
<div class="info">
<div><strong>Anda Login sebagai</strong></div>
<div><?php echo $nama?></div>
</div>

<ul class="dropdown" tabindex="1">
	<li><a href="<?php echo site_url()?>user_setting" target="ajax-modalz" rel="window-lok" header="Pengaturan Pengguna" title="Pengaturan Pengguna"><i class="fa fa-user fa-lg"></i>Setting User</a></li>
<?php  if($_SESSION['grup']==1 OR $_SESSION['grup']==2){?>
	<li><a href="<?php echo site_url()?>modul/clear"><i class="fa fa-gear fa-lg"></i>Pengaturan</a></li>
<?php  }?>
<li><a href="<?php echo site_url()?>siteman"><i class="fa fa-power-off fa-lg"></i>Log Out</a></li>
</ul>

</div>
</div>
<div id="sidebar" >
</div>
<div class="ui-layout-center" id="wrapper">


<!-- NOTIFICATION-->
<?php  if($_SESSION['success']==1): ?>
<script type="text/javascript">
$('document').ready(function(){
notification('success','Data Berhasil Disimpan')();
});
</script><?php  elseif($_SESSION['success']==-1): ?>
<script type="text/javascript">
$('document').ready(function(){
notification('error','Data Gagal Disimpan')();
});
</script><?php  elseif($_SESSION['success']==-2): ?>
<script type="text/javascript">
$('document').ready(function(){
notification('error','Simpan data gagal, nama id sudah ada!')();
});
</script><?php  elseif($_SESSION['success']==-3): ?>
<script type="text/javascript">
$('document').ready(function(){
notification('error','Simpan data gagal, nama id sudah ada!')();
});
</script><?php  endif; ?><?php  $_SESSION['success']=0; ?>
<!-- ************ -->
<!-- ************ -->

<div class="module-panel">
	<div class="contentm" style="overflow: hidden;">
		<?php foreach ($modul AS $mod){?>
			<?php
			if ($this->setting->offline_mode >= 2 &&
				in_array($mod['url'], array('web', 'gis'))) {
				continue;
			}
			?>
			<a class="cpanel <?php if($modul_ini==$mod['id']){?>selected<?php }?>" href="<?php echo site_url()?><?php echo $mod['url']?>">
				<img src="<?php echo base_url()?>assets/images/cpanel/<?php echo $mod['ikon']?>" alt=""/>
				<span><?php echo $mod['modul']?></span>
			</a>
		<?php } ?>
	</div>
</div>
