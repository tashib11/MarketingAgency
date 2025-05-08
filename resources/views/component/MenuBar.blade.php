


@php
    use App\Helper\JWTToken;
    $token = Cookie::get('token');
    $user = JWTToken::ReadToken($token);
@endphp
<header class="header_wrap fixed-top header_with_topbar">


    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}">
                     <img class="logo_dark" src="{{asset('assets/images/idsb.svg')}}" alt="logo" />
                    {{-- <h2>IDSB global</h2> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item" href="{{ url('/') }}">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu">
                                <ul id="CategoryItem">
                                    <!-- Categories will be populated here -->
                                    <li><a class="dropdown-item nav-link nav_item category-item" href="{{ url('/digital-marketing') }}">Digital Marketing</a></li>
                                    <li><a class="dropdown-item nav-link nav_item category-item" href="{{ url('/web-development') }}">Web Design</a></li>
                                    <li><a class="dropdown-item nav-link nav_item category-item" href="{{ url('/seo') }}">SEO</a></li>
                                    <li><a class="dropdown-item nav-link nav_item category-item" href="{{ url('/content-solution') }}">Content Soltution</a></li>
                                    <li><a class="dropdown-item nav-link nav_item category-item" href="{{ url('/marketing-consultancy') }}">Marketing Consultancy</a></li>
                                    <li><a class="dropdown-item nav-link nav_item category-item" href="{{ url('/creative-solution') }}">Creative Soltution</a></li>
                                </ul>
                            </div>
                        </li>
                        {{-- <li><a class="nav-link nav_item" href="{{ url('/portfolio') }}">Portfolio</a></li> --}}
                        {{-- <li><a class="nav-link nav_item" href="{{ url('/case-study') }}"> Case Study</a></li> --}}
                        <li><a class="nav-link nav_item" href="{{ url('/blog') }}">Blog</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Get In Touch</a>
                            <div class="dropdown-menu">
                                <ul>

                                        <!-- About Us -->
                                        <li><a class="nav-link nav_item" href="{{ url('/about-us') }}"><i class="ti-info-alt"></i> About Us</a></li>

                                        <!-- Career -->
                                        {{-- <li><a class="nav-link nav_item" href="{{ url('/career') }}"><i class="ti-briefcase"></i> Career</a></li> --}}

                                        <!-- Contact Us -->
                                        <li><a class="nav-link nav_item" href="{{ url('/contact') }}"><i class="ti-email"></i> Contact Us</a></li>

                                        <!-- Admin Section with conditional routing -->
                                        @if ($token !== null && $user !== null)
                                            <li><a class="btn btn-danger btn-sm" href="{{ url('/logout') }}">Logout</a></li>
                                            @if (isset($user->role) && $user->role === 'admin')
                                                <li><a class="btn btn-danger btn-sm" href="{{ url('/Dashboard') }}">Dashboard</a></li>
                                            @endif
                                        @else
                                            <li><a class="btn btn-danger btn-sm" href="{{ url('/login') }}">Admin</a></li>
                                        @endif

                                </ul>
                            </div>
                        </li>
                        {{-- <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i> Search</a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <div class="search_overlay"></div>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        Category();
    });

    async function Category() {
        let res = await axios.get("/service-list");
        $("#CategoryItem").empty();
        res.data['data'].forEach((item, i) => {
            let plainTitle = item['title'].replace(/<\/?[^>]+(>|$)/g, ""); // Removes all HTML tags
let EachItem = `<li><a class="dropdown-item nav-link nav_item category-item" href="/serviceById/${item['id']}">${plainTitle}</a></li>`;


            $("#CategoryItem").append(EachItem);
        });
    }
</script> --}}



