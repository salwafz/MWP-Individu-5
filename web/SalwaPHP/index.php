<?php
// Data dinamis
$nama = "Salwa Faizah";
$deskripsi = "Mahasiswa program studi Sistem Informasi UIN Sunan Ampel yang sedang belajar coding, dan mencoba membuat project-project baru sembari mencari passion saya di dunia teknologi!!";
$instagram = "https://instagram.com/salwa.fz_/";
$email = "xxsalwa.faizahxx@gmail.com";

$projects = [
    ["Database untuk mengelola stok barang di gudang", "images/project.png"],
    ["Aplikasi Pembelian Tiket Kereta Api Online", "images/project2.png"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?php echo $nama; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="#">
                <img src="images/logo.png" alt="Salwa's Portofolio">
                <div class="logo-text">
                    <span>Salwa's</span>
                    <span>Portofolio</span>
                </div>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="hero">
    <div class="hero-container">
        <div class="hero-text">
            <h1>“The computer was born to solve problems that did not exist before.”    — Bill Gates</h1>
            <p>Sebagai mahasiswa sistem informasi, saya berkomitmen untuk belajar dan mengembangkan keterampilan saya di bidang teknologi. Saya percaya bahwa desain yang baik dapat memperbaiki pengalaman pengguna dan memberikan dampak positif.</p>
        </div>
        <div class="hero-image">
            <img src="images/profile.jpg" alt="Profile Image">
        </div>
    </div>
</section>

<section id="about">
    <div class="about-container">
        <h2>I'm <?php echo $nama; ?></h2>
        <p><?php echo $deskripsi; ?></p>
        <div class="about-details">
            <div>
                <h3>Currently</h3>
                <p>Aplikasi dan web yang memungkinkan pengguna untuk memesan makanan di sekitar kampus..</p>
            </div>
            <div>
                <h3>Latest work</h3>
                <a href="#">Website untuk menampilkan karya dan pengalaman saya sebagai mahasiswa.</a>
            </div>
        </div>
        <a href="#" class="btn-light">About me →</a>
    </div>
</section>

    <section id="project">
        <div class="container">
            <h2>My Project</h2>
            <div class="project-grid">
                <?php foreach ($projects as $project) { ?>
                    <div class="project-item">
                        <img src="<?php echo $project[1]; ?>" alt="<?php echo $project[0]; ?>">
                        <h3><?php echo $project[0]; ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 <?php echo $nama; ?>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
<script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
</script>