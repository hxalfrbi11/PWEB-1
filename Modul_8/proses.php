<?php
$file = 'data_alumni.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nama'], $_POST['tahun_lulus'], $_POST['pekerjaan'])) {
        // Menambahkan data baru
        $nama = htmlspecialchars($_POST['nama']);
        $tahun_lulus = htmlspecialchars($_POST['tahun_lulus']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);

        $data = "{$nama}|{$tahun_lulus}|{$pekerjaan}\n";
        file_put_contents($file, $data, FILE_APPEND);

        header('Location: index.php');
        exit;
    } elseif (isset($_POST['delete'], $_POST['index'])) {
        // Menghapus data
        $index = (int)$_POST['index'];
        if (file_exists($file)) {
            $data = file($file, FILE_IGNORE_NEW_LINES);
            if (isset($data[$index])) {
                unset($data[$index]);
                file_put_contents($file, implode("\n", $data) . "\n");
            }
        }
        header('Location: index.php');
        exit;
    }
}
?>
