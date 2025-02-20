<!-- resources/views/components/project-section.blade.php -->
<section id="projects" class="py-20 bg-pink-100 h-min-screen">
    <div class="container mx-auto px-4 max-w-screen-lg">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out">
            <span class="text-red-500 font-medium">My Work</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Featured Projects</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Explore my portfolio of data-driven projects, where I transform complex datasets into meaningful insights and solutions.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out">
                <div class="relative">
                    <img src="{{ asset('img/project-1.png') }}" alt="Project 1" class="w-full h-48 object-cover" />
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-red-500 text-white text-sm rounded-full">Data Analysis</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Customer Segmentation Analysis
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Leveraged Python and SQL to analyze customer behavior patterns and create targeted marketing strategies.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Python</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">SQL</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Tableau</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-red-500 hover:text-red-600 transition-colors duration-300">
                        View Project
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Project Card 2 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out delay-100">
                <div class="relative">
                    <img src="{{ asset('img/project-2.png') }}" alt="Project 2" class="w-full h-48 object-cover" />
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-red-500 text-white text-sm rounded-full">Dashboard</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Sales Performance Dashboard
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Created an interactive dashboard using Looker Studio to track and visualize sales metrics in real-time.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Looker Studio</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">BigQuery</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Data Studio</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-red-500 hover:text-red-600 transition-colors duration-300">
                        View Project
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Project Card 3 -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out delay-200">
                <div class="relative">
                    <img src="{{ asset('img/project-3.png') }}" alt="Project 3" class="w-full h-48 object-cover" />
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-red-500 text-white text-sm rounded-full">Machine Learning</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                        Predictive Analytics Model
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Developed a machine learning model to predict customer churn with 85% accuracy.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Python</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Scikit-learn</span>
                        <span class="px-2 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">TensorFlow</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-red-500 hover:text-red-600 transition-colors duration-300">
                        View Project
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        {{-- <!-- View All Projects Button -->
        <div class="text-center mt-12 animate-on-scroll opacity-0 transform translate-y-10 transition-all duration-700 ease-out delay-300">
            <a href="#" class="inline-flex items-center px-6 py-3 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                View All Projects
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div> --}}
    </div>
</section>

<!-- Add this script at the end of your body tag if not already present -->
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

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>
