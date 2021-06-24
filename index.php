<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM t_dosen ORDER BY id DESC");
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/tailwind.css" rel="stylesheet">
    <link href="assets/custom.css" rel="stylesheet">

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!-- ... -->
</head>

<body class="bg-gray-300">
    <!-- Top Bar Nav -->
    <nav class="w-full py-5 md:px-80 sm:px-1 lg:px-90 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <!-- <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li> -->
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="add.php">Add Record</a></li>
                </ul>
            </nav>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <p class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl">
                Data Dosen
            </p>
            <p class="text-lg text-gray-600">
                Universitas Malikussaleh
            </p>
        </div>
    </header>



    <!--Container-->
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2 mb-10">
        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="stripe hover " style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead class="bg-blue-200">
                    <tr>
                        <th data-priority="1">No.</th>
                        <th data-priority="2">Nip Dosen</th>
                        <th data-priority="3">Nama Dosen</th>
                        <th data-priority="4">Jurusan</th>
                        <th data-priority="5">Telpon</th>
                        <th data-priority="6">Mata Kuliah</th>
                        <th data-priority="7">Jumlah SKS</th>
                        <th data-priority="8">Edit</th>
                        <th data-priority="9">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    while ($user_data = mysqli_fetch_array($result)) { ?>
                        <tr class="p-5">
                            <td class="text-center font-bold"><?= $i ?></td>
                            <td><?= $user_data['Nip_Dosen'] ?></td>
                            <td><?= $user_data['Nama_Dosen'] ?></td>
                            <td><?= $user_data['Jurusan'] ?></td>
                            <td><?= $user_data['Telepon'] ?></td>
                            <td><?= $user_data['Mata_Kuliah'] ?></td>
                            <td><?= $user_data['jumlah_sks'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $user_data['id'] ?>" class="shadow bg-green-500 hover:bg-green-100 hover:text-gray-600 focus:shadow-outline focus:outline-none text-white font-bold p-2 px-4 rounded">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?= $user_data['id'] ?>" class="shadow bg-red-500 hover:bg-red-100 hover:text-gray-600 focus:shadow-outline focus:outline-none text-white font-bold p-2 px-4 rounded">Delete</a>

                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>
    <!--/container-->


    <footer class="w-full border-t bg-white pb-20 bg-">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class=" pt-2">&copy; MkDierz | 190170067</div>
            <!-- <p class="text-center"></p> -->
            <!-- <p class="text-center">syibbran mulaesyi</p> -->
        </div>
    </footer>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true,
                    "ordering": false
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</body>

</html>