<!-- 
    Nama    : Avian MANSHURIN
    Nim     : 120140162
    Kelas   : RC
-->

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Contact</h1>
    </header>

    <main>
        <section class="daftar-kontak">
            <h2>Daftar Kontak</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </section>

        <section class="tambah-kontak">
            <h2>Tambah Kontak Baru</h2>
            <form action="Index.php" method="post">
                <input type="text" name="nama" placeholder="Nama">
                <input type="email" name="email" placeholder="Email">
                <input type="tel" name="telepon" placeholder="Telepon">
                <button type="submit">Tambah</button>
            </form>
        </section>

        <section class="edit-kontak">
            <h2>Edit Kontak</h2>
            <form action="Index.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="text" name="nama" placeholder="Nama">
                <input type="email" name="email" placeholder="Email">
                <input type="tel" name="telepon" placeholder="Telepon">
                <button type="submit">Edit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; ALVIAN MANSHURIN 2023</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>