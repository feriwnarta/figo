<section id="sensor" wire:poll>
    <div class="container">
        <h1 class="display-6 text-center mt-2">Realtime data sensor</h1>

        <div class="row g-3 g-sm-4">
            <div class="col-12 col-sm-3">
                <div class="card shadow">
                    <h5 class="card-header">Suhu</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $sensor->suhu ?? "-" }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="card shadow">
                    <h5 class="card-header">Kelembapan</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $sensor->kelembapan ?? "-" }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="card shadow">
                    <h5 class="card-header">Gas</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $sensor->gas ?? "-" }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3">
                <div class="card shadow">
                    <h5 class="card-header">Debu</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $sensor->debu ?? "-" }}</p>
                    </div>
                </div>
            </div>
        </div>


        <h1 class="display-6 text-center mt-5">Riwayat data sensor</h1>
        <table class="table table-light table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Suhu</th>
                <th scope="col">Kelembapan</th>
                <th scope="col">Gas</th>
                <th scope="col">Debu</th>
            </tr>
            </thead>
            <tbody>
            <style>
                th {
                    font-weight: bold;
                }
                td {
                    color: black !important;
                }
            </style>
                @if(isset($histories))
                    @foreach($histories as $history)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($history->created_at)->format('d F Y') }}</td>
                            <td>{{ $history->suhu }}</td>
                            <td>{{ $history->kelembapan }}</td>
                            <td>{{ $history->gas }}</td>
                            <td>{{ $history->debu }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Tidak ada data</td>
                    </tr>
                @endif

                @if(isset($histories))
                    {{ $histories->links() }}
                @endif
            </tbody>
        </table>
    </div>
</section>
