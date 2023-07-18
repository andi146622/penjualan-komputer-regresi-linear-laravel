<script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/jekyll-search.min.js')}}"></script>

<!-- Font Awesome 5 -->
<script src="{{asset('assets/@fortawesome/fontawesome-free/js/all.min.js')}}"></script>

<!--Custom Script-->
@stack('custom-script')

<script src="{{asset('js/sleek.bundle.js')}}"></script>
<!--Vue Js-->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>

<!-- TOASTR -->
<script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
<!-- //Menampilkan Pesan meenggunakan library javascript toastr -->
<script>
    <?php if (session()->has('success')) : ?>
        toastr.success('<?= session('success'); ?>', 'BERHASIL!');

    <?php elseif (session()->has('error')) : ?>
        toastr.error('<?= session('error'); ?>', 'GAGAL!');

    <?php endif; ?>
</script>