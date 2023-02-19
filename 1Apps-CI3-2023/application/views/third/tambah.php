<div class="container" style="margin-top: 200px;">
    <div class="vstack gap-2 col-md-5 mx-auto mt-5">
        <div class="card" style="width: 500px;">

        <div class="card-body text-center">
            <h1 class="card-title mt-4"><?= $heading?></h1>

                <form action="<?= base_url('third/simpan_nilai')?>" method="post" enctype="multipart/form-data">
                
                <label style="margin-left: -250px; margin-top: 50px;" for="id_alat"><h5>ID Alat</h5></label>    
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                        <ul class="list-group list-group-flush">  
                            <select name="id_alat"  class="list-group-item" style="font-style: italic;">
                                <?php foreach($alat as $row): ?> 
                                    <option value="<?= $row->id_alat?>"><?= $row->id_alat?></option>
                                <?php endforeach; ?>    
                            </select>
                        </ul>  
                    </div>

                <label style="margin-left: -250px; margin-top: 20px;" for="nama_alat"><h5>Nama Alat</h5></label>
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                        <ul class="list-group list-group-flush">
                            <select name="nama_alat" disabled="disabled" class="list-group-item" style="font-style: italic;">
                                <?php foreach($alat as $row): ?> 
                                    <option value="<?= $row->nama_alat?>"><?= $row->nama_alat?></option>
                                <?php endforeach; ?>
                            </select>
                        </ul>
                    </div>

                <label style="margin-left: -250px; margin-top: 20px;" for="bulan"><h5>Bulan</h5></label>
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                        <ul class="list-group list-group-flush">
                            <select name="bulan" class="list-group-item" style="font-style: italic;">   
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </ul>
                    </div>

                <label style="margin-left: -250px; margin-top: 20px;" for="nama_pabrik"><h5>Nilai Pengukuran</h5></label>
                    <div class="card col-md-5 mx-auto mt-2" style="width: 400px;">
                        <ul class="list-group list-group-flush">
                            <input type="number" min="1" max="100" name="nilai_pengukuran" class="list-group-item" style="font-style: italic;" placeholder="Masukkan Nilai dari 1 - 100" required>
                        </ul>
                    </div>
                <button class="btn btn-primary mt-5" style="width: 200px;" type="submit">Simpan</button>
                
                </div>
                
                </form>

            </div>
        </div>
        <a class="btn btn-secondary" style="margin-left: 325px; margin-top: 20px;" href="<?= base_url('master')?>">kembali</a> 
    </div>
    
</div>