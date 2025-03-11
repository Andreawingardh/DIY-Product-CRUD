<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot>
    <section class="dashboard-intro">
        <h2>Welcome, {{ $user->name }} to DIJA</h2>
        <img class="logo" src="/images/Logo.webp">
    </section>
</x-app-layout>
