<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const scrolled = ref(false);
const mobileOpen = ref(false);

function onScroll() {
    scrolled.value = window.scrollY > 50;
}

onMounted(() => window.addEventListener('scroll', onScroll));
onUnmounted(() => window.removeEventListener('scroll', onScroll));

function scrollTo(id) {
    mobileOpen.value = false;
    const el = document.getElementById(id);
    if (el) el.scrollIntoView({ behavior: 'smooth' });
}
</script>

<template>
    <nav
        :class="[
            'fixed top-0 left-0 right-0 z-50 transition-all duration-300',
            scrolled
                ? 'bg-white/95 backdrop-blur-md shadow-sm border-b border-slate-200'
                : 'bg-transparent'
        ]"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <a href="/" class="flex items-center gap-2 shrink-0">
                    <img src="/images/limakatao-logo.png" alt="Limakatao Logo"
                        :class="['h-8 lg:h-10 w-auto transition-all duration-300', scrolled ? '' : 'brightness-0 invert']" />
                </a>

                <div class="hidden lg:flex items-center gap-8">
                    <button @click="scrollTo('about')"
                        :class="['text-sm font-medium transition-colors', scrolled ? 'text-slate-600 hover:text-blue-600' : 'text-slate-400 hover:text-white']">
                        About
                    </button>
                    <button @click="scrollTo('services')"
                        :class="['text-sm font-medium transition-colors', scrolled ? 'text-slate-600 hover:text-blue-600' : 'text-slate-400 hover:text-white']">
                        Services
                    </button>
                    <button @click="scrollTo('tech')"
                        :class="['text-sm font-medium transition-colors', scrolled ? 'text-slate-600 hover:text-blue-600' : 'text-slate-400 hover:text-white']">
                        Tech Stack
                    </button>
                    <button @click="scrollTo('contact')"
                        :class="['text-sm font-medium transition-colors', scrolled ? 'text-slate-600 hover:text-blue-600' : 'text-slate-400 hover:text-white']">
                        Contact
                    </button>
                    <a href="#contact"
                        :class="['inline-flex items-center px-4 py-2 text-sm font-semibold rounded-lg transition-colors', scrolled ? 'text-white bg-blue-600 hover:bg-blue-500' : 'text-slate-900 bg-white hover:bg-slate-200']">
                        Get in Touch
                    </a>
                </div>

                <button @click="mobileOpen = !mobileOpen" :class="['lg:hidden p-2', scrolled ? 'text-slate-600' : 'text-white']">
                    <svg v-if="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <div v-if="mobileOpen" class="lg:hidden bg-white border-t border-slate-100 shadow-lg">
            <div class="px-4 py-4 space-y-3">
                <button @click="scrollTo('about')" class="block w-full text-left px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 rounded-lg">About</button>
                <button @click="scrollTo('services')" class="block w-full text-left px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 rounded-lg">Services</button>
                <button @click="scrollTo('tech')" class="block w-full text-left px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 rounded-lg">Tech Stack</button>
                <button @click="scrollTo('contact')" class="block w-full text-left px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50 rounded-lg">Contact</button>
                <a href="#contact" class="block text-center px-4 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-500 transition-colors">Get in Touch</a>
            </div>
        </div>
    </nav>
</template>
