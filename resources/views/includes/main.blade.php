<div class="container">
    <ul class="card-container d-flex">

        @foreach($comics as $comic)
        <li class="card">
            <figure>
                <a href="#">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </a>
            </figure>
            <figcaption>{{ $comic['title'] }}</figcaption>
        </li>
        @endforeach

        <!-- <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01"
                        alt="American Vampire 1976"></a></figure>
            <figcaption>American Vampire 1976</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb"
                        alt="Aquaman"></a></figure>
            <figcaption>Aquaman</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76"
                        alt="Batgirl"></a></figure>
            <figcaption>Batgirl</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ"
                        alt="Batman"></a></figure>
            <figcaption>Batman</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ"
                        alt="Batman Beyond"></a></figure>
            <figcaption>Batman Beyond</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8"
                        alt="Batman/Superman"></a></figure>
            <figcaption>Batman/Superman</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk"
                        alt="Batman/Superman Annual"></a></figure>
            <figcaption>Batman/Superman Annual</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8"
                        alt="Batman: The Joker War Zone"></a></figure>
            <figcaption>Batman: The Joker War Zone</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY"
                        alt="Batman: Three Jokers"></a></figure>
            <figcaption>Batman: Three Jokers</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX"
                        alt="Batman: White Knight Presents: Harley Quinn"></a></figure>
            <figcaption>Batman: White Knight Presents: Harley Quinn</figcaption>
        </li>
        <li class="card">
            <figure><a href="#"><img
                        src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq"
                        alt="Catwoman"></a></figure>
            <figcaption>Catwoman</figcaption>
        </li> -->
    </ul>
</div>