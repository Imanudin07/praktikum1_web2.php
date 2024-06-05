<!-- Navbar -->
@include('layouts.header');
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Periksa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Periksa</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            @foreach ($data_periksa as $periksa)
        <form action="{{url('periksa/update/'.$periksa->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" value="{{$periksa->tanggal}}" name="tanggal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="berat">Berat</label>
                                            <input type="text" class="form-control" id="berat" value="{{$periksa->berat}}" name="berat" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggi">Tinggi</label>
                                            <input type="text" class="form-control" id="tinggi" value="{{$periksa->tinggi}}" name="tinggi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tensi">Tensi</label>
                                            <input type="text" class="form-control" id="tensi" value="{{$periksa->tensi}}" name="tensi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" value="{{$periksa->keterangan}}" name="keterangan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pasien_id">Pasien</label>
                                            <select id="select" name="pasien_id" class="form-control">
                                                @foreach ($pasien as $p)
                                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="dokter_id">Dokter</label>
                                            <select id="select" name="dokter_id" class="form-control">
                                                @foreach ($dokter as $d)
                                                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block" style="box-shadow: 0 8px 15px rgba(247, 147, 29, 0.4);">Simpan</button>
                                    </form>
                                    @endforeach
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}