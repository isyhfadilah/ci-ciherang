<section class="admin container mx-auto my-36">
    <div class="logo text-center flex flex-wrap justify-center items-center">
        <div class="w-2/2">
            <h1 class="text-white bg-dark2 text-sm rounded-full py-1 lg:text-base">admin</h1>
            <p class="uppercase text-3xl font-righteous text-white lg:text-5xl">ciherang</p>
        </div>
    </div>

    <div class="mx-5 lg:mx-36">
        <div class="mt-10">
            <a href="<?= base_url(); ?>admin/tambah" class="button px-5 py-1 rounded-full font-medium">tambah</a>
        </div>

        <div class="flex justify-center items-center mt-10 gap-5">
            <table class="table-auto w-full text-white border border-dark2 items-center">
                <thead>
                    <tr class="bg-dark2 uppercase">
                        <th class="py-2 px-4">nama</th>
                        <th class="py-2 px-4">komentar</th>
                        <th class="py-2 px-4">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($testimoni as $key) { ?>
                        <tr class="border border-dark2">
                            <td class="border border-dark2 py-2 px-4"><?= $key->nama; ?></td>
                            <td class="border border-dark2 py-2 px-4"><?= $key->komentar; ?></td>

                            <td class="border border-dark2 py-2 px-4 text-sm flex justify-center items-center">
                                <div class="gap-5">
                                    <a href="<?= base_url(); ?>admin/detail/<?= $key->id; ?>" class="bg-dark2 px-2 rounded-full">detail</a>
                                    <a href="<?= base_url(); ?>admin/ubah/<?= $key->id; ?>" class="bg-dark2 px-2 rounded-full">ubah</a>
                                    <a id="hapusButton" href="<?= base_url(); ?>admin/hapus/<?= $key->id; ?>" class="bg-dark2 px-2 rounded-full">hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-10 flex justify-end">
            <a href="<?= base_url('home/logout'); ?>" class="button px-5 py-1 rounded-full font-medium">keluar</a>
        </div>
    </div>
</section>