<div class="container" style="margin-top: 200px;">
    <div class="vstack gap-2 col-md-5 mx-auto mt-5">
        <div class="card" style="width: 500px;">

        <div class="card-body text-center">
            <h1 class="card-title mt-4"><?= $heading?></h1>

                <form action="<?= base_url('second/update_alat')?>" method="post" enctype="multipart/form-data">

                <label style="margin-left: -250px; margin-top: 50px;" for="id_pabrik"><h5>ID Pabrik</h5></label>    
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
 
                        <ul class="list-group list-group-flush">  
                            <input class="list-group-item" type="text" name="id_pabrik" disabled="disabled" value="<?= $alatedit->id_pabrik ?>">
                        </ul>  
                    </div>

                <label style="margin-left: -250px; margin-top: 20px;" for="id_pabrik"><h5>Nama Alat</h5></label>    
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">

                        <ul class="list-group list-group-flush">
                            <input class="list-group-item" style="font-style: italic;" type="text" name="nama_alat" value="<?= $alatedit->nama_alat?>" placeholder="Masukkan nama pabrik..." required>
                        </ul>
                    </div>

                    <label style="margin-left: -250px; margin-top: 20px;" for="id_pabrik"><h5>ID Alat</h5></label>    
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">

                        <ul class="list-group list-group-flush">
                            <input class="list-group-item" style="font-style: italic;" type="text" name="id_alat" value="<?= $alatedit->id_alat ?>" placeholder="Masukkan nama pabrik..." required>
                        </ul>
                    </div>
                    <button class="btn btn-primary mt-5" style="width: 200px;" type="submit">Update</button>
              


                    
                </form>

        </div>

        </div>
    </div> 
    
    <a class="btn btn-secondary" style="margin-left: 325px; margin-top: 20px;" href="<?= base_url('master')?>">kembali</a>
       
</div>
	