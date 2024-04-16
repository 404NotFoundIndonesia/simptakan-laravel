
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Simptakan adalah platform berbasis web yang modern yang dirancang untuk merevolusi manajemen perpustakaan dan pengalaman pengguna. Tujuannya adalah untuk memberikan pengalaman yang mulus dan menyenangkan bagi administrator perpustakaan dan pengguna, meningkatkan eksplorasi katalog, peminjaman buku, dan manajemen aktivitas membaca.">
	<meta name="author" content="404 Not Found Indonesia">
	<meta name="keywords" content="404 Not Found Indonesia, simptakan, sistem informasi perpustakaan">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('404_Black.jpg') }}" />

	<title>{{ config('app.name') }} | {{ $title ?? 'Demo' }}</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @stack('style')
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
                        @yield('body')
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
    @stack('script')
</body>

</html>
