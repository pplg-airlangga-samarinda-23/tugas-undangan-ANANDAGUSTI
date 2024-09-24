<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="landing-page">
        <div class="overlay">
            <h1>Putra & Putri</h1>
            <p>Were married!</p>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#our-story">Our Story</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#Location">Location</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#rsvp">RSVP</a></li>
        </ul>
    </nav>

    <section id="our-story">
        <h2>Our Story</h2>
        <div class="timeline">
            <div class="event">
                <h3>First Meeting</h3>
                <p>We met for the first time in 2015...</p>
            </div>
            <div class="event">
                <h3>First Date</h3>
                <p>Our first date was magical...</p>
            </div>
        </div>
    </section>

    <section id="events">
        <h2>Events</h2>
        <div class="event-details">
            <h3>Wedding Ceremony</h3>
            <p>Date: August 20, 2024</p>
            <p>At 9:15am - 1:45pm</p>
        </div>
        <div class="event-details">
            <h3>Reception</h3>
            <p>Date: August 20, 2024</p>
            <p>At 1:45pm - 4:00pm</p>
        </div>
    </section>

    <section id="Location">
        <h2>Location</h2>
        <div class="location-details">
            <p>Location: Hotel Aston, 1st floor wedding venue</p>
            <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=117.15303719043733%2C-0.5036533579484771%2C117.15687274932863%2C-0.5013467469084196&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=19/-0.50250/117.15495">View Larger Map</a></small>
        </div>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="carousel">
            <button class="prev">&#10094;</button>
            <div class="carousel-images">
                <img src="img/rustic-curated_intimate-wedding-ballroom_6.jpeg" alt="Gallery Image 1">
                <img src="img/rustic-curated_intimate-wedding-ballroom_3.jpeg" alt="Gallery Image 2">
                <img src="img/tesera-pictures_intimate-wedding-ballroom_1.jpg" alt="Gallery Image 3">
            </div>
            <button class="next">&#10095;</button>
        </div>
    </section>

    <section id="rsvp">
        <h2>RSVP</h2>
        <p>Berikan ucapan harapan & do'a kepada kedua mempelai serta konfirmasi kehadiran</p>

        <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required> <br>
            <textarea name="ucapan" cols="20" rows="5" placeholder="Ucapan" required></textarea> <br>
            <select name="keterangan" required>
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tahu</option>
            </select>
            <button type="submit">KIRIM</button>
        </form>

        <?php
        include 'koneksi.php';
        $SQL2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $connection->query($SQL2);
        ?>
        <div style="height:200px; width:300px; overflow:scroll;">
        <?php
        while ($baris = $hasil->fetch_row()) {
        ?>
        <div style = "border-style:solid; border-color:black; margin:10px;">
        <p style="font-weight:bold;"><?=$baris[1] ?></p>
        <p><?=$baris[2] ?></p>
        </div>

        <?php
        }

        $hasil->free_result();
        ?>
        </div>
    </section>

    <audio id="background-music" loop autoplay>
        <source src="audio/LAGU_ROMANTIS_UNTUK_ACARA_WEDDING_2022 (1).mp3" type="audio/mpeg">
        Browser kamu tidak mendukung elemen audio.
    </audio>

    <div id="music-controls">
        <button id="toggle-music">Pause Musik</button>
    </div>

    <script src="script.js"></script>
    <footer>
        <p>&copy; 2024 Putra & Putri Wedding</p>
    </footer>
</body>
</html>
