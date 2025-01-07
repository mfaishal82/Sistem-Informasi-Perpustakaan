<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "
delete from buku where id=$id
";

$eksekusi = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;600;800&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Admin Page - Confirmation</title>
</head>
<body class="bg-gray-200">
    <div x-data="{ showForm: false }" class="h-screen w-full flex flex-col items-center p-5 gap-[200px]"
        style="font-family: Karla;">
        <nav class="h-14 w-[90%] flex flex-row justify-between items-center m-5 mt-10 border-[3px] border-black rounded-xl bg-white">
            <div class="h-14 w-[130%] flex flex-row justify-between items-center p-5 -mt-4 -mx-10 border-[3px] border-black rounded-xl bg-white">
                <a href="index.php" class="font-bold text-[20px]">ADMIN PAGE</a>

                <h1>Confirmation</h1>
            </div>
        </nav>

        <main class="flex flex-row justify-between gap-5 mb-[100px] mx-[100px]">
            <div class="h-[150px] w-[300px] border-[3px] border-black rounded-xl bg-white flex flex-col items-center justify-center">
                <div class="h-[120%] w-full -mt-6 -ml-1 p-5 border-[3px] border-black rounded-xl bg-white scroll-smooth whitespace-nowrap overflow-auto resize-x flex flex-col items-center justify-center gap-6">
                    Buku Berhasil Dihapus
                    <!-- Button -->
                    <a href="index.php">
                        <div class="p-2 w-[100px] rounded rounded-xl flex justify-center bg-gradient-to-r from-teal-400 to-blue-500 hover:from-pink-500 hover:to-orange-500 text-white hover:text-black cursor-pointer"> Kembali 
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>