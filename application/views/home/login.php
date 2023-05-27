<section class="my-36">
    <div class="logo text-center flex flex-wrap justify-center items-center">
        <div class="w-2/2">
            <h1 class="text-white bg-dark2 text-sm rounded-full py-1 lg:text-base">login</h1>
            <p class="uppercase text-3xl font-righteous text-white lg:text-5xl">ciherang</p>
        </div>
    </div>

    <div class="mt-10 mx-10">
        <div class="flex justify-center">
            <form class="sm:w-1/2 lg:w-1/3 bg-dark2 shadow-md rounded px-8 py-16 mb-4" action="<?= site_url('home/login_check'); ?>" method="post">
                <div class="mb-2 flex justify-center">
                    <img class="w-1/2 md:w-1/4 rounded-full" src="<?= base_url('assets/img/login.jpg'); ?>" alt="">
                </div>

                <div class="mb-2">
                    <label class="block text-gray-400 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-400 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input name="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password">

                    <?php
                    if ($this->session->userdata('msg')) { ?>
                        <p class="text-sm text-red-700"><?= $this->session->userdata('msg'); ?></p>
                    <?php
                        $this->session->sess_destroy();
                    } ?>
                </div>

                <div class="items-center">
                    <input class="button bg-breaker w-full text-dark2 font-semibold py-2 px-4 rounded-full" type="submit">
                </div>
            </form>
        </div>

        <div class="mt-10 flex justify-end lg:mr-[34%] sm:mr-[26%]">
            <a class="button px-5 py-1 rounded-full font-medium" href="<?= base_url('admin'); ?>">kembali</a>
        </div>
    </div>
</section>