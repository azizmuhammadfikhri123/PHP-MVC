<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal"       data-target="#formModal">
                    Tambah Data Siswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL;?>/siswa/cari" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="cari siswa.." name="keyword" id="keyword" autocomplete ="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

        <h3>Daftar Siswa</h3>
            <?php foreach($data['ssw'] as $ssw) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?= $ssw['nama']; ?>
                        <a href="<?= BASEURL;?>/siswa/hapus/<?=$ssw['id']?>" class="badge badge-danger float-right ml-1 " onclick="return confirm('Yakin?');">Delete</a>
                        <a href="<?= BASEURL;?>/siswa/ubah/<?=$ssw['id']?>" class="badge badge-success float-right ml-1 tampilModalUbah " data-toggle="modal"       data-target="#formModal" data-id="<?=$ssw['id'];?>">Ubah</a>
                        <a href="<?= BASEURL;?>/siswa/detail/<?=$ssw['id']?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>   
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

    <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"  aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" id="nis" name="nis">
                        </div>

                        <div class="form-group">
                            <label for="rombel">Rombel</label>
                            <input type="text" class="form-control" id="rombel" name="rombel">
                        </div>

                        <div class="form-group">
                            <label for="rayon">Rayon</label>
                            <select class="form-control" id="rayon" name="rayon">
                            <option value = "WIKRAMA 1">WIKRAMA 1</option>
                            <option value = "WIKRAMA 2">WIKRAMA 2</option>
                            <option value = "WIKRAMA 3">WIKRAMA 3</option>
                            <option value = "WIKRAMA 4">WIKRAMA 4</option>
                            <option value = "WIKRAMA 5">WIKRAMA 5</option>
                            </select>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

        