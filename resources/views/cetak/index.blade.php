@extends('layouts.index')    
    <script>
		window.print();  
	</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <title>Cetak</title>
<style>
    @media all {
    .page-break { display: none; 
        width: 200%;
    }
    
    }
  
    @media print {
    .page-break { display: block; page-break-before: always; }
    }
  
</style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <br><br>
            <h4><center> <b> REKAP DATA KETERLAMBATAN SISWA SMAN 1 PADANG BOLAK</b>
            <img style="width:70px; margin-top:-30px; margin-left:10px; float:left;" src="https://www.kemdikbud.go.id/main/files/large/83790f2b43f00be" alt="" srcset="">

        </center></h4>
                        <hr>  
            <div class="card">
                <div class="card-header">{{ __('Cetak Data Keterlambatan') }}</div>
                <div class="card-body">
                <table class="table">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Nama Guru Piket</th>
        <th>Tanggal Terlambat</th>
        <th>Tanggal Masuk</th>
        <th>Jam Terlambat</th>
        <th>Jam Masuk</th>
        <th>Hukuman</th>
        <th>Alasan</th>
    </tr>
    <?php $no=0;?>
    @foreach($data as $s)
    <?php $no++; ?>
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $s->nama_siswa }}</td>
        <td>{{ $s->nama_guru }}</td>
        <td>{{ $s->tgl_terlambat }}</td>
        <td>{{ $s->tgl_masuk }}</td>
        <td>{{ $s->jam_terlambat }}</td>
        <td>{{ $s->jam_masuk }}</td>
        <td>{{ $s->hukuman }}</td>
        <td>{{ $s->alasan }}</td>
        
    </tr>
    @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
    <br> 
      <span style="padding: 100px"> Mengetahui </span> <br>
        <span style="padding: 100px"> Kepala Sekolah SMAN 1 PADANG BOLAK<br><br> <br> <br>
            <strong style="padding: 100px"><u>SITI MASGORGOR</u></strong>
</body>
</html>