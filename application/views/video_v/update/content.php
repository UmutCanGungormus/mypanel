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
                <form action="<?php echo base_url("video/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Albüm & Single Adı</label>
                        <input class="form-control" placeholder="Albüm & Single Adı" name="title" value="<?php echo $item->title; ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Yapımcı</label>
                        <input class="form-control" placeholder="Yapımcı" name="producer" value="<?php echo $item->producer; ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("producer"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Çıkış Yılı</label>
                        <input class="form-control" placeholder="Çıkış Yılı" name="release_year" value="<?php echo $item->release_year; ?>">
                        <?php if (isset($form_error)) { ?>
                            <small class="input-form-error pull-right"><?php echo form_error("release_year"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="content" class="m-0" data-plugin="summernote" data-options="{height: 250}"><?php echo $item->content; ?></textarea>
                    </div>
            
                    </div><!-- .form-group -->
                    <?php if (isset($form_error)) { ?>
                        <div class="form-group " >
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control">
                        </div>
                        <div class="form-group " >
                            <label>Video Url</label>
                            <input class="form-control" placeholder="Video bağlantısını buraya yapıştırınız." name="video_url">
                            <?php if (isset($form_error)) { ?>
                                <small class="input-form-error pull-right"><?php echo form_error("video_url"); ?></small>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-md-1 ">
                                <img src="<?php echo get_picture($viewFolder, $item->img_url, "370x297"); ?>" class="img-fluid">
                            </div>
                            <div class="col-md-9 form-group " >
                                <label>Görsel Seçiniz</label>
                                <input type="file" name="img_url" class="form-control">
                            </div>
                        </div>
                        <div class="form-group " >
                            <label>Video Url</label>
                            <input class="form-control" placeholder="Video bağlantısını buraya yapıştırınız." name="video_url" value="<?php echo $item->video_url; ?>">
                        </div>
                    <?php } ?>
                    
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("video"); ?>" class="btn btn-md btn-danger btn-outlinen">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>