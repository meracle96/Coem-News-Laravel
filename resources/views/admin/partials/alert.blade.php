@if(Session::has('success'))
    swal("Sukses!", "{{ Session::get('success') }}", "success")
@endif