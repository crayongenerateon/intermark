<div class="col-sm-9 col-md-10 main">
    <h3 class="page-header">
        Daftar Karir
        <a href="<?php echo site_url('gadmin/career/add'); ?>" ><button type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button></a>
    </h3>

    <!-- Indicates a successful or positive action -->

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="controls" align="center">JUDUL</th>
                    <th class="controls" align="center">TANGGAL</th>
                    <th class="controls" align="center">AKSI</th>
                </tr>
            </thead>
            <?php
            if (!empty($career)) {
                foreach ($career as $row) {
                    ?>
                    <tbody>
                        <tr>
                            <td ><?php echo $row['career_name']; ?></td>
                            <td ><?php echo pretty_date($row['career_input_date'], 'l, d/m/Y', FALSE); ?></td>
                             <td>
                                <a class="btn btn-warning btn-xs" href="<?php echo site_url('gadmin/career/view/' . $row['career_id']); ?>" ><span class="ion-eye"></span></a>
                                <a class="btn btn-success btn-xs" href="<?php echo site_url('gadmin/career/edit/' . $row['career_id']); ?>" ><span class="ion-edit"></span></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                }
            } else {
                ?>
                <tbody>
                    <tr id="row">
                        <td colspan="5" align="center">Data Kosong</td>
                    </tr>
                </tbody>
                <?php
            }
            ?>   
        </table>
    </div>
    <div >
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>