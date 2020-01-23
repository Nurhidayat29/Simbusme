<div id="nav">
<ul>
	<?php if($_SESSION['grup']==1){?>
		<li <?php if($act==0){?>class="selected"<?php }?>>
			<a href="<?php echo site_url('hom_desa/konfigurasi')?>">Identitas <?php echo ucwords($this->setting->sebutan_kabupaten)?></a>
		</li>
	<?php }?>
	<li <?php if($act==1){?>class="selected"<?php }?>>
		<a href="<?php echo site_url('pengurus')?>">Pengurus <?php echo ucwords($this->setting->sebutan_kabupaten)?></a>
	</li>
	<li <?php if($act==2){?>class="selected"<?php }?>>
		<a href="<?php echo site_url('hom_desa')?>">SIMBUSME</a>
	</li>
	<li <?php if($act==3){?>class="selected"<?php }?>>
		<a href="<?php echo site_url('hom_desa/donasi')?>">Donasi</a>
	</li>
</ul>
</div>
