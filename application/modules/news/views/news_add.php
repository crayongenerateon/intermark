<link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/angular-multi-select.css') ?>">
<script type="text/javascript" src="<?php echo base_url('media/js/angular-multi-select.js') ?>"></script>

<script type="text/javascript">
    var token_name = "<?php echo $this->security->get_csrf_token_name() ?>";
    var csrf_hash = "<?php echo $this->security->get_csrf_hash() ?>";
</script>
<script src="<?php echo media_url('js/modalpopup.js'); ?>"></script>
<link href="<?php echo media_url('css/modalpopup.css'); ?>" rel="stylesheet">
<link href="<?php echo media_url('css/jasny-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
<script src="<?php echo media_url('js/jasny-bootstrap.min.js'); ?>"></script>

<?php $this->load->view('admin/tinymce_init'); ?>
<?php $this->load->view('admin/datepicker'); ?>

<?php
if (isset($news)) {
    $inputPublishValue = $news['news_post_date'];
    $inputJudulValue = $news['news_title'];
    $inputRingkasanValue = $news['news_description'];
    $inputIsiValue = $news['news_content'];
} else {
    $inputPublishValue = set_value('news_published_date');
    $inputJudulValue = set_value('news_title');
    $inputRingkasanValue = set_value('news_short_desc');
    $inputIsiValue = set_value('news_content');
}
?>

<div class="col-sm-9 col-md-10 main">
    <?php if (!isset($news)) echo validation_errors(); ?>
    <?php echo form_open_multipart(current_url()); ?>
    <div class="row page-header">
        <div class="col-sm-9 col-md-6">
            <h3 class="page-title"><?php echo $operation; ?> Berita</h3>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-9 col-md-9">
            <?php if (isset($news)): ?>
                <input type="hidden" name="news_id" value="<?php echo $news['news_id']; ?>" />
            <?php endif; ?>

            <label >Judul Berita *</label>
            <input name="news_title" placeholder="Judul Berita" type="text" class="form-control" value="<?php echo $inputJudulValue; ?>"><br>

            <label >Deskripsi Singkat Berita*</label>
            <textarea name="news_description" class="tinymce-init" rows="7"><?php echo $inputRingkasanValue; ?></textarea><br>

            <label >Isi Berita*</label>
            <textarea name="news_content" class="tinymce-init" rows="15"><?php echo $inputIsiValue; ?></textarea><br>
            <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
        </div>
        <div class="col-sm-9 col-md-3">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('gadmin/news'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
                <?php if (isset($news)): ?>
                    <a href="<?php echo site_url('gadmin/news/delete/' . $news['news_id']); ?>" class="btn btn-danger" ><i class="ion-trash-a"></i> Hapus</a>
                <?php endif; ?>
                <br> 

                <?php if (isset($news)): ?>
                    <?php foreach ($image as $key): ?>
                        <a target="_blank" href="<?php echo upload_url($key['news_image_path']) ?>"><?php echo $key['news_image_path'] ?></a>
                        <br>
                    <?php endforeach ?>

                <?php endif ?>
                <hr>
                <label>Upload File</label>
                <div id="p_upload">
                    <p>
                        <input type="file" class="" name="newsImage[]">
                        <br>
                    </p>
                </div>
                <a href="#" id="addUpload"><i class="glyphicon glyphicon-plus-sign"></i><b>  Tambah file lainnya</b></a>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<?php if (isset($news)): ?>
    <!-- Delete Confirmation -->
    <div class="modal fade" id="confirm-del">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><b>Konfirmasi Penghapusan</b></h4>
                </div>
                <div class="modal-body">
                    <p>Data yang dipilih akan dihapus&hellip;</p>
                </div>
                <?php echo form_open('gadmin/news/delete/' . $news['news_id']); ?>
                <div class="modal-footer">
                    <a><button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button></a>
                    <input type="hidden" name="del_id" value="<?php echo $news['news_id'] ?>" />
                    <input type="hidden" name="del_name" value="<?php echo $news['news_title'] ?>" />
                    <button type="submit" class="btn btn-primary">Ya</button>
                </div>
                <?php echo form_close(); ?>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php if ($this->session->flashdata('delete')) { ?>
    <script type="text/javascript">
        $(window).load(function() {
            $('#confirm-del').modal('show');
        });
    </script>
    <?php }
    ?>
<?php endif; ?>

<script type="text/javascript">
    var myApp = angular.module('myApp', [ 'multi-select' ]);

    $(function() {
        var divUpload = $('#p_upload');
        var i = $('#p_upload p').size() + 1;

        $("#addUpload").click(function() {
            $('<p>' +
                '<input type="file" name="newsImage[]" multiple="">' +
                '<a href="#" class="remUpload">Hapus</a>' +
                '<br>' +
                '</p>').appendTo(divUpload);

            i++;
            return false;
        });

        $(document).on("click", ".remUpload", function() {
            if (i > 2) {
                $(this).parents('p').remove();
                i--;
            }
            return false;
        });
    });
</script>