<?php $this->load->view('admin/layouts/head'); ?>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden antialiased">
    <div class="flex h-screen w-full">

        <?php $this->load->view('admin/layouts/aside'); ?>

        <div class="flex-1 flex flex-col min-w-0 h-full">
            <header
                class="flex items-center justify-between border-b border-border-dark bg-background-dark/80 backdrop-blur-md px-6 py-3 sticky top-0 z-30">
                <div class="flex items-center gap-4 flex-1">
                    <button id="mobile-menu" class="md:hidden p-2 text-slate-400 hover:text-white">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <button id="desktop-sidebar-toggle"
                        class="hidden md:flex p-2 text-slate-400 hover:text-white hover:bg-white/5 rounded-lg transition-colors">
                        <span class="material-symbols-outlined">menu_open</span>
                    </button>
                    <div class="hidden md:flex flex-1 max-w-md">
                        <div class="relative w-full group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span
                                    class="material-symbols-outlined text-slate-500 group-focus-within:text-primary transition-colors">search</span>
                            </div>
                            <input
                                class="block w-full pl-10 pr-3 py-2.5 rounded-lg border-none bg-card-dark text-white placeholder-slate-500 focus:ring-2 focus:ring-primary focus:bg-white/5 transition-all text-sm"
                                placeholder="Search..." type="text" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-3 ml-auto">
                    <button id="theme-toggle"
                        class="p-2 text-slate-400 hover:text-yellow-400 hover:bg-white/5 rounded-full transition-colors"
                        title="Toggle Theme">
                        <span class="material-symbols-outlined">light_mode</span>
                    </button>
                    <button
                        class="relative p-2 text-slate-400 hover:text-white hover:bg-white/5 rounded-full transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                        <span
                            class="absolute top-1.5 right-1.5 size-2 bg-red-500 rounded-full border border-background-dark"></span>
                    </button>
                    <div class="h-8 w-[1px] bg-border-dark mx-1"></div>
                    <div class="bg-center bg-no-repeat bg-cover rounded-full size-8 cursor-pointer ring-2 ring-transparent hover:ring-primary transition-all"
                        data-alt="User Avatar in Header"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAm6kYjAme885cZCCjF_GNdbsCp8G2Ug9hv-IerPhWyoT2gu8WkalX7h0n3TszJaCTOMEv_59LwF0ROpx_2ZI3hzrsdKS46OQpiC9WzbyEblIfbyr1VcCfBeS-PfcWV_qmkQ9127xsijvuALUvXkUcPEmu9wjPsONRqZ4mTXKoKwW9axcu9Jm5z-MadNxeHvhGj6aFzKA4_aeR3akobz-O0DRdO-PTkmcPchr-g9vXgsGZKO12DYv1cPOjeIluO-ckTU2yp-eVmn3Ei");'>
                    </div>
                </div>
            </header>