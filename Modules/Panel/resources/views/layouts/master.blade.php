<!DOCTYPE html>
<html lang="en">

<head>
    @include('panel::layouts.head')
</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('panel::layouts.nav-header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('panel::layouts.nav-menu')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3><span id="page-menu-name">School Management</span></h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb d-none">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <svg class="stroke-icon">
                                                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active">School Manage</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content-area">
                    @yield('content')
                </div>
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="card-body common-flex common-toasts">
        <div id="notif-app"></div>
    </div>
    <script>
        var BASE_URL = `{{url('/')}}`;
    </script>
    @include('panel::layouts.plugins')
    <script>
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let menuLinks = document.querySelectorAll('.main-menu_nav');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah link melakukan navigasi

                // Ambil URL dari data-url attribute
                let url = this.getAttribute('data-url');
                let params = this.getAttribute('data-params');
                // let url = 'desk/content';
                $('#content-area').html('');
                // Axios untuk mengambil konten dari server
                axios.post('/panel/load-page', {
                        id: url,
                        params: params
                    })
                    .then(function(response) {
                        var data = response.data['data'];
                        var nameMenu = data['name'];
                        $('#page-menu-name').html(nameMenu)
                        var html = atob(data.html);
                        var plugins = atob(data.plugins);
                        $('#content-area').html(html);
                        $('#content-plugins').html(plugins);
                    })
                    .catch(function(error) {
                        // console.log(error)
                        // console.error('Error:', error);
                    });
            });
        });
    </script>
    <div id="content-plugins"></div>
</body>

</html>