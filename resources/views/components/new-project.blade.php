@php
$projects = [
    [
        'title' => 'Laravel CMS',
        'description' => 'Sistem manajemen konten dengan animasi transisi menggunakan GSAP.',
        'image' => '/images/project1.jpg',
        'url' => '#'
    ],
    [
        'title' => 'Portfolio Builder',
        'description' => 'Builder portfolio interaktif dengan scrolling halus pakai Lenis.',
        'image' => '/images/project2.jpg',
        'url' => '#'
    ],
    [
        'title' => 'E-commerce API',
        'description' => 'API Laravel untuk toko online dengan autentikasi dan efek animasi login.',
        'image' => '/images/project3.jpg',
        'url' => '#'
    ],
    [
        'title' => 'Laravel CMS',
        'description' => 'Sistem manajemen konten dengan animasi transisi menggunakan GSAP.',
        'image' => '/images/project1.jpg',
        'url' => '#'
    ],
    [
        'title' => 'Portfolio Builder',
        'description' => 'Builder portfolio interaktif dengan scrolling halus pakai Lenis.',
        'image' => '/images/project2.jpg',
        'url' => '#'
    ],
    [
        'title' => 'E-commerce API',
        'description' => 'API Laravel untuk toko online dengan autentikasi dan efek animasi login.',
        'image' => '/images/project3.jpg',
        'url' => '#'
    ],
];
@endphp

<section class="bg-gray-100 py-16" id="projects">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">🚀 My Laravel Projects</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 project-card">
                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 mb-4">{{ $project['description'] }}</p>
                    <a href="{{ $project['url'] }}" class="text-indigo-600 font-medium hover:underline">Lihat Detail →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        gsap.from(".project-card", {
            opacity: 0,
            y: 60,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out"
        });
    });
</script>
@endpush

