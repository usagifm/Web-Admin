<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
        <span class="sr-only">Toggle Fullwidth</span>
        <i class="fa fa-angle-left"></i>
    </button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="dropdown">
                <img src="{{ asset('image/logo.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <span>Administrator</span>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class=""><a href="index.html"><i class="lnr lnr-home"></i>
                        <span>Beranda</span></a></li>


                {{-- ======================================== ETALASE SOAL ===============================================--}}
                <li class="">
                    <a href="#uiElements" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i>
                        <span>Etalase Soal</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="">Latihan Ujian</a></li>
                        <li class=""><a href="">Latihan Soal</a></li>
                        <li class=""><a href="">UTBK</a></li>
                        <li class=""><a href="">STAN</a></li>
                        <li class=""><a href="">CAT</a></li>
                    </ul>
                </li>



                {{-- ======================================== SAN HITUNG ===============================================--}}
                <li class="">
                    <a href="#subPages" class="has-arrow" aria-expanded="false"><i class="lnr lnr-chart-bars"></i>
                        <span>SAN Hitung</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="">Nilai Raport</a></li>
                        <li class=""><a href="">Nilai UTBK</a></li>
                        <li class=""><a href="">Master Data</a></li>
                        <li class=""><a href="">Pertanyaan</a></li>
                        <li class=""><a href="">Fasilitas</a></li>
                        <li class=""><a href="">Admin</a></li>
                        <li class=""><a href="">Data</a></li>
                    </ul>
                </li>



                {{-- ======================================== SAN PROJECT ===============================================--}}
                <li class="">
                    <a href="#forms" class="has-arrow" aria-expanded="false"><i class="lnr lnr-star"></i>
                        <span>SAN Project</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="">SD</a></li>
                        <li class=""><a href="">SMP</a></li>
                        <li class=""><a href="">SMA</a></li>
                    </ul>
                </li>



                {{-- ======================================== SAN CLASS ===============================================--}}
                <li class="
                @if (Route::currentRouteNamed('san-class-list') == true OR Route::currentRouteNamed('san-class-point') == true )
                    active
                @endif">
                    <a href="javascript:void(0)" class="has-arrow" aria-expanded="false"><i class="lnr lnr-users"></i>
                        <span>SAN Class</span></a>
                    <ul aria-expanded="true">
                        <li class="{{ Route::currentRouteNamed('san-class-list') ? 'active' : '' }}">
                            <a href="/sanclass/list">Daftar Kelas</a>
                        </li>
                        <li class="{{ Route::currentRouteNamed('san-class-point') ? 'active' : '' }}">
                            <a href="/sanclass/point">Daftar Point</a>
                        </li>
                    </ul>
                </li>



                {{-- ======================================== TOP UP ===============================================--}}
                <li class="">
                    <a href="#notifications" class="has-arrow" aria-expanded="false"><i class="lnr lnr-plus-circle"></i>
                        <span>Top-Up</span></a>
                    <ul aria-expanded="true">
                        <li class=""><a href="">Guru</a></li>
                        <li class=""><a href="">Siswa</a></li>
                    </ul>
                </li>



                {{-- ======================================== MEMBER ===============================================--}}
                <li class="
                @if (Route::currentRouteNamed('member-siswa') == true OR Route::currentRouteNamed('member-guru') == true 
                OR Route::currentRouteNamed('member-data-wilayah') == true )
                    active
                @endif">
                    <a href="#member" class="has-arrow" aria-expanded="false"><i class="lnr lnr-user"></i>
                        <span>Member</span></a>
                    <ul aria-expanded="true">
                        <li class="{{ Route::currentRouteNamed('member-guru') ? 'active' : '' }}"><a
                                href="/member/guru">Guru</a></li>
                        <li class="{{ Route::currentRouteNamed('member-siswa') ? 'active' : '' }}"><a
                                href="/member/siswa">Siswa</a></li>
                        <li class="{{ Route::currentRouteNamed('member-data-wilayah') ? 'active' : '' }}"><a
                                href="/member/datawilayah">Data Perwilayah</a></li>
                    </ul>
                </li>



                {{-- ======================================== BROADCAST ===============================================--}}
                <li class="">
                    <a href=""><i class="lnr lnr-bubble"></i>
                        <span>Broadcast</span></a>
                </li>



                {{-- ======================================== VERIFIKASI ===============================================--}}
                <li class="">
                    <a href=""><i class="lnr lnr-checkmark-circle"></i>
                        <span>Verifikasi Guru</span></a>
                </li>

            </ul>
        </nav>
    </div>
</div>