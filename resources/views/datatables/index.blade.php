@extends('layouts.base')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Datatable</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>Filter</b></h4>
                        <!-- <div class="panel-body">
                            <div style="border:1px solid;">
                                <input type="radio" id="asd" name="status" />Bob
                                <input type="radio" id="a" name="status" />Jay
                            </div>
                            <input type="text" id="search" placeholder="Search...">
                        </div> -->
                        <div class="panel-body">
                            <form method="POST" id="search-form" class="form-inline" role="form">
                                <div class="form-group">
                                    <div style="border:1px solid;">
                                        <input type="radio" id="asd" name="status" value="asd" />asd
                                        <input type="radio" id="a" name="status" value="a" />a
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="search email">
                                </div>

                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>Dosen Perguruan Tinggi</b></h4>
                        <table class="table table-bordered" id="users-table" >
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Created At</th>

                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div> <!-- end row -->

        </div> <!-- end container -->
    </div>

    <!-- end wrapper -->


    @push('scripts')
            <!-- <script>
$('input[type="radio"]').change(function () {
    var status = $('input[name="status"]:checked').prop('id') || '';
    $('tr').hide();
    $('tr:contains(' + status + ')').show();
});
$("#search").keyup(function() {
    var value = this.value;

    $("table").find("tr").each(function(index) {
        if (index === 0) return;
        var id = $(this).find("td").first().text();
        $(this).toggle(id.indexOf(value) !== -1);
    });
});


$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'dataUser',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});

</script> -->
    <script>
        var oTable = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            "searching": false,
            ajax: {
                url: 'dataUser',
                data: function (d) {
                    d.name = $("input:radio[name='status']:checked").val();
                    d.email = $('input[name=email]').val();
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'}
            ]
        });


        $('#search-form').on('submit', function(e) {
            oTable.draw();
            e.preventDefault();
        });
    </script>
    @endpush
@stop