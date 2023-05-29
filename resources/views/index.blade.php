@extends('wrapper')

<body>

    <header>
        <h2 class="logo"> INTEL </h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Detail</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="row">
        <div class="tron">
            <center>
                <img src="{{ asset('img/img1.jpg') }}" height="250px" width="250px">
            </center>
        </div>

        <div class="column">
            <table class="side-table" align="center" border="1px"></table>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
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
                $("table").empty();
                var no = 1;
                $.each(data.result, function() {
                    var in_prodi_data = "";
                    if (this['in_prodi'] == 0) {
                        in_prodi_data = "<p style='color:red;'>Tidak Ada</p>";
                    } else {
                        in_prodi_data = "<p style='color:green;'>Ada</p>";
                    }
                    $("table").append("<tr><td>" + (no++) + "</td><td>" + this['nama_dosen'] + "</td><td>" +
                        in_prodi_data + "</td></tr>");
                });
            });
        }
    </script>
</body>

</html>
