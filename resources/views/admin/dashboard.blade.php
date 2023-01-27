@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">#</th>
                    <th scope="col">Last</th>
                    <th scope="col">Comandi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr> 
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
