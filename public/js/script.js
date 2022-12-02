$(document).ready(function () {
    $('#tabla2').DataTable({
        processing: true,
        serverSide: true,
        ajax: './tabla-productos',
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'phone' },
            { data: 'job' },
            { data: 'created_At' }
        ],
    });
});