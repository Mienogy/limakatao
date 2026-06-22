<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    message: '',
});

const submitted = ref(false);

const socials = [
    {
        name: 'Outlook',
        href: 'mailto:limakatao@outlook.com',
        icon: 'M21.5 2.5H2.5v19h19v-19zM2.5 2.5L12 11l9.5-8.5M2.5 10.26v8.74h19v-8.74l-9.5 6.1-9.5-6.1z',
        label: 'limakatao@outlook.com',
    },
    {
        name: 'Gmail',
        href: 'mailto:limakataodev@gmail.com',
        icon: 'M21.5 2.5H2.5v19h19v-19zM2.5 2.5L12 12l9.5-9.5M3 21h18v-1l-9-6-9 6v1z',
        label: 'limakataodev@gmail.com',
    },
    {
        name: 'GitHub',
        href: 'https://github.com/LimakataoDev',
        icon: 'M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z',
        label: 'github.com/LimakataoDev',
    },
    {
        name: 'LinkedIn',
        href: 'https://linkedin.com/company/limakatao',
        icon: 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z',
        label: 'linkedin.com/company/limakatao',
    },
];

function submit() {
    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => {
            submitted.value = true;
            form.reset();
        },
    });
}
</script>

<template>
    <section id="contact" class="py-20 lg:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-sm font-semibold text-blue-600 uppercase tracking-widest">Get in Touch</span>
                    <h2 class="mt-3 text-3xl lg:text-5xl font-extrabold text-gray-900 tracking-tight">
                        Let's Build Something Great
                    </h2>
                    <p class="mt-5 text-lg text-gray-500 leading-relaxed">
                        Have a project in mind? We'd love to hear about it. Send us a message
                        and we'll get back to you within 24 hours.
                    </p>
                </div>

                <div class="grid lg:grid-cols-5 gap-8">
                    <div class="lg:col-span-3">
                        <div v-if="submitted" class="bg-green-50 border border-green-200 rounded-2xl p-8 text-center">
                            <div class="w-16 h-16 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Message Sent!</h3>
                            <p class="text-gray-600">Thank you for reaching out. We'll get back to you shortly.</p>
                            <button @click="submitted = false" class="mt-6 text-sm font-medium text-blue-600 hover:text-blue-700">Send another message</button>
                        </div>

                        <form v-else @submit.prevent="submit" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 sm:p-8">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="name">Full Name</label>
                                    <input id="name" v-model="form.name" type="text" required
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow outline-none"
                                        placeholder="John Doe" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Email Address</label>
                                    <input id="email" v-model="form.email" type="email" required
                                        class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow outline-none"
                                        placeholder="john@company.com" />
                                </div>
                            </div>
                            <div class="mb-5">
                                <label class="block text-sm font-medium text-gray-700 mb-2" for="message">Message</label>
                                <textarea id="message" v-model="form.message" rows="5" required
                                    class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-shadow outline-none resize-none"
                                    placeholder="Tell us about your project, requirements, and timeline..."></textarea>
                            </div>
                            <button type="submit" :disabled="form.processing"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3.5 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all shadow-lg hover:shadow-xl disabled:opacity-50">
                                <svg v-if="form.processing" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Send Message
                            </button>
                        </form>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 h-full">
                            <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-5">Connect With Us</h3>
                            <div class="space-y-4">
                                <a v-for="social in socials" :key="social.name" :href="social.href" target="_blank"
                                    class="flex items-center gap-4 p-3 rounded-xl hover:bg-gray-50 transition-colors group"
                                >
                                    <div class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-100 text-gray-500 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path :d="social.icon" />
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="text-sm font-medium text-gray-900">{{ social.name }}</div>
                                        <div class="text-xs text-gray-500 truncate">{{ social.label }}</div>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="mt-8 pt-6 border-t border-gray-100">
                                <div class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Response Time</div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Within 24 hours
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
