<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="{{asset('front/')}}/css/testResume.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <header>
      <div class="rect-blue"></div>
      <div class="rect-orange"></div>
    </header>
    <div class="content-wrapper">
      <div class="bio">
          <h2>Curriculum Vitae</h2>
         <div class="bio__photo">
     <img src="{{$user->photo_url}}" alt="">
           <div style="background-image: url('{{$user->photo_url}}')">
             
           </div>
         </div>
        <div class="bio__name">{{$user->name}}</div>
        <div class="bio__field">
          <label>Tempat/Tanggal Lahir</label>
          <p>Bondowoso, 11/02/1987</p>
        </div>
        <div class="bio__field">
          <label>Jenis Kelamin</label>
          <p>Laki-laki</p>
        </div>
        <div class="bio__field">
          <label>Agama</label>
          <p>Islam</p>
        </div>
        <div class="bio__field">
          <label>Alamat Rumah</label>
          <p>Ki. Gajah No.210, Semarang 26877, Bengkulu</p>
        </div>
        <div class="bio__field">
          <label>Alamat Email</label>
          <p>dzulkarnain@sihombing.go.id </p>
        </div>
        <div class="bio__field">
          <label>NIP</label>
          <p>984298743357456475</p>
        </div>
        <div class="line"></div>
      </div>
      <div class="story">
        
  <!--  jenjang pendidikan      -->
        <div class="story__section">
           <div class="story__title">
             <div class="title">
               Jenjang Pendidikan
              </div>
            <div class="line"></div>
          </div>
          <div class="table">
            <div class="row">
              <div class="column">2001</div>
              <div class="column">SDN 1 Tinete</div>
            </div>
            <div class="row">
              <div class="column">2007</div>
              <div class="column">SMPN 2 Poli-polia</div>
            </div>
            <div class="row">
              <div class="column">2010</div>
              <div class="column">SMAN 1 Ladongi</div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        
  <!--   riwayat jabatan   -->
        <div class="story__section">
           <div class="story__title">
             <div class="title">
               Riwayat Jabatan
              </div>
            <div class="line"></div>
          </div>
          
          <table>
            <tr>
              <td>2008 - 2011</td>
              <td>Sekretaris Prodi Antropologi</td>
            </tr>
            <tr>
              <td>2011 - 2013</td>
              <td>Ketua Prodi Antropologi</td>
            </tr>
          </table>
        </div>
        
  <!--   penelitian     -->
        <div class="story__section">
           <div class="story__title">
             <div class="title">
               Penelitian
              </div>
            <div class="line"></div>
          </div>
          
          <h4>Penelitian</h4>
          
          <table>
            <tr>
              <td>2008 - 2011</td>
              <td>Sekretaris Prodi Antropologi</td>
            </tr>
            <tr>
              <td>2011 - 2013</td>
              <td>Ketua Prodi Antropologi</td>
            </tr>
          </table>
          
          <h4>Publikasi Jurnal</h4>
          
          <table>
            <tr>
              <td>2008 - 2011</td>
              <td>Sekretaris Prodi Antropologi</td>
            </tr>
            <tr>
              <td>2011 - 2013</td>
              <td>Ketua Prodi Antropologi</td>
            </tr>
          </table>
        </div>
        
      </div>
      <div class="clearfix"></div>
    </div>
    <footer>
      Dibuat oleh <b>Siindona</b> pada Mon 12 Oct 21:23:43 WITA 2020 
    </footer>
  </body> 


  