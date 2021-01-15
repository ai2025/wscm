
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<main id="main">

    <!-- ======= inputDataAlumni Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="section-title">
                    <h2 id="isi-Alumni">Input Data Alumni</h2> 
                </div>
            </div>
  
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div id="form">
                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                    </div>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Nama Alumni : <br>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Alumni" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                NIS : <br>
                                <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tempat Lahir : <br>
                                <input type="text" name="tmptLahir" class="form-control" id="tmptLahir" placeholder="Tempat Lahir" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                Tanggal Lahir : <br>
                                <input type="date" class="form-control" name="tglLahir" id="tglLahir" placeholder="Tanggal Lahir" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                No.HP : <br>
                                <input type="text" name="telp" class="form-control" id="telp" placeholder="No. HP" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                Email : <br>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Jenis Kelamin : <br>
                                <select name="gender" class="form-control" name="gender" id="gender" placeholder="" data-rule="minlen:4" data-msg="Lengkapi Data!" >
                                    <option value ="Laki-laki">Laki-laki</option>
                                    <option value ="Perempuan">Perempuan</option>
                                </select>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                Paket Keahlian : <br>
                                <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Paket Keahlian" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tahun Lulus : <br>
                                <input type="text" name="thnLulus" class="form-control" id="thnLulus" placeholder="Tahun Lulus" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                PKL : <br>
                                <input type="text" class="form-control" name="pkl" id="pkl" placeholder="PKL" data-rule="minlen:4" data-msg="Lengkapi Data!" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Pengalaman Kerja :  <br>
                                    <input type="text" name="kerja" class="form-control" id="kerja" placeholder="Pengalaman Kerja" data-rule="minlen:4" data-msg="Lengkapi Data!"/>
                                    <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                Status Pekerjaan :  <br>
                                    <select name="status" class="form-control" name="status" id="status" placeholder="Status Pekerjaan" data-rule="status" data-msg="Lengkapi Data!" >
                                        <option value ="Bekerja">Bekerja</option>
                                        <option value ="Kuliah">Kuliah</option>
                                        <option value ="Bekerja">Tidak keduanya</option>
                                    </select>
                                    <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                Tempat Bekerja / Kuliah :  <br>
                            <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat Bekerja / Kuliah" data-rule="minlen:4" data-msg="Lengkapi Data!"/>
                            </div>
                        </div>
                </div>
                
                <div class="mb-3">
                  <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Data anda akan terkirim. Terima kasih!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim</button></div>
              </form>
            </div>
          </div>
  
        </div>
      </section><!-- End InputDataAlumni Section -->
</main>