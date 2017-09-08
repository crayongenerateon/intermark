<div class="col-sm-9 col-md-10 main">
    <div class="row">
        <div class="col-md-8">
            <h3 class="page-header">
                Detail Karir
            </h3>
        </div>
        <div class="col-md-4">
            <span class=" pull-right">
                <a href="<?php echo site_url('gadmin/career') ?>" class="btn btn-info"><span class="ion-arrow-left-a"></span>&nbsp; Kembali</a> 
            <a href="<?php echo site_url('gadmin/career/edit/'.$career['career_id']) ?>" class="btn btn-warning"><span class="ion-edit"></span>&nbsp; Edit</a> 
            </span>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Judul Karir</td>
                        <td>:</td>
                        <td><?php echo $career['career_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><?php echo $career['career_description']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>