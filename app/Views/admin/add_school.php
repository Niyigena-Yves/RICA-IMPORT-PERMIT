<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/select2/css/select2.min.css'); ?>">
<script type="application/javascript" src="<?= base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>
<div class="app-inner-layout app-inner-layout-page">

	<div class="app-inner-layout__wrapper">
		<div class="app-inner-layout__content">
			<div class="tab-content">
				<div id="tab-content-0" class="tab-pane tabs-animation fade active show" role="tabpanel">
					<div class="container-fluid">
						<div class="row">
							<form action="<?= base_url('admin/manipulate_school'); ?>" class="validate autoSubmit">
								<div class="pull-left" style="margin-bottom: 20px">
									<button type="submit" class="btn btn-success"><?= lang("app.SaveSchool"); ?> </button>
									<button type="submit" class="btn btn-info" data-target="<?=base_url('schools');?>"><?= lang("app.saveClose"); ?> </button>
									<button type="reset" class="btn btn-light"><?= lang("app.reset"); ?> </button>
								</div>
								<h4 class="pull-right"><?=strtoupper($subtitle);?></h4>
								<hr style="width: 100%;float: left"/>
								<div class="col-sm-12 col-md-6 col-lg-6 pull-left">
									<div class="main-card mb-3 card" style="padding: 20px">
										<div class="form-group">
											<label><?= lang("app.schoolName"); ?> </label>
											<input class="form-control" type="text" name="name" required minlength="3">
										</div>
										<div class="form-group">
											<label><?= lang("app.acronym"); ?> </label>
											<input class="form-control" type="text" name="acronym" required minlength="2">
										</div>
										<div class="form-group">
											<label><?= lang("app.phone"); ?> </label>
											<input class="form-control" type="text" name="phone" required
												   data-parsley-length="[10,13]"
												   data-parsley-length-message="<?= lang("app.invPhone");?>">
										</div>
										<div class="form-group">
											<label><?= lang("app.mail"); ?> </label>
											<input class="form-control" type="email" name="email" required>
										</div>
										<div class="form-group">
											<label><?= lang("app.headMaster"); ?> </label>
											<input class="form-control" type="text" name="headmaster" required minlength="4">
										</div>


										<div class="form-group">
											<label><?= lang("app.website"); ?> </label>
											<input class="form-control" type="url" name="web" >
										</div>
										<div class="form-group">
											<label><?= lang("app.code"); ?> </label>
											<input type="text" name="school_code" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6 pull-left ">
									<div class="main-card mb-3 card" style="padding: 20px">
										<div class="form-group">
											<label>Package </label>
											<a href="javascript:void" class="pull-right" data-toggle="modal" data-target="#mdlpkg"><i class="fa fa-plus"></i> <?= lang("app.createNewPackage"); ?> </a>
											<a href="javascript:void" class="pull-right" data-toggle="refresh" data-href="<?=base_url('admin/get_package');?>" data-target="package" style="margin: 0 10px"><i class="fa fa-sync faa-spin"></i> </a>
											<select class="form-control select2" name="package" id="package" required>
												<option selected disabled><?= lang("app.SelectPackages"); ?> </option>
												<?php
												foreach ($packages as $item) {
													echo "<option value='{$item['id']}'>{$item['title']}</option>";
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label><?= lang("app.academicType"); ?> </label>
											<select class="form-control select2" multiple id="academicType" data-target="academicType" name="academicType[]" required>
												<option disabled><?= lang("app.selectAcademicType"); ?> </option>
												<?php
												foreach ($academicTypes as $academicType) {
													echo "<option value='{$academicType->id}'>{$academicType->title}</option>";
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label><?= lang("app.country"); ?> </label>
											<select class="form-control select2" id="country" data-target="district" name="country" required>
												<option selected disabled><?= lang("app.selectCountry"); ?> </option>
												<?php
												foreach ($countries as $country) {
													echo "<option value='{$country['id']}'>{$country['title']}</option>";
												}
												?>
											</select>
										</div>

										<div class="drc_option_container">
											<div class="form-group">
												<label><?= lang("app.province"); ?> </label>
												<input type="text" name="province" class="form-control">
											</div>
											<div class="form-group">
												<label><?= lang("app.district"); ?> </label>
												<input type="text" name="district" class="form-control">
											</div>
											<div class="form-group">
												<label><?= lang("app.sector"); ?> </label>
												<input type="text" name="sector" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label><?= lang("app.address"); ?> </label>
											<input type="text" name="address" class="form-control">
										</div>
								</div>

								<hr style="width: 100%;float: left"/>
								<div class="pull-left" style="margin-bottom: 20px">
									<button type="submit" class="btn btn-success"><?= lang("app.SaveSchool"); ?> </button>
									<button type="submit" class="btn btn-info" data-target="<?=base_url('schools');?>" ><?= lang("app.saveClose"); ?></button>
									<button type="reset" class="btn btn-light"><?= lang("app.reset"); ?> </button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id="tab-content-1" class="tab-pane tabs-animation fade" role="tabpanel">
					<div class="container-fluid">
						<div class="row">
							<div class="form-group">
								<label><?= lang("app.sClass"); ?> </label>
								<select class="form-control select2" id="class">
									<option selected disabled><?= lang("app.selectClass"); ?> </option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".drc_option_container").hide();
	$("#country").change(function(e){
		// console.log();
		if($(this).val() == "2"){
			$(".drc_option_container").show();
		} else {
			$(".drc_option_container").hide();
		}
	});
</script>
