<?php

include_once __DIR__ . '/scraper.php';

$scraper = Scraper::query([
    'hl' => 'id',
    'q' => 'Rancang Bangun Pembuatan Game'
])->get();

echo json_encode($scraper);

/**
 * The result will be like this:
 [
  {
    "title": "Rancang Bangun Game Adventure of Unsrat Menggunakan Game Engine Unity",
    "url": "https://ejournal.unsrat.ac.id/v3/index.php/informatika/article/view/20191",
    "snippet": "… internet yang disebut game offline. Unity 3D merupakan software open source pembuatan \r\n game 3D yang sangat banyak dikagumi oleh para game developer karena kelengkapan …",
    "publication_info": "LS Mongi, ASM Lumenta… - Jurnal Teknik …, 2018 - ejournal.unsrat.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=5692167205664309374&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "https://ejournal.unsrat.ac.id/v3/index.php/informatika/article/download/20191/19798",
    "year": "2018"
  },
  {
    "title": "Rancang Bangun Game Edukasi “AMUDRA” Alat Musik Daerah Berbasis Android",
    "url": "http://prosiding.unipma.ac.id/index.php/SENATIK/article/view/1062",
    "snippet": "… Adapun pembuatan game menggunakan software Adobe Animate CC dengan bahasa … \r\n Hasil penelitian ini adalah game edukasi alat musik daerah berbasis Android bagi anak …",
    "publication_info": "AG Pradana - Prosiding Seminar Nasional Teknologi …, 2019 - prosiding.unipma.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=16749983780494105077&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "http://prosiding.unipma.ac.id/index.php/SENATIK/article/download/1062/925",
    "year": "2019"
  },
  {
    "title": "Rancang Bangun Aplikasi Game Edukasi Ragam Budaya Indonesia",
    "url": "https://ejournal.unsrat.ac.id/index.php/informatika/article/view/17793",
    "snippet": "… buku literatur maupun referensi tentang pembuatan game yang berbasis Macromedia Director. \r\n … Eksplorasi Internet Membuka situs-situs yang berhubungan dengan pembuatan game …",
    "publication_info": "B Pane, XBN Najoan - Jurnal Teknik Informatika, 2017 - ejournal.unsrat.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=10461722955394737837&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "https://ejournal.unsrat.ac.id/index.php/informatika/article/download/17793/17317",
    "year": "2017"
  },
  {
    "title": "Rancang bangun aplikasi game matematika untuk penyandang tunagrahita berbasis mobile",
    "url": "https://journal.untar.ac.id/index.php/JKI/article/view/7200",
    "snippet": "… Pengembagan dan pembuatan game edukasi ini hanya terbatas pada … media game dapat \r\n menumbuhkan antusias dan memotivasi siswa SLB dalam proses pembelajaran. Pembuatan …",
    "publication_info": "VH Saputra, D Darwis, E Febrianto - Jurnal Komputer Dan …, 2020 - journal.untar.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=14517962742538512591&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "https://journal.untar.ac.id/index.php/JKI/article/download/7200/4868",
    "year": "2020"
  },
  {
    "title": "Rancang bangun media pembelajaran dan game edukatif pengenalan aksara jawa “pandawa”",
    "url": "https://publikasiilmiah.ums.ac.id/xmlui/handle/11617/7726",
    "snippet": "… suara yang digunakan dalam game. Dalam pembuatan game edukatif ini terdapat beberapa \r\n asset yang digunakan meliputi obyek gambar dan suara. Pembuatan asset objek gambar …",
    "publication_info": "H Supriyono, RF Rahmadzani, M Adhantoro, AK Susilo - 2016 - publikasiilmiah.ums.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=3432863306236759081&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "https://publikasiilmiah.ums.ac.id/xmlui/bitstream/handle/11617/7726/1_Heru%20Supriyono.pdf?sequence=1&isAllowed=y",
    "year": "2016"
  },
  {
    "title": "Rancang Bangun Aplikasi Mobile Game Edukasi Ilmu Pengetahuan Alam Untuk Anak Kelas VI Sekolah Dasar",
    "url": "http://ijns.org/journal/index.php/speed/article/view/1019",
    "snippet": "… Tujuan pembuatan sebuah game antara lain education (mendidik). Game ini akan lebih … \r\n Dalam pembuatan aplikasi mobile game ini menggunakan bahasa pemrograman java2 …",
    "publication_info": "Y Siswanto, BE Purnama - Speed-Sentra Penelitian Engineering dan …, 2013 - ijns.org",
    "cited_by": "https://scholar.google.com/scholar?cites=12460663464080811559&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "http://ijns.org/journal/index.php/speed/article/download/1019/1007",
    "year": "2013"
  },
  {
    "title": "Rancang Bangun Game Bergenre Role Playing Game Cerita Rakyat Sangkuriang",
    "url": "https://jurnal.itg.ac.id/index.php/algoritma/article/view/818",
    "snippet": "… Metode yang digunakan dalam penelitian ini adalah Digital Based Game … game cerita \r\n rakyat Sangkuriang yang dikemas ke dalam bentuk aplikasi Android. Dengan adanya game ini di …",
    "publication_info": "D Tresnawati, I Setyawan - Jurnal Algoritma, 2021 - jurnal.itg.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=11887903148809629435&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "https://jurnal.itg.ac.id/index.php/algoritma/article/download/818/744",
    "year": "2021"
  },
  {
    "title": "Rancang Bangun Game Edukasi “Lawar Bali” pada Platform Android",
    "url": "https://garuda.kemdikbud.go.id/documents/detail/1759299",
    "snippet": "… Game edukasi “Lawar Bali” ini bertujuan untuk mengenalkan lawar pada anak-anak \r\n pada khususnya. Software yang digunakan dalam pembuatan game ini adalah Corona SDK …",
    "publication_info": "IBD Krisnawan - Bali: Universitas Udayana Bali, 2014 - garuda.kemdikbud.go.id",
    "cited_by": "https://scholar.google.com/scholar?cites=1588160032640155495&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": null,
    "year": "2014"
  },
  {
    "title": "Rancang Bangun Game Edukasi Berbasis Web Dan Android Menggunakan Adobe Flash Cs5 Dan Action Script 3.0",
    "url": "http://www.ijiswiratama.org/index.php/home/article/view/19",
    "snippet": "… menerapkan game edukasi dan diperkenalkan melalui media pembelajaran game yang … \r\n Adobe Flash Cs5 sebagai pembantu pembuatan script pada Android yang disajikan dalam …",
    "publication_info": "W Angela, A Gani - IJIS-Indonesian Journal On Information System, 2016 - ijiswiratama.org",
    "cited_by": "https://scholar.google.com/scholar?cites=5266151236817083266&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "http://www.ijiswiratama.org/index.php/home/article/viewFile/19/15",
    "year": "2016"
  },
  {
    "title": "Penerapan Model Spiral Pada Rancang Bangun Game Platformer",
    "url": "http://ejournal.itats.ac.id/sntekpan/article/view/668",
    "snippet": "… Proses pembuatan game pada penelitian ini dilakukan dengan dua iterasi. Hasil pengujian \r\n menunjukkan bahwa game berhasil dirancang dengan tingkat kepuasan pengguna dari …",
    "publication_info": "A Bahtiar, RR Muhima, A Rachman - Prosiding Seminar Nasional …, 2019 - ejournal.itats.ac.id",
    "cited_by": "https://scholar.google.com/scholar?cites=11032262332356293512&as_sdt=2005&sciodt=0,5&hl=id&oe=ASCII",
    "pdf_link": "http://ejournal.itats.ac.id/sntekpan/article/download/668/466",
    "year": "2019"
  }
]
 */