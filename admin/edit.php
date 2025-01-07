<?php 
    $id = $_GET['id'];

    include "koneksi.php";
    $query = "select * from `buku` where id = $id";
    $eksekusi = mysqli_query($koneksi, $query);
    $buku = mysqli_fetch_assoc($eksekusi);

    $buku['tanggal_diterbitkan'] = date('Y-m-d', strtotime($buku['tanggal_diterbitkan']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;600;800&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Admin Page - Edit Data</title>
</head>
<body class="bg-gray-200">
    <div x-data="{ showForm: false }" class="h-screen w-full flex flex-col items-center p-5 gap-12"
        style="font-family: Karla;">
        <nav class="h-14 w-[90%] flex flex-row justify-between items-center m-5 mt-10 border-[3px] border-black rounded-xl bg-white">
            <div class="h-14 w-[130%] flex flex-row justify-between items-center p-5 -mt-4 -mx-10 border-[3px] border-black rounded-xl bg-white">
                <a href="index.php" class="font-bold text-[20px]">ADMIN PAGE</a>

                <h1>Edit Data</h1>
            </div>
        </nav>

        <main class="flex flex-row justify-between gap-5 mb-[100px] mx-[100px]">
            <div class="min-h-[400px] max-h-[600px] w-[500px] border-[3px] border-black rounded-xl bg-white">
                <div class="h-[110%] w-full -mt-6 -ml-1 p-5 border-[3px] border-black rounded-xl bg-white scroll-smooth whitespace-nowrap overflow-auto resize-x">
                    <div class="flex flex-row justify-between">
                        <h1 class="text-[18px] font-semibold">Form</h1>
    
                        <div x-on:click="showForm = ! showForm" href="" class="hidden text-blue-400 p-2 underline cursor-pointer">
                            <span class="font-bold">+</span> Tambahkan Data
                        </div>
                    </div>
    
                    <form action="action_edit.php?id=<?php echo $buku['id']; ?>" method="post">
                        <div class="mb-4">
                            <label for="judul_buku" class="block text-gray-700 text-sm font-bold mb-2">Judul Buku</label>
                            <input type="text" name="judul_buku" id="judul_buku" value="<?php echo $buku['judul_buku'] ?>" placeholder="Masukkan Judul" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
    
                        <div class="mb-6">
                            <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
                            <input type="text" name="penulis" id="penulis" value="<?php echo $buku['penulis'] ?>" placeholder="Masukkan Penulis" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
    
                        <div class="mb-6">
                            <label for="sinopsis_buku" class="block text-gray-700 text-sm font-bold mb-2">Sinopsis</label>
                            <textarea name="sinopsis_buku" id="sinopsis_buku" placeholder="Masukkan isi konten" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?php echo $buku['sinopsis_buku'] ?></textarea>
                        </div>
                        
                        <div class="mb-6">
                            <label for="tanggal_diterbitkan" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Diterbitkan</label>
                            <input type="date" name="tanggal_diterbitkan" value="<?php echo $buku['tanggal_diterbitkan'] ?>" id="tanggal_diterbitkan" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-6">
                            <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
                            <input type="number" name="harga" min="0" id="harga" value="<?php echo $buku['harga'] ?>"placeholder="Masukkan harga" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
    
                        <div class="flex items center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                Update
                            </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>