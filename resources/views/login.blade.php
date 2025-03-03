<!DOCTYPE html>
<html lang="en" data-version="{{ config('app.version') }}" data-copyright="© {{ now()->format('Y') }} {{ config('app.name') }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon IMG -->
    <link rel="shortcut icon" href="img/logo-2 - BG.png" type="image/x-icon">

    <!-- SweetAlert -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--// Sweet Alert //-->

    <!-- BoxIcons v2.1.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--// BoxIcons v2.1.0 //-->

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!--// GOOGLE FONTS //-->

    <title>تسجيل الدخول</title>

</head>

<body>
    {{-- Container --}}
<div class="bg-sky-100 flex justify-center items-center h-screen">
    <!-- Left: Image Section (Hidden on small screens) -->
    <div class="w-1/2 h-screen hidden lg:block">
        <img src="https://img.freepik.com/fotos-premium/imagen-fondo_910766-187.jpg?w=826" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>

    <!-- Right: Login Form Section -->
    <div class="lg:p-36 md:p-52 sm:p-20 p-8 w-full lg:w-1/2">
        <!-- Login Heading -->
        <h1 class="text-2xl font-semibold mb-4">Login</h1>
        <!-- Login Form -->
        <form action="#" method="POST">
        
        <!-- Username Input -->
        <div class="mb-4">
            <label for="username" class="block text-gray-600">Username</label>
            <input type="text" id="username" name="username" 
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" 
                    autocomplete="off">
        </div>
        <!-- Password Input -->
        <div class="mb-4">
            <label for="password" class="block text-gray-800">Password</label>
            <input type="password" id="password" name="password" 
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" 
                    autocomplete="off">
        </div>

        <!-- Remember Me Checkbox -->
        <div class="mb-4 flex items-center">
            <input type="checkbox" id="remember" name="remember" 
                    class="text-red-500">
            <label for="remember" class="text-green-900 ml-2">Remember Me</label>
        </div>

        <!-- Forgot Password Link -->
        <div class="mb-6 text-blue-500">
            <a href="#" class="hover:underline">Forgot Password?</a>
        </div>

        <!-- Login Button -->
        <button type="submit" 
                class="bg-red-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">
            Login
        </button>
        </form>
        <!-- Sign Up Link -->
        <div class="mt-6 text-green-500 text-center">
            <a href="#" class="hover:underline">Sign up Here</a>
        </div>
    </div>
</div>
</body>

<!-- ScrollReveal.js -->
<script src="{{ asset('assets/js/ScrollReveal.js') }}"></script>

<script>
    const input = document.querySelector("#password");
    const inputIcon = document.querySelector(".input__icon");

    inputIcon.addEventListener("click", (e) => {
        e.preventDefault();

        inputIcon.setAttribute(
            'src',
            input.getAttribute('type') === 'password' ?
            'assets/images/icons/eye-off.svg' :
            'assets/images/icons/eye.svg'
        );

        input.setAttribute(
            'type',
            input.getAttribute('type') === 'password' ?
            'text' :
            'password'
        );
    });
</script>

<script>
    const inputField = document.getElementById('password');
    const inputFieldText = document.getElementById('NID');
    const image = document.getElementById('IMG_Icon');

    inputField.addEventListener('focus', function() {
        image.style.visibility = 'visible';
    });

    inputFieldText.addEventListener('focus', function() {
        if (inputField.value.trim() === '') {
            image.style.visibility = 'hidden';
        }
    });
</script>

<script>
    ScrollReveal({
        reset: false,
        distance: '60px',
        duration: 2500,
        delay: 100
    });

    ScrollReveal().reveal('.login-side', {
        delay: 450,
        origin: 'right'
    });
    ScrollReveal().reveal('.info-side', {
        delay: 700,
        origin: 'left'
    });
</script>



<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>