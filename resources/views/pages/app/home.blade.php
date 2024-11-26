@extends('pages.app.layout.yield')

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">

        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Home</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->

            <div class="my-4">

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <nav class="navbar navbar-expand-xxl bg-white">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                            <img src="../assets/images/brand-logos/toggle-logo.png" alt="" class="d-inline-block align-text-top">
                                        </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse navbar-justified flex-wrap gap-2" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-xxl-center">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "all" ? "active" : "" }}" aria-current="page" onclick="update_category('all')">
                                                        <i class="ri-apps-line me-2 align-middle d-inline-block"></i>All
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "business" ? "active" : "" }}" aria-current="page" onclick="update_category('business')">
                                                        <i class="ri-briefcase-line me-2 align-middle d-inline-block"></i>Business
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "entertainment" ? "active" : "" }}" onclick="update_category('entertainment')">
                                                        <i class="ri-movie-line me-2 align-middle d-inline-block"></i>Entertainment
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "general" ? "active" : "" }}" onclick="update_category('general')">
                                                        <i class="ri-global-line me-2 align-middle d-inline-block"></i>General
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "health" ? "active" : "" }}" onclick="update_category('health')">
                                                        <i class="ri-mental-health-line me-2 align-middle d-inline-block"></i>Health
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "science" ? "active" : "" }}" onclick="update_category('science')">
                                                        <i class="ri-flask-line me-2 align-middle d-inline-block"></i>Science
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "sports" ? "active" : "" }}" onclick="update_category('sports')">
                                                        <i class="ri-football-line me-2 align-middle d-inline-block"></i>Sports
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link {{ request()->query('category') === "technology" ? "active" : "" }}" onclick="update_category('technology')">
                                                        <i class="ri-computer-line me-2 align-middle d-inline-block"></i>Technology
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-xxl-0 mb-2 ms-xxl-0 ms-3">
                                                    <div class="btn-group d-xxl-flex d-block">
                                                        <button class="btn btn-sm btn-primary-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Sort By
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">relevancy</a></li>
                                                            <li><a class="dropdown-item" href="#">popularity</a></li>
                                                            <li><a class="dropdown-item" href="#">publishedAt</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="d-flex" role="search">
                                                <input class="form-control me-2" type="text" placeholder="Search" aria-label="search" name="search" id="search" oninput="update_search_link()" value="{{ request()->query('q') }}">
                                                <a href="#" class="btn btn-primary" id="search_button">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                        <div class="card custom-card products-navigation-card">
                            <div class="card-body p-0">
                                <div class="p-4 border-bottom">
                                    <p class="fw-semibold mb-0 text-muted">COUNTRY</p>

                                    <div class="px-2 py-3 pb-0">
                                        @php
                                            $countries = [
                                                ['code' => 'id', 'name' => 'Indonesia', 'checked' => true],
                                                ['code' => 'us', 'name' => 'United States', 'checked' => true],
                                                ['code' => 'ar', 'name' => 'Argentina', 'checked' => false],
                                                ['code' => 'at', 'name' => 'Austria', 'checked' => false],
                                                ['code' => 'au', 'name' => 'Australia', 'checked' => false],
                                            ];
                                        @endphp

                                        @foreach($countries as $country)
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="{{ $country['code'] }}" id="{{ $country['code'] }}" name="country" {{ in_array($country['code'], explode(',', request()->query('country', 'us,id'))) ? 'checked' : '' }}  onchange="update_country()">
                                                <label class="form-check-label" for="{{ $country['code'] }}">
                                                    {{ $country['name'] }}
                                                </label>
                                            </div>
                                        @endforeach

                                        <div class="collapse" id="country-more">
                                            @php
                                                $more_countries = [
                                                    ['code' => 'be', 'name' => 'Belgium'],
                                                    ['code' => 'bg', 'name' => 'Bulgaria'],
                                                    ['code' => 'br', 'name' => 'Brazil'],
                                                    ['code' => 'ca', 'name' => 'Canada'],
                                                    ['code' => 'cn', 'name' => 'China'],
                                                    ['code' => 'co', 'name' => 'Colombia'],
                                                    ['code' => 'cz', 'name' => 'Czech Republic'],
                                                    ['code' => 'de', 'name' => 'Germany'],
                                                    ['code' => 'eg', 'name' => 'Egypt'],
                                                    ['code' => 'fr', 'name' => 'France'],
                                                    ['code' => 'gb', 'name' => 'United Kingdom'],
                                                    ['code' => 'gr', 'name' => 'Greece'],
                                                    ['code' => 'hk', 'name' => 'Hong Kong'],
                                                    ['code' => 'hu', 'name' => 'Hungary'],
                                                    ['code' => 'ie', 'name' => 'Ireland'],
                                                    ['code' => 'il', 'name' => 'Israel'],
                                                    ['code' => 'in', 'name' => 'India'],
                                                    ['code' => 'it', 'name' => 'Italy'],
                                                    ['code' => 'jp', 'name' => 'Japan'],
                                                    ['code' => 'kr', 'name' => 'South Korea'],
                                                    ['code' => 'lt', 'name' => 'Lithuania'],
                                                    ['code' => 'lv', 'name' => 'Latvia'],
                                                    ['code' => 'ma', 'name' => 'Morocco'],
                                                    ['code' => 'mx', 'name' => 'Mexico'],
                                                    ['code' => 'my', 'name' => 'Malaysia'],
                                                    ['code' => 'ng', 'name' => 'Nigeria'],
                                                    ['code' => 'nl', 'name' => 'Netherlands'],
                                                    ['code' => 'no', 'name' => 'Norway'],
                                                    ['code' => 'nz', 'name' => 'New Zealand'],
                                                    ['code' => 'ph', 'name' => 'Philippines'],
                                                    ['code' => 'pl', 'name' => 'Poland'],
                                                    ['code' => 'pt', 'name' => 'Portugal'],
                                                    ['code' => 'ro', 'name' => 'Romania'],
                                                    ['code' => 'rs', 'name' => 'Serbia'],
                                                    ['code' => 'ru', 'name' => 'Russia'],
                                                    ['code' => 'se', 'name' => 'Sweden'],
                                                    ['code' => 'sg', 'name' => 'Singapore'],
                                                    ['code' => 'si', 'name' => 'Slovenia'],
                                                    ['code' => 'sk', 'name' => 'Slovakia'],
                                                    ['code' => 'th', 'name' => 'Thailand'],
                                                    ['code' => 'tr', 'name' => 'Turkey'],
                                                    ['code' => 'ae', 'name' => 'United Arab Emirates'],
                                                    ['code' => 'ua', 'name' => 'Ukraine'],
                                                    ['code' => 've', 'name' => 'Venezuela'],
                                                    ['code' => 'za', 'name' => 'South Africa'],
                                                ];
                                            @endphp

                                            @foreach($more_countries as $country)
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="{{ $country['code'] }}" {{ in_array($country['code'], explode(',', request()->query('country'))) ? 'checked' : '' }} id="{{ $country['code'] }}" name="country" onchange="update_country()">
                                                    <label class="form-check-label" for="{{ $country['code'] }}">
                                                        {{ $country['name'] }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                        <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#country-more" role="button" aria-expanded="false" aria-controls="country-more">MORE</a>
                                    </div>
                                </div>
                                <div class="p-4 border-bottom">
                                    <p class="fw-semibold mb-0 text-muted">SOURCE</p>

                                    @php
                                        $sources_list = [
                                            'ABC News', 'ABC News (AU)', 'Aftenposten', 'Al Jazeera English', 'ANSA.it', 'Argaam', 'Ars Technica', 'Ary News', 'Associated Press',
                                            'Australian Financial Review', 'Axios', 'BBC News', 'BBC Sport', 'Bild', 'Blasting News (BR)', 'Bleacher Report', 'Bloomberg',
                                            'Breitbart News', 'Business Insider', 'Buzzfeed', 'CBC News', 'CBS News', 'CNN', 'CNN Spanish', 'Crypto Coins News', 'Der Tagesspiegel',
                                            'Die Zeit', 'El Mundo', 'Engadget', 'Entertainment Weekly', 'ESPN', 'ESPN Cric Info', 'Financial Post', 'Focus', 'Football Italia',
                                            'Fortune', 'FourFourTwo', 'Fox News', 'Fox Sports', 'Globo', 'Google News', 'Google News (Argentina)', 'Google News (Australia)',
                                            'Google News (Brasil)', 'Google News (Canada)', 'Google News (France)', 'Google News (India)', 'Google News (Israel)', 'Google News (Italy)',
                                            'Google News (Russia)', 'Google News (Saudi Arabia)', 'Google News (UK)', 'Göteborgs-Posten', 'Gruenderszene', 'Hacker News', 'Handelsblatt',
                                            'IGN', 'Il Sole 24 Ore', 'Independent', 'Infobae', 'InfoMoney', 'La Gaceta', 'La Nacion', 'La Repubblica', 'Le Monde', 'Lenta', 'L\'equipe',
                                            'Les Echos', 'Libération', 'Marca', 'Mashable', 'Medical News Today', 'MSNBC', 'MTV News', 'MTV News (UK)', 'National Geographic',
                                            'National Review', 'NBC News', 'News24', 'New Scientist', 'News.com.au', 'Newsweek', 'New York Magazine', 'Next Big Future', 'NFL News',
                                            'NHL News', 'NRK', 'Politico', 'Polygon', 'RBC', 'Recode', 'Reddit /r/all', 'Reuters', 'RT', 'RTE', 'RTL Nieuws', 'SABQ', 'Spiegel Online',
                                            'Svenska Dagbladet', 'T3n', 'TalkSport', 'TechCrunch', 'TechCrunch (CN)', 'TechRadar', 'The American Conservative', 'The Globe And Mail',
                                            'The Hill', 'The Hindu', 'The Huffington Post', 'The Irish Times', 'The Jerusalem Post', 'The Lad Bible', 'The Next Web', 'The Sport Bible',
                                            'The Times of India', 'The Verge', 'The Wall Street Journal', 'The Washington Post', 'The Washington Times', 'Time', 'USA Today', 'Vice News',
                                            'Wired', 'Wired.de', 'Wirtschafts Woche', 'Xinhua Net', 'Ynet'
                                        ];
                                    @endphp

                                    <div class="px-2 py-3 pb-0">
                                        @foreach ($sources_list as $index => $source)
                                            @php
                                                // Tentukan ID untuk checkbox dan label
                                                $source_id = str_replace(' ', '-', strtolower($source));
                                            @endphp
                                            @if ($index < 5)
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" value="{{ $source_id }}" id="{{ $source_id }}" disabled>
                                                    <label class="form-check-label" for="{{ $source_id }}">
                                                        {{ $source }}
                                                    </label>
                                                </div>
                                            @else
                                                <div class="collapse" id="brands-more">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="{{ $source_id }}" id="more-{{ $source_id }}" disabled>
                                                        <label class="form-check-label" for="more-{{ $source_id }}">
                                                            {{ $source }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#brands-more" role="button" aria-expanded="false" aria-controls="brands-more">MORE</a>
                                </div>

                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary" id="filter_country">Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
                            <div class="row">

                                @foreach ($news['articles'] as $ns)
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card product-card">
                                            <div class="card-body">
                                                <a href="{{ $ns->url }}" target="__blank" class="product-image">
                                                    <div style="width: 100%; height: 140px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                                        <img src="{{ $ns->urlToImage }}"
                                                             onerror="this.src='https://via.placeholder.com/300x450?text=No+Image+Available';"
                                                             style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                                             alt="news image"
                                                             class="card-img">
                                                    </div>
                                                </a>
                                                <p class="fw-semibold mt-3 mb-2"><a href="{{ $ns->url }}" target="__blank">{{ $ns->title }}</a></p>
                                                <p class="fs-12 text-muted mb-2"><strong>Source:</strong> {{ $ns->source->name }}</p>
                                                <p class="fs-12 text-muted mb-2"><strong>Description:</strong> {{ $ns->description ?? 'No description available' }}</p>
                                                <p class="fs-12 text-muted mb-2"><strong>Published:</strong> {{ \Carbon\Carbon::parse($ns->publishedAt)->format('d M Y') }}</p>
                                                <p class="fs-12 text-muted mb-2"><strong>Author:</strong> {{ $ns->author ?? 'Unknown' }}</p>
                                                <div class="mb-2">
                                                    <a href="#"><i class="ri-heart-line fs-6"></i></a>
                                                    <a href="#"><i class="ri-chat-1-line fs-6"></i></a>
                                                    <a href="#"><i class="ri-share-line fs-6"></i></a>
                                                </div>
                                                <a href="{{ $ns->url }}" target="__blank" class="btn btn-sm btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            {{-- <div class="text-center mt-2 mb-2">
                                <p id="load-more" class="text-muted" style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Load More...
                                </p>
                            </div> --}}

                    </div>
                </div>
                <!--End::row-1 -->

            </div>

        </div>

    </div>
    <!-- End::app-content -->

@endsection
