<script setup>
function scrollTo(id) {
    const el = document.getElementById(id);
    if (el) el.scrollIntoView({ behavior: 'smooth' });
}
</script>

<template>
    <section class="py-20 lg:py-28 bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white tracking-tight">
                Ready to Build Your Next Project?
            </h2>
            <p class="mt-4 text-lg text-slate-400 leading-relaxed max-w-2xl mx-auto">
                Whether you need a custom LMS, an e-commerce platform, or an AI-powered business tool —
                we're ready to bring your vision to life.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <button @click="scrollTo('contact')" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-slate-900 bg-white rounded-lg hover:bg-slate-100 transition-colors">
                    Start Your Project
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
                <button @click="scrollTo('services')" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-slate-300 border border-slate-700 rounded-lg hover:border-slate-500 hover:text-white transition-colors">
                    Browse Services
                </button>
            </div>
        </div>
    </section>
</template>
