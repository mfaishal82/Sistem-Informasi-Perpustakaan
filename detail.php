<?php 
include 'koneksi.php';

$id = $_GET['id'];

$query = "select * from buku where id = $id" ;
$eksekusi = mysqli_query($koneksi, $query);
$buku = mysqli_fetch_assoc($eksekusi);
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
    <title>The Library - Detail Buku</title>
  </head>
  <body class="bg-[#F472B6] overflow-y-auto">
    <header
      class="w-full flex flex-row p-6 bg-white justify-between items-center border-b-[5px] border-black"
    >
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
      <section class="hidden bg-black h-[300px] w-full border border-black rounded-xl">
        <div
          class="bg-[#00FF00] p-10 hover:m-0 -mt-4 -ml-2 h-[300px] w-full border-[5px] border-black rounded-xl hover:text-white"
        >   
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
              class="bg-[#FFA500] hover:m-0 -mt-4 -ml-2 h-auto w-full border-[5px] border-black rounded-xl p-5"
            >
              <h1 class="text-[20px] font-bold">DETAIL BUKU</h1>

              <div class="flex flex-col gap-5 justify-center mt-8 mb-4">
                <div class="h-auto p-5 w-full bg-white rounded-xl">
                    <span class="font-semibold text-[28px]"><?php echo $buku['judul_buku'] ?></span><br>
                    <span class="underline text-[18px]">oleh <span class="italic"><?php echo $buku['penulis'] ?></span>, diterbitkan pada <?php echo $buku['tanggal_diterbitkan'] ?></span>
                    <p class="mt-2 text-[18px]">Sinopsis: 
                      <?php echo $buku['sinopsis_buku'] ?>
                    </p>
                    <div class="mt-4 p-4 bg-gray-100 rounded-lg border border-gray-300">
                        <span class="font-semibold text-[20px]">💵 Harga: Rp <?php echo $buku['harga'] ?></span>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-1/4 flex flex-col gap-10">
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
