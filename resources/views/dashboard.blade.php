<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <header class="dashboard-header">
        <h1>Welcome, {{ $user->name }} to DIJA</h1>
        <img class="logo" src="/images/Logo.webp">
    </header>

    <main class="dashboard-content">
        <section class="dashboard-card">
            <h2>Product Overview</h2>
            
            <table class="dashboard-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->weight }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>
                                <a href="#" class="edit-link">Edit</a>
                                <a href="#" class="delete-link">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>

    <footer class="dashboard-footer">
        <p>&copy; {{ date('Y') }} DIJA. All rights reserved.</p>
    </footer>
</x-app-layout>