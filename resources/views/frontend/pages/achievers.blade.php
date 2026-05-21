@extends('frontend.layouts.app')
@section('content')
    <section class="page-hero">
        <div class="page-hero-content">
            <h1>Our Star Achievers</h1>
            <p>Celebrating the brilliance of students who made us proud</p>
            <div class="breadcrumb">
                <a href="{{ route('index') }}">Home</a><span class="breadcrumb-sep">›</span><span>Achievers</span>
            </div>
        </div>
    </section>

    <div class="section-header pt-20">
        <div class="section-tag">Our Pride</div>
        <h2 class="section-title">Excellence <span class="accent">Personified</span></h2>
    </div>

    <div
        style="background:var(--white);padding:1.5rem 2rem;box-shadow:0 2px 20px rgba(0,0,0,0.05);position:sticky;top:80px;z-index:100;">
        <div style="max-width:1400px;margin:0 auto;display:flex;gap:0.5rem;flex-wrap:wrap;justify-content:center;">
            <button class="filter-btn active" data-filter="all" onclick="filterAchievers('all',this)">All Years</button>
            @foreach ($years as $year)
                <button class="filter-btn" data-filter="{{ $year }}"
                    onclick="filterAchievers('{{ $year }}',this)">{{ $year }}</button>
            @endforeach

        </div>
    </div>

    <div class="section pt-0 achivers-section pt-4">
        <div class="container">
            <div class="achievers-grid" id="achievers-grid">
                {{-- 2022 --}}
                @foreach ($achievers as $achiever)
                    <div class="card achiever-card" data-year="{{ $achiever->year }}">
                        <div class="image-area">
                            <img src="{{ asset('uploads/achievers/' . $achiever->image) }}" alt="{{ $achiever->name }}">
                            <div class="mark-wing green">MARK : {{ $achiever->mark }}</div>
                        </div>
                        <div class="details">
                            <h3>{{ $achiever->name }}</h3>
                            <h5 style="font-size: 14px">{{ $achiever->category }}</h5>
                            <p>{{ $achiever->place }}</p>
                            <div class="accent-border"></div>
                        </div>
                        @if(!empty($achiever->rank))
                            <div class="rank-badge">
                                <i class="fa fa-star"></i>State Rank :
                                <div class="rank-text">
                                    <span style="font-weight: 800; color: #000">{{ $achiever->rank }}</span>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach

                {{-- <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/sumathi.png" alt="Sumathi S">
                        <div class="mark-wing purple">MARK : 97</div>
                    </div>
                    <div class="details">
                        <h3>Sumathi S</h3>
                        <p>Tirupur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/dhivya.png" alt="Dhivya E  ">
                        <div class="mark-wing dark-purple">MARK : 96</div>
                    </div>
                    <div class="details">
                        <h3>Dhivya E </h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/vijayalakshmi.png" alt="Vijayalakshmi  ">
                        <div class="mark-wing blue">MARK : 94</div>
                    </div>
                    <div class="details">
                        <h3>Vijayalakshmi</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/kanagumani.jpg" alt="Kanagumani L  ">
                        <div class="mark-wing green">MARK : 94</div>
                    </div>
                    <div class="details">
                        <h3>Kanagumani L</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/malathi.png" alt="Malathi K ">
                        <div class="mark-wing blue">MARK : 94</div>
                    </div>
                    <div class="details">
                        <h3>Malathi K </h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/elavarasan.png" alt="Elavarasan R ">
                        <div class="mark-wing green">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Elavarasan R </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/sumathi.png" alt="Sumathi S">
                        <div class="mark-wing purple">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Deepa P </h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/vinothkumar.png" alt="Vinothkumar M ">
                        <div class="mark-wing green">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Vinothkumar M </h3>
                        <p>The Nilgiris </p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/sakthivel.png" alt="Sakthivel S">
                        <div class="mark-wing purple">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Sakthivel S </h3>
                        <p>Villupuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/thenmozhi.png" alt="Thenmozhi B ">
                        <div class="mark-wing green">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Thenmozhi B </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/priya.png" alt="Priya A">
                        <div class="mark-wing purple">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Priya A </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/ajithkumar.png" alt="Ajithkumar C">
                        <div class="mark-wing green">MARK : 93</div>
                    </div>
                    <div class="details">
                        <h3>Ajithkumar C </h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/selvam.png" alt="Selvam R ">
                        <div class="mark-wing purple">MARK : 92</div>
                    </div>
                    <div class="details">
                        <h3>Selvam R </h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/dilipan.png" alt="Dilipan S">
                        <div class="mark-wing green">MARK : 92</div>
                    </div>
                    <div class="details">
                        <h3>Dilipan S </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/mohanapirya.jpg" alt="Mohanapriya B    ">
                        <div class="mark-wing purple">MARK : 92</div>
                    </div>
                    <div class="details">
                        <h3>Mohanapriya B </h3>
                        <p>Namakal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/mainvel.png" alt="Manivel A">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Manivel A </h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/pushpa.png" alt="Pushpa E ">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Pushpa E </h3>
                        <p>Chengalpattu</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/saravanan.png" alt="Saravanan R    ">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Saravanan R </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/paritha.png" alt="Paritha B ">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Paritha B </h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/thangamani.jpg" alt="Thangamani S">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Thangamani S </h3>
                        <p>Namakal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/shyni.jpg" alt="Shyni J    ">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Shyni J </h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/manikandan.png" alt="Manikandan R ">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Manikandan R </h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/gomathi.png" alt="Gomathi S">
                        <div class="mark-wing purple">MARK : 90</div>
                    </div>
                    <div class="details">
                        <h3>Gomathi S </h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/yasodha.png" alt="Yasodha R ">
                        <div class="mark-wing purple">MARK : 90</div>
                    </div>
                    <div class="details">
                        <h3>Yasodha R </h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/mathankumar.png" alt="Mathankumar G ">
                        <div class="mark-wing purple">MARK : 90</div>
                    </div>
                    <div class="details">
                        <h3>Mathankumar G </h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/dhanasekaran.jpg" alt="Dhanasekaran M">
                        <div class="mark-wing purple">MARK : 89</div>
                    </div>
                    <div class="details">
                        <h3>Dhanasekaran</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/muthulakshmi.jpg" alt="Muthulakshmi S ">
                        <div class="mark-wing purple">MARK : 89</div>
                    </div>
                    <div class="details">
                        <h3>Muthulakshmi S </h3>
                        <p>Namakal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/mooventhan.png" alt="Mooventhan S">
                        <div class="mark-wing purple">MARK : 89</div>
                    </div>
                    <div class="details">
                        <h3>Mooventhan S </h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/arivumathi.png" alt="Arivumathi M ">
                        <div class="mark-wing purple">MARK : 89</div>
                    </div>
                    <div class="details">
                        <h3>Arivumathi M </h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/parthasarathy.png" alt="Parthasarathy S">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Parthasarathy</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/gopi.png" alt="Gopi V ">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Gopi V </h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/govindhammal.png" alt="Govindhammal K">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Govindhammal</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/shalini.png" alt="Shalini SP ">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Shalini SP </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/dhanasekaran.jpg" alt="Dhanasekaran E  ">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Dhanasekaran E </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/thenmozhi.png" alt="Thenmozhi N ">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Thenmozhi N </h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/jeeva.png" alt="Jeeva B ">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Jeeva B </h3>
                        <p>Thiruvarur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/vijaya.png" alt="Vijaya M ">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Vijaya M </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/gunaselvam.png" alt="Gunaselvam K ">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Gunaselvam K </h3>
                        <p>Cuddalore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/krishnaveni.png" alt="Krishnaveni M">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Krishnaveni M</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/suresh.png" alt="Suresh R">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Suresh R</h3>
                        <p>Thiruvannamalai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/esaiselvi.png" alt="Esaiselvi S ">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Esaiselvi S </h3>
                        <p>Tenkasi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/senthamarai.png" alt="Senthamarai S ">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Senthamarai S </h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/poongkuzhali.png" alt="Poongkuzhali R ">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Poongkuzhali R </h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/uma.png" alt="Uma A ">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Uma A </h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/amutha.png" alt="Amutha P ">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Amutha P </h3>
                        <p>Ramnadu</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/natarajan.jpg" alt="Natarajan B ">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Natarajan B </h3>
                        <p>Cuddalore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/bhuvaneswari.png" alt="Bhuvaneswari S ">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Bhuvaneswari S </h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/maniraj.png" alt="Maniraj R ">
                        <div class="mark-wing purple">MARK : 84</div>
                    </div>
                    <div class="details">
                        <h3>Maniraj R </h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/kuppusamy.png" alt="Kuppusamy A ">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>Kuppusamy A </h3>
                        <p>Kuppusamy</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/gopal.jpg" alt="Gopal C ">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>Gopal C </h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/maheswari.png" alt="Maheswari C ">
                        <div class="mark-wing purple">MARK : 81</div>
                    </div>
                    <div class="details">
                        <h3>Maheswari C </h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <div class="card achiever-card" data-year="2022">
                    <div class="image-area">
                        <img src="assets/images/2022/rajalakshmi.jpg" alt="Rajalakshmi K ">
                        <div class="mark-wing purple">MARK : 80</div>
                    </div>
                    <div class="details">
                        <h3>Rajalakshmi K </h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

                {{-- 2019 --}}
                <!-- 1 -->
                {{-- <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Chennammal C">
                        <div class="mark-wing purple">MARK : 94</div>
                    </div>
                    <div class="details">
                        <h3>Chennammal C</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sudham N">
                        <div class="mark-wing purple">MARK : 91</div>
                    </div>
                    <div class="details">
                        <h3>Sudham N</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

                <!-- 3 -->
                {{-- <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Govindaraju R">
                        <div class="mark-wing purple">MARK : 89</div>
                    </div>
                    <div class="details">
                        <h3>Govindaraju R</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Jayaraman C">
                        <div class="mark-wing purple">MARK : 89</div>
                    </div>
                    <div class="details">
                        <h3>Jayaraman C</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sanjai Gandhi P">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Sanjai Gandhi P</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Kathirvelu U">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Kathirvelu U</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Arthanareeswaran N">
                        <div class="mark-wing purple">MARK : 88</div>
                    </div>
                    <div class="details">
                        <h3>Arthanareeswaran N</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sangeetha P">
                        <div class="mark-wing purple">MARK : 87</div>
                    </div>
                    <div class="details">
                        <h3>Sangeetha P</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 9 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Ramesh A">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Ramesh A</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 10 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sakthivel K">
                        <div class="mark-wing purple">MARK : 86</div>
                    </div>
                    <div class="details">
                        <h3>Sakthivel K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 11 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sambavis S">
                        <div class="mark-wing purple">MARK : 84</div>
                    </div>
                    <div class="details">
                        <h3>Sambavis S</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 12 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Vasanth K">
                        <div class="mark-wing purple">MARK : 84</div>
                    </div>
                    <div class="details">
                        <h3>Vasanth K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 13 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Karthik M">
                        <div class="mark-wing purple">MARK : 83</div>
                    </div>
                    <div class="details">
                        <h3>Karthik M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 14 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Poovarasi M">
                        <div class="mark-wing purple">MARK : 83</div>
                    </div>
                    <div class="details">
                        <h3>Poovarasi M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 15 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Revathi K">
                        <div class="mark-wing purple">MARK : 83</div>
                    </div>
                    <div class="details">
                        <h3>Revathi K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 16 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Vivekanandan G">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>Vivekanandan G</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 17 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Thangarasu M">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>Thangarasu M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 18 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Murugan T">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>Murugan T</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 19 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Satheeshkumar M">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>Satheeshkumar M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 20 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="C. Subashini">
                        <div class="mark-wing purple">MARK : 82</div>
                    </div>
                    <div class="details">
                        <h3>C. Subashini</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 21 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Jayanthi A">
                        <div class="mark-wing purple">MARK : 81</div>
                    </div>
                    <div class="details">
                        <h3>Jayanthi A</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>
                <!-- 22 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Mayil M">
                        <div class="mark-wing purple">MARK : 80</div>
                    </div>
                    <div class="details">
                        <h3>Mayil M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 23 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Muniraju M">
                        <div class="mark-wing purple">MARK : 80</div>
                    </div>
                    <div class="details">
                        <h3>Muniraju M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 24 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Aanitha">
                        <div class="mark-wing purple">MARK : 79</div>
                    </div>
                    <div class="details">
                        <h3>Aanitha</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 25 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Anandakumar D">
                        <div class="mark-wing purple">MARK : 79</div>
                    </div>
                    <div class="details">
                        <h3>Anandakumar D</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

                <!-- 26 -->
                {{-- <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Manivel M">
                        <div class="mark-wing purple">MARK : 79</div>
                    </div>
                    <div class="details">
                        <h3>Manivel M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 27 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sankili R">
                        <div class="mark-wing purple">MARK : 78</div>
                    </div>
                    <div class="details">
                        <h3>Sankili R</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

                <!-- 28 -->
                {{-- <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Mahendran T">
                        <div class="mark-wing purple">MARK : 78</div>
                    </div>
                    <div class="details">
                        <h3>Mahendran T</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 29 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Suganthi S">
                        <div class="mark-wing purple">MARK : 78</div>
                    </div>
                    <div class="details">
                        <h3>Suganthi S</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 30 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="K Tamil Arasan">
                        <div class="mark-wing purple">MARK : 77</div>
                    </div>
                    <div class="details">
                        <h3>K Tamil Arasan</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 31 -->
                <div class="card achiever-card" data-year="2019">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Maheswaran M">
                        <div class="mark-wing purple">MARK : 76</div>
                    </div>
                    <div class="details">
                        <h3>Maheswaran M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

                {{-- 2017 --}}
                <!-- 1 -->
                {{-- <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Kalainidhi G">
                        <div class="mark-wing purple">MARK : 104</div>
                    </div>
                    <div class="details">
                        <h3>Kalainidhi G</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 2 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Ramakrishnan K">
                        <div class="mark-wing purple">MARK : 103</div>
                    </div>
                    <div class="details">
                        <h3>Ramakrishnan K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 3 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sagadevan T">
                        <div class="mark-wing purple">MARK : 103</div>
                    </div>
                    <div class="details">
                        <h3>Sagadevan T</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 4 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Madhiyan C">
                        <div class="mark-wing purple">MARK : 97</div>
                    </div>
                    <div class="details">
                        <h3>Madhiyan C</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 5 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Murugan K">
                        <div class="mark-wing purple">MARK : 96</div>
                    </div>
                    <div class="details">
                        <h3>Murugan K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 6 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Santhi D">
                        <div class="mark-wing purple">MARK : 96</div>
                    </div>
                    <div class="details">
                        <h3>Santhi D</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 7 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Jothi J F">
                        <div class="mark-wing purple">MARK : 95</div>
                    </div>
                    <div class="details">
                        <h3>Jothi J F</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 8 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Parimala M">
                        <div class="mark-wing purple">MARK : 95</div>
                    </div>
                    <div class="details">
                        <h3>Parimala M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 9 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Sangeetha S">
                        <div class="mark-wing purple">MARK : 92</div>
                    </div>
                    <div class="details">
                        <h3>Sangeetha S</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <!-- 10 -->
                <div class="card achiever-card" data-year="2017">
                    <div class="image-area">
                        <img src="assets/images/2019/rajalakshmi.jpg" alt="Selvi K">
                        <div class="mark-wing purple">MARK : 92</div>
                    </div>
                    <div class="details">
                        <h3>Selvi K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

                {{-- 2025 --}}
                <!-- START: Achiever Cards 2025 -->

                <!-- 1 -->
                {{-- <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/nithya-kalyani.webp" alt="Nithya Kalyani L">
                        <div class="mark-wing purple">STATE 1st RANK</div>
                    </div>
                    <div class="details">
                        <h3>Nithya Kalyani L</h3>
                        <p>Tenkasi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/ramesh.webp" alt="Ramesh C">
                        <div class="mark-wing purple">STATE 2nd RANK</div>
                    </div>
                    <div class="details">
                        <h3>Ramesh C</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sreejakumari.webp" alt="Sreejakumari S">
                        <div class="mark-wing purple">STATE 2nd RANK</div>
                    </div>
                    <div class="details">
                        <h3>Sreejakumari S</h3>
                        <p>Chengalpattu</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/ramya.webp" alt="Ramya M">
                        <div class="mark-wing purple">STATE 3rd RANK</div>
                    </div>
                    <div class="details">
                        <h3>Ramya M</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/vijayaraj.webp" alt="Vijayaraj D">
                        <div class="mark-wing purple">STATE 3rd RANK</div>
                    </div>
                    <div class="details">
                        <h3>Vijayaraj D</h3>
                        <p>Tiruvannamalai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/shanumagapriya.webp" alt="Shanmugapriya T">
                        <div class="mark-wing purple">STATE 4th RANK</div>
                    </div>
                    <div class="details">
                        <h3>Shanmugapriya T</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/abinaya.webp" alt="Abinaya V">
                        <div class="mark-wing purple">STATE 4th RANK</div>
                    </div>
                    <div class="details">
                        <h3>Abinaya V</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/gayathri.webp" alt="Gayathri S">
                        <div class="mark-wing purple">MARK 96</div>
                    </div>
                    <div class="details">
                        <h3>Gayathri S</h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/seshathri.webp" alt="Seshathri M">
                        <div class="mark-wing purple">MARK 95</div>
                    </div>
                    <div class="details">
                        <h3>Seshathri M</h3>
                        <p>Cuddalore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/senthilkumar.webp" alt="Senthilkumar M">
                        <div class="mark-wing purple">MARK 94</div>
                    </div>
                    <div class="details">
                        <h3>Senthilkumar M</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/gopinath.webp" alt="Gopinath R">
                        <div class="mark-wing purple">MARK 94</div>
                    </div>
                    <div class="details">
                        <h3>Gopinath R</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/andavan.webp" alt="Andavan K">
                        <div class="mark-wing purple">MARK 94</div>
                    </div>
                    <div class="details">
                        <h3>Andavan K</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sumathi.webp" alt="Sumathi K">
                        <div class="mark-wing purple">MARK 93</div>
                    </div>
                    <div class="details">
                        <h3>Sumathi K</h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/aruna.webp" alt="Aruna K">
                        <div class="mark-wing purple">MARK 93</div>
                    </div>
                    <div class="details">
                        <h3>Aruna K</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/gomathi.webp" alt="Gomathi K">
                        <div class="mark-wing purple">MARK 93</div>
                    </div>
                    <div class="details">
                        <h3>Gomathi K</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/silambarasi.webp" alt="Silambarasi G">
                        <div class="mark-wing purple">MARK 93</div>
                    </div>
                    <div class="details">
                        <h3>Silambarasi G</h3>
                        <p>Tiruppur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sindhukumar.webp" alt="Sindhukumar P">
                        <div class="mark-wing purple">MARK 93</div>
                    </div>
                    <div class="details">
                        <h3>Sindhukumar P</h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/nithya.webp" alt="Nithya R">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Nithya R</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/kalairaj.webp" alt="Kalairaj S">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Kalairaj S</h3>
                        <p>Perambalur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/manikandan.webp" alt="Manikandan J">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Manikandan J</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/lavanya.webp" alt="Lavanya P">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Lavanya P</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sumathi.webp" alt="Sumathi V">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Sumathi V</h3>
                        <p>Trichy</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/arivazhagan.webp" alt="Arivazhagan R">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Arivazhagan R</h3>
                        <p>Tiruvannamalai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/swathika.webp" alt="Savitha K">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Savitha K</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/kanaaga.webp" alt="Kanaga K">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Kanaga K</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/suresh.webp" alt="Suresh K">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Suresh K</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/parimala.webp" alt="Parimala S">
                        <div class="mark-wing purple">MARK 92</div>
                    </div>
                    <div class="details">
                        <h3>Parimala S</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/prakash.webp" alt="Prakash M">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Prakash M</h3>
                        <p></p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sangeetha.webp" alt="Sangeetha N">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Sangeetha N</h3>
                        <p>Dindigul</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/devipriya.webp" alt="Devipriya N">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Devipriya N</h3>
                        <p>Thanjavur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sakitha.webp" alt="Sakitha P">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Sakitha P</h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/jeyalakshmi.webp" alt="Jayalakshmi R">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Jayalakshmi R</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/rajeshwari.webp" alt="Rajeshwari K">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Rajeshwari K</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sindhu.webp" alt="Sindhu P">
                        <div class="mark-wing purple">MARK 91</div>
                    </div>
                    <div class="details">
                        <h3>Sindhu P</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/mala.webp" alt="Mala C">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Mala C</h3>
                        <p>Madurai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/govindaraju.webp" alt="Govindaraju N">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Govindaraju N</h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/chandra.webp" alt="Chandra Maheswari R">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Chandra Maheswari R</h3>
                        <p>Tenkasi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/kalaivani.webp" alt="Kalaivani G">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Kalaivani G</h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/shajutha.webp" alt="Shajutha A">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Shajutha A</h3>
                        <p>Thiruvallur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/suresh.webp" alt="Suresh P">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Suresh P</h3>
                        <p>Madurai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/rajendran.webp" alt="Rajendiran R">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Rajendiran R</h3>
                        <p>Ranipet</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/vidya.webp" alt="Vidya M">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Vidya M</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/brindha.webp" alt="Brindha P">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Brindha P</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/pandiselvi.webp" alt="Pandiselvi T">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Pandiselvi T</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/aswini.webp" alt="Aswini S">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Aswini S</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/balasubramaniyan.webp" alt="Balasubramaniyam T">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Balasubramaniyam T</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/nithya.webp" alt="Nithya A">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Nithya A</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/shabeena.webp" alt="Shabeena Banu S">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Shabeena Banu S</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sasikala.webp" alt="Sasikala S">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Sasikala S</h3>
                        <p>Sivaganga</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/silmbarasan.webp" alt="Silambarasan T">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Silambarasan T</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/muthurani.webp" alt="Muthurani C">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Muthurani C</h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/chithradevi.webp" alt="Chitradevi T">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Chitradevi T</h3>
                        <p>Pudukkottai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/nilaavu.webp" alt="Nilavu M">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Nilavu M</h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/karthikailaksh.webp" alt="Karthikailakshmi A">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Karthikailakshmi A</h3>
                        <p>Madurai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/mahithal.webp" alt="Mahithal I">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Mahithal I</h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sathya.webp" alt="Sathiya T">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Sathiya T</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/naheedha.webp" alt="Naheedha Banu A">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Naheedha Banu A</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/selvadurai.webp" alt="Selvadurai S">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Selvadurai S</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/abitha.webp" alt="Abitha P">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Abitha P</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/arul-mozhi.webp" alt="Arul Mozhi M">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Arul Mozhi M</h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/saranya.webp" alt="Saranya G">
                        <div class="mark-wing purple">MARK 88</div>
                    </div>
                    <div class="details">
                        <h3>Saranya G</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/fatima-marry.webp" alt="Fatima Mary S">
                        <div class="mark-wing purple">MARK 87</div>
                    </div>
                    <div class="details">
                        <h3>Fatima Mary S</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/yuvarani.png" alt="Yuvarani P">
                        <div class="mark-wing purple">MARK 87</div>
                    </div>
                    <div class="details">
                        <h3>Yuvarani P</h3>
                        <p></p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/loganayagi.webp" alt="Loganayaki G">
                        <div class="mark-wing purple">MARK 87</div>
                    </div>
                    <div class="details">
                        <h3>Loganayaki G</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sathishkumar.webp" alt="Sathiskumar C">
                        <div class="mark-wing purple">MARK 87</div>
                    </div>
                    <div class="details">
                        <h3>Sathiskumar C</h3>
                        <p>Dindigul</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/priyadharshini.jpeg" alt="Priyadharshini M">
                        <div class="mark-wing purple">MARK 87</div>
                    </div>
                    <div class="details">
                        <h3>Priyadharshini M</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/suresh.webp" alt="Suresh M">
                        <div class="mark-wing purple">MARK 86</div>
                    </div>
                    <div class="details">
                        <h3>Suresh M</h3>
                        <p>Cuddalore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/ayisha.webp" alt="Ayisha M">
                        <div class="mark-wing purple">MARK 86</div>
                    </div>
                    <div class="details">
                        <h3>Ayisha M</h3>
                        <p>Tiruvannamalai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/sarathamani.webp" alt="Sarathamani K">
                        <div class="mark-wing purple">MARK 84</div>
                    </div>
                    <div class="details">
                        <h3>Sarathamani K</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/murthy.webp" alt="Murthy G">
                        <div class="mark-wing purple">MARK 81</div>
                    </div>
                    <div class="details">
                        <h3>Murthy G</h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/ameena.webp" alt="Ameena M">
                        <div class="mark-wing purple">MARK 77</div>
                    </div>
                    <div class="details">
                        <h3>Ameena M</h3>
                        <p>The Nilgiris</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2025">
                    <div class="image-area">
                        <img src="assets/images/2025/benazir.webp" alt="Benazir Begum A">
                        <div class="mark-wing purple">MARK 75</div>
                    </div>
                    <div class="details">
                        <h3>Benazir Begum A</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}
                <!-- Continue same pattern for remaining names -->

                {{-- 2024 --}}
                {{-- <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/devipriya.webp" alt="Devipriya N">
                        <div class="mark-wing purple">STATE FIRST RANK</div>
                    </div>
                    <div class="details">
                        <h3>Devipriya N</h3>
                        <p>Thanjavur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kousalya.webp" alt="Kousalya J">
                        <div class="mark-wing purple">STATE SECOND RANK</div>
                    </div>
                    <div class="details">
                        <h3>Kousalya J</h3>
                        <p>Kancheepuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/veerabalu.webp" alt="Veerabalu D">
                        <div class="mark-wing purple">STATE 4TH RANK</div>
                    </div>
                    <div class="details">
                        <h3>Veerabalu D</h3>
                        <p>Tiruvannamalai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/jayaleka.webp  " alt="Jaya Lekha C S">
                        <div class="mark-wing purple">MARK 106</div>
                    </div>
                    <div class="details">
                        <h3>Jaya Lekha C S</h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/anitha.webp" alt="Anitha I">
                        <div class="mark-wing purple">MARK 105.5</div>
                    </div>
                    <div class="details">
                        <h3>Anitha I</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kalaivani.webp" alt="Kalaivani G">
                        <div class="mark-wing purple">MARK 103.5</div>
                    </div>
                    <div class="details">
                        <h3>Kalaivani G</h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/poonkodi.webp" alt="Poonkodi G">
                        <div class="mark-wing purple">MARK 103.5</div>
                    </div>
                    <div class="details">
                        <h3>Poonkodi G</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kavitha.webp" alt="Kavitha D">
                        <div class="mark-wing purple">MARK 103</div>
                    </div>
                    <div class="details">
                        <h3>Kavitha D</h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/manjumatha.webp" alt="Manjumatha G">
                        <div class="mark-wing purple">MARK 103</div>
                    </div>
                    <div class="details">
                        <h3>Manjumatha G</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sreejakumari.webp" alt="Sreejakumari S">
                        <div class="mark-wing purple">MARK 103</div>
                    </div>
                    <div class="details">
                        <h3>Sreejakumari S</h3>
                        <p>Chengalpatu</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/mahalakshmi.webp" alt="Mahalakshmi S">
                        <div class="mark-wing purple">MARK 102.5</div>
                    </div>
                    <div class="details">
                        <h3>Mahalakshmi S</h3>
                        <p>Madurai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sreegowri.webp" alt="Sreegowri V">
                        <div class="mark-wing purple">MARK 101.5</div>
                    </div>
                    <div class="details">
                        <h3>Sreegowri V</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/manikandan.webp" alt="Manikandan A">
                        <div class="mark-wing purple">MARK 100.5</div>
                    </div>
                    <div class="details">
                        <h3>Manikandan A</h3>
                        <p>Trichy</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/parvatha.webp" alt="Parvatha Dhevi J">
                        <div class="mark-wing purple">MARK 98</div>
                    </div>
                    <div class="details">
                        <h3>Parvatha Dhevi J</h3>
                        <p>Virudhunagar</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kavitha.webp" alt="Kavitha K">
                        <div class="mark-wing purple">MARK 98</div>
                    </div>
                    <div class="details">
                        <h3>Kavitha K</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/muthukumari.webp" alt="Muthukumari G E">
                        <div class="mark-wing purple">MARK 97.5</div>
                    </div>
                    <div class="details">
                        <h3>Muthukumari G E</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/karthikailakshmi.webp" alt="Karthikailakshmi">
                        <div class="mark-wing purple">MARK 97.5</div>
                    </div>
                    <div class="details">
                        <h3>Karthikailakshmi</h3>
                        <p>Madurai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/dhanya.webp" alt="Dhanya S R">
                        <div class="mark-wing purple">MARK 97.5</div>
                    </div>
                    <div class="details">
                        <h3>Dhanya S R</h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/anuradha.webp" alt="Anuradha S">
                        <div class="mark-wing purple">MARK 96.5</div>
                    </div>
                    <div class="details">
                        <h3>Anuradha S</h3>
                        <p>Krishnagiri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/tamilselvi.webp" alt="Tamilselvi P">
                        <div class="mark-wing purple">MARK 96.5</div>
                    </div>
                    <div class="details">
                        <h3>Tamilselvi P</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sujitha.webp" alt="Sujitha C">
                        <div class="mark-wing purple">MARK 95.5</div>
                    </div>
                    <div class="details">
                        <h3>Sujitha C</h3>
                        <p>Kanyakumari</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/senthil.webp" alt="Senthil M">
                        <div class="mark-wing purple">MARK 95.5</div>
                    </div>
                    <div class="details">
                        <h3>Senthil M</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/bhuvaneswari.webp" alt="Bhuvaneswari M">
                        <div class="mark-wing purple">MARK 95</div>
                    </div>
                    <div class="details">
                        <h3>Bhuvaneswari M</h3>
                        <p>Tirunelveli</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kesaven.webp" alt="Kesaven A">
                        <div class="mark-wing purple">MARK 95</div>
                    </div>
                    <div class="details">
                        <h3>Kesaven A</h3>
                        <p>Trichy</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sornakumari.webp" alt="Sornakumari H">
                        <div class="mark-wing purple">MARK 94.5</div>
                    </div>
                    <div class="details">
                        <h3>Sornakumari H</h3>
                        <p>Kanchipuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/priyavarshini.webp" alt="Priya Varshni S K">
                        <div class="mark-wing purple">MARK 94.5</div>
                    </div>
                    <div class="details">
                        <h3>Priya Varshni S K</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/devi.webp" alt="Devi P">
                        <div class="mark-wing purple">MARK 93.5</div>
                    </div>
                    <div class="details">
                        <h3>Devi P</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/prakasam.webp" alt="Prakasam S">
                        <div class="mark-wing purple">MARK 91.5</div>
                    </div>
                    <div class="details">
                        <h3>Prakasam S</h3>
                        <p>Ariyalur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/elavarasi.webp" alt="Elavarasi N">
                        <div class="mark-wing purple">MARK 91.5</div>
                    </div>
                    <div class="details">
                        <h3>Elavarasi N</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kalaiselvi.webp" alt="Kalai Selvi S">
                        <div class="mark-wing purple">MARK 91.5</div>
                    </div>
                    <div class="details">
                        <h3>Kalai Selvi S</h3>
                        <p>The Nilgiris</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/mohanapriya.webp" alt="Mohanapriya J">
                        <div class="mark-wing purple">MARK 90</div>
                    </div>
                    <div class="details">
                        <h3>Mohanapriya J</h3>
                        <p>Thiruvalluvar</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/parimala.webp" alt="Parimala M">
                        <div class="mark-wing purple">MARK 89</div>
                    </div>
                    <div class="details">
                        <h3>Parimala M</h3>
                        <p>Erode</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/narendiran.webp" alt="Narendiran S">
                        <div class="mark-wing purple">MARK 88.5</div>
                    </div>
                    <div class="details">
                        <h3>Narendiran S</h3>
                        <p>Kancheepuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/mahalakshmi.webp" alt="Mahalakshmi S">
                        <div class="mark-wing purple">MARK 88.5</div>
                    </div>
                    <div class="details">
                        <h3>Mahalakshmi S</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/vijayakumar.webp" alt="Vijayakumar S">
                        <div class="mark-wing purple">MARK 88.5</div>
                    </div>
                    <div class="details">
                        <h3>Vijayakumar S</h3>
                        <p>Pudukkottai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/birundha.webp" alt="Birundha J">
                        <div class="mark-wing purple">MARK 88.5</div>
                    </div>
                    <div class="details">
                        <h3>Birundha J</h3>
                        <p>Thiruvarur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/manjula.webp" alt="Manjula G">
                        <div class="mark-wing purple">MARK 87</div>
                    </div>
                    <div class="details">
                        <h3>Manjula G</h3>
                        <p>Namakkal</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/indra.webp" alt="Indra R">
                        <div class="mark-wing purple">MARK 86.5</div>
                    </div>
                    <div class="details">
                        <h3>Indra R</h3>
                        <p>Tiruvarur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/chithra.webp" alt="Chithra K">
                        <div class="mark-wing purple">MARK 86.5</div>
                    </div>
                    <div class="details">
                        <h3>Chithra K</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/angammal.webp" alt="Angammal P">
                        <div class="mark-wing purple">MARK 86.5</div>
                    </div>
                    <div class="details">
                        <h3>Angammal P</h3>
                        <p>Karur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kousalya.webp" alt="Kousalya S">
                        <div class="mark-wing purple">MARK 86.5</div>
                    </div>
                    <div class="details">
                        <h3>Kousalya S</h3>
                        <p>Tiruppur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/subashini.webp" alt="Subashini V">
                        <div class="mark-wing purple">MARK 86.5</div>
                    </div>
                    <div class="details">
                        <h3>Subashini V</h3>
                        <p>Thoothukudi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kousalya.webp" alt="Kousalya P">
                        <div class="mark-wing purple">MARK 85.5</div>
                    </div>
                    <div class="details">
                        <h3>Kousalya P</h3>
                        <p>Nagapattinam</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/jothimani.webp" alt="Jothimani M">
                        <div class="mark-wing purple">MARK 85.5</div>
                    </div>
                    <div class="details">
                        <h3>Jothimani M</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/siriapushpam.webp" alt="Siria Pushpam A">
                        <div class="mark-wing purple">MARK 85</div>
                    </div>
                    <div class="details">
                        <h3>Siria Pushpam A</h3>
                        <p>Kallakurichi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sumathi.webp" alt="Sumathi S R">
                        <div class="mark-wing purple">MARK 84.5</div>
                    </div>
                    <div class="details">
                        <h3>Sumathi S R</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/muthukani.webp" alt="Muthukani M">
                        <div class="mark-wing purple">MARK 84.5</div>
                    </div>
                    <div class="details">
                        <h3>Muthukani M</h3>
                        <p>Theni</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/narmatha.webp" alt="Narmatha G">
                        <div class="mark-wing purple">MARK 84</div>
                    </div>
                    <div class="details">
                        <h3>Narmatha G</h3>
                        <p>Cuddalore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/pavithra.webp" alt="Pavithra P">
                        <div class="mark-wing purple">MARK 83.5</div>
                    </div>
                    <div class="details">
                        <h3>Pavithra P</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/jayanthi.webp" alt="Jayanthi S">
                        <div class="mark-wing purple">MARK 83</div>
                    </div>
                    <div class="details">
                        <h3>Jayanthi S</h3>
                        <p>Coimbatore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sakthivel.webp" alt="Sakthivel E">
                        <div class="mark-wing purple">MARK 81.5</div>
                    </div>
                    <div class="details">
                        <h3>Sakthivel E</h3>
                        <p>Dharmapuri</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sangeetha.webp" alt="Sangeetha S">
                        <div class="mark-wing purple">MARK 80.5</div>
                    </div>
                    <div class="details">
                        <h3>Sangeetha S</h3>
                        <p>Tirunelveli</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/manimaran.webp" alt="Manimaran P">
                        <div class="mark-wing purple">MARK 78.5</div>
                    </div>
                    <div class="details">
                        <h3>Manimaran P</h3>
                        <p>Villupuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/rajeshwari.webp" alt="Rajeshwari A">
                        <div class="mark-wing purple">MARK 78.5</div>
                    </div>
                    <div class="details">
                        <h3>Rajeshwari A</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/indumathi.webp" alt="Indumathi S">
                        <div class="mark-wing purple">MARK 77.5</div>
                    </div>
                    <div class="details">
                        <h3>Indumathi S</h3>
                        <p>Villupuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kavitha.webp" alt="Kavitha D">
                        <div class="mark-wing purple">MARK 77.5</div>
                    </div>
                    <div class="details">
                        <h3>Kavitha D</h3>
                        <p>Cuddalore</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/kalpana.webp" alt="Kalpana K">
                        <div class="mark-wing purple">MARK 77</div>
                    </div>
                    <div class="details">
                        <h3>Kalpana K</h3>
                        <p>Ranipet</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/babu.webp" alt="Babu P">
                        <div class="mark-wing purple">MARK 75.5</div>
                    </div>
                    <div class="details">
                        <h3>Babu P</h3>
                        <p>Villupuram</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/poomathi.webp" alt="Poomathi T">
                        <div class="mark-wing purple">MARK 75.5</div>
                    </div>
                    <div class="details">
                        <h3>Poomathi T</h3>
                        <p>Pudukkottai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/sethulakshmi.webp" alt="Sethulakshmi P">
                        <div class="mark-wing purple">MARK 75.5</div>
                    </div>
                    <div class="details">
                        <h3>Sethulakshmi P</h3>
                        <p>Madurai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/malathi.webp" alt="Malathi M">
                        <div class="mark-wing purple">MARK 74.5</div>
                    </div>
                    <div class="details">
                        <h3>Malathi M</h3>
                        <p>Chennai</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/aruna.webp" alt="Aruna P">
                        <div class="mark-wing purple">MARK 71.5</div>
                    </div>
                    <div class="details">
                        <h3>Aruna P</h3>
                        <p>Salem</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/abirami.webp" alt="Abirami S">
                        <div class="mark-wing purple">MARK 70.5</div>
                    </div>
                    <div class="details">
                        <h3>Abirami S</h3>
                        <p>Thiruvarur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/vijaya_meenatchi.webp" alt="Vijaya Meenatchi M">
                        <div class="mark-wing purple">MARK 69.5</div>
                    </div>
                    <div class="details">
                        <h3>Vijaya Meenatchi M</h3>
                        <p>Tirunelveli</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/chandra.webp" alt="Chandra M">
                        <div class="mark-wing purple">MARK 67.5</div>
                    </div>
                    <div class="details">
                        <h3>Chandra M</h3>
                        <p>Thoothukudi</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/selvaraj.webp" alt="Selvaraj J">
                        <div class="mark-wing purple">MARK 65.5</div>
                    </div>
                    <div class="details">
                        <h3>Selvaraj J</h3>
                        <p>Perambalur</p>
                        <div class="accent-border"></div>
                    </div>
                </div>

                <div class="card achiever-card" data-year="2024">
                    <div class="image-area">
                        <img src="assets/images/2024/pandi_meena.webp" alt="Pandi Meena E">
                        <div class="mark-wing purple">MARK 64.5</div>
                    </div>
                    <div class="details">
                        <h3>Pandi Meena E</h3>
                        <p>Thiruvarur</p>
                        <div class="accent-border"></div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Duplicate cards as needed -->
@endsection

<script>

    function filterAchievers(year, btn) {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('#achievers-grid .achiever-card').forEach(card => {
            card.style.display = (year === 'all' || card.dataset.year === year) ? '' : 'none';
        });
    }

    function filterAchievers(year, btn) {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        document.querySelectorAll('.achiever-card').forEach(card => {
            if (year === 'all' || card.getAttribute('data-year') === year) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
