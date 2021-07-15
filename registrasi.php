<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
          
			
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
<div class="row">
	<div class="col-lg-12">
        <form class="form-horizontal"  action="simpancalonmahasiswa.php" id="myForm" role="form" method="post" accept-charset="utf-8">
                    
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Data Umum</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Data Keluarga</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Data Pendidikan Formal</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Data Pendidikan Informal</small></a></li>
				<li><a href="#step-5">Step 5<br /><small>Data Tambahan</small></a></li>
				<li><a href="#step-6">Step 6<br /><small>Data Pengalaman Kerja</small></a></li>
				
            </ul>
            
            <div>
                <div id="step-1">
                    <h3>&nbsp;&nbsp;Form Data Umum</h3>
						
                    <!-- isi dengan form sesuai kebutuhan -->
					<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namalengkap">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tempat / Tgl. Lahir</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputName" name="tempatlahir">
                    </div>
					<div class="col-sm-5">
                      <input type="date" class="form-control" id="inputName" name="tanggallahir">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail"  name="alamat">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Kota</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="kota">
                    </div>
					<label for="inputName" class="col-sm-2 control-label">Kode Pos</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="kodepos">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Telepon</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputName" name="telepon" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Handphone</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputName" name="handphone">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <input type="radio" name="kelamin" id="optionsRadios2" value="Pria">Pria &nbsp;
					  <input type="radio" name="kelamin" id="optionsRadios2" value="Wanita">Wanita &nbsp;
                      
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Agama</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="agama">
							  <option value="">--Pilih Agama--</option>
							  <option value="Islam">Islam</option>
							  <option value="Kristen">Kristen</option>
							  <option value="Katolik">Katholik</option>
							  <option value="Hindhu">Hindhu</option>
							  <option value="Budha">Budha</option>
							  <option value="Konghuchu">Konghuchu</option>
							  <option value="Lainnya">Lainnya</option>
						</select>
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Kewarganegaraan</label>

                    <div class="col-sm-2">
                      <select class="form-control select2" style="width: 100%;" name="kewarganegaraan">
							  
							  <option value="WNI">WNI</option>
							  <option value="WNA">WNA</option>
							  
						</select>
                    </div>
					

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="negara">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="status">
							  <option value="">--Pilih Status--</option>
							  <option value="Kawin">Kawin</option>
							  <option value="Belum Kawin">Belum Kawin</option>
							  <option value="Janda/Duda">Janda/Duda</option>
					   </select>
                    </div>
					
                  </div>
				   <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Golongan Darah</label>

                    <div class="col-sm-10">
                      <input type="radio" name="golongandarah" id="optionsRadios2" value="A">A &nbsp;
					  <input type="radio" name="golongandarah" id="optionsRadios2" value="B">B &nbsp;
                      <input type="radio" name="golongandarah" id="optionsRadios2" value="AB">AB &nbsp;
					  <input type="radio" name="golongandarah" id="optionsRadios2" value="O">O &nbsp;
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Status Tempat Tinggal</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="statustempattinggal">
							  <option value="">--Pilih Status Tempat Tinggal--</option>
							  <option value="Orang Tua">Orang Tua</option>
							  <option value="Kost">Kost</option>
							  <option value="Family">Family</option>
							  <option value="Sendiri">Sendiri</option>
						</select>
                    </div>
					<div class="col-sm-10">
                      &nbsp;
                    </div>
					
                  </div>  
                </div>
				
                <div id="step-2">
                   <h3>&nbsp;&nbsp;Form Data Keluarga</h3>
						
                    <!-- isi dengan form sesuai kebutuhan -->
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Ayah/Wali</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namaayah">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Keadaan Ayah</label>

                    <div class="col-sm-10">
                      <input type="radio" name="keadaanayah" id="optionsRadios2" value="Masih Hidup">Masih Hidup &nbsp;
					  <input type="radio" name="keadaanayah" id="optionsRadios2" value="Sudah Meninggal">Sudah Meninggal &nbsp;
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tempat / Tgl. Lahir Ayah</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputName" name="tempatlahirayah">
                    </div>
					<div class="col-sm-5">
                      <input type="date" class="form-control" id="inputName" name="tanggallahirayah">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Ibu/Wali</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namaibu">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Keadaan Ibu</label>

                    <div class="col-sm-10">
                      <input type="radio" name="keadaanibu" id="optionsRadios2" value="Masih Hidup">Masih Hidup &nbsp;
					  <input type="radio" name="keadaanibu" id="optionsRadios2" value="Sudah Meninggal">Sudah Meninggal &nbsp;
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tempat / Tgl. Lahir Ibu</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputName" name="tempatlahiribu">
                    </div>
					<div class="col-sm-5">
                      <input type="date" class="form-control" id="inputName" name="tanggallahiribu">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatwali">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Kota</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="kotawali">
                    </div>
					<label for="inputName" class="col-sm-2 control-label">Kode Pos</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="kodeposwali">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Telepon</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputName" name="teleponwali" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Handphone</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputName" name="handphonewali">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Pendidikan Ayah</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="pendidikanayah">
						  
						  <option value="Tamat SD">Tamat SD</option>
						  <option value="Tamat SLTP">Tamat SLTP</option>
						  <option value="Tamat SLTA">Tamat SLTA</option>
						  <option value="Diploma">Diploma</option>
						  <option value="Sarjana">Sarjana</option>
						  <option value="Pasca Sarjana">Pasca Sarjana</option>
					   </select>
                      
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Pendidikan Ibu</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="pendidikanibu">
						  
						  <option value="Tamat SD">Tamat SD</option>
						  <option value="Tamat SLTP">Tamat SLTP</option>
						  <option value="Tamat SLTA">Tamat SLTA</option>
						  <option value="Diploma">Diploma</option>
						  <option value="Sarjana">Sarjana</option>
						  <option value="Pasca Sarjana">Pasca Sarjana</option>
					   </select>
                      
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Pekerjaan Ayah</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="pekerjaanayah">
							  
							  <option value="Pegawai Negri">Pegawai Negri</option>
							  <option value="Pegawai Swasta">Pegawai Swasta</option>
							  <option value="TNI">TNI</option>
							  <option value="Wiraswasta">Wiraswasta</option>
							  <option value="Pensiunan">Pensiunan</option>
							  <option value="Lain-lain">Lain-lain</option>
							  
						</select>
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Pekerjaan Ibu</label>

                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%;" name="pekerjaanibu">
							  
							  <option value="Pegawai Negri">Pegawai Negri</option>
							  <option value="Pegawai Swasta">Pegawai Swasta</option>
							  <option value="TNI">TNI</option>
							  <option value="Wiraswasta">Wiraswasta</option>
							  <option value="Pensiunan">Pensiunan</option>
							  <option value="Lain-lain">Lain-lain</option>
							  
						</select>
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Penghasilan</label>

                    <div class="col-sm-2">
                      <select class="form-control select2" style="width: 100%;" name="penghasilan">
							  
							  <option value="Kurang dari 1 Juta">Kurang dari 1 Juta</option>
							  <option value="1-3 Juta">1-3 Juta</option>
							  <option value="3-5 Juta">3-5 Juta</option>
							  <option value="Lebih dari 5 Juta">Lebih dari 5 Juta</option>
						</select>
                    </div>
                  </div>
				  
                </div>
                <div id="step-3">
                    <h3>&nbsp;&nbsp;Form Data Pendidikan Formal</h3>
                    <!-- isi dengan form sesuai kebutuhan -->
					<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama SD</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namasd">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat SD</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatsd">
                    </div>
					<label for="inputName" class="col-sm-1 control-label">Kota</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputName" name="kotasd">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Lulus SD</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="lulussd">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama SLTP</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namasltp">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat SLTP</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatsltp">
                    </div>
					<label for="inputName" class="col-sm-1 control-label">Kota</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputName" name="kotasltp">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun Lulus SLTP</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="lulussltp">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama SLTA</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namaslta">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat SLTA</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatslta">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label"></label>
					<label for="inputName" class="col-sm-1 control-label">Kota</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail"  name="kotaslta">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label"></label>
					<label for="inputName" class="col-sm-1 control-label">Provinsi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail"  name="provinsislta">
                    </div>
					
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jurusan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="jurusanslta">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tanggal Ijazah</label>

                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="inputName" name="tanggalijazah">
                    </div>
					<label for="inputName" class="col-sm-2 control-label">Bulan Ijazah</label>

                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="inputName" name="bulanijazah">
                    </div>
					<label for="inputName" class="col-sm-2 control-label">Tahun Ijazah</label>

                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="inputName" name="tahunijazah">
                    </div>
					
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Ijazah</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="noijazah">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">NEM</label>

                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="inputName" name="nem">
                    </div>
					<label for="inputName" class="col-sm-2 control-label">Nilai STTB</label>

                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="inputName" name="nilaisttb">
                    </div>
					
					
                  </div>
				  
                </div>
                <div id="step-4" class="">
                    <h3>&nbsp;&nbsp;Form Data Pendidikan Informal</h3>
                    <!-- isi dengan form sesuai kebutuhan -->
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lembaga</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namalembaga1">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Ketrampilan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="jenisketrampilan1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatlembaga1">
                    </div>
					<label for="inputName" class="col-sm-1 control-label">Kota</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputName" name="kotalembaga1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="tahunlembaga1">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Lembaga</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namalembaga2">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jenis Ketrampilan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="jenisketrampilan2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatlembaga2">
                    </div>
					<label for="inputName" class="col-sm-1 control-label">Kota</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputName" name="kotalembaga2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="tahunlembaga2">
                    </div>
					
                  </div>
                </div>
				<div id="step-5" class="">
                    <h3>&nbsp;&nbsp;Form Data Tambahan</h3>
                    <!-- isi dengan form sesuai kebutuhan -->
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Beasiswa</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="beasiswa">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Pemberi</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="pemberibeasiswa">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Bentuk</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail"  name="bentukbeasiswa">
                    </div>
					
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jumlah/Bulan</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="jumlahbeasiswa">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tahun/Waktu</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="tahunbeasiswa">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Kunjungan ke Perpustakaan</label>

                    <div class="col-sm-9">
                      <input type="radio" name="kunjunganperpus" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="kunjunganperpus" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                      <input type="radio" name="kunjunganperpus" id="optionsRadios2" value="Kurang">Kurang &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Membaca Buku</label>

                    <div class="col-sm-9">
                      <input type="radio" name="membaca" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="membaca" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                      <input type="radio" name="membaca" id="optionsRadios2" value="Kurang">Kurang &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Seminar</label>

                    <div class="col-sm-9">
                      <input type="radio" name="seminar" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="seminar" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                      <input type="radio" name="seminar" id="optionsRadios2" value="Kurang">Kurang &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Olahraga</label>

                    <div class="col-sm-9">
                      <input type="radio" name="olahraga" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="olahraga" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                      <input type="radio" name="olahraga" id="optionsRadios2" value="Kurang">Kurang &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Kesenian</label>

                    <div class="col-sm-9">
                      <input type="radio" name="kesenian" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="kesenian" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                      <input type="radio" name="kesenian" id="optionsRadios2" value="Kurang">Kurang &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Kerja Sosial</label>

                    <div class="col-sm-9">
                      <input type="radio" name="kerjasosial" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="kerjasosial" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                      <input type="radio" name="kerjasosial" id="optionsRadios2" value="Kurang">Kurang &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Bahasa Daerah</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="bahasadaerah1">
                    </div>
					<div class="col-sm-2">
                      <input type="radio" name="aktifbahasadaerah1" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="aktifbahasadaerah1" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="bahasadaerah2">
                    </div>
					<div class="col-sm-2">
                      <input type="radio" name="aktifbahasadaerah2" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="aktifbahasadaerah2" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="bahasadaerah3">
                    </div>
					<div class="col-sm-2">
                      <input type="radio" name="aktifbahasadaerah3" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="aktifbahasadaerah3" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Bahasa Asing</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="bahasaasing1">
                    </div>
					<div class="col-sm-2">
                      <input type="radio" name="aktifbahasaasing1" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="aktifbahasaasing1" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="bahasaasing2">
                    </div>
					<div class="col-sm-2">
                      <input type="radio" name="aktifbahasaasing2" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="aktifbahasaasing2" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"></label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputName" name="bahasaasing3">
                    </div>
					<div class="col-sm-2">
                      <input type="radio" name="aktifbahasaasing3" id="optionsRadios2" value="Aktif">Aktif&nbsp;
					  <input type="radio" name="aktifbahasaasing3" id="optionsRadios2" value="Cukup">Cukup &nbsp;
                    </div>
                  </div>
                </div>
				<div id="step-6" class="">
                    <h3>&nbsp;&nbsp;Form Data Pengalaman Kerja</h3>
                    <!-- isi dengan form sesuai kebutuhan -->
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Perusahaan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="namaperusahaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Bagian</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="bagian">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jabatan</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="jabatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail"  name="alamatkerja">
                    </div>
					<label for="inputName" class="col-sm-1 control-label">Kota</label>

                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputName" name="kotakerja">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Kode Pos</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="kodeposkerja">
                    </div>
					
                  </div>
				  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">No Telepon</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="teleponkerja">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lama Bekerja</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputName" name="lamakerja">
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
        
        </form>
	</div>
  </div>
</div>
</section>