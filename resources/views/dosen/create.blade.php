@extends('wrapper')

<body>
    <center>
        <form action="/dosen/add" method="post" style="margin-top:5%;">
            @csrf
            <table border="1px">
                <tr>
                    <td colspan="3">
                        <p class="judul-form-dosen">Input Data Dosen</p>
                    </td>
                </tr>
                <tr>
                    <td>NIDN</td>
                    <td>:</td>
                    <td><input type="number" name="nidn" id="nidn"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jk" id="jk">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Rule</td>
                    <td>:</td>
                    <td>
                        <select name="role" id="role">
                            @foreach ($roles as $r)
                                <option value="{{ $r->id }}">{{ $r->nama_role }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" class="btn-submit">Tambah Data Dosen</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
