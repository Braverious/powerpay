<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PowerPay - Effortless Electricity Bill Payments</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="shortcut icon" href="<?= base_url("assets/listrik.png") ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Inter', sans-serif;
		}

		.hero-bg {
			background-color: #FFD700;
			/* A vibrant yellow */
		}

		.section-bg {
			background-color: #FFFBEB;
			/* A very light yellow for contrast */
		}

		.cta-button {
			transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		}

		.cta-button:hover {
			transform: translateY(-2px);
			box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}

		.feature-card {
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.feature-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
		}
	</style>
</head>