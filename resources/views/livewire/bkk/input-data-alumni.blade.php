{{-- <meta charset="UTF-8"> --}}
<main id="main">
@foreach ($data as $data)
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
            <section id="hero" class="d-flex align-items-center">
                <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>{{ $data->nama }}</h1>
            {{-- <a href="#" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section>
    @endforeach


    <!-- ======= inputDataAlumni Section ======= -->
    @auth
    <section id="pkl" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-left">
                <h2>Input Data Alumni</h2>
            </div>
                            {{-- TABEL --}}
                            <div class="entry-content-page">
                                <div class="table-responsive">
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th width="300px">Nama Alumni</th>
                                                <th width="200px">NIS</th>
                                                <th width="200px">Tahun Lulus</th>
                                                <th width="200px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataa as $dataa)
                                                <tr class="odd gradeX">
                                                    <td>{{ $dataa->namaAlumni }}</td>
                                                    <td>{{ $dataa->nisAlumni }}</td>
                                                    <td>{{ $dataa->thnLulus }}</td>
                                                    <td colspan="2">
                                                        <!-- Button Detail  -->
                                                        <div>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            wire:click="loadDataAlumni({{ $dataa->id}})" data-target="#updateAlumniMDL">
                                                                Detail Data
                                                            </button>                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                {{-- </div> --}}
                
            {{-- </div> --}}
    
        </div>
    </section>
    @else
    <section id="contact" class="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="section-title">
                    <h2 id="isi-Alumni">Input Data Alumni</h2> 
                </div>
            </div>
  
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                {{-- <div id="form"> --}}
                    {{-- <div class="row">
                        <div class="col-lg-6">
                        </div>
                    </div> --}}
                    <form wire:submit.prevent="submit" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Nama Alumni : <br>
                                <input wire:model="namaAlumni" type="text" name="namaAlumni" class="form-control" id="namaAlumni" placeholder="Nama Alumni" />
                                @error('namaAlumni') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                            <div class="col-md-6 form-group">
                                NIS : <br>
                                <input wire:model="nisAlumni" type="text" class="form-control" name="nisAlumni" id="nisAlumni" placeholder="NIS" />
                                @error('nisAlumni') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tempat Lahir : <br>
                                <input wire:model="tmptLahir" type="text" name="tmptLahir" class="form-control" id="tmptLahir" placeholder="Tempat Lahir" />
                                @error('tmptLahir') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                            <div class="col-md-6 form-group">
                                Tanggal Lahir : <br>
                                <input wire:model="tglLahir" type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder="Tanggal Lahir" />
                                @error('tglLahir') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                No.HP : <br>
                                <input wire:model="telpAlumni" type="text" name="telpAlumni" class="form-control" id="telpAlumni" placeholder="No. HP" />
                                @error('telpAlumni') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                            <div class="col-md-6 form-group">
                                Email : <br>
                                <input wire:model="emailAlumni" type="email" class="form-control" name="emailAlumni" id="emailAlumni" placeholder="Email" />
                                @error('emailAlumni') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Jenis Kelamin : <br>
                                <select wire:model="gender" name="gender" class="form-control" name="gender" id="gender" >
                                    <option value ="Laki-laki">Laki-laki</option>
                                    <option value ="Perempuan">Perempuan</option>
                                </select>
                                @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                            <div class="col-md-6 form-group">
                                Paket Keahlian : <br>
                                <input wire:model="jurusanAlumni" type="text" class="form-control" name="jurusanAlumni" id="jurusanAlumni" placeholder="Paket Keahlian" />
                                @error('jurusanAlumni') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tahun Lulus : <br>
                                <input wire:model="thnLulus" type="text" name="thnLulus" class="form-control" id="thnLulus" placeholder="Tahun Lulus" />
                                @error('thnLulus') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                            <div class="col-md-6 form-group">
                                PKL : <br>
                                <input wire:model="pkl" type="text" class="form-control" name="pkl" id="pkl" placeholder="PKL" />
                                @error('pkl') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Pengalaman Kerja :  <br>
                                <input wire:model="pengalamanKrj" type="text" name="pengalamanKrj" class="form-control" id="pengalamanKrj" placeholder="Pengalaman Kerja"/>
                                @error('pengalamanKrj') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                            <div class="col-md-6 form-group">
                                Status Pekerjaan :  <br>
                                <select  wire:model="statusPkrjaan" name="statusPkrjaan" class="form-control" name="statusPkrjaan" id="statusPkrjaan" >
                                <option value ="Bekerja">Bekerja</option>
                                <option value ="Kuliah">Kuliah</option>
                                <option value ="Tidak keduanya">Tidak keduanya</option>
                                </select>
                                @error('statusPkrjaan') <span class="text-danger">{{ $message }}</span> @enderror
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tempat Bekerja / Kuliah :  <br>
                                <input wire:model="tmptKerKul" type="text" class="form-control" name="tmptKerKul" id="tmptKerKul" placeholder="Tempat Bekerja / Kuliah"/>
                                @error('tmptKerKul') <span class="text-danger">{{ $message }}</span> @enderror
                                    
                            </div>
                        </div>
                        
                        <div class="mb-3">
                  {{-- <div class="loading">Loading</div> --}}
                            {{-- <div class="sent-message">Data anda akan terkirim. Terima kasih!</div> --}}
                            <div class="text-center"><button class="btn btn-primary" wire:click="simpan">Kirim</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endauth

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="updateAlumniMDL" data-backdrop="static" data-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 style = "color: black" class="modal-title" id="staticBackdropLabel">
                        @if ($id_alumni)
                        Detail Data
                        @else
                        Detail Data
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="submit" class="php-email-form">
                        {{-- @foreach($judulAlumni as $kode => $i) --}}
                        <div class="form-group">
                            {{-- <label for="{{ __($kode) }}" style="color: black"> {{ __($i) }}</label> --}}
                            Nama Alumni : <br>
                            <p>{{ $dataa->namaAlumni}}</p><br>
                            NIS Alumni : <br>
                            <p>{{ $dataa->nisAlumni}}</p><br>
                            Tempat Lahir : <br>
                            <p>{{ $dataa->tmptLahir}}</p><br>
                            Tanggal Lahir : <br>
                            <p>{{ $dataa->tglLahir}}</p><br>
                            No. HP : <br>
                            <p>{{ $dataa->telpAlumni}}</p><br>
                            Email : <br>
                            <p>{{ $dataa->emailAlumni}}</p><br>
                            Jenis Kelamin : <br>
                            <p>{{ $dataa->gender}}</p><br>
                            Jurusan : <br>
                            <p>{{ $dataa->jurusan}}</p><br>
                            Tahun Lulus : <br>
                            <p>{{ $dataa->thnLulus}}</p><br>
                            PKL : <br>
                            <p>{{ $dataa->pkl}}</p><br>
                            Pengalaman Kerja : <br>
                            <p>{{ $dataa->pengalamanKrj}}</p><br>
                            Status Pekerjaan : <br>
                            <p>{{ $dataa->statusPkrjaan}}</p><br>
                            Tempat Kerja / Kuliah : <br>
                            <p>{{ $dataa->tmptKerKul}}</p><br>
                            {{-- @error($kode)
                                <span id="error-msg">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        {{-- @endforeach --}}
                        <div class="modal-footer">
                            <input type="hidden" name="id_alumni" wire:model="id_alumni">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            {{-- @if ($id_alumni)
                            <button type="button" class="btn btn-primary" wire:click="loadDataAlumni">Update</button>
                            @else
                            <button type="button" class="btn btn-primary" wire:click="loadDataAlumni">Create</button>
                            @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End InputDataAlumni Section -->
    
</main>