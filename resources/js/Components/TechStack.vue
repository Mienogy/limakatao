<script setup>
const techs = [
    {
        name: 'Laravel',
        description: 'Enterprise PHP framework for robust backend development, REST APIs, and scalable systems.',
        icon: 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5',
    },
    {
        name: 'Vue.js',
        description: 'Progressive JavaScript framework for building dynamic, reactive user interfaces and SPAs.',
        icon: 'M20.7 3.3l-1.4 1.4a8 8 0 010 10.6l-1.4 1.4a10 10 0 000-13.4zM3.3 20.7l1.4-1.4a8 8 0 010-10.6l1.4-1.4a10 10 0 000 13.4zM14.9 9.1l-1.4 1.4a2 2 0 010 2.8l-1.4 1.4a4 4 0 000-5.6z',
    },
    {
        name: 'Shopify',
        description: 'Custom store development, theme customization, and app integration for e-commerce.',
        icon: 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z',
    },
    {
        name: 'WooCommerce',
        description: 'WordPress e-commerce solutions with custom plugins and payment gateway integrations.',
        icon: 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
    },
    {
        name: 'Tailwind CSS',
        description: 'Utility-first CSS framework for rapid, responsive, and maintainable UI design.',
        icon: 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01',
    },
    {
        name: 'REST APIs',
        description: 'Scalable API development, third-party service integrations, and webhook systems.',
        icon: 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z',
    },
    {
        name: 'MySQL / PostgreSQL',
        description: 'Database design, optimization, migration, and high-performance query architecture.',
        icon: 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4',
    },
    {
        name: 'AI Integration',
        description: 'AI-powered chatbots, semantic search, document processing, and intelligent automation.',
        icon: 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z',
    },
];
</script>

<template>
    <section id="tech" class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-sm font-semibold text-blue-600 uppercase tracking-widest">Our Stack</span>
                <h2 class="mt-3 text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight">
                    Technologies We Master
                </h2>
                <p class="mt-4 text-lg text-slate-500 leading-relaxed">
                    Modern, battle-tested technologies to build applications that are fast, secure, and scalable.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div
                    v-for="(tech, i) in techs"
                    :key="i"
                    class="group bg-white rounded-xl border border-slate-200 p-6 hover:border-blue-200 hover:shadow-md transition-all duration-200 text-center"
                >
                    <div class="w-12 h-12 mx-auto rounded-xl bg-blue-50 text-slate-600 flex items-center justify-center mb-4 group-hover:bg-blue-100 group-hover:text-blue-600 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="tech.icon" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-slate-900 mb-1">{{ tech.name }}</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">{{ tech.description }}</p>
                </div>
            </div>
        </div>
    </section>
</template>
