
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
	<div class="wrapper">
        @include('components.sidebar')

		<div class="main">
            @include('components.navbar')

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Blank Page</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

            @include('components.footer')
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
    @stack('script')
</body>

</html>
