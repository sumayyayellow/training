<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>How to Export the jQuery Datatable data to PDF,Excel,CSV and Copy</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/datatable.min.css')}}"/>

    <script type="text/javascript" src="{{asset('js/datatable.min.js')}}"></script>


    <div class="container" style="padding:20px;20px;">
        <div class="">
            <h1>Data Table with Export features Using PHP server-side</h1>
            <div class="">
                <table id="employee_grid" class="display" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Empid</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($data as $user)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>

                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Empid</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Created At</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $( document ).ready(function() {
            $('#employee_grid').DataTable({
                "processing": true,
                "dom": 'lBfrtip',
                "buttons": [
                    {
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            'copy',
                            'excel',
                            'csv',
                            'pdf',
                            'print'
                        ]
                    }
                ]
            });
        });
    </script>
