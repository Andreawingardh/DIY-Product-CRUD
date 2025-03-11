<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="dashboard-header">
        <h1>Welcome, {{ $user->name }} to DIJA</h1>
        {{-- <img class="logo" src="/images/Logo.webp"> --}}
    </section>

    <main class="dashboard-content">
        <section class="dashboard-card">
            <div class="header-row">
                <h2>Product Overview</h2>  
                @if (session('message'))
                    <p class="session-message">{{ session('message') }}</p>
                @endif
            </div>
           
            <table class="dashboard-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Height</th>
                        <th scope="col">Width</th>
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
                            <td>{{ $product->height }}</td>
                            <td>{{ $product->width }}</td>
                            <td>{{ $product->category->name ?? 'N/A' }}</td>
                            <td>
                                <a href="/products/{{$product->id}}/edit">
                                    <button class="edit-link">
                                        Edit
                                    </button>  
                                </a>
                                <form method="post" action="{{ route('products.destroy', $product) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="source" value="dashboard">
                                    <button type="submit" class="delete-link" 
                                        onclick="return confirm('Are you sure you want to delete this product?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        
        {{ $products->links() }}
    </main>
</x-app-layout>