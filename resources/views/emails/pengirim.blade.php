<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih Telah Menghubungi Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Terima Kasih Telah Menghubungi Kami</h2>
        <p>Halo <strong>{{ $data['nama'] }}</strong>,</p>
        <p>Kami telah menerima pesan Anda melalui formulir di website kami. Tim kami akan segera menghubungi Anda untuk
            memberikan tanggapan.</p>
        <p>Jika Anda memiliki pertanyaan mendesak, silakan hubungi kami melalui:</p>
        <p><strong>Email:</strong> milhammubarrok@gmail.com<br>
            <strong>Telepon:</strong> <a href="https://api.whatsapp.com/send?phone=6281389963530">
                081389963530
            </a>
        </p>
        <p>Terima kasih atas kepercayaan Anda.</p>
        <p class="footer">&copy; 2024 Cindah Group | Semua Hak Dilindungi</p>
    </div>
</body>

</html>
