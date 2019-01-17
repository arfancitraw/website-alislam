<div id="content-tengah">
<div id="berita-utama"><div id="berita-main">
<h3>Selamat Datang di Website SMA AL ISLAM</h3>
<h2>Media Sistem Informasi Akademik Online <strong>SMA AL ISLAM</strong></h2>
<img src="<?php echo base_url(); ?>images/welcome.png" class="image" width="70"/>Kami Menyambut baik terbitnya Website SMA AL ISLAM Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. Untuk memudahkan pendaftaran siswa dihadirkan pula pendaftaran secara online dengan menekan tombol Pendaftaran Online.
<li class="li-class">
<a target="_blank" href="index.php/web/data/8">Pendaftaran Siswa Baru Online</a>
</div>
</div>

<br />
<div id="title-isi">Berita Terbaru</div>
<?php
foreach($berita_home->result_array() as $b)
{
$isi=substr($b['isi'],0,230);
echo'<div class="list-berita"><img src='.base_url().'berita/'.$b['gambar'].' width="60" class="image"><h1>'.$b['judul_berita'].'
<h2>Kategori <b>Berita</b>  </h2>'.$isi.'.... <a href="'.base_url().'index.php/web/berita/'.$b["id_berita"].'">[Baca Selengkapnya]</a>
</div>';
}
?>
</div>