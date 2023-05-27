<section class="tambah my-36">
    <div class="logo text-center flex flex-wrap justify-center items-center">
        <div class="w-2/2">
            <h1 class="text-white bg-dark2 text-sm rounded-full py-1 lg:text-base">ubah</h1>
            <p class="uppercase text-3xl font-righteous text-white lg:text-5xl">ciherang</p>
        </div>
    </div>

    <div class="mt-10 mx-5 sm:mx-10 md:mx-20 lg:mx-56">
        <form class="bg-dark2 shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $testimoni['id']; ?>">
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Foto
                </label>

                <div class="flex justify-center">
                    <img src="<?= base_url('assets/img/') . $testimoni['foto']; ?>" class="w-[150px] h-[150px] rounded-full object-cover mb-5" alt="">
                </div>


                <input name="foto" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight" type="file">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input name="nama" value="<?= $testimoni['nama']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                <div class="text-xs italic text-red-700 pt-2"><?= form_error('nama'); ?></div>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Komentar
                </label>
                <input name="komentar" value="<?= $testimoni['komentar']; ?>" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="komentar" type="text">
            </div>

            <div class="items-center">
                <input class="button bg-breaker w-full text-dark2 font-semibold py-2 px-4 rounded-full" type="submit">
            </div>
        </form>

        <div class="mt-10">
            <a class="button font-medium px-5 py-1 rounded-full" href="<?= base_url('admin'); ?>">kembali</a>
        </div>

        <p class="hidden text-center text-gray-500 text-xs">
            &copy;2023 Aisyah Nur Fadilah. All rights reserved.
        </p>
    </div>
</section>