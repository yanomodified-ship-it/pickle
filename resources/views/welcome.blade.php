<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickleball Court Scheduler</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-between">

    <!-- Navigation Header -->
    <header class="border-b border-slate-800 bg-slate-900/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-3xl">🏓</span>
                <span class="text-2xl font-extrabold tracking-tight text-lime-400">Pickle<span class="text-white">Scheduler</span></span>
            </div>
            <nav class="hidden md:flex space-x-8 text-sm font-semibold text-slate-300">
                <a href="#features" class="hover:text-lime-400 transition">Features</a>
                <a href="#schedule" class="hover:text-lime-400 transition">Court Availability</a>
                <a href="#pricing" class="hover:text-lime-400 transition">Rates</a>
            </nav>
            <div class="space-x-3">
                <a href="#" class="text-sm font-semibold px-4 py-2 rounded-lg hover:text-lime-400 transition">Log In</a>
                <a href="#book" class="text-sm font-semibold bg-lime-400 text-slate-950 px-5 py-2.5 rounded-lg hover:bg-lime-300 transition shadow-lg shadow-lime-400/20">Book a Court</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main>
        <section class="relative pt-16 pb-20 px-6 max-w-7xl mx-auto text-center">
            <div class="inline-block bg-slate-800 text-lime-400 text-xs font-bold px-4 py-1.5 rounded-full mb-6 border border-slate-700">
                🔥 Open Play & Private Court Bookings Now Live
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
                Reserve Your Court. <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-400 to-emerald-400">Serve Your Best Game.</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto mb-10">
                Seamless pickleball court reservations, open-play queueing, and match coordination—all in one place.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#book" class="bg-lime-400 text-slate-950 font-bold px-8 py-4 rounded-xl text-lg hover:bg-lime-300 transition shadow-xl shadow-lime-400/20">
                    Reserve Court Now
                </a>
                <a href="#schedule" class="bg-slate-800 text-white font-semibold px-8 py-4 rounded-xl text-lg hover:bg-slate-700 border border-slate-700 transition">
                    View Live Schedule
                </a>
            </div>
        </section>

        <!-- Feature Grid -->
        <section id="features" class="py-16 bg-slate-950/50 border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800">
                        <div class="w-12 h-12 bg-lime-400/10 text-lime-400 rounded-xl flex items-center justify-center text-2xl mb-6">
                            📅
                        </div>
                        <h3 class="text-xl font-bold mb-3">Real-Time Booking</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Check court availability in real time and lock in your preferred time slot instantly with no hassle.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800">
                        <div class="w-12 h-12 bg-lime-400/10 text-lime-400 rounded-xl flex items-center justify-center text-2xl mb-6">
                            👥
                        </div>
                        <h3 class="text-xl font-bold mb-3">Open Play Queues</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Join open play rotation, see who is on deck, and get notified when it's your turn to take the court.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-slate-900 p-8 rounded-2xl border border-slate-800">
                        <div class="w-12 h-12 bg-lime-400/10 text-lime-400 rounded-xl flex items-center justify-center text-2xl mb-6">
                            🏆
                        </div>
                        <h3 class="text-xl font-bold mb-3">Tournaments & Events</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            Sign up for weekend round-robins, local leagues, and skill-level based matchmaking events.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 py-8 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-slate-500">
            <p>© {{ date('Y') }} PickleScheduler. All rights reserved.</p>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-slate-300 transition">Privacy Policy</a>
                <a href="#" class="hover:text-slate-300 transition">Terms of Service</a>
                <a href="#" class="hover:text-slate-300 transition">Contact Support</a>
            </div>
        </div>
    </footer>

</body>
</html>