<div class="content-wrapper">
	<section class="content-header">
		<h1>Pengelolaan Data <?= ucwords($this->setting->sebutan_kecamatan)?></h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('sid_core')?>"> Daftar <?= ucwords($this->setting->sebutan_kecamatan)?></a></li>
			<li class="active">Data <?= ucwords($this->setting->sebutan_kecamatan)?></li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?= site_url("sid_core")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Ranting">
							<i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar <?= ucwords($this->setting->sebutan_kecamatan)?>
           	</a>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data"  class="form-horizontal">
									<div class="box-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label class="col-sm-3 control-label" for="dusun">Nama  <?= ucwords($this->setting->sebutan_kecamatan)?></label>
													<div class="col-sm-7">
														<input  id="dusun" class="form-control input-sm required" type="text" placeholder="Nama  <?= ucwords($this->setting->sebutan_kecamatan)?>" name="dusun" value="<?= $dusun?>">
													</div>
												</div>
											</div>
											<?php if ($dusun): ?>
												<div class="col-sm-12">
													<div class="form-group">
														<label class="col-sm-3 control-label" for="kepala_lama">Ketua  <?= ucwords($this->setting->sebutan_kecamatan)?> Sebelumnya</label>
														<div class="col-sm-7">
															<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
																<strong><?= $individu["nama"]?></strong>
																<br/>KTA - <?= $individu["nik"]?>
															</P>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<div class="col-sm-12">
												<div class="form-group">
													<label class="col-sm-3 control-label" for="id_kepala">KTA / Nama Ketua  <?= ucwords($this->setting->sebutan_kecamatan)?></label>
													<div class="col-sm-7">
														<select class="form-control select2" style="width: 100%;" id="id_kepala" name="id_kepala">
															<option selected="selected">-- Silakan Masukan KTA / Nama--</option>
															<?php foreach ($penduduk as $data): ?>
																<option value="<?= $data['id']?>">KTA :<?= $data['nik']." - ".$data['nama']." - ".$data['dusun']?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="box-footer">
										<div class="col-xs-12">
											<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
											<button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

