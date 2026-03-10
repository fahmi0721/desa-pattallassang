<?php
include('config/koneksi.php');

// Memanggil library PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['kirim'])) {
    $nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kontak = mysqli_real_escape_string($koneksi, $_POST['kontak']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $subjek = mysqli_real_escape_string($koneksi, $_POST['subjek']);
    $pesan  = mysqli_real_escape_string($koneksi, $_POST['pesan']);
    $tgl    = date('Y-m-d H:i:s');

    // 1. Simpan ke Database sebagai Arsip
    $query = mysqli_query($koneksi, "INSERT INTO tabel_pengaduan (nama, kontak, alamat, subjek, pesan, tanggal) 
    VALUES ('$nama', '$kontak', '$alamat', '$subjek', '$pesan', '$tgl')");

    if ($query) {
        // 2. Kirim Notifikasi ke Email Desa
        $mail = new PHPMailer(true);

        try {
            // --- Konfigurasi Server SMTP Gmail ---
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'pattallassang60@gmail.com';
            $mail->Password   = 'ihmtwwffifdghdsx'; // gunakan App Password Gmail


            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Debug (aktifkan jika ingin melihat error)
            $mail->SMTPDebug  = 0;

            // Opsi SSL untuk localhost
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Pengirim dan penerima
            $mail->setFrom('pattallassang60@gmail.com', 'Sistem Pengaduan Desa Pattallassang');
            $mail->addAddress('pattallassang60@gmail.com');

            // Format email
            $mail->isHTML(true);
            $mail->Subject = "Laporan Pengaduan Baru: $subjek";

            // ID laporan
            $id_acak = "REG-" . date('Y') . "-" . rand(100, 999);

            $mail->Body    = "
<div style='margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, sans-serif;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%'>
        <tr>
            <td align='center' style='padding: 20px 0;'>
                <table border='0' cellpadding='0' cellspacing='0' width='600' style='background-color:#ffffff; border: 1px solid #dddddd; border-radius: 8px;'>
                    
                    <tr>
                        <td style='padding: 20px; background-color: #0d6efd; border-radius: 8px 8px 0 0; color: #ffffff; text-align: center;'>
                            <h2 style='margin: 0; font-size: 20px;'>NOTIFIKASI PENGADUAN BARU</h2>
                            <p style='margin: 5px 0 0; font-size: 12px; opacity: 0.8;'>Pemerintah Desa Pattallassang</p>
                        </td>
                    </tr>

                    <tr>
                        <td style='padding: 30px;'>
                            <table width='100%' style='margin-bottom: 20px;'>
                                <tr>
                                    <td style='font-size: 13px; color: #888;'>Nomor Tiket: <span style='color: #333; font-weight: bold;'>$id_acak</span></td>
                                    <td align='right' style='font-size: 13px; color: #888;'>Waktu: <span style='color: #333;'>" . date('d/m/Y H:i') . " WIB</span></td>
                                </tr>
                            </table>

                            <p style='font-size: 15px; color: #444; line-height: 1.6;'>
                                Halo Admin, sistem telah menerima satu laporan baru dari warga dengan rincian sebagai berikut:
                            </p>

                            <div style='background-color: #fafafa; border: 1px solid #eeeeee; padding: 20px; border-radius: 5px; margin: 20px 0;'>
                                <p style='margin: 5px 0; font-size: 14px;'><strong>Nama:</strong> $nama</p>
                                <p style='margin: 5px 0; font-size: 14px;'><strong>Alamat / Dusun:</strong> <span style='color: #0d6efd; font-weight: bold;'>$alamat</span></p>
                                <p style='margin: 5px 0; font-size: 14px;'><strong>Kontak:</strong> $kontak</p>
                                <p style='margin: 5px 0; font-size: 14px;'><strong>Perihal:</strong> <span style='color: #d9534f;'>$subjek</span></p>
                            </div>

                            <p style='font-size: 16px; color: #888; margin-bottom: 10px;'>Isi Pesan Laporan:</p>
                            <div style='background-color: #ffffff; border-left: 4px solid #0d6efd; padding: 25px; font-style: italic; color: #222; line-height: 1.6; font-size: 22px; background-color: #f9f9f9;'>
                                \"" . nl2br($pesan) . "\"
                            </div>

                            <div style='margin-top: 30px; border-top: 1px dashed #cccccc; padding-top: 20px;'>
                                <p style='font-size: 13px; color: #333; text-align: center;'>
                                    <strong>Status:</strong> <span style='color: #5cb85c;'>Diterima & Tersimpan di Database</span>
                                </p>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style='padding: 15px; background-color: #f9f9f9; border-radius: 0 0 8px 8px; text-align: center; font-size: 11px; color: #aaaaaa;'>
                            Laporan ini dikirim melalui sistem website Desa Pattallassang.<br>
                            Harap segera tindak lanjuti laporan warga di wilayah <strong>$alamat</strong>.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
";

            $mail->send();
            echo "<script>alert('Terima kasih. Pengaduan Anda telah terkirim ke email desa!'); window.location='pengaduan.php';</script>";
        } catch (Exception $e) {
            // Tampilan error yang lebih detail untuk membantu debugging
            echo "<script>alert('Data tersimpan di database, namun email gagal terkirim. Error: {$mail->ErrorInfo}'); window.location='pengaduan.php';</script>";
        }
    } else {
        echo "<script>alert('Gagal menyimpan pengaduan ke database.'); window.location='pengaduan.php';</script>";
    }
}
