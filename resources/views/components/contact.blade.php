<section id="contact" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-screen-lg">
        <!-- Section Header -->
        <div
            class="text-center mb-16 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out">
            <span class="text-red-500 font-medium">Get in Touch</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Contact Me</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                I'm based in Jakarta Barat, Indonesia. Whether you have a project in mind or just want to say hi, feel
                free to reach out!
            </p>
        </div>

        <!-- Contact Details & Form -->
        <div class="flex flex-col md:flex-row gap-8 justify-center items-center">
            <!-- Contact Information Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out mx-auto w-full md:w-[64rem] text-center">
                <div class="p-8 flex flex-col items-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-red-500 mr-3"></i>
                            <span class="text-gray-700">Jakarta Barat, Indonesia</span>
                        </li>
                        <li class="flex items-center justify-center">
                            <i class="fa-brands fa-linkedin text-red-500 mr-3"></i>
                            <a href="https://www.linkedin.com/in/nabila-lailinajma/" target="_blank"
                                class="text-red-500 hover:underline">linkedin.com/in/nabila-lailinajma</a>
                        </li>
                        <li class="flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-red-500 mr-3"></i>
                            <a href="mailto:nabilasworks@gmail.com"
                                class="text-red-500 hover:underline">nabilasworks@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animation Script (if not already included in your main layout) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
    });
</script>
