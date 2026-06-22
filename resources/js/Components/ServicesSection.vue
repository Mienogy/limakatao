<script setup>
import { ref } from 'vue';

const activeCategory = ref(null);

const categories = [
    {
        title: 'Custom Software Development',
        description: 'Tailored web applications built to meet your unique business requirements.',
        icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
        items: [
            'Custom Web Applications', 'Enterprise Web Applications', 'SaaS Platform Development',
            'Multi-Tenant Applications', 'Business Process Automation', 'Workflow Management Systems',
            'Internal Management Portals', 'Customer Self-Service Portals', 'Membership Systems',
            'Subscription-Based Platforms',
        ],
    },
    {
        title: 'Learning & Education',
        description: 'Comprehensive platforms for online learning, training, and educational management.',
        icon: 'M12 14l9-5-9-5-9 5 9 5zm0 7l-9-5 9-5 9 5-9 5z',
        items: [
            'Learning Management Systems (LMS)', 'Online Course Platforms', 'Employee Training Systems',
            'Student Information Systems', 'Assessment & Examination Platforms', 'Certification Systems',
            'Continuing Education Platforms',
        ],
    },
    {
        title: 'HR & Workforce Solutions',
        description: 'Streamline your human resources processes with powerful management tools.',
        icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        items: [
            'HR Management Systems', 'Employee Information Systems', 'Attendance & Timekeeping',
            'Leave Management Systems', 'Performance Evaluation', 'Recruitment & Applicant Tracking',
            'Employee Onboarding', 'Workforce Scheduling',
        ],
    },
    {
        title: 'Booking & Scheduling',
        description: 'Powerful appointment and resource booking systems for any industry.',
        icon: 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
        items: [
            'Appointment Booking Systems', 'Reservation Platforms', 'Facility Booking',
            'Consultation Scheduling', 'Event Registration', 'Resource Management',
        ],
    },
    {
        title: 'E-Commerce Solutions',
        description: 'Expert Shopify, WooCommerce, and custom e-commerce development.',
        icon: 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z',
        items: [
            'Shopify Store Development', 'WooCommerce Development', 'Custom E-Commerce Platforms',
            'Marketplace Development', 'Vendor Management', 'Product Catalog Systems',
            'Subscription Commerce', 'Payment Gateway Integrations',
        ],
    },
    {
        title: 'Business Operations',
        description: 'Optimize your operations with CRM, ERP, inventory, and document management systems.',
        icon: 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
        items: [
            'CRM Systems', 'ERP Systems', 'Inventory Management', 'Procurement Systems',
            'Asset Management', 'Document Management', 'Help Desk & Ticketing',
            'Customer Support Portals',
        ],
    },
    {
        title: 'Finance & Accounting',
        description: 'Secure billing, invoicing, and financial reporting platforms.',
        icon: 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
        items: [
            'Billing & Invoicing Systems', 'Payment Collection', 'Expense Tracking',
            'Financial Reporting', 'Budget Management', 'Subscription Billing',
        ],
    },
    {
        title: 'Data & Reporting',
        description: 'Transform your data into actionable insights with BI dashboards and custom reports.',
        icon: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
        items: [
            'Business Intelligence Dashboards', 'KPI Monitoring', 'Executive Reporting',
            'Analytics Platforms', 'Custom Reporting', 'Data Visualization',
        ],
    },
    {
        title: 'Integrations & Automation',
        description: 'Seamlessly connect your systems with APIs, webhooks, and third-party integrations.',
        icon: 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z',
        items: [
            'API Development', 'Third-Party API Integration', 'Payment Gateway Integration',
            'CRM Integration', 'ERP Integration', 'Email Marketing Integration',
            'SMS Integration', 'Webhook Development', 'Data Synchronization',
        ],
    },
    {
        title: 'AI-Enhanced Solutions',
        description: 'Modern AI-powered features to automate and enhance your business processes.',
        icon: 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z',
        items: [
            'AI Chatbots', 'AI Knowledge Base Search', 'AI Customer Support Assistants',
            'AI Content Assistance', 'AI Document Processing', 'AI-Powered Search',
            'AI Workflow Automation',
        ],
    },
    {
        title: 'Maintenance & Support',
        description: 'Reliable ongoing support, updates, and optimization for your existing systems.',
        icon: 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
        items: [
            'System Maintenance', 'Feature Enhancements', 'Legacy System Modernization',
            'Security Updates', 'Performance Optimization', 'Technical Support',
            'Bug Fixing & Troubleshooting',
        ],
    },
    {
        title: 'Specialized Development',
        description: 'Deep expertise in Laravel, Vue.js, and e-commerce platform customization.',
        icon: 'M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5',
        items: [
            'Laravel Development', 'Vue.js Development', 'Shopify Customization',
            'WooCommerce Customization', 'Custom Plugin Development', 'Custom Module Development',
            'REST API Development', 'Database Design & Optimization',
        ],
    },
    {
        title: 'Digital Transformation',
        description: 'Modernize legacy systems and digitize manual processes for the digital age.',
        icon: 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
        items: [
            'Legacy System Replacement', 'Manual Process Digitization', 'Workflow Automation',
            'Paperless Office Solutions', 'Data Migration Services', 'System Consolidation',
        ],
    },
];

function toggleCategory(i) {
    activeCategory.value = activeCategory.value === i ? null : i;
}
</script>

<template>
    <section id="services" class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-sm font-semibold text-blue-600 uppercase tracking-widest">What We Offer</span>
                <h2 class="mt-3 text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight">
                    Comprehensive Services
                </h2>
                <p class="mt-4 text-lg text-slate-500 leading-relaxed">
                    From custom web apps to AI integration — end-to-end solutions across every area of your business.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div
                    v-for="(cat, i) in categories"
                    :key="i"
                    :class="[
                        'group relative rounded-xl border p-5 cursor-pointer transition-all duration-200',
                        activeCategory === i
                            ? 'bg-white border-blue-200 shadow-md'
                            : 'bg-white border-slate-200 hover:border-slate-300 hover:shadow-sm'
                    ]"
                    @click="toggleCategory(i)"
                >
                    <div class="flex items-start gap-4">
                        <div :class="[
                            'w-10 h-10 flex items-center justify-center rounded-lg shrink-0 text-slate-500 transition-colors duration-200',
                            activeCategory === i ? 'bg-blue-50 text-blue-600' : 'bg-slate-100'
                        ]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="cat.icon" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-sm font-semibold text-slate-900 mb-1">{{ cat.title }}</h3>
                            <p class="text-xs text-slate-500 line-clamp-2">{{ cat.description }}</p>
                        </div>
                        <svg
                            :class="[
                                'w-5 h-5 shrink-0 mt-1.5 transition-transform duration-200',
                                activeCategory === i ? 'rotate-180 text-blue-600' : 'text-slate-400'
                            ]"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>

                    <div
                        v-if="activeCategory === i"
                        class="mt-4 pt-4 border-t border-slate-200 grid grid-cols-1 sm:grid-cols-2 gap-2"
                    >
                        <div
                            v-for="(item, j) in cat.items"
                            :key="j"
                            class="flex items-center gap-2.5 text-sm text-slate-600 py-0.5"
                        >
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500 shrink-0"></span>
                            {{ item }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
