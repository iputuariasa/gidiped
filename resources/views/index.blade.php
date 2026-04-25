<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/525a9b21ee.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    {{-- <script src="js/script.js"></script> --}}
    <title>Digiped.id</title>
  </head>
  <body class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center p-6 lg:px-8 w-full px-10" aria-label="Global">
            <div class="flex items-center justify-center w-full relative top-4">
                <div class="fixed lg:flex lg:gap-x-5 px-3 py-2 rounded-full" id="menu">
                    <a href="#home" class="menu text-sm font-semibold leading-6 py-1 px-5 rounded-full"><span class="hidden md:block">Home</span><span class="md:hidden inline"><i class="fa-solid fa-house"></i></span></a>
                    <a href="#about" class="menu text-sm font-semibold leading-6 py-1 px-5 rounded-full"><span class="hidden md:block">About</span><span class="md:hidden inline"><i class="fa-solid fa-address-card"></i></span></a>
                    <a href="#projects" class="menu text-sm font-semibold leading-6 py-1 px-5 rounded-full"><span class="hidden md:block">Services</span><span class="md:hidden inline"><i class="fa-solid fa-screwdriver-wrench"></i></span></a>
                    <a href="#contact" class="menu text-sm font-semibold leading-6 py-1 px-5 rounded-full"><span class="hidden md:block">Contact</span><span class="md:hidden inline"><i class="fa-solid fa-envelope"></i></span></a>
                </div>
            </div>
        </nav>
    </header>

    {{-- Home Page --}}
    <section class="relative" style="height: 100vh;" id="home">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="w-full h-full px-4 lg:px-0">
            <div class="text-center flex flex-col justify-center h-full">
                <div class="flex justify-center items-center flex-col lg:flex-row">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="titlename w-44 lg:w-44 h-auto">
                </div>
                <h3 class="titleJob text-5xl font-bold tracking-tight text-gray-900 xl:text-6xl from-indigo-500 to-sky-50 bg-gradient-to-r bg-clip-text text-transparent leading-tight py-0.5">
                    Solusi Digital Bisnis Yang Terintegrasi.
                </h3>
                <div class="w-full flex justify-center">
                    <p class="mt-6 text-lg leading-8 text-gray-600 descText w-full xl:w-7/12"></p>
                </div>
                <div class="mt-14 flex items-center justify-center gap-x-7 md:gap-x-14">
                    <a href="https://www.linkedin.com/in/i-putu-ariasa-375773320?utm_source=share_via&utm_content=profile&utm_medium=member_ios" class="boxSosmed w-14 h-14 bg-slate-200 rounded-lg -mt-14" target="_blank">
                        <img src="/img/linkedin.png" alt="" class="w-full h-full object-contain">
                    </a>
                    <a href="https://github.com/iputuariasa" class="boxSosmed w-14 h-14 bg-slate-200 rounded-lg p-2" target="_blank">
                        <img src="/img/github.png" alt="" class="w-full h-full object-contain">
                    </a>
                    <a href="mailto:iptariasa@gmail.com?subject=Konsultasi%20Solusi%20Digital%20-%20Digiped.id&body=Halo%20Digiped.id%2C%0A%0Asaya%20ingin%20konsultasi%20mengenai%20solusi%20digital%20untuk%20bisnis%20saya." class="boxSosmed w-14 h-14 bg-slate-200 rounded-lg" target="_blank">
                        <img src="/img/email.png" alt="" class="w-full h-full object-contain">
                    </a>
                    <a href="https://wa.me/6281353686839?text=Halo%20Digiped.id%2C%20saya%20ingin%20konsultasi%20mengenai%20solusi%20digital%20untuk%20bisnis%20saya." class="boxSosmed w-14 h-14 bg-slate-200 rounded-lg -mt-14 p-1" target="_blank">
                        <img src="/img/whatsapp.png" alt="" class="w-full h-full object-contain">
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </section>
    {{-- End Home Page --}}

    {{-- About Page --}}
    <section class="relative bg-[#1a0047] py-24 overflow-hidden" id="about">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <div class="flex justify-center order-2 lg:order-1" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-indigo-500/20 blur-2xl rounded-full"></div>
                        <img src="{{ asset('img/maskot.png') }}" alt="Maskot Digiped" class="relative w-64 md:w-80 lg:w-[400px] h-auto object-contain animate-bounce-slow">
                    </div>
                </div>

                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <div class="mb-6">
                        <span class="text-indigo-400 font-semibold tracking-widest uppercase text-sm">Kenali Kami Lebih Dekat</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-2 from-indigo-400 to-sky-200 bg-gradient-to-r bg-clip-text text-transparent py-2">
                            Tentang Digiped.id
                        </h2>
                    </div>
                    
                    <div class="space-y-6 text-slate-300 leading-relaxed text-base lg:text-lg">
                        <p>
                            Apakah Anda membutuhkan <span class="text-white font-semibold">sistem web untuk menunjang bisnis</span> atau sedang mencari partner ahli untuk menyelesaikan <span class="text-white font-semibold">proyek kampus dan tugas akhir?</span>
                        </p>
                        <p>
                            <span class="text-indigo-300 font-bold">Digiped.id</span> hadir sebagai solusi satu pintu untuk kebutuhan digital Anda. Kami bukan sekadar pengembang, tapi mitra kreatif yang memastikan setiap baris kode dan piksel desain memiliki nilai bagi tujuan Anda.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 text-sm">
                            <div class="flex items-start gap-3">
                                <div class="mt-1 bg-indigo-500/20 p-1 rounded-md">✅</div>
                                <p><span class="text-white font-medium">Website:</span> Responsif & Cepat.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="mt-1 bg-indigo-500/20 p-1 rounded-md">✅</div>
                                <p><span class="text-white font-medium">Data Workflow:</span> Automasi Form ke Database/Sheet.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="mt-1 bg-indigo-500/20 p-1 rounded-md">✅</div>
                                <p><span class="text-white font-medium">Sistem:</span> Flowchart, DFD, & ERD.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="mt-1 bg-indigo-500/20 p-1 rounded-md">✅</div>
                                <p><span class="text-white font-medium">Growth:</span> Fokus pada Hasil Nyata.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- End About Page --}}

    {{-- Services Page --}}
    <section class="relative" style="height: 100%" id="projects">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative right-[calc(0%-0rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="py-28 px-5 lg:px-0">
            <div class="flex h-16 justify-center">
                <span class="text-4xl lg:text-5xl font-bold tracking-tight text-gray-900 sm:text-6xl from-indigo-500 to-indigo-900 bg-gradient-to-r bg-clip-text text-transparent" data-aos="flip-up">Layanan Kami</span>
            </div>
            <div class="flex justify-center text-center">
                <p class="w-full xl:w-3/4 lg:text-center text-base text-justify lg:text-lg text-gray-600" data-aos="zoom-in-up">
                    Solusi Digital Inovatif untuk Kebutuhan Bisnis dan Proyek Anda. Kami menyediakan beragam layanan profesional untuk membantu bisnis, perusahaan, atau proyek Anda mencapai tujuan dengan solusi yang efektif dan berkualitas tinggi.
                </p>
            </div>
            <div class="flex justify-center items-center flex-col">
                <div class="flex flex-col lg:flex-row mt-5 w-full xl:w-3/4">
                    <div class="w-full lg:w-6/12 lg:pr-5 mb-5 lg:mb-0">
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow h-auto lg:h-48" data-aos="fade-right">
                            <div class="p-5 flex flex-col justify-between h-full">
                                <h5 class="mb-2 text-xl lg:text-2xl font-semibold lg:font-bold tracking-tight text-gray-700 text-center lg:text-start">Pengembangan Sistem</h5>
                                <h3 class="mb-3 font-normal text-gray-600 text-base lg:text-lg text-justify">Membuat sistem berbasis web yang terstruktur, mulai dari flowchart hingga implementasi.
                                </h3>
                                <div class="flex">
                                    <h3 class="mb-3 font-normal text-gray-700">Technology : </h3>
                                    <div class="w-6 mx-2">
                                        <img src="/img/html.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/css.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/js.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/Laravel.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/tailwindcss.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 lg:pr-5">
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow h-auto lg:h-48" data-aos="fade-left">
                            <div class="p-5 flex flex-col justify-between h-full">
                                <h5 class="mb-2 text-xl lg:text-2xl font-semibold lg:font-bold tracking-tight text-gray-700 text-center lg:text-start">Desain UI/UX</h5>
                                <h3 class="mb-3 font-normal text-gray-600 text-base lg:text-lg text-justify">Merancang antarmuka yang menarik dan memberikan pengalaman pengguna yang optimal.
                                </h3>
                                <div class="flex">
                                    <h3 class="mb-3 font-normal text-gray-700">Technology : </h3>
                                    <div class="w-6 mx-2">
                                        <img src="/img/figma.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row mt-5 w-full xl:w-3/4">
                    <div class="w-full lg:w-6/12 lg:pr-5 mb-5 lg:mb-0">
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow h-auto lg:h-48" data-aos="fade-right">
                            <div class="p-5 flex flex-col justify-between h-full">
                                <h5 class="mb-2 text-xl lg:text-2xl font-semibold lg:font-bold tracking-tight text-gray-700 text-center lg:text-start">Pengembangan Website Responsif</h5>
                                <h3 class="mb-3 font-normal text-gray-600 text-base lg:text-lg text-justify">Membangun website yang dapat diakses dengan sempurna di berbagai perangkat.
                                </h3>
                                <div class="flex">
                                    <h3 class="mb-3 font-normal text-gray-700">Technology : </h3>
                                    <div class="w-6 mx-2">
                                        <img src="/img/html.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/css.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/js.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/Laravel.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/tailwindcss.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 lg:pr-5">
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow h-auto lg:h-48" data-aos="fade-left">
                            <div class="p-5 flex flex-col justify-between h-full">
                                <h5 class="mb-2 text-xl lg:text-2xl font-semibold lg:font-bold tracking-tight text-gray-700 text-center lg:text-start">Formulir dan Spreadsheet</h5>
                                <h3 class="mb-3 font-normal text-gray-600 text-base lg:text-lg text-justify">Membuat sistem otomatisasi data menggunakan Google Forms, Google Sheets, dan integrasi lainnya untuk efisiensi kerja.
                                </h3>
                                <div class="flex">
                                    <h3 class="mb-3 font-normal text-gray-700">Technology : </h3>
                                    <div class="w-4 mx-2">
                                        <img src="/img/forms.png" alt="">
                                    </div>
                                    <div class="w-4 mx-2">
                                        <img src="/img/sheets.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row mt-5 w-full xl:w-3/4">
                    <div class="w-full lg:w-6/12 lg:pr-5 mb-5 lg:mb-0">
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow h-auto lg:h-48" data-aos="fade-right">
                            <div class="p-5 flex flex-col justify-between h-full">
                                <h5 class="mb-2 text-xl lg:text-2xl font-semibold lg:font-bold tracking-tight text-gray-700 text-center lg:text-start">Analisis dan Perancangan Sistem</h5>
                                <h3 class="mb-3 font-normal text-gray-600 text-base lg:text-lg text-justify">Membantu Anda merancang diagram seperti DFD, ERD, dan lainnya untuk dokumentasi teknis.
                                </h3>
                                <div class="flex">
                                    <h3 class="mb-3 font-normal text-gray-700">Technology : </h3>
                                    <div class="w-6 mx-2">
                                        <img src="/img/visio.png" alt="">
                                    </div>
                                    <div class="w-6 mx-2">
                                        <img src="/img/drawio.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 lg:pr-5">
                        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow h-auto lg:h-48" data-aos="fade-left">
                            <div class="p-5 flex flex-col justify-between h-full">
                                <h5 class="mb-2 text-xl lg:text-2xl font-semibold lg:font-bold tracking-tight text-gray-700 text-center lg:text-start">Pembuatan TA/Proyek Kampus</h5>
                                <h3 class="mb-3 font-normal text-gray-600 text-base lg:text-lg text-justify">Membantu menyelesaikan tugas akhir atau proyek dengan hasil yang berkualitas tinggi.
                                </h3>
                                <div class="flex">
                                    <h3 class="mb-3 font-normal text-gray-700">Technology : - </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative top-40 left-[calc(100%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </section>
    {{-- End Service Page --}}

    {{-- Teknologi Page --}}
    <section class="relative py-24 overflow-hidden bg-[#1a0047]" id="tech-stack">
        <div class="absolute inset-0 z-0">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-indigo-600/10 blur-[120px] rounded-full"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-10">
            <div class="flex flex-col items-center lg:flex-row gap-10 lg:gap-12">
                
                <div class="w-full lg:w-6/12 text-center lg:text-left">
                    <span class="text-indigo-400 font-semibold tracking-widest uppercase text-sm">Our Tech Stack</span>
                    <h2 class="text-4xl lg:text-5xl font-bold mt-3 mb-6 from-indigo-400 to-sky-200 bg-gradient-to-r bg-clip-text text-transparent py-2" data-aos="fade-right">
                        Teknologi Modern & Handal
                    </h2>
                    <p class="text-slate-300 text-base lg:text-lg leading-relaxed text-justify lg:text-left" data-aos="fade-up" data-aos-delay="200">
                        Kami menggunakan ekosistem teknologi terbaru untuk memastikan setiap proyek memiliki performa tinggi, keamanan yang kuat, dan kemudahan skalabilitas. Dari <span class="text-white font-semibold">Laravel</span> untuk sistem yang kompleks hingga <span class="text-white font-semibold">Figma</span> untuk desain yang presisi.
                    </p>
                    
                    <div class="mt-8 flex flex-wrap justify-center lg:justify-start gap-3" data-aos="fade-up" data-aos-delay="400">
                        <span class="px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-medium">Fast Performance</span>
                        <span class="px-4 py-1.5 rounded-full bg-sky-500/10 border border-sky-500/20 text-sky-300 text-xs font-medium">Secure Code</span>
                        <span class="px-4 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs font-medium">Modern UI</span>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 relative h-[350px] md:h-[400px] flex items-center justify-center">
                    <div class="absolute w-24 h-24 bg-indigo-500/5 rounded-full border border-indigo-500/10 animate-pulse"></div>
                    
                    <div class="relative w-full h-full">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-2 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo1">
                            <img src="/img/htmlbul.png" alt="HTML" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(234,88,12,0.5)]">
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-2 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo2">
                            <img src="/img/cssbul.png" alt="CSS" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(37,99,235,0.5)]">
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-2 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo3">
                            <img src="/img/jsbul.png" alt="JS" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(250,204,21,0.5)]">
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-2 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo4">
                            <img src="/img/phpbul.png" alt="PHP" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(71,78,134,0.5)]">
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-4 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo5">
                            <img src="/img/laravelbul.png" alt="Laravel" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(249,50,44,0.5)]">
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-3 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo6">
                            <img src="/img/alpinejs.png" alt="Alpine" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(119,193,210,0.5)]">
                        </div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 p-3 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-xl" id="logo7">
                            <img src="/img/figmabul.png" alt="Figma" class="w-full h-full object-contain filter drop-shadow-[0_0_8px_rgba(162,89,255,0.5)]">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    {{-- End Teknologi Page --}}

    {{-- Contact Page --}}
    <section class="relative" style="height: 100%" id="contact">
        <div class="py-28 lg:mb-14 flex justify-center">
            <div class="w-full xl:w-3/4 px-5 lg:px-0" data-aos="fade-down">
                <div class="w-full">
                    <div class="text-center flex flex-col justify-center items-center">
                        <span class="h-16 text-4xl lg:text-5xl font-bold text-gray-900 from-indigo-500 to-sky-950 bg-gradient-to-r bg-clip-text text-transparent">Hubungi Kami</span>
                    </div>
                    <div>
                        <p class="text-slate-800 text-base lg:text-lg text-center">Kami dengan senang hati akan membantu Anda. Jangan ragu untuk menghubungi kami untuk konsultasi gratis.</p>
                    </div>
                </div>
                <div>
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-8 pt-10">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Nama anda" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="nama@nama pengguna internet" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                            <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Tulis apa yang bisa kami bantu disini..."></textarea>
                        </div>
                        <button type="submit" class="bg-indigo-500 text-white w-full py-2 rounded-full font-bold hover:bg-indigo-700">Kirim Pesan</button>
                    </form>
                    @if(session('success'))
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    title: 'Good job!',
                                    text: "{{ session('success') }}",
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                });
                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- End Contact Page --}}

    <section class="w-full relative overflow-hidden isolate" style="background-color: #1a0047">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative right-[calc(0%-0rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <footer>
            <div class="w-full max-w-screen-xl mx-auto py-3">
                <div class="flex flex-col justify-center items-center">
                    <a href="/" class="flex items-center mb-1 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('img/logo.png') }}" class="h-5 lg:h-8" alt="Digiped.id Logo" />
                    </a>
                    <span class="block text-sm text-gray-500 sm:text-center">© 2024 <a href="/" class="hover:underline">Digiped.id™</a>. All Rights Reserved.</span>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to(".descText", {duration: 2, delay: 0.6, text: "Dari desain visual yang ikonik hingga sistem formulir laporan otomatis dan website profesional. Kami membangun infrastruktur digital lengkap untuk membantu bisnis Anda melangkah lebih jauh."})

        gsap.from(".titlename", { 
            duration: 0.5,
            x: '-100%',
            opacity: 0,
            ease: "back.out(1.7)"
        });
        gsap.from(".titleJob", { 
            duration: 0.6,
            x: '-100%',
            opacity: 0,
            ease: "back.out(1.7)"
        });
        // 1. Animasi Intro (Sudah ada di kode Anda)
        gsap.from(".boxSosmed", {
            duration: 2,
            scale: 0.5, 
            opacity: 0, 
            delay: 2.7, 
            stagger: 0.2,
            ease: "elastic", 
            force3D: true,
            // Tambahkan ini untuk memicu animasi melayang setelah intro selesai
            onComplete: () => {
                makeFloating();
            }
        });

        // 2. Fungsi Baru untuk Animasi Melayang (Floating)
        function makeFloating() {
            gsap.to(".boxSosmed", {
                y: -15, // Melayang ke atas sejauh 10px
                duration: 1.5,
                ease: "sine.inOut", // Gerakan halus naik turun
                repeat: -1, // Berulang selamanya
                yoyo: true, // Kembali lagi ke posisi awal (naik-turun)
                stagger: {
                    each: 0.2,
                    from: "random" // Agar tidak barengan geraknya, lebih natural
                }
            });
        }
    </script>
    {{-- LOGO --}}
    <script>
        // Animasi Orbit yang lebih dinamis dan luas
        gsap.to("#logo1", { x: 130, y: -50, duration: 4, repeat: -1, yoyo: true, ease: "sine.inOut" });
        gsap.to("#logo2", { x: -110, y: 30, duration: 5, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.5 });
        gsap.to("#logo3", { x: -60, y: 100, duration: 6, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 1 });
        gsap.to("#logo4", { x: 90, y: 80, duration: 4.5, repeat: -1, yoyo: true, ease: "sine.inOut" });
        gsap.to("#logo5", { x: -140, y: -10, duration: 5.5, repeat: -1, yoyo: true, ease: "sine.inOut" });
        gsap.to("#logo6", { x: 70, y: -110, duration: 7, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 0.2 });
        gsap.to("#logo7", { x: -120, y: -70, duration: 4, repeat: -1, yoyo: true, ease: "sine.inOut" });
    </script>
    <script src="js/script.js"></script>
  </body>
</html>