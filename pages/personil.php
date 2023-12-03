<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/personil.css">
</head> 
<body>
   <div class="table-top">
    <p class="font-w-400 text-white">Data Personil</p>
    <h1 class="text-dark">
        Personil
    </h1>
   </div>

   <div class="table-top">
    <div class="table-action pt-3 d-flex justify-content-between">
        <div class="button-table">
             <div class="button-table">
          <a href="#" type="button" class="btn-md btn btn-red mt-5" data-toggle="modal" data-target="#myModal">TAMBAH PERSONIL</a>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Mahasiswa</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form" action="action/tambah.php" method="post">

                        <div class="form-group">
                          <label>ID Personil</label>
                          <input type="number" name="id_personil" class="form-control" value="">   

                          <label>Nama Personil</label>
                          <input type="text" name="nama_personil" class="form-control" value="">   

                            <label>Pangkat Personil</label>
                          <input type="text" name="nama_personil" class="form-control" value="">   
                           
                          <label>NRP Personil</label>
                          <input type="number" name="nrp_personil" class="form-control" value="">   

                           <label>Status Personil</label>
                          <select name="status_personil" id="status_personil">
                            <option value="Pilih Status" disabled selected>Pilih Status</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktid">Tidak Aktif</option>
                          </select>
                        </div>
                        
                        <div class="modal-footer">  
                          <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>       
                      </form>
                  </div>
                </div>
                
              </div>
            </div>
        </div>
        <div class="search-bar mt-5">
            <input class="text-white font-w-6" type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-main mt-5">
        <h2 class="text-dark font-w-6">Manajemen Data Personil</h2>
   <table class="table  table-hover mt-4">
  <thead class="text-white">
    <tr>
      <th class=" font-w-5" scope="col">ID</th>
      <th class=" font-w-5" scope="col">Name Personil</th>
      <th class=" font-w-5" scope="col">Pangkat</th>
      <th class=" font-w-5" scope="col">NRP</th>
      <th class=" font-w-5" scope="col">Status</th>
      <th class=" font-w-5" scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
    </div>
   </div>
</body>
</html>