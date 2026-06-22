<script setup>
const benefits = [
    {
        title: 'Full-Stack Expertise',
        description: 'Mastery in Laravel, Vue.js, Shopify, and WooCommerce — we handle every layer of your application stack.',
        icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
    },
    {
        title: 'End-to-End Development',
        description: 'From requirements analysis to deployment and ongoing maintenance — complete, worry-free delivery.',
        icon: 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm0 8a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zm12 0a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
    },
    {
        title: 'AI-Assisted Workflow',
        description: 'We leverage modern AI tools to accelerate development, reduce errors, and produce higher-quality code.',
        icon: 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z',
    },
    {
        title: 'Fast Delivery',
        description: 'Agile sprints and efficient workflows mean we ship quality products faster than industry standards.',
        icon: 'M13 10V3L4 14h7v7l9-11h-7z',
    },
    {
        title: 'Scalable Architecture',
        description: 'Clean, tested codebases designed to grow seamlessly with your business — no rewrites needed.',
        icon: 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4',
    },
    {
        title: 'Mobile-First Design',
        description: 'Every application is built responsively — flawless experience across desktop, tablet, and mobile.',
        icon: 'M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
    },
    {
        title: 'Ongoing Support',
        description: 'Post-launch maintenance, bug fixes, feature enhancements, and dedicated technical support.',
        icon: 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',
    },
    {
        title: 'Cost-Effective',
        description: 'Competitive pricing without compromising quality — maximum value for every investment.',
        icon: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
    },
];
</script>

<template>
    <section id="about" class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-sm font-semibold text-blue-600 uppercase tracking-widest">Why Choose Us</span>
                <h2 class="mt-3 text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight">
                    Built for Your Success
                </h2>
                <p class="mt-4 text-lg text-slate-500 leading-relaxed">
                    We combine deep technical expertise with AI-powered workflows to deliver
                    web applications that drive measurable business results.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-100 rounded-2xl overflow-hidden">
                <div
                    v-for="(item, i) in benefits"
                    :key="i"
                    class="group bg-white p-8 hover:bg-blue-50/30 transition-colors duration-300"
                >
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-100 text-slate-500 group-hover:bg-blue-100 group-hover:text-blue-600 transition-colors duration-300 mb-5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="item.icon" />
                        </svg>
                    </div>
                    <h3 class="text-base font-semibold text-slate-900 mb-2">{{ item.title }}</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">{{ item.description }}</p>
                </div>
            </div>
        </div>
    </section>
</template>
