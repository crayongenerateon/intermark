<script type="text/javascript">
    var token_name = "<?php echo $this->security->get_csrf_token_name() ?>";
    var csrf_hash = "<?php echo $this->security->get_csrf_hash() ?>";
</script>
<script src="<?php echo base_url('/media/js/modalpopup.js'); ?>"></script>
<link href="<?php echo base_url('/media/css/modalpopup.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('media/css/jasny-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
<script src="<?php echo base_url('media/js/jasny-bootstrap.min.js'); ?>"></script>

<?php $this->load->view('admin/tinymce_init'); ?>
<?php $this->load->view('admin/datepicker'); ?>
<?php $this->load->view('career/add_js'); ?>

<?php
if (isset($career)) {
    $inputJudulValue = $career['career_name'];
    $inputRingkasanValue = $career['career_description'];
} else {
    $inputJudulValue = set_value('career_name');
    $inputRingkasanValue = set_value('career_description');
}
?>
<div class="col-sm-9 col-md-10 main">
    <?php if (!isset($career)) echo validation_errors(); ?>
    <?php echo form_open_multipart(current_url()); ?>
    <div class="row page-header">
        <div class="col-sm-9 col-md-6">
            <h3 class="page-title"><?php echo $operation; ?> Karir</h3>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-9 col-md-9">
            <?php if (isset($career)): ?>
                <input type="hidden" name="career_id" value="<?php echo $career['career_id']; ?>" />
            <?php endif; ?>
            <label >Judul Karir *</label>
            <input name="career_name" placeholder="Judul Karir" type="text" class="form-control" value="<?php echo $inputJudulValue; ?>"><br>
            <label >Deskripsi Karir *</label>
            <textarea name="career_description" rows="10"><?php echo $inputRingkasanValue; ?></textarea><br />
            <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
        </div>
        <div class="col-sm-9 col-md-3">
            <div class="form-group">
                <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                <a href="<?php echo site_url('gadmin/career'); ?>" class="btn btn-info"><i class="ion-arrow-left-a"></i> Batal</a>
                <?php if (isset($career)): ?>
                    <a href="<?php echo site_url('gadmin/career/delete/' . $career['career_id']); ?>" class="btn btn-danger" ><i class="ion-trash-a"></i> Hapus</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

<?php if (isset($career)): ?>
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
                <?php echo form_open('gadmin/career/delete/' . $career['career_id']); ?>
                <div class="modal-footer">
                    <a><button style="float: right;margin-left: 10px" type="button" class="btn btn-default" data-dismiss="modal">Tidak</button></a>
                    <input type="hidden" name="del_id" value="<?php echo $career['career_id'] ?>" />
                    <input type="hidden" name="del_name" value="<?php echo $career['career_name'] ?>" />
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