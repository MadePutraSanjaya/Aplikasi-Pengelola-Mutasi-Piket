<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/user.css">
</head> 
<body>
   <div class="table-top">
    <p class="font-w-400 text-white">Data User</p>
    <h1 class="text-dark">
        USER
    </h1>
   </div>

   <div class="table-top">
    <div class="table-action pt-3 d-flex justify-content-between">
        <div class="button-table">
            <button class="btn btn-red mt-5">
                TAMBAH USER
            </button>
        </div>
        <div class="search-bar mt-5">
            <input class="text-white font-w-6" type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-main mt-5">
        <h2 class="text-dark font-w-6">Manajemen Data User</h2>
   <table class="table  table-hover mt-4">
  <thead class="text-white">
    <tr>
      <th class=" font-w-5" scope="col">ID</th>
      <th class=" font-w-5" scope="col">Name</th>
      <th class=" font-w-5" scope="col">Username</th>
      <th class=" font-w-5" scope="col">Password</th>
      <th class=" font-w-5" scope="col">Roles</th>
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
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
   </div>
</body>
</html>