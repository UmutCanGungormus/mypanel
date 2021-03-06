<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Yazar / Editör Ekle
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("writers/save"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Ad Soyad</label>
                        <input class="form-control" placeholder="Ad Soyad" name="name">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("name"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Görevi</label>
                        <input class="form-control" placeholder="Görevi" name="type">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("type"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input class="form-control" type="email" placeholder="E-Mail" name="email">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Şifre</label>
                        <input class="form-control" type="password" placeholder="****" name="password">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("password"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group image_upload_container">
                        <label>Görsel Seçiniz</label>
                        <input type="file" name="img_url" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("writers"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div>
        </div>
    </div>
</div>