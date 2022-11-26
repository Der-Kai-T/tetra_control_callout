@if (session()->has('success'))
    <div class='row dontprint'>
        <div class='col-12'>
            <div class='card'>
                <div class='card-header '>
                    <h3 class='card-title'>Datenbank-Anfrage</h3>
                </div>
                <div class='card-body bg-success'>
                    Die Anfrage <i>{{session('success')??''}}</i> wurde erfolgreich vom Datenbank-Server entgegengenommen
                </div>
                <div class="card-footer ">
                </div>
            </div>
        </div>
    </div>


@endif
