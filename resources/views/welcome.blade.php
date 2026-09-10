<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ginger | Full-Stack Web Developer</title>
    <meta name="description"
        content="Portfolio of Ginger, a Full-Stack Web Developer specializing in modern web applications, Laravel, PHP, JavaScript, and MySQL.">
    <meta name="author" content="Ginger">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ginger | Full-Stack Web Developer">
    <meta property="og:description"
        content="I build modern, responsive, and scalable web applications powered by Laravel and modern frontend tools.">
    <meta property="og:url" content="https://example.com">
    <meta property="og:image" content="https://example.com/assets/images/og-cover.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN (For Utility Engine) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            bg: '#0B0F17',
                            surface: '#111827',
                            card: '#1F2937',
                            border: '#374151',
                            accent: '#10B981',
                            accentMuted: 'rgba(16, 185, 129, 0.1)',
                            textPrimary: '#F9FAFB',
                            textSecondary: '#9CA3AF'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Space Grotesk', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Custom Base Styles -->
    <style>
        body {
            background-color: #0B0F17;
            color: #F9FAFB;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        .font-heading {
            font-family: 'Space Grotesk', sans-serif;
        }

        .grid-pattern {
            background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 0);
            background-size: 24px 24px;
        }

        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal {
                transition: none !important;
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>
</head>

<body class="grid-pattern antialiased selection:bg-brand-accent selection:text-brand-bg">

    <!-- Configuration Variables -->
    <script>
        window.PORTFOLIO_CONFIG = {
            developerName: "Stanley Offordile",
            title: "Full-Stack Web Developer",
            email: "stanleyaugustine422@gmail.com",
            location: "Nigeria",
            githubUrl: "https://github.com/YOUR-GITHUB-USERNAME",
            linkedinUrl: "https://www.linkedin.com/in/YOUR-LINKEDIN-USERNAME",
            apiEndpoint: "/contact"
        };
    </script>
    <!-- Navigation Bar -->
    <header id="navbar"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-5 bg-brand-bg/80 backdrop-blur-md border-b border-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">

            <!-- Personal Brand -->
            <a href="#home"
                class="font-heading text-xl font-bold tracking-tight text-brand-textPrimary flex items-center gap-2">
                <span class="text-brand-accent">&lt;/&gt;</span>
                <span>Ginger<span class="text-brand-accent">.</span></span>
            </a>

            <!-- Desktop Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-brand-textSecondary">
                <a href="#home" class="hover:text-brand-accent transition-colors">Home</a>
                <a href="#about" class="hover:text-brand-accent transition-colors">About</a>
                <a href="#skills" class="hover:text-brand-accent transition-colors">Skills</a>
                <a href="#projects" class="hover:text-brand-accent transition-colors">Projects</a>
                <a href="#services" class="hover:text-brand-accent transition-colors">Services</a>
                <a href="#process" class="hover:text-brand-accent transition-colors">Process</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a href="#contact"
                    class="px-4 py-2 text-sm font-medium text-brand-bg bg-brand-accent rounded-md hover:bg-emerald-400 transition-colors shadow-sm">
                    Let's Talk
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" type="button"
                class="md:hidden text-brand-textSecondary hover:text-brand-textPrimary p-2 focus:outline-none focus:ring-2 focus:ring-brand-accent rounded-md"
                aria-label="Toggle Navigation Menu" aria-expanded="false">

                <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-brand-surface border-b border-brand-border px-4 pt-4 pb-6 mt-3 space-y-3">

            <a href="#home"
                class="mobile-nav-link block text-brand-textSecondary hover:text-brand-accent font-medium py-2">
                Home
            </a>

            <a href="#about"
                class="mobile-nav-link block text-brand-textSecondary hover:text-brand-accent font-medium py-2">
                About
            </a>

            <a href="#skills"
                class="mobile-nav-link block text-brand-textSecondary hover:text-brand-accent font-medium py-2">
                Skills
            </a>

            <a href="#projects"
                class="mobile-nav-link block text-brand-textSecondary hover:text-brand-accent font-medium py-2">
                Projects
            </a>

            <a href="#services"
                class="mobile-nav-link block text-brand-textSecondary hover:text-brand-accent font-medium py-2">
                Services
            </a>

            <a href="#process"
                class="mobile-nav-link block text-brand-textSecondary hover:text-brand-accent font-medium py-2">
                Process
            </a>

            <a href="#contact"
                class="mobile-nav-link block text-center w-full px-4 py-2 mt-2 text-sm font-medium text-brand-bg bg-brand-accent rounded-md hover:bg-emerald-400">
                Contact Me
            </a>
        </div>
    </header>


    <main class="pt-20">

        <!-- Hero Section -->
        <section id="home" class="min-h-[85vh] flex items-center py-12 md:py-20 relative">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">

                <div class="flex flex-col lg:grid lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                    <!-- Profile Picture -->
                    <div class="lg:col-span-5 lg:col-start-8 flex justify-center lg:justify-end order-1 lg:order-2">

                        <div class="relative">

                            <!-- Glow -->
                            <div class="absolute -inset-4 bg-brand-accent/10 rounded-full blur-3xl"></div>

                            <!-- Picture -->
                            <div
                                class="relative w-48 h-48 sm:w-64 sm:h-64 lg:w-80 lg:h-80 rounded-full border-4 border-brand-accent/30 overflow-hidden bg-brand-surface shadow-2xl">

                                <img src="/images/Stanley.jpg" alt="Stanley Offordile - Full-Stack Web Developer"
                                    class="w-full h-full object-cover">

                            </div>

                            <!-- Availability Badge -->
                            <div
                                class="absolute bottom-2 right-0 sm:right-2 px-3 py-2 rounded-full bg-brand-surface border border-brand-border shadow-lg">

                                <span class="flex items-center gap-2 text-xs font-medium text-brand-textPrimary">
                                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                                    Available for work
                                </span>

                            </div>

                        </div>
                    </div>


                    <!-- Hero Text -->
                    <div class="lg:col-span-7 lg:col-start-1 order-2 lg:order-1 space-y-6">

                        <!-- Introduction -->
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-accentMuted border border-brand-accent/20 text-brand-accent text-xs font-semibold tracking-wider uppercase">

                            <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>

                            HELLO, I'M STANLEY OFFORDILE

                        </div>


                        <!-- Main Heading -->
                        <h1
                            class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-brand-textPrimary leading-tight">

                            Full-Stack Web Developer

                        </h1>


                        <!-- Description -->
                        <p class="text-lg sm:text-xl text-brand-textSecondary max-w-2xl font-normal leading-relaxed">

                            I design and build modern web applications that are fast, responsive, user-friendly, and
                            powered by reliable backend systems.

                        </p>


                        <!-- Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">

                            <a href="#projects"
                                class="px-6 py-3 text-sm font-medium text-brand-bg bg-brand-accent rounded-md hover:bg-emerald-400 transition-colors shadow-md">
                                View My Work
                            </a>

                            <a href="#contact"
                                class="px-6 py-3 text-sm font-medium text-brand-textPrimary bg-brand-surface border border-brand-border rounded-md hover:border-brand-accent/50 transition-colors">
                                Contact Me
                            </a>

                        </div>


                        <!-- Social Connectivity -->
                        <div
                            class="pt-6 border-t border-brand-border/60 flex items-center gap-6 text-brand-textSecondary">

                            <!-- GitHub -->
                            <a href="https://github.com/Gingermade65" target="_blank" rel="noopener"
                                class="hover:text-brand-accent transition-colors flex items-center gap-2 text-sm">

                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688.103-.253.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7.1.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>

                                <span>GitHub</span>

                            </a>




                            <!-- WhatsApp -->
                            <a href="https://wa.me/2348124810620" target="_blank" rel="noopener noreferrer"
                                class="hover:text-brand-accent transition-colors flex items-center gap-2 text-sm">

                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.372-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.077 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982 1-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.437-9.884 9.89-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.002 5.45-4.437 9.884-9.889 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.158 11.89c0 2.096.547 4.142 1.588 5.946L.057 24l6.304-1.654a11.87 11.87 0 005.684 1.448h.005c6.554 0 11.89-5.335 11.892-11.89a11.86 11.86 0 00-3.478-8.416" />
                                </svg>

                                <span>WhatsApp</span>

                            </a>


                            <!-- Email -->
                            <a href="mailto:stanleyaugustine422@gmail.com"
                                class="hover:text-brand-accent transition-colors flex items-center gap-2 text-sm">

                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2v10a2 2 0 002 2z" />
                                </svg>

                                <span>Email</span>

                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- About Me Section -->
        <section id="about" class="py-20 bg-brand-surface/40 border-y border-brand-border/40 reveal">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                    <div class="lg:col-span-6 space-y-6">

                        <h2 class="text-3xl font-bold tracking-tight text-brand-textPrimary">
                            About Me
                        </h2>

                        <p class="text-brand-textSecondary leading-relaxed">

                            I’m <strong class="text-brand-textPrimary">Stanley Offordile</strong>, a Full-Stack Web
                            Developer focused on creating practical and reliable web applications. I build modern,
                            responsive, and scalable solutions that combine clean user interfaces with powerful backend
                            systems.

                        </p>

                        <p class="text-brand-textSecondary leading-relaxed">

                            I am transitioning into professional web development and currently work extensively with
                            <strong>HTML, CSS, JavaScript, PHP, Laravel, MySQL, Bootstrap,</strong> and
                            <strong>Tailwind CSS</strong>. I enjoy solving complex problems, learning new technologies,
                            and building applications that provide real value.

                        </p>

                    </div>


                    <!-- Stats -->
                    <div class="lg:col-span-6">

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

                            <div class="p-6 rounded-lg bg-brand-surface border border-brand-border">

                                <span class="block text-3xl font-bold font-heading text-brand-accent">
                                    05+
                                </span>

                                <span class="text-xs text-brand-textSecondary uppercase tracking-wider mt-1 block">
                                    Projects Completed
                                </span>

                            </div>


                            <div class="p-6 rounded-lg bg-brand-surface border border-brand-border">

                                <span class="block text-3xl font-bold font-heading text-brand-accent">
                                    10+
                                </span>

                                <span class="text-xs text-brand-textSecondary uppercase tracking-wider mt-1 block">
                                    Technologies
                                </span>

                            </div>


                            <div class="p-6 rounded-lg bg-brand-surface border border-brand-border">

                                <span class="block text-3xl font-bold font-heading text-brand-accent">
                                    Full-Stack
                                </span>

                                <span class="text-xs text-brand-textSecondary uppercase tracking-wider mt-1 block">
                                    Current Focus
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- Technical Skills Section -->
        <section id="skills" class="py-20 reveal">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="space-y-4 mb-12">

                    <h2 class="text-3xl font-bold tracking-tight text-brand-textPrimary">
                        Technical Skills
                    </h2>

                    <p class="text-brand-textSecondary max-w-xl">
                        Tools, languages, and frameworks I utilize to build end-to-end applications.
                    </p>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Frontend -->
                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-4">

                        <h3 class="text-lg font-bold text-brand-textPrimary border-b border-brand-border pb-2">
                            Frontend
                        </h3>

                        <ul class="space-y-3 text-sm">

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    HTML5 / CSS3
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Semantic structure & modern layouts
                                </span>
                            </li>

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    JavaScript
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    ES6+, DOM manipulation & async logic
                                </span>
                            </li>

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    Tailwind CSS / Bootstrap
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Utility-first & component design
                                </span>
                            </li>

                        </ul>

                    </div>


                    <!-- Backend -->
                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-4">

                        <h3 class="text-lg font-bold text-brand-textPrimary border-b border-brand-border pb-2">
                            Backend
                        </h3>

                        <ul class="space-y-3 text-sm">

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    PHP
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Server-side logic & OOP patterns
                                </span>
                            </li>

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    Laravel Framework
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    MVC, Routing, Auth & Middleware
                                </span>
                            </li>

                        </ul>

                    </div>


                    <!-- Database -->
                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-4">

                        <h3 class="text-lg font-bold text-brand-textPrimary border-b border-brand-border pb-2">
                            Database
                        </h3>

                        <ul class="space-y-3 text-sm">

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    MySQL & SQL
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Relational database design & queries
                                </span>
                            </li>

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    Eloquent ORM
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Data modeling & relationship mapping
                                </span>
                            </li>

                        </ul>

                    </div>


                    <!-- Tools -->
                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-4">

                        <h3 class="text-lg font-bold text-brand-textPrimary border-b border-brand-border pb-2">
                            Tools & Environment
                        </h3>

                        <ul class="space-y-3 text-sm">

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    Git & GitHub
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Version control & collaboration
                                </span>
                            </li>

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    Composer & XAMPP
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Dependency & local server stack
                                </span>
                            </li>

                            <li>
                                <strong class="text-brand-textPrimary block">
                                    VS Code
                                </strong>

                                <span class="text-xs text-brand-textSecondary">
                                    Primary workspace environment
                                </span>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>


        <!-- Services Section -->
        <section id="services" class="py-20 bg-brand-surface/40 border-y border-brand-border/40 reveal">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="space-y-4 mb-12">

                    <h2 class="text-3xl font-bold tracking-tight text-brand-textPrimary">
                        What I Do
                    </h2>

                    <p class="text-brand-textSecondary max-w-xl">
                        Engineering functional solutions designed for usability and growth.
                    </p>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Web Development -->
                    <div
                        class="p-6 rounded-lg bg-brand-surface border border-brand-border hover:border-brand-accent/40 transition-all duration-300">

                        <h3 class="text-lg font-bold text-brand-textPrimary mb-2">
                            Web Development
                        </h3>

                        <p class="text-sm text-brand-textSecondary leading-relaxed">
                            Building responsive, modern, and cross-browser compatible web interfaces.
                        </p>

                    </div>


                    <!-- Full Stack -->
                    <div
                        class="p-6 rounded-lg bg-brand-surface border border-brand-border hover:border-brand-accent/40 transition-all duration-300">

                        <h3 class="text-lg font-bold text-brand-textPrimary mb-2">
                            Full-Stack Applications
                        </h3>

                        <p class="text-sm text-brand-textSecondary leading-relaxed">
                            Developing applications end-to-end with user interfaces, server logic, and database systems.
                        </p>

                    </div>


                    <!-- Laravel -->
                    <div
                        class="p-6 rounded-lg bg-brand-surface border border-brand-border hover:border-brand-accent/40 transition-all duration-300">

                        <h3 class="text-lg font-bold text-brand-textPrimary mb-2">
                            Laravel Development
                        </h3>

                        <p class="text-sm text-brand-textSecondary leading-relaxed">
                            Building structured and secure backend systems using Laravel, routing, ORM, authentication,
                            and database relationships.
                        </p>

                    </div>


                    <!-- Database -->
                    <div
                        class="p-6 rounded-lg bg-brand-surface border border-brand-border hover:border-brand-accent/40 transition-all duration-300">

                        <h3 class="text-lg font-bold text-brand-textPrimary mb-2">
                            Database Development
                        </h3>

                        <p class="text-sm text-brand-textSecondary leading-relaxed">
                            Designing structured database schemas, relationships, and efficient queries using MySQL.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- Projects Section -->
        <section id="projects" class="py-20 reveal">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">

                    <div>

                        <h2 class="text-3xl font-bold tracking-tight text-brand-textPrimary">
                            Featured Projects
                        </h2>

                        <p class="text-brand-textSecondary mt-1">
                            Real-world applications built with precision.
                        </p>

                    </div>


                    <!-- Project Filters -->
                    <div id="project-filters" class="flex flex-wrap gap-2">

                        <button data-filter="all"
                            class="filter-btn px-3 py-1.5 text-xs font-medium rounded-md bg-brand-accent text-brand-bg transition-colors">
                            All
                        </button>

                        <button data-filter="laravel"
                            class="filter-btn px-3 py-1.5 text-xs font-medium rounded-md bg-brand-surface border border-brand-border text-brand-textSecondary hover:text-brand-textPrimary transition-colors">
                            Laravel
                        </button>

                        <button data-filter="fullstack"
                            class="filter-btn px-3 py-1.5 text-xs font-medium rounded-md bg-brand-surface border border-brand-border text-brand-textSecondary hover:text-brand-textPrimary transition-colors">
                            Full-Stack
                        </button>

                    </div>

                </div>


                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">


                    <!-- E-Commerce -->
                    <article
                        class="project-card flex flex-col rounded-lg bg-brand-surface border border-brand-border overflow-hidden hover:border-brand-border/80 transition-all duration-300"
                        data-category="laravel fullstack">

                        <div
                            class="h-48 bg-brand-card/80 relative flex items-center justify-center border-b border-brand-border overflow-hidden group">

                            <div class="text-brand-textSecondary font-mono text-xs">
                                E-Commerce Platform
                            </div>

                            <div
                                class="absolute inset-0 bg-brand-bg/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">

                                <a href="#" target="_blank" rel="noopener"
                                    class="px-3 py-1.5 bg-brand-accent text-brand-bg text-xs font-medium rounded">
                                    Live Demo
                                </a>

                                <a href="#" target="_blank" rel="noopener"
                                    class="px-3 py-1.5 bg-brand-surface border border-brand-border text-brand-textPrimary text-xs font-medium rounded">
                                    Source Code
                                </a>

                            </div>

                        </div>


                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">

                            <div class="space-y-2">

                                <h3 class="text-xl font-bold text-brand-textPrimary">
                                    E-Commerce Platform
                                </h3>

                                <p class="text-xs text-brand-textSecondary leading-relaxed">
                                    Database-driven e-commerce application built with Laravel and MySQL featuring
                                    product
                                    catalog management, inventory tracking, authentication, and an administrative panel.
                                </p>

                            </div>


                            <div class="flex flex-wrap gap-2 pt-2 border-t border-brand-border/50">

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Laravel
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    PHP
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    MySQL
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Bootstrap
                                </span>

                            </div>

                        </div>

                    </article>


                    <!-- Reunion Platform -->
                    <article
                        class="project-card flex flex-col rounded-lg bg-brand-surface border border-brand-border overflow-hidden hover:border-brand-border/80 transition-all duration-300"
                        data-category="laravel fullstack">

                        <div
                            class="h-48 bg-brand-card/80 relative flex items-center justify-center border-b border-brand-border overflow-hidden group">

                            <div class="text-brand-textSecondary font-mono text-xs">
                                RSVP Platform
                            </div>

                            <div
                                class="absolute inset-0 bg-brand-bg/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">

                                <a href="#" target="_blank" rel="noopener"
                                    class="px-3 py-1.5 bg-brand-accent text-brand-bg text-xs font-medium rounded">
                                    Live Demo
                                </a>

                                <a href="#" target="_blank" rel="noopener"
                                    class="px-3 py-1.5 bg-brand-surface border border-brand-border text-brand-textPrimary text-xs font-medium rounded">
                                    Source Code
                                </a>

                            </div>

                        </div>


                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">

                            <div class="space-y-2">

                                <h3 class="text-xl font-bold text-brand-textPrimary">
                                    Reunion Invitation Platform
                                </h3>

                                <p class="text-xs text-brand-textSecondary leading-relaxed">
                                    Event invitation and RSVP management system allowing guests to confirm attendance
                                    while
                                    organizers manage invitees and track responses.
                                </p>

                            </div>


                            <div class="flex flex-wrap gap-2 pt-2 border-t border-brand-border/50">

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Laravel
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Tailwind CSS
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Blade
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    MySQL
                                </span>

                            </div>

                        </div>

                    </article>


                    <!-- Student Management -->
                    <article
                        class="project-card flex flex-col rounded-lg bg-brand-surface border border-brand-border overflow-hidden hover:border-brand-border/80 transition-all duration-300"
                        data-category="laravel">

                        <div
                            class="h-48 bg-brand-card/80 relative flex items-center justify-center border-b border-brand-border overflow-hidden group">

                            <div class="text-brand-textSecondary font-mono text-xs">
                                Management System
                            </div>

                            <div
                                class="absolute inset-0 bg-brand-bg/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-3">

                                <a href="#" target="_blank" rel="noopener"
                                    class="px-3 py-1.5 bg-brand-accent text-brand-bg text-xs font-medium rounded">
                                    Live Demo
                                </a>

                                <a href="#" target="_blank" rel="noopener"
                                    class="px-3 py-1.5 bg-brand-surface border border-brand-border text-brand-textPrimary text-xs font-medium rounded">
                                    Source Code
                                </a>

                            </div>

                        </div>


                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">

                            <div class="space-y-2">

                                <h3 class="text-xl font-bold text-brand-textPrimary">
                                    Student Management System
                                </h3>

                                <p class="text-xs text-brand-textSecondary leading-relaxed">
                                    Administrative system for managing student records, course batches, and payment
                                    information using structured relational database design.
                                </p>

                            </div>


                            <div class="flex flex-wrap gap-2 pt-2 border-t border-brand-border/50">

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Laravel
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Filament
                                </span>

                                <span
                                    class="px-2 py-0.5 text-[10px] font-mono rounded bg-brand-card text-brand-textSecondary">
                                    Bootstrap
                                </span>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        <!-- Development Process Section -->
        <section id="process" class="py-20 bg-brand-surface/40 border-y border-brand-border/40 reveal">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="space-y-4 mb-12">

                    <h2 class="text-3xl font-bold tracking-tight text-brand-textPrimary">
                        How I Work
                    </h2>

                    <p class="text-brand-textSecondary max-w-xl">
                        A systematic approach to producing dependable applications.
                    </p>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-2">

                        <span class="text-brand-accent font-mono text-xs font-bold">
                            01
                        </span>

                        <h3 class="text-lg font-bold text-brand-textPrimary">
                            Understand
                        </h3>

                        <p class="text-xs text-brand-textSecondary leading-relaxed">
                            Analyze application goals, technical constraints, and data requirements.
                        </p>

                    </div>


                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-2">

                        <span class="text-brand-accent font-mono text-xs font-bold">
                            02
                        </span>

                        <h3 class="text-lg font-bold text-brand-textPrimary">
                            Design
                        </h3>

                        <p class="text-xs text-brand-textSecondary leading-relaxed">
                            Structure relational database models, API endpoints, and clean UI components.
                        </p>

                    </div>


                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-2">

                        <span class="text-brand-accent font-mono text-xs font-bold">
                            03
                        </span>

                        <h3 class="text-lg font-bold text-brand-textPrimary">
                            Develop
                        </h3>

                        <p class="text-xs text-brand-textSecondary leading-relaxed">
                            Write clean, maintainable PHP/Laravel backend logic and frontend templates.
                        </p>

                    </div>


                    <div class="p-6 rounded-lg bg-brand-surface border border-brand-border space-y-2">

                        <span class="text-brand-accent font-mono text-xs font-bold">
                            04
                        </span>

                        <h3 class="text-lg font-bold text-brand-textPrimary">
                            Deliver
                        </h3>

                        <p class="text-xs text-brand-textSecondary leading-relaxed">
                            Validate security, optimize queries, test functionality, and deploy.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- Contact Section -->
        <section id="contact" class="py-20 reveal">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">


                    <!-- Contact Information -->
                    <div class="lg:col-span-5 space-y-6">

                        <h2 class="text-3xl font-bold tracking-tight text-brand-textPrimary">
                            Let's Build Something Together
                        </h2>

                        <p class="text-brand-textSecondary leading-relaxed">
                            Have a project, idea, or opportunity you'd like to discuss? Send me a message and I'll get
                            back
                            to you.
                        </p>


                        <div class="space-y-4 pt-4">

                            <!-- Email -->
                            <div class="flex items-start gap-4">

                                <div
                                    class="p-2.5 rounded bg-brand-surface border border-brand-border text-brand-accent">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>

                                </div>

                                <div>

                                    <span class="block text-xs text-brand-textSecondary">
                                        Direct Email
                                    </span>

                                    <a href="mailto:stanleyaugustine422@gmail.com"
                                        class="text-sm font-medium text-brand-textPrimary hover:text-brand-accent">
                                        stanleyaugustine422@gmail.com
                                    </a>

                                </div>

                            </div>


                            <!-- WhatsApp -->
                            <div class="flex items-start gap-4">

                                <div
                                    class="p-2.5 rounded bg-brand-surface border border-brand-border text-brand-accent">

                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.075-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.626.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                                        <path
                                            d="M12.004 2C6.479 2 2 6.477 2 12c0 1.77.463 3.43 1.273 4.874L2 22l5.273-1.273A9.96 9.96 0 0 0 12.004 22C17.523 22 22 17.523 22 12S17.523 2 12.004 2zm0 18c-1.655 0-3.197-.447-4.533-1.224l-.324-.191-3.131.755.755-3.131-.191-.324A7.96 7.96 0 0 1 4.004 12c0-4.418 3.582-8 8-8s7.996 3.582 7.996 8-3.578 8-7.996 8z" />
                                    </svg>

                                </div>

                                <div>

                                    <span class="block text-xs text-brand-textSecondary">
                                        WhatsApp
                                    </span>

                                    <a href="https://wa.me/2348124810620" target="_blank" rel="noopener noreferrer"
                                        class="text-sm font-medium text-brand-textPrimary hover:text-brand-accent">
                                        08124810620
                                    </a>

                                </div>

                            </div>


                            <!-- Location -->
                            <div class="flex items-start gap-4">

                                <div
                                    class="p-2.5 rounded bg-brand-surface border border-brand-border text-brand-accent">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                </div>

                                <div>

                                    <span class="block text-xs text-brand-textSecondary">
                                        Location
                                    </span>

                                    <span class="text-sm font-medium text-brand-textPrimary">
                                        Nigeria
                                    </span>

                                </div>

                            </div>


                            <!-- Availability -->
                            <div class="flex items-start gap-4">

                                <div
                                    class="p-2.5 rounded bg-brand-surface border border-brand-border text-brand-accent">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </div>

                                <div>

                                    <span class="block text-xs text-brand-textSecondary">
                                        Availability
                                    </span>

                                    <span class="text-sm font-medium text-brand-textPrimary">
                                        Open for freelance & full-time developer roles
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>




                    <!-- Contact Form -->
                    <div class="lg:col-span-7">

                        <form id="contact-form"
                            class="p-8 rounded-lg bg-brand-surface border border-brand-border space-y-6" novalidate>

                            <div id="form-status" class="hidden p-4 rounded-md text-sm"></div>


                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                                <div class="space-y-2">

                                    <label for="name"
                                        class="block text-xs font-medium text-brand-textPrimary uppercase tracking-wider">
                                        Your Name <span class="text-brand-accent">*</span>
                                    </label>

                                    <input type="text" id="name" name="name" required
                                        placeholder="Your Name"
                                        class="w-full px-4 py-3 rounded-md bg-brand-bg border border-brand-border text-brand-textPrimary placeholder-brand-textSecondary focus:outline-none focus:border-brand-accent text-sm">

                                    <span class="error-msg text-xs text-red-400 hidden">
                                        Name is required.
                                    </span>

                                </div>


                                <div class="space-y-2">

                                    <label for="email"
                                        class="block text-xs font-medium text-brand-textPrimary uppercase tracking-wider">
                                        Your Email <span class="text-brand-accent">*</span>
                                    </label>

                                    <input type="email" id="email" name="email" required
                                        placeholder="your@email.com"
                                        class="w-full px-4 py-3 rounded-md bg-brand-bg border border-brand-border text-brand-textPrimary placeholder-brand-textSecondary focus:outline-none focus:border-brand-accent text-sm">

                                    <span class="error-msg text-xs text-red-400 hidden">
                                        Valid email is required.
                                    </span>

                                </div>

                            </div>


                            <div class="space-y-2">

                                <label for="subject"
                                    class="block text-xs font-medium text-brand-textPrimary uppercase tracking-wider">
                                    Subject <span class="text-brand-accent">*</span>
                                </label>

                                <input type="text" id="subject" name="subject" required
                                    placeholder="What would you like to discuss?"
                                    class="w-full px-4 py-3 rounded-md bg-brand-bg border border-brand-border text-brand-textPrimary placeholder-brand-textSecondary focus:outline-none focus:border-brand-accent text-sm">

                                <span class="error-msg text-xs text-red-400 hidden">
                                    Subject is required.
                                </span>

                            </div>


                            <div class="space-y-2">

                                <label for="message"
                                    class="block text-xs font-medium text-brand-textPrimary uppercase tracking-wider">
                                    Message <span class="text-brand-accent">*</span>
                                </label>

                                <textarea id="message" name="message" rows="5" required placeholder="Tell me about your project..."
                                    class="w-full px-4 py-3 rounded-md bg-brand-bg border border-brand-border text-brand-textPrimary placeholder-brand-textSecondary focus:outline-none focus:border-brand-accent text-sm resize-y"></textarea>

                                <span class="error-msg text-xs text-red-400 hidden">
                                    Message must be at least 10 characters.
                                </span>

                            </div>


                            <button type="submit" id="submit-btn"
                                class="w-full sm:w-auto px-8 py-3 text-sm font-medium text-brand-bg bg-brand-accent rounded-md hover:bg-emerald-400 transition-colors shadow-md flex items-center justify-center gap-2">

                                <span id="btn-text">
                                    Send Message
                                </span>

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="border-t border-brand-border bg-brand-bg py-12">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">

            <!-- Brand -->
            <div>

                <span class="font-heading font-bold text-lg text-brand-textPrimary">
                    Ginger<span class="text-brand-accent">.</span>
                </span>

                <p class="text-xs text-brand-textSecondary mt-1">
                    Stanley Offordile — Full-Stack Web Developer
                </p>

            </div>


            <!-- Footer Navigation -->
            <div class="flex items-center gap-6 text-xs text-brand-textSecondary">

                <a href="#home" class="hover:text-brand-accent">
                    Home
                </a>

                <a href="#about" class="hover:text-brand-accent">
                    About
                </a>

                <a href="#skills" class="hover:text-brand-accent">
                    Skills
                </a>

                <a href="#projects" class="hover:text-brand-accent">
                    Projects
                </a>

                <a href="#contact" class="hover:text-brand-accent">
                    Contact
                </a>

            </div>


            <!-- Copyright -->
            <div class="text-xs text-brand-textSecondary text-center md:text-right">

                <p>
                    &copy; 2026 Stanley Offordile. All rights reserved.
                </p>

                <p class="mt-0.5 text-[10px] text-brand-textSecondary/70">
                    Built with HTML, CSS, JavaScript & Laravel
                </p>

            </div>

        </div>

    </footer>

    <!-- Interactive Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // 1. Mobile Menu State Toggle
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIconOpen = document.getElementById('menu-icon-open');
            const menuIconClose = document.getElementById('menu-icon-close');
            const navLinks = document.querySelectorAll('.mobile-nav-link');

            function toggleMenu() {
                const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
                menuBtn.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuIconOpen.classList.toggle('hidden');
                menuIconClose.classList.toggle('hidden');
            }

            menuBtn.addEventListener('click', toggleMenu);
            navLinks.forEach(link => link.addEventListener('click', toggleMenu));

            // 2. Navbar Styling on Scroll
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    navbar.classList.add('border-brand-border', 'py-3');
                    navbar.classList.remove('py-5', 'border-transparent');
                } else {
                    navbar.classList.remove('border-brand-border', 'py-3');
                    navbar.classList.add('py-5', 'border-transparent');
                }
            });

            // 3. Project Filter Algorithm
            const filterBtns = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-brand-accent', 'text-brand-bg');
                        b.classList.add('bg-brand-surface', 'border', 'border-brand-border',
                            'text-brand-textSecondary');
                    });
                    btn.classList.add('bg-brand-accent', 'text-brand-bg');
                    btn.classList.remove('bg-brand-surface', 'border', 'border-brand-border',
                        'text-brand-textSecondary');

                    const filter = btn.getAttribute('data-filter');
                    projectCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category').includes(
                                filter)) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // 4. Scroll Reveal (IntersectionObserver)
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

            // 5. Asynchronous Contact Form Handler
            const form = document.getElementById('contact-form');
            const submitBtn = document.getElementById('submit-btn');
            const btnText = document.getElementById('btn-text');
            const formStatus = document.getElementById('form-status');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                let isValid = true;

                // Simple Client Validation
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const subject = document.getElementById('subject');
                const message = document.getElementById('message');

                function validateField(field, condition) {
                    const errorEl = field.nextElementSibling;
                    if (!condition) {
                        errorEl.classList.remove('hidden');
                        field.classList.add('border-red-400');
                        isValid = false;
                    } else {
                        errorEl.classList.add('hidden');
                        field.classList.remove('border-red-400');
                    }
                }

                validateField(name, name.value.trim() !== '');
                validateField(email, /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim()));
                validateField(subject, subject.value.trim() !== '');
                validateField(message, message.value.trim().length >= 10);

                if (!isValid) return;

                // UI Loading State
                submitBtn.disabled = true;
                btnText.textContent = "Sending...";
                formStatus.classList.add('hidden');

                const formData = {
                    name: name.value.trim(),
                    email: email.value.trim(),
                    subject: subject.value.trim(),
                    message: message.value.trim()
                };

                try {
                    const response = await fetch(window.PORTFOLIO_CONFIG.apiEndpoint, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify(formData)
                    });

                    if (response.ok) {
                        formStatus.className =
                            "p-4 rounded-md text-sm bg-emerald-500/10 border border-emerald-500/20 text-emerald-400";

                        formStatus.textContent =
                            "Thanks for reaching out! Your message has been received. I'll get back to you as soon as possible.";

                        formStatus.classList.remove('hidden');
                        form.reset();
                        btnText.textContent = "Message Sent";
                    } else {
                        throw new Error('Server returned an error.');
                    }

                } catch (error) {
                    formStatus.className =
                        "p-4 rounded-md text-sm bg-red-500/10 border border-red-500/20 text-red-400";

                    formStatus.textContent =
                        "Something went wrong. Please try again or email directly.";

                    formStatus.classList.remove('hidden');
                    btnText.textContent = "Send Message";

                } finally {
                    submitBtn.disabled = false;
                }
            });
        });
    </script>
</body>

</html>
