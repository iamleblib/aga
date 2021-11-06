<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


@if($errors->count() > 0)

    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 6000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: "{{ $error }}"
            })
        </script>
    @endforeach
@endif


@if(session()->has('error'))
    <div class="example-alert">
        <div class="alert alert-danger alert-icon alert-dismissible">
            <em class="icon ni ni-cross-circle"></em> <strong>Alert</strong>: {{ session('error') }}
        </div>
    </div>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'warning',
            title: "{{ session('error') }}"
        })
    </script>
@endif

@if(session()->has('success'))
    <div class="example-alert">
        <div class="alert alert-success alert-icon alert-dismissible">
            <em class="icon ni ni-cross-circle"></em> <strong>Success: </strong>{{ session('success') }}
        </div>
    </div>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}"
        })
    </script>
@endif
