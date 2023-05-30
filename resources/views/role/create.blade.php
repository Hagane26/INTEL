@extends('wrapper')

<body>
    <form action="/role/add" method="post">
        @csrf
        <table border="1px">
            <tr>
                <td>Nama Role</td>
                <td> <input type="text" name="nama_role" id="nama_role"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level" id="level">
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Proses</button></td>
            </tr>
        </table>
    </form>
</body>

</html>
