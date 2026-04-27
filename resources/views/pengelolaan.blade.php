<!DOCTYPE html>
<html>
<head>
    <title>Pengelolaan</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <h2>Data Member</h2>
    
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Durasi</th>
                    <th>Dimulai</th>
                    <th>Diakhiri</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $m)
                <tr>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['paket'] }}</td>
                    <td>{{ $m['durasi'] }}</td>
                    <td>{{ $m['dimulai'] }}</td>
                    <td>{{ $m['diakhiri'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<a href="/dashboard" class="back-btn">← Back to Dashboard</a>
@endsection
</body>
</html>