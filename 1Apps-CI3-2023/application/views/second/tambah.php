<div class="container" style="margin-top: 200px;">
    <div class="vstack gap-2 col-md-5 mx-auto mt-5">
        <div class="card" style="width: 500px;">

        <div class="card-body text-center">
            <h1 class="card-title mt-4"><?= $heading?></h1>

                <form action="<?= base_url('second/simpan_alat')?>" method="post" enctype="multipart/form-data">
                
                <label style="margin-left: -250px; margin-top: 50px;" for="nama_pabrik"><h5>ID Pabrik</h5></label>    
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                        <ul class="list-group list-group-flush">  
                            <select name="id_pabrik" class="list-group-item" style="font-style: italic;">
                                <?php foreach($pabrik as $row): ?> 
                                    <option value="<?= $row->id_pabrik?>"><?= $row->id_pabrik?></option>
                                <?php endforeach; ?>    
                            </select>
                        </ul>  
                    </div>

                <label style="margin-left: -250px; margin-top: 20px;" for="nama_pabrik"><h5>Nama Pabrik</h5></label>
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                        <ul class="list-group list-group-flush">
                            <select name="nama_pabrik" class="list-group-item" style="font-style: italic;">
                                <?php foreach($pabrik as $row): ?> 
                                    <option value="<?= $row->nama_pabrik?>"><?= $row->nama_pabrik?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                        </ul>
                        
                        <label style="margin-left: -250px; margin-top: 20px;" for="nama_pabrik"><h5>Nama Alat</h5></label>
                        <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                            <ul class="list-group list-group-flush">
                                <input type="text" name="nama_alat" class="list-group-item" style="font-style: italic;" placeholder="Masukkan Nama Alat" required>
                            </div>
                        </ul>
                        <button class="btn btn-primary mt-5" style="width: 200px;" type="submit">Simpan</button>
                    </div>
                
                </form>

            </div>
        </div>
        <a class="btn btn-secondary" style="margin-left: 325px; margin-top: 20px;" href="<?= base_url('master')?>">kembali</a> 
    </div>
    
</div>