
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?=BASE_URL?>/admin">Universitas Hasanuddin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="form.php">Tambah Data</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:20px">
        <h2>Daftar Mahasiswa</h2>        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NIM</th>
                    <th scope="col">TEMPAT TANGGAL LAHIR</th>
                    <th scope="col">KONTAK</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <a href="" class="badge badge-primary"><i class="fa fa-edit"></i></a>
					<a href="" class="badge badge-primary"><i class="fa fa-eraser"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>