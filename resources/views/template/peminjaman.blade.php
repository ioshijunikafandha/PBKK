@include('template.include.css')
@include('template.include.header')
@include('template.include.footer')
@include('template.include.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Peminjaman</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Peminjaman</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Peminjaman</h5>
            </div>
   
            <link rel="stylesheet" type="text/css" href="styles.css">
        </head>
        <body>
            <div class="btn btn-primary float-right"> 
                <button type="button" class="btn btn-primary">+Tambah</button>
            </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama_Anggota</th>
                    <th scope="col">Judul_Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Kode_Buku</th>
                    <th scope="col">Tanggal_Peminjaman</th>
                    <th scope="col">Aksi</th>
                  </tr>
                  <tbody>
                        
                    @foreach ($peminjamans as $index => $peminjaman)
                        
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $peminjaman->Nama_Anggota }}</td>
                        <td>{{ $peminjaman->Judul_Buku }}</td>
                        <td>{{ $peminjaman->Penulis }}</td>
                        <td>{{ $peminjaman->Kode_Buku }}</td>
                        <td>{{ $peminjaman->Tanggal_Peminjaman }}</td>
                        <td>
                            <a href="/template/{{ $peminjaman->Id }}/edit_peminjaman" class="btn btn-success">
                                <i class="fas fa-edit"></i> Edit </a>
                        
                            <form action="/template/{{ $peminjaman->Id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i> Delete </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </thead>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->