@extends('frontend.layouts.app')

@section('title', 'Tentang MilkLife')

@section('meta_description', 'Tentang MilkLife')

@section('content')
    <div class="about-section page bg-milklife-blue-banner">

        <div class="about-content">

            <h1 class="about-title mb-2">
                Kami Milk People menuangkan kebahagiaan dan kebaikan dalam segelas susu yang diperoleh hanya dari sapi berkualitas yang dirawat dengan cinta. Selamat menikmati!
            </h1>

            <div class="about-body flex justify-center pt-8 overflow-hidden ">
                <div class="grid grid-cols-1">
                    <div>
                        <div class="image-1 relative -left-7 z-[1]">
                            <img src="{{ asset('img/thumbnail/thumbs_1.png') }}" alt="" class="max-w-[190px] w-full">
                            <div class="absolute top-10 right-[110%] w-max hidden md:block">
                                <img src="{{ asset('img/doodle/arrow_left.png') }}" class="brightness-[10]" alt="" width="100%">
                            </div>
                            <div class="detail absolute right-[100%] top-1/2 bottom-1/2  w-[400px] hidden md:block">
                                <h4 class="title">Kolaborasi Kelas Dunia</h4>
                                <p class="font-geologica font-bold text-base text-white">Kami bekerja sama dengan perusahaan kelas dunia
                                    yang berteknologi mutakhir untuk memberikan susu
                                    terbaik ke meja makan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-2 relative right-[-65px] top-[-65px] z-[2]">
                            <img src="{{ asset('img/thumbnail/thumbs_2.png') }}" alt="" class="max-w-[190px] w-full">
                            <div class="absolute top-[-25%] left-[90%] w-max hidden md:block">
                                <img src="{{ asset('img/doodle/arrow_right.png') }}" class="brightness-[10]" alt="" width="100%">
                            </div>
                            <div class="detail absolute left-[100%] top-0 w-[400px] hidden md:block">
                                <h4 class="title">The Milk People</h4>
                                <p class="font-geologica font-bold text-base text-white">
                                    Dengan pengalaman puluhan tahun, kami menggabungkan ilmu pengetahuan, dedikasi dan cinta untuk menghadirkan susu berkualitas setiap harinya. Para peternak dan nutrisionis menjaga sapi-sapi dan peternakan kami, di mana mereka memberi pakan berkualitas, menjaga suhu di peternakan, dan senantiasa memberi sapi-sapi kasih sayang sepenuhnya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-3 relative left-[-40px] top-[-110px] z-[3]">
                            <img src="{{ asset('img/thumbnail/thumbs_3.png') }}" alt="" class="max-w-[190px] w-full">
                            <div class="absolute top-10 right-[110%] w-max hidden md:block">
                                <img src="{{ asset('img/doodle/arrow_left.png') }}" class="brightness-[10]" alt="" width="100%">
                            </div>
                            <div class="detail absolute right-[100%] top-1/2 bottom-1/2 hidden md:block w-[400px]">
                                <h4 class="title">Peternakan Kami</h4>
                                <p class="font-geologica font-bold text-base text-white">
                                    Sapi-sapi Frisian Holstein yang didatangkan dari Australia tinggal di peternakan seluas kurang lebih 50 hektar dengan suhu yang sama seperti di habitat asli mereka, dirawat dan dijaga dengan kasih sayang.
                                    <br><br>Susu segar yang dihasilkan oleh sapi-sapi kami dikemas di pabrik berteknologi tinggi, dengan sumber energi ramah lingkungan yang dihasilkan oleh pengolahan bertenaga biogas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="image-4 relative top-[-150px] right-[-50px] z-[2]">
                            <img src="{{ asset('img/thumbnail/thumbs_4.png') }}" alt="" class="max-w-[190px] w-full">
                            <div class="absolute top-[-20%] left-[90%] w-max hidden md:block">
                                <img src="{{ asset('img/doodle/arrow_right.png') }}" class="brightness-[10]" alt="" width="100%">
                            </div>
                            <div class="detail absolute left-[100%] top-4 w-[400px] hidden md:block">
                                <h4 class="title">Sustainability</h4>
                                <p class="font-geologica font-bold text-base text-white">
                                    Kebaikan alam dan teknologi ramah lingkungan.
                                    PT. Global Dairi Alami menjadi satu-satunya pabrik
                                    yang ramah lingkungan di Indonesia yang menerapkan
                                    pemrosesan susu berteknologi mutakhir dari Jepang,
                                    serta pengolahan limbah bertenaga biogas yang ramah
                                    lingkungan, mengolah limbah padat menjadi pupuk dan
                                    tempat istirahat sapi-sapi kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
