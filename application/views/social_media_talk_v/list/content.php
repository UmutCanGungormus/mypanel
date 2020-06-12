<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
        	Sosyal Medya Widget Listesi
        	<a href="<?php echo base_url("social_media_talk/new_form"); ?>" class="pull-right btn btn-outline btn-primary btn-sm"><i class="fa fa-plus"></i>Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">
        	<?php if (empty($items)) { ?>
        		<div class="alert alert-info text-center">
					<h5 class="alert-title">Kayıt Bulunamadı</h5>
					<p>Burada herhangi bir veri bulunmamaktadır. Ekleme için lütfen <a href="<?php echo base_url("social_media_talk/new_form"); ?>">tıklayınız...</a></p>
				</div>
        	<?php }else { ?>
            <table class="table table-hover table-striped table-bordered content-container">

                <thead>
                    <th class="order"><i class="fa fa-reorder"></i></th>
                    <th class="w50">#id</th>
                 
                    <th>Haber Türü</th>
                    <th>Görsel</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody class="sortable" data-url="<?php echo base_url("social_media_talk/rankSetter"); ?>">
                	<?php foreach ($items as $item) { ?>
                		<tr id="ord-<?php echo $item->id; ?>">
                            <td class="order"><i class="fa fa-reorder"></i></td>
                        	<td class="w50 text-center">#<?php echo $item->id; ?></td>
                        	
                            <td class="text-center"><?php echo $item->social_media_talk_type; ?></td>
                            <td class="text-center w300">
                                <?php if ($item->social_media_talk_type == "image") { ?>
                                    <img width="75" src="<?php echo get_picture($viewFolder, $item->img_url, "370x297"); ?>" alt="" class="img-fluid">
                                <?php }else if($item->social_media_talk_type == "video") { ?>
                                    <iframe width="300" src="//www.youtube.com/embed/<?php echo $item->video_url; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <?php } ?>
                            </td>
                        	<td class="text-center w100">
                        		<input
                                    data-url="<?php echo base_url("social_media_talk/isActiveSetter/$item->id"); ?>" 
                        			class="isActive" 
                        			type="checkbox" 
                        			data-switchery 
                        			data-color="#10c469" 
                        			<?php echo ($item->isActive) ? "checked" : ""; ?> 
                        		/>
                        	</td>
                        	<td class="text-center w200">
                            	<button data-url="<?php echo base_url("social_media_talk/delete/$item->id"); ?>" class="btn btn-sm btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Sil</button>
                            	<a href="<?php echo base_url("social_media_talk/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                        	</td>
                    	</tr>
                	<?php } ?>                    
                </tbody>

            </table>
        <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->
</div>