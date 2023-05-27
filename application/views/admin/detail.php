<section class="detail container mx-auto my-36">
    <div class="logo text-center flex flex-wrap justify-center items-center">
        <div class="w-2/2">
            <h1 class="text-white bg-dark2 text-sm rounded-full py-1 lg:text-base">detail</h1>
            <p class="uppercase text-3xl font-righteous text-white lg:text-5xl">ciherang</p>
        </div>
    </div>

    <div class="mx-8 mt-8 items-center md:flex md:mx-16 md:gap-5 md:items-start lg:mx-100">
        <div class="flex justify-center md:justify-start"><img class="w-[50%] rounded-full object-cover md:w-[100%]" src="<?= base_url('assets/img/') . $testimoni['foto']; ?>" alt="<?= base_url('assets/img/') . $testimoni['foto']; ?>"></div>

        <div class="md:w-full">
            <div class="text-white text-center mt-5 bg-dark2 rounded-lg px-2 py-4 md:py-12">
                <h1 class="text-xl"><?= $testimoni['nama']; ?></h1>
                <p class="text-gray-400">" <?= $testimoni['komentar']; ?> "</p>
            </div>

            <div class="mt-10">
                <a class="button font-medium px-5 py-1 rounded-full" href="<?= base_url('admin'); ?>">kembali</a>
            </div>
        </div>
    </div>


</section>