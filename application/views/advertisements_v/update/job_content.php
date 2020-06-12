<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->title</b> kaydını düzenliyorsunuz" ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
                    <hr class="widget-separator">
                    <div class="widget-body">                        
                        <form action="<?php echo base_url("advertisement/update/$item->id/?type=job"); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label>İlan Başlığı</label>
                                <input class="form-control" value="<?php echo $item->title; ?>"  placeholder="İlan Başlığı" name="title">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("title"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Şehir </label>
                                <input class="form-control"  value="<?php echo $item->city; ?>" placeholder="Şehir" name="city">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("city"); ?></small>
                                <?php } ?>
                            </div>
                         
                            <div class="form-group">
                                <label>Sektör </label>
                                <input class="form-control" value="<?php echo $item->sector; ?>" placeholder="Sektör" name="sector">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("sector"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Firma Adı</label>
                                <input class="form-control"  value="<?php echo $item->company_name; ?>" placeholder="Firma Adı" name="company_name">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("company_name"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Çalışma Şekli</label>
                                <input class="form-control" value="<?php echo $item->work_type; ?>"  type="text" placeholder="Çalışma Şekli" name="work_type">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("work_type"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Çalışma Saatleri</label>
                                <input class="form-control" value="<?php echo $item->work_time; ?>"   placeholder="Çalışma Saatleri" name="work_time">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("work_time"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Tatil Günleri</label>
                                <input class="form-control" value="<?php echo $item->holiday; ?>"   placeholder="Tatil Günleri" name="holiday">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("holiday"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Eğitim Seviyesi</label>
                                <input class="form-control" value="<?php echo $item->education_level; ?>"   placeholder="Eğitim Seviyesi" name="education_level">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("education_level"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Personel Sayısı</label>
                                <input class="form-control" value="<?php echo $item->personal_count; ?>"  placeholder="Personel Sayısı" name="personal_count">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("personal_count"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>İlan Linki</label>
                                <input class="form-control" value="<?php echo $item->url; ?>"  placeholder="İlan Linki" name="url">
                                <?php if (isset($form_error)) { ?>
                                    <small class="input-form-error pull-right"><?php echo form_error("url"); ?></small>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label>Açıklama</label>
                                <textarea name="content" class="m-0" data-plugin="summernote" data-options="{height: 250}"> <?php echo $item->content; ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-1 image_upload_container">
                                    <img src="<?php echo get_picture($viewFolder,$item->img_url, "255x157"); ?>" class="img-fluid">
                                </div>
                                <div class="col-md-7 form-group image_upload_container">
                                    <label>Görsel Seçiniz</label>
                                    <input type="file" name="img_url" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                            <a href="<?php echo base_url("advertisement/?type=job"); ?>" class="btn btn-md btn-danger btn-outlinen">İptal</a>
                        </form>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
    </div><!-- END column -->
</div>