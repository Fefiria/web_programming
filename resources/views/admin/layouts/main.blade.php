<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <script>
        (function(w, i, g) {
            w[g] = w[g] || [];
            if (typeof w[g].push == 'function') w[g].push(i)
        })
        (window, 'GTM-WHH7CJ83', 'google_tags_first_party');
    </script>
    <script>
        (function(w, d, s, l) {
            w[l] = w[l] || [];
            (function() {
                w[l].push(arguments);
            })('set', 'developer_id.dYzg1YT', true);
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s);
            j.async = true;
            j.src = '/wzrt/';
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Unfixed Sidebar</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="{{ asset('adminlte/css/adminlte.min.css') }}" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print"
        onload="this.media='all'" />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->
    <link rel="icon" type="image/png" href="{{ asset('assets/procom-white-bg.png') }}">
    <script data-cfasync="false" nonce="ef1ea391-9ebd-40cc-bba2-06437a0c4d95">
        try {
            (function(w, d) {
                ! function(F, G, H, I) {
                    if (F.zaraz) console.error("zaraz is loaded twice");
                    else {
                        F[H] = F[H] || {};
                        F[H].executed = [];
                        F.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        F.zaraz._v = "5882";
                        F.zaraz._n = "ef1ea391-9ebd-40cc-bba2-06437a0c4d95";
                        F.zaraz.q = [];
                        F.zaraz._f = function(J) {
                            return async function() {
                                var K = Array.prototype.slice.call(arguments);
                                F.zaraz.q.push({
                                    m: J,
                                    a: K
                                })
                            }
                        };
                        for (const L of ["track", "set", "debug"]) F.zaraz[L] = F.zaraz._f(L);
                        F.zaraz.init = () => {
                            var M = G.getElementsByTagName(I)[0],
                                N = G.createElement(I),
                                O = G.getElementsByTagName("title")[0];
                            O && (F[H].t = G.getElementsByTagName("title")[0].text);
                            F[H].x = Math.random();
                            F[H].w = F.screen.width;
                            F[H].h = F.screen.height;
                            F[H].j = F.innerHeight;
                            F[H].e = F.innerWidth;
                            F[H].l = F.location.href;
                            F[H].r = G.referrer;
                            F[H].k = F.screen.colorDepth;
                            F[H].n = G.characterSet;
                            F[H].o = (new Date).getTimezoneOffset();
                            if (F.dataLayer)
                                for (const P of Object.entries(Object.entries(dataLayer).reduce((Q, R) => ({
                                        ...Q[1],
                                        ...R[1]
                                    }), {}))) zaraz.set(P[0], P[1], {
                                    scope: "page"
                                });
                            F[H].q = [];
                            for (; F.zaraz.q.length;) {
                                const S = F.zaraz.q.shift();
                                F[H].q.push(S)
                            }
                            N.defer = !0;
                            for (const T of [localStorage, sessionStorage]) Object.keys(T || {}).filter(V => V
                                .startsWith("_zaraz_")).forEach(U => {
                                try {
                                    F[H]["z_" + U.slice(7)] = JSON.parse(T.getItem(U))
                                } catch {
                                    F[H]["z_" + U.slice(7)] = T.getItem(U)
                                }
                            });
                            N.referrerPolicy = "origin";
                            N.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(F[H])));
                            M.parentNode.insertBefore(N, M)
                        };
                        ["complete", "interactive"].includes(G.readyState) ? zaraz.init() : F.addEventListener(
                            "DOMContentLoaded", zaraz.init)
                    }
                }(w, d, "zarazData", "script");
                window.zaraz._p = async bO => new Promise(bP => {
                    if (bO) {
                        bO.e && bO.e.forEach(bQ => {
                            try {
                                const bR = d.querySelector("script[nonce]"),
                                    bS = bR?.nonce || bR?.getAttribute("nonce"),
                                    bT = d.createElement("script");
                                bS && (bT.nonce = bS);
                                bT.innerHTML = bQ;
                                bT.onload = () => {
                                    d.head.removeChild(bT)
                                };
                                d.head.appendChild(bT)
                            } catch (bU) {
                                console.error(`Error executing script: ${bQ}\n`, bU)
                            }
                        });
                        Promise.allSettled((bO.f || []).map(bV => fetch(bV[0], bV[1])))
                    }
                    bP()
                });
                zaraz._p({
                    "e": ["(function(w,d){})(window,document)"]
                });
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            @include('admin.layouts.navbar')
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            @include('admin.layouts.sidebar')
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">@yield('content-title')</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Unfixed Layout</li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <h1>@yield('title')</h1>
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">@yield('card-title')</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"
                                            title="Collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"
                                            title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @yield('card-content')
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">@yield('card-footer')</div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            @include('admin.layouts.footer')
        </footer>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

            // Disable OverlayScrollbars on mobile devices to prevent touch interference
            const isMobile = window.innerWidth <= 992;

            if (
                sidebarWrapper &&
                OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
                !isMobile
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
    <script src="https://code.jquery.com/jquery-4.0.0.slim.js"
        integrity="sha256-M+GjhMBfXikM1izMplICCTscIj5hzPCp6uDzaypxtgg=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var nama = $(this).data("nama");
            event.preventDefault();
            swal({
                    title: `Apakah Anda yakin ingin menghapus data ${nama} ini?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
</body>
<!--end::Body-->

</html>
