<script src="{{ asset('backend') }}/libs/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="{{ asset('backend') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('backend') }}/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="{{ asset('backend') }}/libs/pace-js/pace.min.js"></script>

<!-- flatpickr js -->
<script src="{{ asset('backend') }}/libs/flatpickr/flatpickr.min.js"></script>
<!-- Required datatable js -->
<script src="{{ asset('backend') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="{{ asset('backend') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
{{-- ckeditor --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>



<!-- init js -->
<script src="{{ asset('backend') }}/js/pages/datatable-pages.init.js"></script>
<script src="{{ asset('backend') }}/js/pages/modal.init.js"></script>
<script src="{{ asset('backend') }}/js/app.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
</script>
