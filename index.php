<?php
include "koneksi.php";
$query = "select * from `buku`";
$result = mysqli_query($koneksi, $query);
$buku = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
  <title>The Library</title>
</head>

<body class="bg-[#F472B6] overflow-y-auto">
  <header
    class="w-full flex flex-row p-6 bg-white justify-between items-center border-b-[5px] border-black">
    <h1 class="text-[48px] items-center font-semibold">
      <a href="index.php" style="font-family: Orbitron;">The Library</a>
    </h1>

    <nav>
      <ul class="flex flex-row gap-3 items-center" style="font-family: Comic Neue;">
        <li>
          <a href="index.php" class="hover:text-blue-500">Home</a>
        </li>
        <li>
          <a href="#about" class="hover:text-blue-500">About</a>
        </li>
        <li>
          <a href="#contact" class="hover:text-blue-500">Contact</a>
        </li>
        <li>
          <input type="search" name="" id="" placeholder="🔍Search..." class="border border-gray-200 p-1 rounded-xl" />
        </li>
      </ul>
    </nav>
  </header>

  <main class="h-full w-full p-8 pt-10">
    <section class="bg-black h-[300px] w-full border border-black rounded-xl" style="font-family: Comic Neue;">
      <div
        class="bg-[#00FF00] p-10 hover:m-0 -mt-4 -ml-2 h-[300px] w-full border-[5px] border-black rounded-xl hover:text-white">
        <h1 class="text-[48px] font-bold">
          Sistem Informasi <br> Perpustakaan
        </h1>

        <p class="mt-5 font-semibold text-[20px]">
          Selamat datang di website sistem informasi perpustakaan kami. <br>
          Kami menyediakan berbagai macam buku di perpustakaan kami dengan berbagai detail informasi.
        </p>
      </div>
    </section>

    <section class="mt-10 flex flex-row gap-5">
      <div class="w-3/4">
        <div class="bg-black h-auto w-full border border-black rounded-xl">
          <div
            class="bg-[#FFA500] hover:m-0 -mt-4 -ml-2 h-auto w-full border-[5px] border-black rounded-xl p-5">
            <h1 class="text-[20px] font-bold">LIST BUKU</h1>

            <div class="flex flex-col gap-5 justify-center mt-8 mb-4">

              <!-- <div class="h-[50px] p-3 w-full bg-white rounded-xl overflow-hidden hover:h-auto">
                    <span class="font-semibold">Tenggelamnya Kapal Van Der Wijck</span>, oleh <span class="italic">Hamka</span>, diterbitkan pada tahun 1939. <span class="underline">Harga Rp 50.000</span>
                    <p class="mt-2">Sinopsis: Kisah cinta tragis antara Zainuddin, anak seorang pedagang kaya, dengan Hayati, gadis cantik jelita yang berasal dari keluarga miskin.</p>
                    <button class>Read Detail</button>
                </div> -->

              <?php
              foreach ($buku as $data) {
                echo "
                          <div class='h-[50px] p-3 w-full bg-white rounded-xl overflow-hidden hover:h-auto hover:bg-blue-100'>
                              <span class='font-semibold'>" . $data['judul_buku'] . "</span>, oleh <span class='italic'>" . $data['penulis'] . "</span>, diterbitkan pada " . $data['tanggal_diterbitkan'] . ". <span class='underline'>Harga Rp " . $data['harga'] . "</span>
                              <p class='mt-2'>Sinopsis: " . substr($data['sinopsis_buku'], 0, 100) . "...</p>
                                <a href='detail.php?id=" . $data['id'] . "'>
                                  <button class='mt-2 bg-black border border-black text-white p-0.5 rounded hover:bg-[#FFA500] text-white hover:text-black hover:ml-2'>Read Detail →</button>
                                </a>
                          </div>
                        ";
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="w-1/4 flex flex-col gap-10" style="font-family: Comic Neue;">
        <div class="bg-black h-auto w-full border border-black rounded-xl">
          <div
            class="bg-[#00FFFF] hover:m-0 -mt-4 -ml-2 h-auto w-full border-[5px] border-black rounded-xl p-5">
            <h1 class="text-[28px] font-bold" id="about">About</h1>
            <p>
              Website ini dikembangkan sebagai platform untuk memudahkan pengguna dalam mengakses informasi terkait koleksi buku yang tersedia di perpustakaan kami. Dengan desain yang sederhana dan informasi yang terorganisir, kami bertujuan untuk memberikan pengalaman terbaik bagi para pengguna.
            </p>
          </div>
        </div>

        <div class="bg-black h-auto w-full border border-black rounded-xl">
          <div
            class="bg-[#FFA500] hover:m-0 -mt-4 -ml-2 h-auto w-full border-[5px] border-black rounded-xl p-5">
            <h1 class="text-[28px] font-bold" id="contact">Contact</h1>
            <p>
              Jika Anda memiliki pertanyaan, saran, atau membutuhkan bantuan terkait koleksi buku kami, silakan hubungi kami melalui informasi berikut:
              <br>
              <span class="underline">Email:</span> <span class="text-white">info.perpustakaan@mail.com</span><br>
              <span class="underline">Telepon:</span> <span class="text-white">+62 812-3456-7890</span><br>
              <span class="underline">Alamat:</span> <span class="text-white">Jalan Buku Ceria No. 10, Kota Literasi, Indonesia</span><br>
              <span class="underline">Jam Operasional:</span> <span class="text-white">Senin - Jumat, 08:00 - 17:00 WIB</span><br>
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="relative bottom-0 bg-black w-full h-[50px] text-white flex items-center justify-center">
      <p>UI Design Inspired from <a href="https://belajar.dev/" target="__blank" class="text-blue-500">Belajar.dev</a></p>
    </footer>
</body>

</html>