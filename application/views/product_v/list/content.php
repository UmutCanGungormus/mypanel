<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Ürün Listesi
			<a href="<?php echo base_url("product/new_form"); ?>" class="pull-right btn btn-outline btn-primary btn-sm"><i class="fa fa-plus"></i>Yeni Ekle</a>
		</h4>
	</div><!-- END column -->
	<div class="col-md-12">
		<div class="widget p-lg">
			<?php if (empty($items)) { ?>
				<div class="alert alert-info text-center">
					<h5 class="alert-title">Kayıt Bulunamadı</h5>
					<p>Burada herhangi bir veri bulunmamaktadır. Ekleme için lütfen <a href="<?php echo base_url("product/new_form"); ?>">tıklayınız...</a></p>
				</div>
			<?php } else { ?>
				<form id="filter_form" onsubmit="return false">
					<div class="row">
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
							<input class="form-control" placeholder="Arama Yapmak İçin Metin Girin." type="text" onkeypress="return runScript(event,'productTable')" name="search">
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<button class="btn bg-red btn-md" onclick="clearFilter('filter_form','productTable')" id="clear_button" data-toggle="tooltip" data-placement="top" data-title="Filtreyi Temizle" data-original-title="" title=""><i class="fa fa-eraser"></i></button>
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<button class="btn bg-olive btn-md" onclick="reloadTable('productTable')" id="search_button" data-toggle="tooltip" data-placement="top" data-title="Yedek Parça Tekliflerinde Ara"><i class="fa fa-search"></i></button>
						</div>
					</div>

				</form>
				<table class="table table-hover table-striped table-bordered content-container productTable">

					<thead>
						<th class=" w50">#</th>
						<th class="order nosort"><i class="fa fa-reorder"></i></th>
						<th>#id</th>
						<th>Başlık</th>
						<th>Kategori</th>
						<th>Durumu</th>
						<th class="text-center w300 nosort">İşlem</th>
					</thead>
					<tbody>

					</tbody>

				</table>

				<script>
					function obj(d) {
						let appendeddata = {};
						$.each($("#filter_form").serializeArray(), function() {
							d[this.name] = this.value;
						});
						return d;
					}
					$(document).ready(function() {
						TableInitializerV2("productTable", obj, {}, "<?= base_url("product/datatable") ?>", true);
						
					});
				</script>
			<?php } ?>
		</div><!-- .widget -->
	</div><!-- END column -->
</div>