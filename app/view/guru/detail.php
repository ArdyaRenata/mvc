<div class="container mt-5">
    <div class="row">
      <div class="col-6">
<table class="table table-bordered " id="myTable">
          <thead>
            <tr class="text-center">
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">Info</th>
            </tr>
          </thead>
          <tbody>
              <tr class="text-center">
                <td>
                <?= $data['Guru']['nama'];?>
                </td>
                <td>
                <?= $data['Guru']['jenis_kelamin'];?>
                </td>
                <td>
                <?= $data['Guru']['alamat'];?>
                </td>
                <td>             <a href="<?= BASE_URL;?>/siswa"style="text-decoration:none;"
                    class="btn btn-primary">Kembali</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div></div></div>