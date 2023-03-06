@section('alert')
    @if (session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close bg-primary border-0" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection
@section('container')
    <link rel="stylesheet" href="css/undangan8.css">
    <link rel="stylesheet" href="responsive/undangan8.css">

    <!-- sampul -->
    @foreach ($undangan as $item)
        <div class="sampul text-center">
            <h5 class="header" data-aos="zoom-in" data-aos-duration="1200">Save The Date</h5>
            <h6 data-aos="zoom-in" data-aos-duration="1200">You're Invited To The Wedding Of</h6>
            <img src="{{ $item->fotoSampul }}" alt="">
            {{-- Yang harus diubah --}}
            <h5 data-aos="zoom-in" data-aos-duration="1200">{{ $item->namaPriaLengkap }} & {{ $item->namaPerempuanLengkap }}
            </h5>
            <p data-aos="zoom-in" data-aos-duration="1200" class="mx-auto">
                {{ \Carbon\Carbon::parse($item->tanggalResepsi)->isoFormat('dddd, D MMMM Y') }}</p>
            {{-- End --}}
        </div>

        <!-- doa -->
        <div class="doa text-center">
            <p class="mx-auto" data-aos="fade-right" data-aos-duration="1200">“Dan Diantara Tanda-tanda (Kebesaran) -Nya
                Ialah
                Dia Menciptakan Pasangan-pasangan Untukmu Dari Jenismu Sendiri, Agar Kamu Cenderung Dan Merasa Teteram
                Kepadanya, Dan Dia Menjadikan Diantaramu Rasa Kasih Dan Sayang. Sungguh, Pada Yang Demuikian Itu Benar-benar
                Terdapat Tanda-tanda (Kebesaran Allah) Bagi Kaum Yang Berfikir”{ Q.S : Ar-Rum (30) : 20 } </p>
        </div>

        {{-- Yang harus diubah --}}
        <!-- pasangan -->
        <div class="mx-auto pasangan text-center">
            <p class="mx-auto sambutan" data-aos="zoom-in" data-aos-duration="1200">Dengan Memohon Rahmat Dan Ridho Dari
                Allah
                SWT. Kami Bermaksud Menyelenggarakan Syukuran Pernikahan Putra Putri Kami</p>

            <!-- pasangan perempuan -->
            <img width="160px" height="212px" height="211px" src="{{ $item->fotoWanita }}" alt="">

            <h5 class="mx-auto"data-aos="zoom-in" data-aos-duration="1200">{{ $item->namaPerempuanLengkap }}</h5>
            <p class="mx-auto">Anak {{ $item->anakKeBerapaPerempuan }} Dari : Bapak <br> {{ $item->namaBapakPerempuan }} &
                Ibu {{ $item->namaIbuPerempuan }}</p>

            <h3 data-aos="zoom-in" data-aos-duration="1200">&</h3>

            <!-- pasangan laki-laki -->
            <img width="160px" height="212px" height="211px" src="{{ $item->fotoPria }}" alt="">
            <h5 class="mx-auto"data-aos="zoom-in" data-aos-duration="1200">{{ $item->namaPriaLengkap }}</h5>
            <p class="mx-auto">Anak {{ $item->anakKeBerapaPria }} Dari : Bapak {{ $item->namaBapakPria }} &
                Ibu {{ $item->namaIbuPria }}</p>
            {{-- End --}}

        </div>

        {{-- Yang harus diubah --}}
        <!-- acara -->
        <div class="acara mx-auto text-center">
            <p class="header mx-auto">Insya Allah Acara Akan Dilspanksanakan Pada :</p>
            <img width="100px" src="https://ulemulem.site/wp-content/uploads/2022/06/cincin.png" alt="">

            <!-- akad Nikah -->
            <h5>Akad Nikah</h5>
            <i class="bi bi-calendar2-week-fill h5 me-1"></i><span class="mx-auto">
                {{ \Carbon\Carbon::parse($item->tanggalAkadNikah)->isoFormat('dddd, D MMMM Y') }}</span><br>
            <i class="bi bi-clock-fill h5 me-1"></i><span class="mx-auto">
                {{ \Carbon\Carbon::parse($item->tanggalAkadNikah)->format('H.i') }} - Selesai</span>

            <!-- Resepsi -->
            <h5>Resepsi</h5>
            <i class="bi bi-calendar2-week-fill h5 me-1"></i><span class="mx-auto">
                {{ \Carbon\Carbon::parse($item->tanggalResepsi)->isoFormat('dddd, D MMMM Y') }}</span><br>
            <i class="bi bi-clock-fill h5 me-1"></i><span class="mx-auto">
                {{ \Carbon\Carbon::parse($item->tanggalResepsi)->format('H.i') }} - Selesai</span>

            <!-- lokasi -->
            <p class="lokasi mx-auto">Bertempat Di {{ $item->alamat }}</p>

            <!-- maps -->
            <div class="maps">
                {!! $item->map !!}
                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d433313.1027319719!2d112.607456!3d-7.331727000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7807c3d25c6f39%3A0x1d83a77a0f70ef14!2sPerum%20Sumput%20Asri%2C%20Sumput%2C%20Driyorejo%2C%20Gresik%20Regency%2C%20East%20Java%2C%20Indonesia!5e1!3m2!1sen!2sus!4v1676256314919!5m2!1sen!2sus"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
            <a href="{{ $item->linkMap }}" class="btn btn-dark mt-3 mb-3"><i class="bi bi-geo-alt-fill"></i> VIEW
                LOCATION</a>
            <br>
            <br>
        </div>
        {{-- End --}}

        <!-- story -->
        <div class="story mx-auto text-center">
            <h5 class="mx-auto"data-aos="zoom-in" data-aos-duration="1200">Love Story</h5>
        </div>

        <!-- galery -->
        <div class="galery mx-auto text-center">
            <h5 data-aos="zoom-in" data-aos-duration="1200">Wedding Gallery</h5>
        </div>

        <!-- protokol -->
        <div class="protokol">
            <div class="body text-center mx-auto">
                <h1>HEALTH PROTOCOLS</h1>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img src="https://ulemulem.site/wp-content/uploads/2022/06/01-14-1.png" alt="">
                        <h5>Cuci Tangan</h5>
                    </div>
                    <div class="col-4">
                        <img src="https://ulemulem.site/wp-content/uploads/2022/06/04-15.png" alt="">
                        <h5>Gunakan Masker</h5>
                    </div>
                    <div class="col-4">
                        <img src="https://ulemulem.site/wp-content/uploads/2022/06/06-3.png" alt="">
                        <h5>Jaga Jarak</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img src="https://ulemulem.site/wp-content/uploads/2022/06/05-10.png" alt="">
                        <h5>Tidak Berjabat Tangan</h5>
                    </div>
                    <div class="col-4">
                        <img src="https://ulemulem.site/wp-content/uploads/2022/06/03-9.png" alt="">
                        <h5>Hindari Kerumunan</h5>
                    </div>
                    <div class="col-4">
                        <img src="https://ulemulem.site/wp-content/uploads/2022/06/02-15-1.png" alt="">
                        <h5>Gunakan Handsanitizer</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- wedding gift -->
        <div class="gift text-center">
            <h5>Wedding Gift</h5>
            <p class="mx-auto">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. <br> Dan jika memberi adalah
                ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</p>
            <p class="mx-auto pt-2 pb-5">Anda Juga Bisa Mengirim Kado Fisik Ke Alamat Berikut</p>

        </div>

        <!-- penutup -->
        <div class="penutup text-center">
            <p class="mx-auto header" data-aos="zoom-in" data-aos-duration="1200">Tiada Yang Dapat Kami Ungkapkan Selain
                Rasa
                Terimakasih Dari Hati Yang Tulus Apabila Bapak/ Ibu/ Saudara/i Berkenan Hadir Untuk Memberikan Do’a Restu
                Kepada
                Kami</p>

            {{-- Yang harus diubah --}}
            <img width="246px" src="{{ $item->fotoAkhir }}" alt="">
            <h5>{{ $item->namaPanggilanPria }} & {{ $item->namaPanggilanPerempuan }}</h5>
            <p class="mx-auto" data-aos="zoom-in" data-aos-duration="1200">
                {{ \Carbon\Carbon::parse($item->tanggalResepsi)->isoFormat('D MMMM Y') }}</p>
            {{-- End --}}
        </div>

        {{-- Yang harus diubah --}}
        <!-- kartu ucapan -->
        <form action="{{ route('ucapanstore') }}" method="post">
            @csrf
            <div class="ucapan">
                <div class="header mx-auto pt-3 text-center">Berikan Ucapan Spesial Anda Disini</div>
                <div class="card-ucapan mx-auto">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama*</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama">
                        <label for="exampleFormControlInput1" class="form-label">Ucapan*</label>
                        {{-- <input type="text" class="form-control input-ucapan" id="exampleFormControlInput1"
                        placeholder="Ucapan"> --}}
                        <textarea class="form-control" name="ucapan" id="form-field-message" rows="4" placeholder="Ucapan"
                            required="required" aria-required="true" style="height: 300px; border:1px solid black"></textarea>

                    </div>
                    <p class="mx-auto mb-4">Apakah Anda Berkenan Hadir?</p>
                    <div class="check">
                        <ul>
                            <li>
                                <input class="form-check-input" value="Saya Akan Hadir" type="radio" name="hadir"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Saya Akan Hadir</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="hadir" id="flexRadioDefault2"
                                    value="Mohon Maaf Saya tidak Hadir">
                                <label class="form-check-label" for="flexRadioDefault2">Mohon Maaf Saya tidak
                                    Hadir</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="radio" name="hadir" id="flexRadioDefault2"
                                    value="Saya Masih Ragu-Ragu">
                                <label class="form-check-label" for="flexRadioDefault2">Saya Masih Ragu-Ragu</label>
                            </li>
                        </ul>
                    </div>
                    <p class="mx-auto mt-4">Jumlah Kehadiran</p>
                    <ul>
                        <li class="check2">
                            <input class="form-check-input" value="0" type="radio" name="jumlahOrang"
                                id="jumlahOrang1">
                            <label class="form-check-label" for="jumlahOrang1">0</label>
                        </li>
                        <li class="check2">
                            <input class="form-check-input" value="1" type="radio" name="jumlahOrang"
                                id="jumlahOrang1">
                            <label class="form-check-label" for="jumlahOrang1">1</label>
                        </li>
                        <li class="check2">
                            <input class="form-check-input" type="radio" value="2" name="jumlahOrang"
                                id="jumlahOrang1">
                            <label class="form-check-label" for="jumlahOrang1">2</label>
                        </li>
                        <li class="check2">
                            <input class="form-check-input" value="3" type="radio" name="jumlahOrang"
                                id="jumlahOrang1">
                            <label class="form-check-label" for="jumlahOrang1">3</label>
                        </li>
                        <li class="check2">
                            <input class="form-check-input" value=">3" type="radio" name="jumlahOrang"
                                id="jumlahOrang1">
                            <label class="form-check-label" for="jumlahOrang1">>3</label>
                        </li>
                    </ul>
                </div>
                <button type="submit">KIRIM</button>
            </div>
            </div>
        </form>
        {{-- end --}}
    @endsection

    @extends('menu&footer/menu&footer')

    @section('footer')
        <!-- play -->
        <div class="play">
            <button><i class="bi bi-play-fill h4"></i></button>
        </div>

        <!-- menu -->
        <div class="menu mx-auto text-center position-fixed">
            <div class="row justify-content-center">
                <div class="card-menu text-center">
                    <img width="46px"class="mt-2"
                        src="https://ulemulem.site/wp-content/uploads/2022/06/ICON-22-1.png" alt="">
                </div>
                <div class="card-menu text-center">
                    <img width="46px"class="mt-1"
                        src="https://ulemulem.site/wp-content/uploads/2022/06/AKAD-22-1.png" alt="">
                </div>
                <div class="card-menu text-center">
                    <img width="46px"class="mt-1"
                        src="https://ulemulem.site/wp-content/uploads/2022/06/ICON-22-3.png" alt="">
                </div>
                <div class="card-menu text-center">
                    <img width="46px"class="mt-1"
                        src="https://ulemulem.site/wp-content/uploads/2022/06/ICON-22-4.png" alt="">
                </div>
                <div class="card-menu text-center end">
                    <img width="46px"class="mt-1"
                        src="https://ulemulem.site/wp-content/uploads/2022/06/ICON-22-5.png" alt="">
                </div>
            </div>
        </div>
    @endforeach
@endsection
