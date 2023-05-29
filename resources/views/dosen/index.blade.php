@extends('wrapper')

@foreach ($data as $d)
    @if ($d->stat < 0)
        <p>{{ $d->msg }}</p>
    @else
    @endif
@endforeach

@foreach ($respon as $r)
    {{ $r->nama_dosen }} </br>
@endforeach

</html>
