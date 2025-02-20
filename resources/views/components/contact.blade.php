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
        <div class="flex flex-cols-1 md:flex-cols-2 gap-8">
            <!-- Contact Information Card -->
            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out mx-auto">
                <div class="p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Contact Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <!-- Location Icon using Font Awesome -->
                            <i class="fa-solid fa-location-dot text-red-500 mr-3"></i>
                            <span class="text-gray-700">Jakarta Barat, Indonesia</span>
                        </li>
                        <li class="flex items-center">
                            <!-- LinkedIn Icon using Font Awesome -->
                            <i class="fa-brands fa-linkedin text-red-500 mr-3"></i>
                            <a href="https://www.linkedin.com/in/nabila-lailinajma/" target="_blank"
                                class="text-red-500 hover:underline">linkedin.com/in/nabila-lailinajma</a>
                        </li>
                        <li class="flex items-center">
                            <!-- Email Icon using Font Awesome -->
                            <i class="fa-solid fa-envelope text-red-500 mr-3"></i>
                            <a href="mailto:nabilasworks@gmail.com"
                                class="text-red-500 hover:underline">nabilasworks@gmail.com</a>
                        </li>
                        {{-- <li class="flex items-center">
                            <!-- Phone Icon using Font Awesome -->
                            <i class="fa-solid fa-phone text-red-500 mr-3"></i>
                            <span class="text-gray-700">+62 123 4567 890</span>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <!-- Contact Form Card -->
            {{-- <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out delay-100">
                <div class="p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Send a Message</h3>
                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <input type="text" name="name" placeholder="Your Name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring focus:border-red-500">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Your Email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring focus:border-red-500">
                        </div>
                        <div>
                            <textarea name="message" rows="4" placeholder="Your Message" required
                                class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring focus:border-red-500"></textarea>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-red-500 text-white font-bold py-3 rounded hover:bg-red-600 transition-all duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div> --}}
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
