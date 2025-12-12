<main class="flex-1 overflow-y-auto p-6 lg:p-10 scroll-smooth">
    <div class="max-w-7xl mx-auto flex flex-col gap-8">
        <div class="flex flex-col gap-1">
            <nav class="flex gap-2 items-center text-sm text-slate-500">
                <a class="hover:text-primary transition-colors" href="#">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-white font-medium">Dashboard</span>
            </nav>
            <h2 class="text-2xl font-bold text-white tracking-tight">Overview</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                class="flex flex-col gap-4 rounded-xl p-6 bg-card-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <div
                        class="p-2 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-[#0bda5e] text-xs font-bold bg-[#0bda5e]/10 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">trending_up</span> 12%
                    </span>
                </div>
                <div>
                    <p class="text-slate-400 text-sm font-medium">Total Revenue</p>
                    <p class="text-white text-2xl font-bold mt-1">$54,230</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-4 rounded-xl p-6 bg-card-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <div
                        class="p-2 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-[#0bda5e] text-xs font-bold bg-[#0bda5e]/10 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">trending_up</span> 5%
                    </span>
                </div>
                <div>
                    <p class="text-slate-400 text-sm font-medium">Total Orders</p>
                    <p class="text-white text-2xl font-bold mt-1">1,245</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-4 rounded-xl p-6 bg-card-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <div
                        class="p-2 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">inventory</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-slate-400 text-xs font-bold bg-slate-400/10 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">remove</span> 0%
                    </span>
                </div>
                <div>
                    <p class="text-slate-400 text-sm font-medium">Products</p>
                    <p class="text-white text-2xl font-bold mt-1">560</p>
                </div>
            </div>
            <div
                class="flex flex-col gap-4 rounded-xl p-6 bg-card-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                <div class="flex justify-between items-start">
                    <div
                        class="p-2 rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined">group_add</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-[#0bda5e] text-xs font-bold bg-[#0bda5e]/10 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">trending_up</span> 8.5%
                    </span>
                </div>
                <div>
                    <p class="text-slate-400 text-sm font-medium">Active Customers</p>
                    <p class="text-white text-2xl font-bold mt-1">3,400</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 rounded-xl border border-border-dark bg-card-dark p-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 gap-4">
                    <div>
                        <h3 class="text-lg font-bold text-white">Sales Overview</h3>
                        <p class="text-slate-400 text-sm">Comparing sales vs previous period</p>
                    </div>
                    <div class="flex items-center gap-2 bg-background-dark rounded-lg p-1 border border-border-dark">
                        <button
                            class="px-3 py-1 text-xs font-bold text-white bg-primary rounded shadow-sm">Weekly</button>
                        <button class="px-3 py-1 text-xs font-medium text-slate-400 hover:text-white">Monthly</button>
                        <button class="px-3 py-1 text-xs font-medium text-slate-400 hover:text-white">Yearly</button>
                    </div>
                </div>
                <div class="relative w-full aspect-[2/1] min-h-[250px]">
                    <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 478 150"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                                <stop offset="0%" stop-color="#135bec" stop-opacity="0.3"></stop>
                                <stop offset="100%" stop-color="#135bec" stop-opacity="0"></stop>
                            </linearGradient>
                        </defs>
                        <path
                            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25V149H0V109Z"
                            fill="url(#chartGradient)"></path>
                        <path
                            d="M0 109C18.1538 109 18.1538 21 36.3077 21C54.4615 21 54.4615 41 72.6154 41C90.7692 41 90.7692 93 108.923 93C127.077 93 127.077 33 145.231 33C163.385 33 163.385 101 181.538 101C199.692 101 199.692 61 217.846 61C236 61 236 45 254.154 45C272.308 45 272.308 121 290.462 121C308.615 121 308.615 149 326.769 149C344.923 149 344.923 1 363.077 1C381.231 1 381.231 81 399.385 81C417.538 81 417.538 129 435.692 129C453.846 129 453.846 25 472 25"
                            fill="none" stroke="#135bec" stroke-linecap="round" stroke-width="3"></path>
                    </svg>
                </div>
                <div class="flex justify-between mt-4 px-2">
                    <span class="text-xs font-bold text-slate-500">Mon</span>
                    <span class="text-xs font-bold text-slate-500">Tue</span>
                    <span class="text-xs font-bold text-slate-500">Wed</span>
                    <span class="text-xs font-bold text-slate-500">Thu</span>
                    <span class="text-xs font-bold text-slate-500">Fri</span>
                    <span class="text-xs font-bold text-slate-500">Sat</span>
                    <span class="text-xs font-bold text-slate-500">Sun</span>
                </div>
            </div>
            <div class="rounded-xl border border-border-dark bg-card-dark p-6 flex flex-col h-full">
                <h3 class="text-lg font-bold text-white mb-6">Traffic Sources</h3>
                <div class="flex-1 flex flex-col justify-center gap-6">
                    <div>
                        <div class="flex justify-between items-end mb-1">
                            <span class="text-sm font-medium text-slate-300">Direct</span>
                            <span class="text-sm font-bold text-white">54%</span>
                        </div>
                        <div class="w-full bg-background-dark rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 54%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-end mb-1">
                            <span class="text-sm font-medium text-slate-300">Social Media</span>
                            <span class="text-sm font-bold text-white">32%</span>
                        </div>
                        <div class="w-full bg-background-dark rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 32%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-end mb-1">
                            <span class="text-sm font-medium text-slate-300">Referral</span>
                            <span class="text-sm font-bold text-white">14%</span>
                        </div>
                        <div class="w-full bg-background-dark rounded-full h-2">
                            <div class="bg-teal-500 h-2 rounded-full" style="width: 14%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-white">Recent Orders</h3>
                <button class="text-primary text-sm font-bold hover:text-primary/80 transition-colors">View
                    All</button>
            </div>
            <div class="rounded-xl border border-border-dark bg-card-dark overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-border-dark bg-white/5">
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Order ID</th>
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Customer</th>
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Product</th>
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Date</th>
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Amount</th>
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400">
                                    Status</th>
                                <th class="p-4 text-xs font-bold uppercase tracking-wider text-slate-400 text-right">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-300 divide-y divide-border-dark">
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="p-4 font-medium text-white">#ORD-001</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-gray-600 bg-cover bg-center"
                                            data-alt="Customer Avatar"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBqLoOQXD1QAueBbVuvN7aNsyI23ETxIcP-Ho-Z4L_3v8O12CcTA2TVabyb8KI2pcBV5zPJWHptSFOzrLwTIrbwZTB12oPCpI3_nP92V16WJD5tceU5_swGTO-Mj58vu3zPS0DAFK3AWATlkUPSwS4fwS5Xp-RMvfyLvsQWDm3EDqYBcIPzbk8ue093wUZGOiuXmwIOEc0G35quym0hf6rvcDgAN8pP6XBDNV2J1-MgJlF2SZWwhIpgG0qENZ7kF6Z6rFJPar-nO0KN");'>
                                        </div>
                                        <span>John Doe</span>
                                    </div>
                                </td>
                                <td class="p-4">Wireless Headphones</td>
                                <td class="p-4 text-slate-400">Oct 24, 2023</td>
                                <td class="p-4 font-bold text-white">$129.00</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#0bda5e]/10 text-[#0bda5e]">
                                        Completed
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-slate-400 hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-lg">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="p-4 font-medium text-white">#ORD-002</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-gray-600 bg-cover bg-center"
                                            data-alt="Customer Avatar"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB5iF6jwpr6uh5OKUG3jE3EhI7_1UjfJGVgwAIdmmoWpAvvBO9X3zIgXTMHmeVe1swT97tJYwCNgIbqXnljeNZJwwepy3nHqvhLiLtsqoTTWB9I92NQl_Lyq6Krg9Bo3iN09V8NS7gFAuYR7bxgNZY-NWv2407almGMOy-JKT0NTDI2fSVEtfIJr73Dvv0WMtTJvlC-W9XHu0yS7GDU3x5J4mW4jCUaBr8nWnM4VrWlec7jg48Hs-n9V7xDG5F72GQhwUHJund5-3u6");'>
                                        </div>
                                        <span>Sarah Smith</span>
                                    </div>
                                </td>
                                <td class="p-4">Smart Watch Series 5</td>
                                <td class="p-4 text-slate-400">Oct 24, 2023</td>
                                <td class="p-4 font-bold text-white">$249.00</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-500/10 text-yellow-500">
                                        Pending
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-slate-400 hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-lg">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="p-4 font-medium text-white">#ORD-003</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-gray-600 bg-cover bg-center"
                                            data-alt="Customer Avatar"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC31n10I7u8sXtM_2iPZzZe5hQ1Dw4OkFmThqoA84RRUlUCDwkLVAIIOrh1bt1MH7LsxehDBi39T-aoH-jZE7-9BszaUU0Au5k6yewo-vasyx-hq-KYONZiXncUCoKTG4ZEQsA9wMMOKRL41-fVRtqkIffNQjJjnFClsQBzbQD3zPlK8fGrqMZIc1CzEvS6qNQfV6PQkTJD_jeMgY7wPonNsyw30-iPyNs3v4NCv_1YwpyveOGtfr8d5rZSVMmppX2FCW7zJLSBBkNe");'>
                                        </div>
                                        <span>Michael Brown</span>
                                    </div>
                                </td>
                                <td class="p-4">Mechanical Keyboard</td>
                                <td class="p-4 text-slate-400">Oct 23, 2023</td>
                                <td class="p-4 font-bold text-white">$199.00</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#0bda5e]/10 text-[#0bda5e]">
                                        Completed
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-slate-400 hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-lg">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="p-4 font-medium text-white">#ORD-004</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-gray-600 bg-cover bg-center"
                                            data-alt="Customer Avatar"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDTp-8W89S6huzwSR-NnWooQtjmTjqAhfJ3BxgxZVmJTTWwRz7G8JvOjmIslZ6BE4Y9qKPwAlf2vXuC_N-hh80b1p1jjFfT24E5AxnaSBVX3v-OrlGdPYSjnEvp6f8VQSu22qYamUBuBSHOOR-e2gAlKLRtATCSE7HcVAptX4mvlbeaYfEjkId3P6iNbOfPNL7lnJN_lcoz1rhobBuHzXhH1_g9kaDSyG33F0cBczZiOMQRCf0xPe910RxErOvlzTfknTmsDiawKQ61");'>
                                        </div>
                                        <span>Emily Wilson</span>
                                    </div>
                                </td>
                                <td class="p-4">USB-C Hub Multiport</td>
                                <td class="p-4 text-slate-400">Oct 22, 2023</td>
                                <td class="p-4 font-bold text-white">$59.00</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-500/10 text-red-500">
                                        Cancelled
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-slate-400 hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-lg">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="group hover:bg-white/5 transition-colors">
                                <td class="p-4 font-medium text-white">#ORD-005</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="size-6 rounded-full bg-gray-600 bg-cover bg-center"
                                            data-alt="Customer Avatar"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB08CdkYNwpXdWPqE6DNweZXl2USnCpye5NO-s1qegLl4nSxfGHKMyZ2giruy4ETtQaxnvAeY4F9yAyzLDyIVIBHp1XSDRun_dA3n9scyeSoMrp-bHFuwzgqKle820jrA6jyD4uEHwwTlOmeCG-AgtoZUEd4rjTpJa5-KP0TuH5XiPZN1WigdL4W_6Kc3-Tp_YJRUA6dEQgfCBtctjGuXD9JyJ2yrFFvQf_-h5-G24CZsnD2-hSzYhYhgJHaRcncCIeYOlAHWh0_ZTj");'>
                                        </div>
                                        <span>David Clark</span>
                                    </div>
                                </td>
                                <td class="p-4">Gaming Mouse 4000DPI</td>
                                <td class="p-4 text-slate-400">Oct 22, 2023</td>
                                <td class="p-4 font-bold text-white">$89.00</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-500/10 text-yellow-500">
                                        Pending
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-slate-400 hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-lg">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>