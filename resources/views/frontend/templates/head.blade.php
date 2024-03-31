<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Untree.co" />
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

<meta name="description" content="" />
<meta name="keywords" content="bootstrap, bootstrap5" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<title>
    {{ $title }}
</title>
<style>
    /* Styles for WhatsApp floating button */
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 1000;
        cursor: pointer;
        animation: bounce 1s infinite alternate;
    }

    @keyframes bounce {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    .whatsapp-float i {
        margin-top: 15px;
    }

    /* Hover effect */
    .whatsapp-float:hover {
        background-color: #128c7e;
        color: #fff;
    }
</style>
