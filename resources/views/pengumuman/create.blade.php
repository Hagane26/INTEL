@extends('wrapper')

<body>
    <form action="/pengumuman/add" method="post">
        @csrf
        <p> Judul Pengumuman
            <input type="text" name="judul" id="judul">
        </p>
        <p> Kadaluarsa
            <input type="date" name="kadaluarsa" id="kadaluarsa">
        </p>
        <textarea class="ckeditor" id="ckedtor" name="isi"></textarea>
        <button type="submit">Proses</button>
    </form>
</body>

</html>
