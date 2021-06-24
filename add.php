<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/tailwind.css" rel="stylesheet">
</head>

<body class="bg-gray-300">
    <!-- Top Bar Nav -->
    <nav class="w-full py-5 md:px-80 sm:px-1 lg:px-90 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <!-- <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li> -->
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="index.php">Index</a></li>
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
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-2 mt-6 lg:mt-0 rounded shadow bg-gray-100">

            <!--Title-->
            <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 text-xl md:text-2xl py-5">
                Input Data
            </h1>

            <form method="GET" action="add-process.php">

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            NIP Dosen
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" name="nip-dosen" type="number" value="">
                    </div>
                </div>

                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Nama Dosen
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" name="nama-dosen" type="text" value="">
                    </div>
                </div>
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Jurusan
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" name="jurusan" type="text" value="">
                    </div>
                </div>
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Telepon
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" name="telepon" type="text" value="">
                    </div>
                </div>
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Matakuliah
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" name="matakuliah" type="text" value="">
                    </div>
                </div>
                <div class="md:flex mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-600 font-bold md:text-left mb-3 md:mb-0 pr-4" for="my-textfield">
                            Jumlah SKS
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="form-input block w-full focus:bg-white" name="sks" type="text" value="">
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <input type="submit" class="shadow bg-green-500 hover:bg-green-100 hover:text-gray-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" value="Submit">
                        </input>
                    </div>
                </div>
            </form>

        </div>
        <!--/Card-->
    </div>
    <!--/container-->
    <footer class="w-full border-t bg-white-100 pb-30">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class=" pt-2">&copy; MkDierz | 190170067</div>
            <!-- <p class="text-center"></p> -->
            <!-- <p class="text-center">syibbran mulaesyi</p> -->
        </div>
    </footer>
</body>

</html>