<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield( 'page_title', 'Main Page' )</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,500;1,600&family=Rubik+Broken+Fax&display=swap" rel="stylesheet">

  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: rgb(11,1,35);
        background: linear-gradient(82deg, rgba(11,1,35,1) 0%, rgba(36,3,33,1) 69%);
    }
    /* Animation */
    @keyframes wave {
      0% { transform: translateY(0); }
      25% { transform: translateY(-10px); }
      50% { transform: translateY(0); }
      75% { transform: translateY(10px); }
      100% { transform: translateY(0); }
    }

    .wave-text span {
      display: inline-block;
      animation: wave 2s infinite;
    }
  </style>

  @vite('resources/css/app.css')
</head>
<body class="h-screen flex flex-col">
    <!-- Top Navbar -->
    <div class="h-16 flex flex-row items-center justify-evenly w-full">
        <div class="w-1/5">
            <h1 class="text-blue-500 text-4xl font-semibold tracking-wide">Elective101</h1>
        </div>
        <div class="flex flex-row items-center justify-evenly w-3/6 h-full">
            <a href="main" class="text-lg font-normal text-gray-400">Home</a>
            <a href="controlstructure" class="text-lg font-normal text-gray-400">Control Structures</a>
            <a href="contactus" class="text-lg font-normal text-gray-400">Contact us</a>
            <a href="aboutus" class="text-lg font-normal text-gray-400">About us</a>
            <a href="client" class="text-lg font-normal text-gray-400">Client</a>
        </div>
        <div class="flex items-center justify-center  w-1/5 h-full">
            <a href="dashboard" class="text-lg font-normal text-gray-400">Others</a>
        </div>
    </div>

    
    @if(Request::is('main') || Request::is('/'))
    <div class="flex flex-col items-center justify-center h-1/2 w-full">
        <div class="typing-text text-7xl font-bold text-gray-600 tracking-wide" id="typing-text"></div>
    </div>
    @endif
    
    <!-- Content -->
    <div class="flex-1 flex items-center justify-center h-96 w-full">
        @yield('content')
    </div>

    <!-- Content -->
    <div class="flex-1 flex items-center justify-center h-96 w-full">
        @yield('contents')
    </div>


    
    <div class="h-10 flex items-center justify-center">
        <h1 class="text-lg font-normal tracking-wide text-gray-500">salespaul@gmail.com</h1>
    </div>

   


    <script>
        const texts = [
            "Daily Activity in Elective 101",
        ];
        const typingSpeed = 100;
        let textIndex = 0;
        let charIndex = 0;
    
        function typeNextText() {
            const currentText = texts[textIndex];
            const typingEffect = setInterval(() => {
                if (charIndex < currentText.length) {
                    document.getElementById('typing-text').innerHTML += currentText.charAt(charIndex);
                    charIndex++;
                } else {
                    clearInterval(typingEffect);
                    setTimeout(eraseText, 1000);
                }
            }, typingSpeed);
        }
    
        function eraseText() {
            const erasingEffect = setInterval(() => {
                if (charIndex >= 0) {
                    const currentText = texts[textIndex];
                    document.getElementById('typing-text').innerHTML = currentText.substring(0, charIndex);
                    charIndex--;
                } else {
                    clearInterval(erasingEffect);
                    textIndex = (textIndex + 1) % texts.length;
                    charIndex = 0;
                    setTimeout(typeNextText, 500);
                }
            }, typingSpeed / 2);
        }
        typeNextText();
    </script>
</body>
</html>
