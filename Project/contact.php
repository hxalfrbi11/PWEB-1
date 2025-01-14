<?php include 'header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="stylesheet.css">


<div class="container py-5">
    <h1>Kontak</h1>
    <form action="process_contact.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
<div class="social-icons mt-3">
    <a href="https://www.instagram.com/hxalfrbi11_/profilecard/?igsh=MXY5OWNzZnVuNzczNw=="target="_blank" class="me-3 text-light"><i class="bi bi-instagram"></i></a>
    <a href="https://www.facebook.com/share/1AhYNYyosd/" target="_blank" class="me-3 text-light"><i class="bi bi-facebook"></i></a>
    <a href="https://wa.me/6283823337551" target="_blank" class="text-light"><i class="bi bi-whatsapp"></i></a>
</div>

<?php include 'footer.php'; ?>
