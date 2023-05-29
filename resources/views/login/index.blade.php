@extends('wrapper')

<body>
    <form action="{{ route('actionLogin') }}" method="POST">
        @csrf
        <center>
            <table border="1px">
                <tr>
                    <td>Nidn</td>
                    <td>
                        <input type="number" id="nidn" name="nidn">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" id="nama" name="nama">
                    </td>
                </tr>
            </table>
            <button type="submit">Login</button>
        </center>
    </form>
</body>

</html>
