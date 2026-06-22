<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import HeroSection from '@/Components/HeroSection.vue';
import WhyChooseUs from '@/Components/WhyChooseUs.vue';
import ServicesSection from '@/Components/ServicesSection.vue';
import TechStack from '@/Components/TechStack.vue';
import CtaSection from '@/Components/CtaSection.vue';
import ContactForm from '@/Components/ContactForm.vue';
</script>

<template>
    <MainLayout>
        <HeroSection />
        <WhyChooseUs />
        <ServicesSection />
        <TechStack />
        <CtaSection />
        <ContactForm />
    </MainLayout>
</template>
