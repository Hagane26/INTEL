@extends('wrapper')

<body>

    <header>
        <h2 class="logo"> INTEEL </h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Detail</a>
            <button class="btnLogin-popup" onclick="location.href = '/login'">LOGIN</button>
        </nav>
    </header>

    <div class="horn-alert">
        <marquee>Test</marquee>
    </div>

    <div class="row">
        <div class="column">
            <table border="1px" width="100%" height="100%">
                <tr>
                    <td width="300px" height="300px">
                        <div class="tron">
                            <iframe width="100%" height="250"
                                src="https://www.youtube.com/embed/rrpUYPT1crM?autoplay=1" title="YouTube video player"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h2> Jadwal Kuliah </h2>
                        <table class="table-jadwal-kuliah" border="1px">
                            <tr>
                                <th width="40px"></th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                                <th>Minggu</th>
                            </tr>
                            <tr>
                                <th>Pagi</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Siang</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Siang</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Sore</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div class="column">
            <div id="tb_pengumuman" class="blog-list"></div>
        </div>

    </div>

    <div class="side-nav">
        <p>Dosen Yang Ada di Prodi</p>
        <ul id="tb_dosen">
        </ul>
    </div>


    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script>
        $(document).ready(function() {
            selesai();
        });

        function selesai() {
            setTimeout(function() {
                update();
                selesai();
            }, 200);
        }

        function update() {
            $.getJSON("/dosenjson", function(data) {
                $("#tb_dosen").empty();
                $.each(data.result, function() {
                    var in_prodi_data = "";
                    if (this['in_prodi'] == 0) {
                        in_prodi_data = "style='background-color:red;'";
                    } else {
                        in_prodi_data = "style='background-color:green;'";
                    }
                    $("#tb_dosen").append("<li " + in_prodi_data + " >" + this['nama_dosen'] + "</li>");
                });
            });

            $.getJSON("/pengumumanjson", function(data) {
                $("#tb_pengumuman").empty();
                $.each(data.result, function() {
                    $("#tb_pengumuman").append("<p><a href='#'>" + this['judul'] +
                        "</a></p>");
                });
            });

        }
    </script>
</body>

</html>
