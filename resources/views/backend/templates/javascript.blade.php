<!-- Core JS -->
<!-- build:js assets/vendors/js/core.js -->

<script src="{{ asset('assets/vendors/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendors/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendors/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/vendors/js/menu.js') }}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script>
    //message with sweetalert
    @if (session('success'))
        Swal.fire({
            icon: "success",
            title: "Good Job",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif (session('error'))
        Swal.fire({
            icon: "error",
            title: "Opsss",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif
</script>
