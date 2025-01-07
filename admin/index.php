<?php 
    include "koneksi.php";
    $query = "select * from `buku`";
    $result = mysqli_query($koneksi, $query);
    $buku = mysqli_fetch_all($result, MYSQLI_ASSOC);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;600;800&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Admin Page</title>
</head>
<body class="bg-gray-200 overflow-x-auto">
    <div x-data="{ showForm: false }" class="h-screen w-full flex flex-col items-center p-5 gap-12"
        style="font-family: Karla;">
        <nav class="h-14 w-[90%] flex flex-row justify-between items-center m-5 mt-10 border-[3px] border-black rounded-xl bg-white">
            <div class="h-14 w-[130%] flex flex-row justify-between items-center p-5 -mt-4 -mx-10 border-[3px] border-black rounded-xl bg-white">
                <a href="index.php" class="font-bold text-[20px]">ADMIN PAGE</a>

                <h1>Dashboard</h1>
            </div>
        </nav>

        <main class="flex flex-row justify-between gap-5 mb-[100px] mx-[100px]">
            <div class="min-h-[400px] max-h-[600px] w-auto border-[3px] border-black rounded-xl bg-white">
                <div class="h-[110%] w-full -mt-6 -ml-1 p-5 border-[3px] border-black rounded-xl bg-white scroll-smooth whitespace-nowrap overflow-auto resize-x">
                    <div class="flex flex-row justify-between">
                        <h1 class="text-[18px] font-semibold">Data Buku</h1>
    
                        <div x-on:click="showForm = ! showForm" href="" class="text-blue-400 p-2 underline cursor-pointer">
                            <span class="font-bold">+</span> Tambahkan Data
                        </div>
                    </div>
    
                    <table class="border border-gray-500 table-auto border-collapse w-full m-2 p-3">
                        <thead>
                            <tr>
                                <th class="border border-gray-500 px-3">No</th>
                                <th class="border border-gray-500 px-3">Judul Buku</th>
                                <th class="border border-gray-500 px-3">Penulis</th>
                                <th class="border border-gray-500 px-3">Sinopsis Buku</th>
                                <th class="border border-gray-500 px-3">Tanggal <br> Diterbitkan</th>
                                <th class="border border-gray-500 px-3">Harga</th>
                                <th class="border border-gray-500 px-3">Action</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            <!-- <tr class="hover:bg-blue-100">
                                <td class="border border-gray-500 whitespace-nowrap px-3">1</td>
                                <td class="border border-gray-500 whitespace-nowrap px-3">Tenggelamnya Kapal Van der Wijck </td>
                                <td class="border border-gray-500 whitespace-nowrap px-3">Hamka</td>
                                <td class="border border-gray-500 whitespace-nowrap px-3"></td>
                                <td class="border border-gray-500 whitespace-nowrap px-3">1938</td>
                                <td class="border border-gray-500 whitespace-nowrap px-3">50.000</td>
                                <td class="border border-gray-500 whitespace-nowrap px-3">
                                    <button class="bg-yellow-500 border border-yellow-500 hover:font-semibold px-2 rounded-xl text-white hover:text-black hover:bg-white">📝 Edit</button>
                                    <button class="bg-red-600 border border-red-600 hover:font-semibold px-2 rounded-xl text-white hover:text-black hover:bg-white">🗑️ Delete</button>
                                </td>
                            </tr> -->
                            <?php
                                foreach($buku as $data) {
                                    echo "
                                        <tr class='hover:bg-blue-100'>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>".$data['id']."</td>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>".$data['judul_buku']."</td>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>".$data['penulis']."</td>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>".substr($data['sinopsis_buku'],0,35)."...</td>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>".$data['tanggal_diterbitkan']."</td>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>".$data['harga']."</td>
                                        <td class='border border-gray-500 whitespace-nowrap px-3'>
                                            <a href='edit.php?id=".$data['id']."' ><button class='bg-yellow-500 border border-yellow-500 hover:font-semibold px-2 rounded-xl text-white hover:text-black hover:bg-white'>📝 Edit</button> </a>
                                            <a href='action_delete.php?id=".$data['id']."' ><button class='bg-red-600 border border-red-600 hover:font-semibold px-2 rounded-xl text-white hover:text-black hover:bg-white'>🗑️ Delete</button> </a>
                                        </td>
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div x-show="showForm" class="absolute inset-0 bg-black bg-opacity-35 flex items-center justify-center">
                <div class="w-[500px] min-h-[500px] m-0 border-[3px] border-black rounded-xl bg-white">
                    <div class="h-full w-full -mt-2 -ml-1 p-5 border-[3px] border-black rounded-xl bg-white scroll-smooth">
                        <div class="flex flex-row justify-between mb-5">
                            <h1 class="text-[18px] font-semibold">Form</h1>
        
                            <button @click="showForm = false" href="" class="">❌</button>
                        </div>
        
                        <form action="action_create.php" method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label for="judul_buku" class="block text-gray-700 text-sm font-bold mb-2">Judul Buku</label>
                                <input type="text" name="judul_buku" id="judul_buku" placeholder="Masukkan Judul" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
        
                            <div class="mb-6">
                                <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
                                <input type="text" name="penulis" id="penulis" placeholder="Masukkan Penulis" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
        
                            <div class="mb-6">
                                <label for="sinopsis_buku" class="block text-gray-700 text-sm font-bold mb-2">Sinopsis</label>
                                <textarea name="sinopsis_buku" id="sinopsis_buku" placeholder="Masukkan isi konten" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            </div>
                            
                            <div class="mb-6">
                                <label for="tanggal_diterbitkan" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Diterbitkan</label>
                                <input type="date" name="tanggal_diterbitkan" id="tanggal_diterbitkan" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-6">
                                <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
                                <input type="number" name="harga" min="0" id="harga" placeholder="Masukkan harga" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
        
                            <div class="flex items center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                    Create
                                </button>
                        </form>
                    </div>
                </div>
            </div>

        </main>
    </div>
</body>
</html>