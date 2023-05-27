<section class="tambah my-36">
    <div class="logo text-center flex flex-wrap justify-center items-center">
        <div class="w-2/2">
            <h1 class="text-white bg-dark2 text-sm rounded-full py-1 lg:text-base">tambah</h1>
            <p class="uppercase text-3xl font-righteous text-white lg:text-5xl">ciherang</p>
        </div>
    </div>

    <div class="mt-10 mx-5 sm:mx-10 md:mx-20 lg:mx-56">
        <form class="bg-dark2 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label class="block text-gray-400 text-sm font-bold mb-2" for="password">
                    Foto
                </label>
                <input name="foto" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-400 mb-3 leading-tight" type="file">
            </div>

            <div class="mb-4">
                <label class="block text-gray-400 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                <div class="text-xs italic pt-2 text-red-700"><?= form_error('nama'); ?></div>
            </div>

            <div class="mb-6">
                <label class="block text-gray-400 text-sm font-bold mb-2" for="password">
                    Komentar
                </label>
                <input name="komentar" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="komentar" type="text">
            </div>

            <div class="items-center">
                <input class="button bg-neptune w-full text-dark2 font-semibold py-2 px-4 rounded-full" type="submit">
            </div>
        </form>

        <div class="mt-10">
            <a class="button text-white px-5 py-1 rounded-full" href="<?= base_url('admin'); ?>">kembali</a>
        </div>

        <p class="hidden text-center text-gray-500 text-xs">
            &copy;2023 Aisyah Nur Fadilah. All rights reserved.
        </p>
    </div>
</section>