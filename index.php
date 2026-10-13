<?php
// Tema: Program perhitungan nilai mahasiswa

$nama_mahasiswa = "Moch Daffa Mawla Fayyaz";       
$universitas    = "Universitas Muhammadiyah Sukabumi"; 
$semester       = 4;                               
$batas_lulus    = 70.5;                            
$status_aktif   = true;                            

// Tipe data Array (tambahan untuk mempermudah perulangan)
$daftar_nilai = [
    "Pemrograman Web" => 85,
    "Basis Data" => 78,
    "Struktur Data" => 90,
    "Jaringan Komputer" => 65
];


function hitungRataRata($array_nilai) {
    $total_nilai = 0;
    $jumlah_matkul = 0;

    // Menjumlahkan semua nilai yang ada di dalam array
    foreach ($array_nilai as $matkul => $nilai) {
        $total_nilai += $nilai;
        $jumlah_matkul++;
    }
    
    // Menghindari pembagian dengan nol
    if ($jumlah_matkul == 0) return 0;
    
    return $total_nilai / $jumlah_matkul;
}

$rata_rata_akhir = hitungRataRata($daftar_nilai);

echo "<h2>Sistem Informasi Akademik Sederhana</h2>";
echo "Nama: <strong>$nama_mahasiswa</strong><br>";
echo "Kampus: $universitas<br>";
echo "Semester: $semester<br>";
echo "Status Mahasiswa: " . ($status_aktif ? "Aktif" : "Cuti") . "<br><br>";

echo "<h3>Rincian Nilai Mata Kuliah:</h3>";
echo "<ul>";
// Menggunakan perulangan lagi untuk menampilkan daftar nilai ke layar
foreach ($daftar_nilai as $matkul => $nilai) {
    echo "<li>$matkul: $nilai</li>";
}
echo "</ul>";

echo "<strong>Rata-rata Nilai: " . number_format($rata_rata_akhir, 2) . "</strong><br>";

echo "<strong>Status Kelulusan: </strong>";
if ($rata_rata_akhir >= 85) {
    echo "<span style='color:green;'>Lulus dengan Predikat A (Sangat Memuaskan)</span>";
} elseif ($rata_rata_akhir >= $batas_lulus) {
    echo "<span style='color:blue;'>Lulus dengan Predikat B (Memuaskan)</span>";
} else {
    echo "<span style='color:red;'>Tidak Lulus (Harus Mengulang)</span>";
}
?>