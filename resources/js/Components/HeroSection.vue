<script setup>
import { ref, onMounted } from 'vue';

const stats = [
    { value: 0, target: 50, suffix: '+', label: 'Projects Delivered' },
    { value: 0, target: 5, suffix: '+', label: 'Years Experience' },
    { value: 0, target: 100, suffix: '%', label: 'Client Satisfaction' },
    { value: 0, target: 13, suffix: '+', label: 'Service Categories' },
];

function animateStats() {
    stats.forEach((stat, i) => {
        const step = Math.ceil(stat.target / 60);
        const interval = setInterval(() => {
            stat.value += step;
            if (stat.value >= stat.target) {
                stat.value = stat.target;
                clearInterval(interval);
            }
        }, 30 + i * 10);
    });
}

onMounted(() => {
    setTimeout(animateStats, 500);
});

function scrollTo(id) {
    const el = document.getElementById(id);
    if (el) el.scrollIntoView({ behavior: 'smooth' });
}
</script>

<template>
    <section class="relative min-h-screen flex items-center bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, #e2e8f0 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-900/20 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 lg:py-40">
            <div class="max-w-3xl">
                <div class="flex items-center gap-3 mb-8">
                    <img src="/images/limakatao-logo.png" alt="Limakatao" class="h-14 w-auto brightness-0 invert" />
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-none tracking-tight">
                    Full-Stack<br>Web Development
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-slate-400 leading-relaxed max-w-lg">
                    We build modern, scalable web applications — from LMS and HR systems to
                    e-commerce platforms. Powered by AI-assisted development for faster,
                    higher-quality delivery.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <button @click="scrollTo('services')" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-500 transition-colors">
                        View Our Services
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                    <button @click="scrollTo('contact')" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-slate-300 border border-slate-700 rounded-lg hover:border-slate-500 hover:text-white transition-colors">
                        Get in Touch
                    </button>
                </div>

                <div class="mt-16 grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div v-for="(stat, i) in stats" :key="i">
                        <div class="text-3xl lg:text-4xl font-bold text-white mb-1">{{ stat.value }}{{ stat.suffix }}</div>
                        <div class="text-sm text-slate-500">{{ stat.label }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
        </div>
    </section>
</template>
